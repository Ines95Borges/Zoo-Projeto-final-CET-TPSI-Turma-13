// Adds event Listeners to addMoreButton
$(".addMoreButtonStore").on({ 
  click: (e) => { // Event listener when clicking the button
    e.preventDefault(); // Stops it from loading the page

    var id = $('.addMoreButtonStore').data("id"); // Gets the data-id attribute
 
    $.ajax({ // Calls the load more products page
      url: "./php/loadMoreStore.php", // The path of the page that is to be loaded
      type: "post", // Using post method
      data: {id:id}, // The parameters that are to be passed
      success: function(response){ // If the post is successful
        $(".addMoreContainer").remove(); // Removes the button that is to add more
        $('#products').append(response); // Appends to the container that has the products displayed more products
      }
    }).fail((e) => { // If the post is not successful
      alert(e + " Fail!"); // Gives an alert
    });},
  focus: (e) => { // What happens when the button element is focused
    e.preventDefault(); // Stops it from loading the page

    var id = $('.addMoreButtonStore').data("id"); // Gets the data-id attribute

    $.ajax({ // Calls the load more products page
      url: "./php/loadMoreStore.php", // The path of the page that is to be loaded
      type: "post", // Using post method
      data: {id:id}, // The parameters that are to be passed
      success: function(response){ // If the post is successful
        $(".addMoreContainer").remove(); // Removes the button that is to add more
        $('#products').append(response); // Appends to the container that has the products displayed more products
      }
    }).fail((e) => { // If the post is not successful
      alert(e + " Fail!"); // Gives an alert
    });}
});