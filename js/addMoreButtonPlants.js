$(".addMoreButton").on('click', (e) => {
  e.preventDefault();

  var id = $('.addMoreButton').data("id");

  $.ajax({
    url: "./php/loadMorePlants.php",
    type: "post",
    data: {id:id},
    success: function(response){
      $(".addMoreContainer").remove();
      $('#showAnimalsPlants').append(response);
    }
  }).fail((e) => {
    alert(e + " Fail!");
  });
});