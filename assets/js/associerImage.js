$(window).on("load", function () {
  $(".btnImage").click(function () {
    var input_id_media =
      '<input type="hidden" name="id_media" value="' + this.id + '" /><p>Une image a bien été associer à votre article</p>';
      if (document.getElementById('bodyImg').innerHTML === ''){
        $("#bodyImg").append(input_id_media);
      } else {
        $("#bodyImg").empty();
        $("#bodyImg").append(input_id_media);
      }
  });
});
