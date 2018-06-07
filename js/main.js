$(function(){

  $('#Accept').on('click', function(){
    $('.submit-form').toggle(500);
  })
  
});

(function() {
  "use strict";
  window.addEventListener("load", function() {

    var form = document.querySelector("#contact_form");
    form.addEventListener("submit", function(event) {
        if (form.checkValidity() == false) {
        event.preventDefault();
        event.stopPropagation();
        }
        form.classList.add("was-validated");
        $('html, body').animate({
          scrollTop: $("#contact_form").offset().top
        }, 800, function(){
          window.location.hash = "#contact_form";
        });
      }, false);
    }, false);
}());
