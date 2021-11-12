/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/radioHabeasData.js ***!
  \*****************************************/
$(document).ready(function () {
  if ($("#habeasdata1").prop("checked")) {
    $("#button").prop("disabled", false);
  }

  if ($("#habeasdata2").prop("checked")) {
    $("#button").prop("disabled", true);
  }

  $(document).on('change', '#habeasdata1', function () {
    if ($("#habeasdata1").prop("checked")) {
      $("#button").prop("disabled", false);
    }

    if ($("#habeasdata2").prop("checked")) {
      $("#button").prop("disabled", true);
    }
  });
  $(document).on('change', '#habeasdata2', function () {
    if ($("#habeasdata1").prop("checked")) {
      $("#button").prop("disabled", false);
    }

    if ($("#habeasdata2").prop("checked")) {
      $("#button").prop("disabled", true);
    }
  });
});
/******/ })()
;