(function () {
  var wow = new WOW({
    boxClass: "wow",
    animateClass: "animate__animated", // animation css class (default is animated)
  });
  wow.init();

  $(".btn-top").hide();
})();

$(".btn-top").click(function () {
  $(window).scrollTop(0);
  return false;
});

$(window).on("scroll", function () {
  var scroll = $(window).scrollTop();
  scroll >= 500 ? $(".btn-top").fadeIn(200) : $(".btn-top").fadeOut(200);
});

$(".nav-item:first-child").click(function () {
  $(".navbar-toggler").trigger("click");
});

function showPersonalInfo() {
  $("#personalinfo-contact").attr("class") !== "show"
    ? $("#personalinfo-contact").addClass("show")
    : $("#personalinfo-contact").removeClass("show");
}
