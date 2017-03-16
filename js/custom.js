$(document).ready(function() {
  var pageName = window.location.pathname;
  if (pageName.substring(1, 5) == "menu") {
    $("#menu-item-33").addClass("active");
  }
});
