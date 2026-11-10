$(document).ready(function () {
  var width = $(window).width();

  if (width < 1650 && width > 1500) {
    $(".centers").slick({
      centerMode: true,
      centerPadding: "400px",
      slidesToShow: 1,
      arrows: true,
    });
  } else if (width < 1500 && width > 780) {
    $(".centers").slick({
      centerMode: true,
      centerPadding: "150px",
      slidesToShow: 1,
      arrows: true,
    });
  } else if (width < 780) {
    $(".centers").slick({
      centerMode: true,
      centerPadding: "10px",
      slidesToShow: 1,
      arrows: true,
    });
    $(".card_raduis").css("padding", "10px");
    $(".taille").css("height", "100%");
    $(".tailles").css("height", "100%");
    // $(".pe-4").css("padding", "0");
  } else {
    $(".centers").slick({
      centerMode: true,
      centerPadding: "450px",
      slidesToShow: 1,
      arrows: true,
    });
  }

  //   $(".know").mouseenter(function () {
  //     (id = $(this).data("plus")),
  //       $(".first_event .st" + id).removeClass("filtered");
  //     $(".first_event .st" + id).addClass("hover_img");
  //   });
  //   $(".know").mouseleave(function () {
  //     (id = $(this).data("plus")),
  //       $(".first_event .st" + id).addClass("filtered");
  //     $(".first_event .st" + id).removeClass("hover_img");
  //   });
  // });
  
  $(".know").mouseenter(function () {
    var id = $(this).data("plus");
    $(".first_event .st" + id).removeClass("filtered");
    $(".first_event .st" + id).addClass("hover_img");

    // Changer la couleur du texte
    $(this).closest(".para_button").find(".colour").addClass("hover_color");
  });

  $(".know").mouseleave(function () {
    var id = $(this).data("plus");
    $(".first_event .st" + id).addClass("filtered");
    $(".first_event .st" + id).removeClass("hover_img");

    // Réinitialiser la couleur du texte
    $(this).closest(".para_button").find(".colour").removeClass("hover_color");
  });
});

const scrollToTopButton = document.getElementById("scrollToTop");
const scrollToBottomButton = document.getElementById("scrollToBottom");

// Afficher ou masquer les boutons selon la position de défilement
window.addEventListener("scroll", () => {
  if (window.scrollY + window.innerHeight >= document.body.scrollHeight) {
    scrollToTopButton.style.display = "block"; // Afficher le bouton "Haut"
    scrollToBottomButton.style.display = "none"; // Masquer le bouton "Bas"
  } else if (window.scrollY === 0) {
    scrollToBottomButton.style.display = "block"; // Afficher le bouton "Bas"
    scrollToTopButton.style.display = "none"; // Masquer le bouton "Haut"
  } else {
    scrollToTopButton.style.display = "block"; // Afficher le bouton "Haut"
    scrollToBottomButton.style.display = "block"; // Afficher le bouton "Bas"
  }
});

// Faire défiler vers le haut
scrollToTopButton.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth", // Animation douce
  });
});

// Faire défiler vers le bas
scrollToBottomButton.addEventListener("click", () => {
  window.scrollTo({
    top: document.body.scrollHeight,
    behavior: "smooth", // Animation douce
  });
});
