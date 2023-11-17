//client slider start here//
$("#client-slider").owlCarousel({
  loop: true,
  margin: 30,
  nav: false,
  loop: false,
  dots: true,
  autoplay: true,
  autoplayHoverPause: true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
    575: {
      items: 1,
    },
    767: {
      items: 2,
    },
    991: {
      items: 3,
    },
    1199: {
      items: 3,
    },
    1399: {
      items: 3,
    },
  },
});
//client slider end here//

// star color change  js start
$(document).on("click", ".fa-star", function () {
  console.log("here");
  var ele = $(this);

  if ($(this).hasClass("clr")) {
    var val_check = 0;
    $(ele)
      .closest("ul")
      .find("li")
      .each(function (index) {
        if (val_check) {
          $(this).find("i").removeClass("clr");
        } else if ($(this).find("i")[0] == $(ele)[0]) {
          val_check = 1;
        }
      });
  } else {
    $(ele)
      .closest("ul")
      .find("li")
      .each(function (index) {
        if ($(this).find("i")[0] == $(ele)[0]) {
          $(this).find("i").addClass("clr");
          return false;
        }
        $(this).find("i").addClass("clr");
      });
  }
});

// star color change  js start

// qty js start
$(document).on("click", ".min-qty", function () {
  var sub_qty = parseInt($(this).closest(".number").find("input").val());
  if (sub_qty > 1) {
    $(this)
      .closest(".number")
      .find("input")
      .val(sub_qty - 1);
  }
});

$(document).on("click", ".add-qty", function () {
  var add_qty = parseInt($(this).closest(".number").find("input").val());
  var max_qty = $(this).closest(".number").find("input").attr("max");
  if (add_qty < max_qty) {
    $(this)
      .closest(".number")
      .find("input")
      .val(add_qty + 1);
  }
});
// // qty js end

