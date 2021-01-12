$(document).ready(() => {
  $("#singleTicket").on("click", () => {
    window.location.href = "payment.php?singleTicket";
  });
  $("#doubleTicket").on("click", () => {
    window.location.href = "payment.php?doubleTicket";
  });
  $("#familyTicket").on("click", () => {
    window.location.href = "payment.php?familyTicket";
  });
});