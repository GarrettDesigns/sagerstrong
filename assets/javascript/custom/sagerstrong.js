
	$(document).ready(function(){

    var singleDonationForm = $('.single'),
        recurringDonationForm = $('.recurring');

    processDonationForm(singleDonationForm);
    processDonationForm(recurringDonationForm);

	});

function processDonationForm(form) {
      var donationForm = form,
          donationOptions = donationForm.find('li'),
          currentDonationSelection = donationForm.find('.on'),
          currentDonationAmount = currentDonationSelection.find('input').val(),
          inputContainer = donationForm.find('.input_container'),
          otherAmountButton = donationForm.find('.other_amount_button'),
          otherAmountInput = donationForm.find('.other_amount_input'),
          errorMessage = donationForm.find('.error'),
          recurringDonations = $('.recur').find('input');

          currentDonationSelection.find('input').prop('checked', true);

			donationOptions.on('click', function() {
        var currentOption = $(this);

          if(currentOption.text() !== "Other") {
            currentDonationAmount = currentOption.find('input').val();
            otherAmountInput.val(currentDonationAmount);
          } else {
            otherAmountInput.val('');
          }

					donationOptions.removeClass('on');
					currentOption.addClass('on').find('input').prop('checked', true);

          if(currentOption.text() !== "Other" && inputContainer.is(':visible')) {
            inputContainer.slideUp('slow');
            return false;
          }
			});

      recurringDonations.on('click', function() {
        $('.recurring_payment').val('1');
      });

      otherAmountButton.on('click', function() {
        if(inputContainer.not(':visible')){
          inputContainer.slideDown('slow');
        }
      });

			donationForm.submit(function(){
				if(!currentDonationAmount) {
					errorMessage.show();
					return false;
				} else {
					errorMessage.hide();
					return true;
				}
		});
}
