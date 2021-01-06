// Cart development

// Variables using var so that the variables aren't static
var cartOverlay = document.querySelector(".cart-overlay");
var cart = document.querySelector(".cart");
var cartTotal = document.querySelector('.cart-total');
var cartContent = document.querySelector(".cart-content");
var cartItems = document.querySelector(".cart-items");
var cartItemsNumber = "1";

// When the document has fully loaded
$(document).ready(() => {
  // Show the cart overlay when clicking in the cart button in the navbar
  $('.cart-btn').on('click',(e) => {
    cartOverlay.classList.add('transparentBcg');
    cart.classList.add('showCart');
  });
  // Hide the cart overlay when clicking in the close cart button
  $('.close-cart').on('click', () => {
    cartOverlay.classList.remove('transparentBcg');
    cart.classList.remove('showCart');
  });
  // Add event listener on the button of every item
  $('.itemBtn').on('click', (e) => {
    setInterval(() => { // Every 100 miliseconds the cart-items text is updated
      $('.cart-items').text(cartItemsNumber);
    }, 100);
    let storage = new StorageVar(); // Creates only one unique instance of the StorageVar class
    var productDetails = storage.getDetailsProduct(e);
    // Display products
    let ui = new Ui();
    ui.addCartItem(productDetails[0], productDetails[1], productDetails[2], productDetails[3]);
    ui.updatePrice();
    // Remove item from list
    $('.remove-item').on('click', (e) => {
      ui.removeCartItem(e);
      ui.updatePrice();
    });
    // Raises the amount of the product that is in the cart
    $('.bi-caret-up-fill').on('click', (e) => {
      ui.raiseAmount(e);
      ui.updatePrice();
    });
    // Decreses the amount of the product taht is in the cart
    $('.bi-caret-down-fill').on('click', (e) => {
      ui.decreaseAmount(e);
      ui.updatePrice();
    });
    // Erases all the products that are in the cart
    $('.clear-cart').on('click', () => {
      ui.clearCart();
      ui.updatePrice();
    });
  });
});

var StorageVar = class Storage{
  getDetailsProduct(event){
    // Get the details of the product 
    var id = event.target.id; // Get the id of the product
    var childElementsOfItemCard = document.querySelector('[data-id="'+id+'"]').children; // Gets the children of the item card
    var srcImage = childElementsOfItemCard[0].src; // Gets the image src of the item card
    var titleProduct = childElementsOfItemCard[1].children[0].innerHTML; // Gets the name of the product
    var innerHTML = childElementsOfItemCard[1].children[1].innerHTML; // Gets the text that has the price of the product
    var priceAsString = innerHTML.match(/\d+/g); // Gets the price ofthe product
    var priceProduct = parseFloat(priceAsString[0] + "." + priceAsString[1]); // Converts the price to float
    return [srcImage, titleProduct, priceProduct, id];
  }
}

// class to define the user interface of the cart
var Ui = class UI{
  addCartItem(srcImage, titleProduct, priceProduct, id){
    const cartContent = document.querySelector(".cart-content");
    const div = document.createElement('div'); // Creates a new container
    div.classList.add('cart-item'); // Adds a class of cart-item to the previously created container
    div.innerHTML = `<img src=${srcImage} alt="product">
    <div>
      <h4>${titleProduct}</h4>
      <h5 data-id=${id}>${priceProduct}€</h5>
      <span class="remove-item">remove</span>
    </div>
    <div class="div-amount">
      <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" data-id=${id} class="bi bi-caret-up-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
      </svg>
      <p class="item-amount" data-id=${id}>1</p>
      <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" data-id=${id} class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
      </svg>
    </div>`; // Sets the content of the div
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)+1; // Adds 1 to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    cartContent.appendChild(div); // Append the div to the cart
  }

  removeCartItem(event){
    var parentDiv = event.target.parentElement; // Gets the parent div
    var cartParent = parentDiv.parentElement; // Gets the parent of the div
    // Counts the number of items selected
    var itemsCount = parseInt(cartParent.childNodes[4].outerText, 10); // Gets the number of items that are in the cart as a integer
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)-itemsCount; // Subtracts all the count of the items to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    cartParent.remove(); // Removes the div that contains the item
  }

  raiseAmount(event){
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)+1; // Adds 1 to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    var parentDiv = event.target.parentElement.parentElement; // Gets the parent div
    var amountString = $(parentDiv).children("p").text(); // Gets the amount of the item as a string
    var amount = parseInt(amountString,10); // Converts the amount to integer
    if(amount<10){ // If amount is less than ten
      ++amount; // Add one to the amount
      $(parentDiv).children("p").html(amount.toString()); // Set the text of the amount to the selected amount
    }
  }

  decreaseAmount(event){
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)-1; // Subtracts 1 to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    var parentDiv = event.target.parentElement.parentElement; // Gets the parent div
    var amountString = $(parentDiv).children("p").text(); // Gets the amount of the item as a string
    var amount = parseInt(amountString,10); // Converts the amount to integer
    if(amount>1){ // Subtracts one if the amount is bigger than one
      --amount;
      $(parentDiv).children("p").html(amount.toString()); // Set the text of the amount to the selected amount
    }
  }

  updatePrice(){
    var arrayCartItem = document.querySelectorAll('.cart-item');
    var finalPrice = 0; // Inititates the total to 0
    arrayCartItem.forEach((cartItem) => { // For each item that is in the cart do this
      var cartItemChildNodes = cartItem.childNodes; // Get the children od the cartItem div
      var price = parseFloat(cartItemChildNodes[2].childNodes[3].innerHTML.replace("€", "")); // Get the price and erases the euro sign and converts it to integer
      var amount = parseInt(cartItemChildNodes[4].childNodes[3].innerHTML); // Get the amount of items that the user selected as a int
      finalPrice += (price*amount).toFixed(2); // This rounds the number to two decimal cases
    });
    cartTotal.innerHTML = finalPrice.toString(); // Update the price
  }

  clearCart(){
    var cartContentClear = document.querySelector('.cart-content'); // Get the div that conteins the content of the cart
    var lenghtArray = cartContentClear.childNodes.length - 1; // Gets the number of items that are in the cart
    for(var i=lenghtArray; i>=5; i--){
      cartContentClear.childNodes[i].remove(); // Removes all the items from the cart
    }
    cartItemsNumber = "0"; // Set the number of items in the cart to 0
  }
}