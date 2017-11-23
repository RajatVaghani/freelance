<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Window Price | Save Money on Window Replacement</title>
	<link rel="stylesheet" type="text/css" href="public/themes/microsites/css/form.css" />
	<script src="../ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="public/themes/microsites/js/windowsSetDynamicContent.js"></script>

<body>




		<div id="wrapper">
			<div class="w1">
				<div class="w2">
					<div id="header">
						<strong class="slogan"></strong>
					</div>
					<div id="main">
						<div class="text-holder">
							<div class="img-holder">

								<div id="right-image" class="s-img-01" style="background: url(public/uploads/two-step/topright-default2.gif)  no-repeat scroll top left transparent;">
								</div>

							</div>
							<div class="holder">
								<span id="step-1-substitute"></span>
								<h1 class="step-2">Please Continue</h1>
								<span id="p-step-1-substitute"></span>
								<p class="step-2">
									Complete the form below to see which of the window companies we found for you offers the best price.
								</p>
							</div>
						</div>
						<div class="main-wrap">
							<div class="main-holder">
								<div class="heading">
									<h2 class="step-2" style="font-size:1.682em">Almost Done...</h2>
								</div>
								<div class="main-frame">
								<form class="form" action="https://tj195.infusionsoft.com/app/form/process/d52fd3b6ac9ef26027cebe32bf16788f" id="form" method="post" accept-charset="UTF-8" name="form">
									<fieldset>
										<div id="steps">
											<input type="hidden" name="inf_form_xid" value="d52fd3b6ac9ef26027cebe32bf16788f">
											<input type="hidden" name="inf_form_name" value="Window Lead Capture">
											<input type="hidden" name="infusionsoft_version" value="1.60.0.46">
											<input type="hidden" name="inf_option_AreYouAHomeowner" value="<?php echo $_POST['home'];?>">
											<input type="hidden" name="inf_custom_Zipcode" value="<?php echo $_POST['zip'];?>">
											<div id="step-2" style="display:block;">
												<div class="row question firstName">
													<label class="label s2-label" for="firstName">First name:</label>
													<div class="text answer">
														<input class="firstNameInput" id="firstName" maxlength="250" name="inf_field_FirstName" size="16" type="text"
														value=""></div>
													</div>
													<div class="row question lastName">
														<label class="label s2-label" for="lastName">Last name:</label>
														<div class="text answer">
															<input class="lastNameInput" id="lastName" maxlength="250" name="inf_field_LastName" size="16" type="text"
															value=""></div>
														</div>
														<div class="row question address">
															<label class="label s2-label" for="address">Street address:</label>
															<div class="text answer">
																<input class="addressInput" id="address" maxlength="250" name="inf_field_StreetAddress1" size="30" type="text" value="">
																<div class="formatted_address text"></div>
															</div>
														</div>
														<div class="row question homePhone">
															<label class="label s2-label" for="homePhone">Phone number:</label>
															<div class="text answer">
																<input class="homePhoneInput" id="homePhone" maxlength="250" name="inf_field_Phone1" size="16" type="tel"
																value=""></div>
															</div>
															<div class="row question email">
																<label class="label s2-label" for="email">Email:</label>
																<div class="text answer">
																	<input class="emailInput" id="email" maxlength="250" name="inf_field_Email" size="16" type="email" value=""></div>
																</div>
																<div class="row submit-section">
																	<div class="question" id="tcpa">
																		By clicking 'Get Matches', you authorize Home Improvement Leads and up to four home service companies that can help with your project to call or text you on the phone number provided using autodialed and prerecorded calls or messages. Your consent to this agreement is not required to purchase products or services. We respect your privacy.
																		<input name="tcpa" type="hidden" value="Yes">
																		<input name=
																		"tcpaText" type="hidden" value=
																		"By clicking 'Get Matches', you authorize Home Improvement Leads and up to four home improvement companies that can help with your project to call you on the number provided. You understand that they may use automated phone technology to call you, and your consent is not required to purchase products or services."></div>
																	</div>
																</div>
																<input type="hidden" name="session" id="session" value="" />
																<input type="hidden" name="sessionToken" id="sessionToken" value="" />
																<input type="hidden" name="usid" id="usid" value="" />
																<input type="hidden" name="form" id="form" value="monstra" />
																<button class="submit" id="submit" type="submit" name="submit" value="">GET MATCHES</button>
															</div>
														</fieldset>
													</form>
													<script src="https://tj195.infusionsoft.com/app/webTracking/getTrackingCode" charset="utf-8"></script>
													<div class="logo-block" style="bottom:23px;">
														<div class="logo-info s-bg-logo-info">
															<div class="s-logo-home-depot2 img"></div>
															<div class="text-box">
																<span>Featured in our network</span>
															</div>
														</div>
														<ul class="logo-list" style="margin: 121px 0 12px 45px">
															<li>
																<div class="s-logo-bbb"></div>
															</li>
															<li>
																<div class="s-logo-authorizenet_"></div>
															</li>
															<li>
																<div class="s-logo-verising"></div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="brands-box">

										</div>
									</div>
								</div>
							</div>
							<footer id="footer">
								<br/><br/><br/><br/>
							</footer>
						</div>
						<script>
						$('#moreInfo').click(function() {
							var status = $('#footerText').css('display');
							if (status == 'none') {
								var height = $(document).height();
								$('#footerText').css('display', 'block');
								$('body').animate({ scrollTop: height }, 'slow');
							} else {
								$('#footerText').css('display', 'none');
							}
						});
						$('.main-frame').bind('steptwo', function(){
							$('.logo-info').css('margin', '0px auto 80px');
						});
						</script>
						<script src="public/themes/microsites/js/sites.js"></script>
					</body>

					</html>
