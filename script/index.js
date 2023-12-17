
function AdddedToCart(){
    const cartButtons = document.querySelectorAll(".btn.btn-primary.rounded-circle");
// Add a click event listener to the button



cartButtons.forEach(function(cartButton) {
  cartButton.addEventListener("click", function() {
      // Toggle the button classes between "btn-success" and "btn-primary"
      cartButton.classList.toggle("btn-primary");
      cartButton.classList.toggle("btn-success");
    
      // Replace the button content based on its current class
      if (cartButton.classList.contains("btn-primary")) {
        cartButton.textContent = "+";

        
      } else {
        cartButton.textContent = "✓"; // Replace "+" with checked symbol
      }
    });    
});


}

AdddedToCart();