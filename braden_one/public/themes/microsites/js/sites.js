var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i) ? true : false;
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) ? true : false;
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
    }
};


$(document).ready
(
	function()
	{
		fnHideAllStepElements();
		fnShowStepElements('step-one');
	}
);

function fnHideAllStepElements()
{
	fnHideStepElements('step-one');
	fnHideStepElements('step-two');
	fnHideStepElements('step-three');
}

function fnShowStepElements(step)
{
	if(step == 'step-three' || step == 'step-two') {
		fnFbRetargeting();
	}	

	$('h1.'+step+', h2.'+step+', p.'+step).each(function(i, el) { $(el).show(); });
}

function fnHideStepElements(step)
{
	$('h1.'+step+', h2.'+step+', p.'+step).each(function(i, el) { $(el).hide(); });
}

function fnFbRetargeting() {
	(function() {
		var _fbq = window._fbq || (window._fbq = []);
		if (!_fbq.loaded) {
		    var fbds = document.createElement('script');
		    fbds.async = true;
		    fbds.src = '//connect.facebook.net/en_US/fbds.js';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(fbds, s);
		    _fbq.loaded = true;
		}
		_fbq.push(['addPixelId', '874569019237358']);
	})();
	window._fbq = window._fbq || [];
	window._fbq.push(['track', 'PixelInitialized', {}]);

	$('body').append('<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=874569019237358&amp;ev=NoScript" /></noscript>');
}