$(function ($) {
  "use strict";

  // Uploaded Image Preview Start
  $('.img-input').on('change', function (event) {
    let file = event.target.files[0];
    let reader = new FileReader();

    reader.onload = function (e) {
      $('.uploaded-img').attr('src', e.target.result);
    };

    reader.readAsDataURL(file);
  });
  // Uploaded Image Preview End

  // Uploaded Image2 Preview Start
  $('.img-input2').on('change', function (event) {
    let file = event.target.files[0];
    let reader = new FileReader();

    reader.onload = function (e) {
      $('.uploaded-img2').attr('src', e.target.result);
    };

    reader.readAsDataURL(file);
  });
  // Uploaded Image2 Preview End

});
