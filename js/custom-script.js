// ----[style vars]----
const bgDark = "#001d3d";
// ----[select all text]----
function selectText(containerid) {
  if (document.selection) {
    // IE
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select();
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
  }
}

function selectText(containerid1) {
  if (document.selection) {
    // IE
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid1));
    range.select();
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid1));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
  }
}

function selectText(containerid2) {
  if (document.selection) {
    // IE
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid2));
    range.select();
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid2));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
  }
}

function selectText(containerid3) {
  if (document.selection) {
    // IE
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid3));
    range.select();
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid3));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
  }
}

function selectText(containerid4) {
  if (document.selection) {
    // IE
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid4));
    range.select();
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid4));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
  }
}
//////////////////////////////////////////////////////////////////////////////
// ----[navbar bg remover]----

const navbar = document.getElementById("qnavbar");

window.addEventListener("scroll", function () {
  const currentScrollPosition = window.pageYOffset;
  const isScrollingUp = currentScrollPosition <= 0;
  lastScrollPosition = currentScrollPosition;

  if (isScrollingUp) {
    navbar.style.transition = "background-color 0.2s ease-out";
    navbar.style.backgroundColor = "transparent";
  } else {
    navbar.style.transition = "background-color 0.2s ease-in";
    navbar.style.backgroundColor = bgDark;
  }
});

// -----[hamburger menu opening]-----

const hamburgerMenu = document.querySelector("#hamburger-menu");
const hamburgerIcon = document.querySelector("#hamburger-menu i");
const dropMenu = document.querySelector("#drop-menu");

hamburgerMenu.addEventListener("click", function () {
  dropMenu.classList.toggle("qopen");
  const isOpen = dropMenu.classList.contains("qopen");

  hamburgerIcon.className = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-bars";
});
//////////////////////////////////////////////////////////////////////////////
// ----[carousel]----
$(document).ready(function(){
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    margin: -10,
    loop: true,
    autoWidth: true,
    items: 10,
    responsive:{
      0:{
        items: 3
      },
      600:{
        items: 5
      },
      1000:{
        items: 10
      }
    },
    onInitialized: function(){
      owl.trigger('refresh.owl.carousel');
    }
  });

  $('.owl-row').on('DOMMouseScroll wheel', function(e) {
    var $carousel = $(this).closest('.owl-carousel');
    if (e.originalEvent.deltaY > 0) {
      $carousel.trigger('prev.owl.carousel');
    } else {
      $carousel.trigger('next.owl.carousel');
    }
    e.preventDefault();
  });
});

//////////////////////////////////////////////////////////////////////////////