console.log("CartScript is being loaded!");

// Cart development

var cartOverlay = document.querySelector(".cart-overlay");
var cart = document.querySelector(".cart");
var cartTotal = document.querySelector('.cart-total');
var cartContent = document.querySelector(".cart-content");
var cartItems = document.querySelector(".cart-items");
var cartItemsNumber = "1";


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
  $('.itemBtn').on('click', (e) => {
    setInterval(() => {
      $('.cart-items').text(cartItemsNumber);
    }, 100);
    let storage = new StorageVar();
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
    $('.bi-caret-up-fill').on('click', (e) => {
      ui.raiseAmount(e);
      ui.updatePrice();
    });
    $('.bi-caret-down-fill').on('click', (e) => {
      ui.decreaseAmount(e);
      ui.updatePrice();
    });
    $('.clear-cart').on('click', () => {
      ui.clearCart();
      ui.updatePrice();
    });
  });
});

var StorageVar = class Storage{
  getDetailsProduct(event){
    // Get the details of the product 
    var id = event.target.id;
    var childElementsOfItemCard = document.querySelector('[data-id="'+id+'"]').children;
    var srcImage = childElementsOfItemCard[0].src;
    var titleProduct = childElementsOfItemCard[1].children[0].innerHTML;
    var innerHTML = childElementsOfItemCard[1].children[1].innerHTML;
    var priceAsString = innerHTML.match(/\d+/g);
    var priceProduct = parseFloat(priceAsString[0] + "." + priceAsString[1]);
    return [srcImage, titleProduct, priceProduct, id];
  }
}

var Ui = class UI{
  addCartItem(srcImage, titleProduct, priceProduct, id){
    const cartContent = document.querySelector(".cart-content");
    const div = document.createElement('div');
    div.classList.add('cart-item');
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
    </div>`;
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)+1; // Adds 1 to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    cartContent.appendChild(div);
  }

  removeCartItem(event){
    var parentDiv = event.target.parentElement;
    var cartParent = parentDiv.parentElement;
    // Counts the number of items selected
    var itemsCount = parseInt(cartParent.childNodes[4].outerText, 10);
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)-itemsCount; // Subtracts all the count of the items to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    cartParent.remove();
  }

  raiseAmount(event){
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)+1; // Adds 1 to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    var parentDiv = event.target.parentElement.parentElement;
    var amountString = $(parentDiv).children("p").text();
    var amount = parseInt(amountString,10);
    if(amount<10){
      ++amount;
      $(parentDiv).children("p").html(amount.toString());
    }
  }

  decreaseAmount(event){
    var cartItemsNumberInt = parseInt(cartItems.innerHTML, 10)-1; // Subtracts 1 to cart items number count
    cartItemsNumber = String(cartItemsNumberInt); // Converts the integer to a string so that the text can be modified
    var parentDiv = event.target.parentElement.parentElement;
    var amountString = $(parentDiv).children("p").text();
    var amount = parseInt(amountString,10);
    if(amount>1){
      --amount;
      $(parentDiv).children("p").html(amount.toString());
    }
  }

  updatePrice(){
    var arrayCartItem = document.querySelectorAll('.cart-item');
    // console.log(arrayCartItem);
    var finalPrice = 0;
    arrayCartItem.forEach((cartItem) => {
      var cartItemChildNodes = cartItem.childNodes;
      // console.log(cartItemChildNodes);
      var price = parseFloat(cartItemChildNodes[2].childNodes[3].innerHTML.replace("€", ""));
      // console.log(price);
      var amount = parseInt(cartItemChildNodes[4].childNodes[3].innerHTML);
      // console.log(amount);
      finalPrice += (price*amount).toFixed(2); // This rounds the number to two decimal cases
    });
    cartTotal.innerHTML = finalPrice.toString();
  }

  clearCart(){
    var cartContentClear = document.querySelector('.cart-content');
    var lenghtArray = cartContentClear.childNodes.length - 1;
    for(var i=lenghtArray; i>=5; i--){
      cartContentClear.childNodes[i].remove();
    }
    cartItemsNumber = "0"; // Set the number of items in the cart to 0
  }
}