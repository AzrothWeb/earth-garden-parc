
/**Bouton Menu Backoffice**/
$(function () {
    // Sidebar toggle behavior
    $("#sidebarCollapse").on("click", function () {
      $("#sidebar, #content").toggleClass("active");
    });
  });
  
  /** Javascript pour la confirmation des mots de passe **/
  $(function () {
    $("#btnSubmit").click(function () {
      let password = $("#mdp1").val();
      let confirmPassword = $("#mdp2").val();
      if (password != confirmPassword) {
        alert("Vos champs de mot de passe ne correspondent pas");
        return false;
      }
      return true;
    });
  });