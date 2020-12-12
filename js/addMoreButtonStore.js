$(".addMoreButton").on('click', (e) => {
  e.preventDefault();

  var id = $('.addMoreButton').data("id");
  console.log(id);

  $.ajax({
    url: "./php/loadMoreStore.php",
    type: "post",
    data: {id:id},
    success: function(response){
      $(".addMoreContainer").remove();
      $('#products').append(response);
    }
  }).fail((e) => {
    alert(e + " Fail!");
  });

});