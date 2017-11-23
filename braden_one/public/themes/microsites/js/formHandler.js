var formsWsUrl = 'http://formsws';
var url = window.location.href;
var landingpage = window.location.href.split('?')[0];
var formSubmitted = false;

if (url.indexOf('.local') >= 0) {
	formsWsUrl = formsWsUrl + '.local';
}
else if (url.indexOf('staging.') >= 0) {
	formsWsUrl = formsWsUrl + '.hilstaging.com';
}
else {
	formsWsUrl = formsWsUrl + '.hilprod.com';
}


if (url.indexOf('hvac') > -1)
{
	vertical = 'hvac';
}
else if (url.indexOf('window') > -1)
{
	vertical = 'windows';
}
else if (url.indexOf('roof') > -1)
{
	vertical = 'roofing';
}
else if (url.indexOf('solar') > -1)
{
	vertical = 'solar';
}
else if (url.indexOf('siding') > -1)
{
	vertical = 'siding';
}
else if (url.indexOf('remodelhelpusa') > -1)
{
	vertical = 'windows';
}
else if (url.indexOf('remodel-connection.com') > -1)
{
	vertical = 'solar';
}

var phpSessId = getCookie('PHPSESSID');
function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}
$.ajax({
	type: "POST",
	url: formsWsUrl + "/usersession/generateusid",
	dataType: 'jsonp',
	data: {'landingpage': landingpage, 'thankyou':'thankyou', 'phpSessId': phpSessId},
	crossDomain: true,
	success: function(response)
	{
		if (response.success) {
			$.each(response, function(key, value) {
				$('#' + key).val(value);
			});
		}
	},
	error: function(xhr, status, error) {
	}
});

setTimeout(function(){
	if (vertical == 'solar' && $('#LeadiD-wrapper-element').length == 0){
		var leadToken = $('#leadid_token').val();
		var userSessionId = $('#usid').val();
		leadToken = typeof leadToken == undefined ? '' : leadToken;
		$.ajax({
			type: "POST",
			url: formsWsUrl + "/tracking/missingleadtoken",
			dataType: 'jsonp',
			data: {'leadToken': leadToken, 'userSessionId': userSessionId},
			crossDomain: true
		});
	}
}, 5000);

$(document).ready(function () {
	// apply the phone mask to all phone inputs
	$("#homePhone").mask("(999) 999-9999");

	//first hide anything but step 1
	var steps = [];
	var currentStep = $('.current-step').attr('id');
	var seenSecondStep = false;

	if (typeof currentStep == undefined) {
		currentStep  = 'step-1';
	}

	$('#steps [id^="step-"]').each(function() { steps.push(this.id) });
	$('#steps [id^="step-"]').not('#' + currentStep).each( function() {
		$(this).hide();
		$(this).find(':input').prop('disabled', true);
	});

	//grab any query params that were passed to the form
	var $_GET = getQueryParams(document.location.search);
	//prepop form elements if we can
	$.each($_GET, function (key, value) {
		$('#' + currentStep + ' input[name="' + key + '"]').val(value);
	});

	$('select#hvacSystemType').on('change', function() {
		if ($(this).val() == 'Natural Gas Fired') {
			$('.typeOfFuel').show('fast');
		}
		else {
			$('.typeOfFuel').hide('fast');
		}
	});

	//MSFORM-540 - skip step 1 if these params are present
	if (vertical == 'windows' && $_GET.SRC == 'Source78' && $_GET.ad_group == '6142') {
		$('#35windows').attr('checked', true);
		processForm();
	}

	//don't submit the form on submit, handle with jquery
	$('#form').submit(function(e) {
		return false;
	});
	$('#submit').click(function() {
		processForm();
	});
	$(document).keypress(function(e) {
		if (e.which == 13) {
			processForm();
		}
	});

	function processForm() {
		var formData = $('#steps :input').serializeArray();
		var formData = combineFormWithQueryParams(formData);

		// This isn't normally necessary, but this accounts for sessions not being created/saved because of memcache issues
    	var userSessionId = $('#usid').val();
    	formData.push({name: 'usid', value: userSessionId});
    	formData.push({name: 'landingpage', value: landingpage});

		showLoading();

		$.ajax({
			type: "POST",
			url: formsWsUrl + '/' + vertical,
			data: formData,
			dataType: 'jsonp',
			crossDomain: true,
			success: function(response) {
				doneLoading();
				populatePreviousSteps(response.FormVO);

				//form was invalid
				if (!response.success) {
					markInvalidFields(response.invalidFields);
				}
				else {
					//we can go to the next step
					$('.main-frame').trigger('steptwo');
					if (response.nextStep == true) {
						//we have everything, redirect to TYP
						if (response.hasRequiredFields == true && (seenSecondStep || vertical == 'solar')) {
							formSubmitted = true;
							return window.location = response.thankyou;
						}
						//show the next step
						else {
							if (currentStep = 'step-1') {
								seenSecondStep = true;
							}

							$('#' + currentStep).prop('disabled', false);
							$('#' + currentStep).hide();
							$('.' + currentStep).hide();
							$('#' + currentStep).removeClass('current-step');
							$('#submit').html('GET MATCHES');
							$('.s-bg-logo-info').css('height', '110px');
							var currentStepDigit = currentStep.substring(currentStep.length - 1);
							currentStepDigit = parseInt(currentStepDigit) + 1;
							var nextStep = currentStep.substring(0, currentStep.length - 1) + currentStepDigit;
							currentStep = nextStep;
							populateCityState(response.FormVO.city, response.FormVO.state);
							$('#' + nextStep).show("fast");
							$('.' + nextStep).show("fast");
							$('#' + nextStep).addClass('current-step');
							//prepop form elements if we can
							$.each($_GET, function (key, value) {
								$('#' + currentStep + ' input[name="' + key + '"]').val(value);
							});
							$('button[type=submit], .current-step input, .current-step select').prop('disabled', false);
							$('.main-holder').addClass('step-2');
							window.scrollTo(0, 0);
						}
					}
				}
			},
			error: function(xhr, status, error) {
            			doneLoading();
        		}
		});

		function combineFormWithQueryParams(formData) {
			$.each($_GET, function (key, value) {
				if (key.toLowerCase() == 'src' || key.toLowerCase() == 'pub_id' || key.toLowerCase() == 'sub_id' || key.toLowerCase() == 'sub2_id'
					|| key.toLowerCase() == 'advertiser' || key.toLowerCase() == 'campaign' || key.toLowerCase() == 'adgroup' || key.toLowerCase() == 'keyword') {
					var keyExists = false;

					for (var i = 0, len = formData.length; i < len; i++) {
						if (key == formData[i].name) {
							keyExists = true;
						}
					}

					if (!keyExists) {
						formData.push({name: key, value: value});
					}
				}
			});

			return formData;
		}

		//hide loading gid and unmark inputs as disabled
		function doneLoading() {
			$('#loadingGif').hide();

			if (currentStep == 'step-2') {
				$('button[type=submit], input, select').prop('disabled', false);
			}
			else {
				$('button[type=submit], .current-step input, .current-step select').prop('disabled', false);
			}
		}
	}
});

//grab query params
function getQueryParams(qs) {
	qs = qs.split("+").join(" ");
	var params = {},
	tokens,
	re = /([^?&=]+)=([^&]*)/g;

	while (tokens = re.exec(qs)) {
		params[decodeURIComponent(tokens[1])]
		= decodeURIComponent(tokens[2]);
	}

	return params;
}

//adds .error css to invalid form fields
function markInvalidFields(invalidFields) {
	$.each(invalidFields, function(key, value) {
		$('#' + key).addClass('error');
	});
}

//shows loading gif and disables inputs
function showLoading() {
	$('#loadingGif').show();
	$('input, select, textarea, label, div').removeClass('error');
	$('button[type=submit], input, select').not(':hidden').prop('disabled', true);
}

//go back and populate the first steps
function populatePreviousSteps(FormVO) {
	$.each(FormVO, function(key, value) {
		if (key == 'hear') {
			$('#'+ value).prop('selected', true);
		}

		//select radio
		if (vertical == 'hvac' && key == 'project') {
			$('input[name="project"][value="' + value + '"]').attr('checked', 'checked');
		}

		$('input#' + key).val(value);
		$('select#' + key + ' option[value="' + value + '"]').prop('selected', true);
	});
}

function populateCityState(city, state) {
	$('.formatted_address').text(city + ', ' + state);
}
