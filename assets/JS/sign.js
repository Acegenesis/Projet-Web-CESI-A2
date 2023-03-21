function checkPasswordMatch() {
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm_password").value;

  if (password != confirmPassword) {
      alert("Les mots de passe ne sont pas identiques !");
      resetForm();
  } 
}