/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/dinamicSelect.js ***!
  \***************************************/
$(document).ready(function () {
  load_json_data('department', 'city');

  function load_json_data(dep, city) {
    var html_code_depa = '';
    $.getJSON('https://raw.githubusercontent.com/marcovega/colombia-json/master/colombia.min.json', function (data) {
      html_code_depa += '<option value="" disabled selected>Seleccione Departamento</option>';
      $.each(data, function (key, value) {
        if (dep == 'department') {
          html_code_depa += '<option id="' + value.id + '" value="' + value.departamento + '">' + value.departamento + '</option>';
        }
      });
      $('#' + dep).html(html_code_depa);
    });
  }

  $(document).on('change', '#department', function () {
    var depart_id = $(this).children(":selected").attr("id");

    if (depart_id != '') {
      var _load_json_data = function _load_json_data(name, depart_id) {
        var html_code = '';
        $.getJSON('https://raw.githubusercontent.com/marcovega/colombia-json/master/colombia.min.json', function (data) {
          var cities = data[depart_id].ciudades;
          html_code += '<option value="">Seleccione Ciudad</option>';
          var array1 = data;
          cities.forEach(function (element) {
            console.log(element);

            if (name == 'city') {
              html_code += '<option value="' + element + '">' + element + '</option>';
            }
          });
          $('#' + name).html(html_code);
        });
      };

      _load_json_data('city', depart_id);
    } else {
      $('#city').html('<option value="">Select city</option>');
    }
  });
});
/******/ })()
;