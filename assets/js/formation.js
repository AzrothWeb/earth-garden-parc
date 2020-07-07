$(document).ready(function () {
  console.log('Js Chargé');
  $(".boxFormation").click(function () { 
    var idBox = "#modal-" +  this.getAttribute("id");
    $(idBox).modal('show');
  });
});
