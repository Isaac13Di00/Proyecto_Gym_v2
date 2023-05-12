import './bootstrap';
import * as bootstrap from 'bootstrap';

$(document).ready(function () {

  $('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true,
    startDate: '0d'
  });
  $('.cell').click(function () {
    $('.cell').removeClass('select');
    $(this).addClass('select');
  });
  $('#agendar').click(function () {
    $('#label').removeClass();
    $('#label').addClass($('.select')[0].outerText);
  });
});