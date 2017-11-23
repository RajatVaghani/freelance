$(document).ready( function() {
	var h1StepOneSubstitute = $('h1.step-1').detach();
	h1StepOneSubstitute.appendTo($('span#step-1-substitute'));
	h1StepOneSubstitute.show();

	var pStepOneSubstitute = $('p.step-1').detach();
	pStepOneSubstitute.appendTo($('span#p-step-1-substitute'));
	pStepOneSubstitute.show();

	var divRightImageSubstitute = $('div#right-image').detach();
	divRightImageSubstitute.appendTo($('div.img-holder'));
	divRightImageSubstitute.show()

	var h2StepOneSubstitute = $('h2.step-1').detach();
	h2StepOneSubstitute.appendTo($('div.heading'));
	h2StepOneSubstitute.show();

	var divFooterTextSubstitute = $('div#footerText').detach();
	divFooterTextSubstitute.appendTo($('footer#footer'));
});
