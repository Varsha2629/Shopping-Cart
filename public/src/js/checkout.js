var stripe = Stripe('pk_test_51HwXrqCI7HY6MLC4WhWHF74lHdy8qD9CJYBKQ6oKmTeLMGa0GutPDnidrQnM7DTFhKAesnzhyUG5bh14sfPGuAZS00EfP8AaRL');

var elements = stripe.elements();
var $form= $('#payment-form');


 // Create an instance of the card Element
var card = elements.create('card');

// Add an instance of the card Element into the `card-element` <div>
card.mount('#card-element');

card.on('change', function(event) {

    if (event.error) {
    //  displayError.textContent = event.error.message;
      $('#card-errors').text(event.error.message)
    } else {
        $('#card-errors').text('')
    //  displayError.textContent = '';
    }
  });
  //Handle form submission

$("#form-buy").on('click', function(event) {
  
  //$('#payment-form').addClass('hidden');
   event.preventDefault();

  stripe.createToken(card).then(function(result) 
   {
     if (result.error) {
       // Inform the user if there was an error.
       $('#card-errors').text(result.error.message)
     } else {
       // Send the token to your server.
       console.log(result.token)
       stripeResponseHandler(result.token);
     }  
   });
});

function stripeResponseHandler(response) {
    //Add stripe Token to hidden input
    
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', response.id);
    $form.append(hiddenInput);  
   
    //Get the form and Submit:
     $form.submit(); 
}
