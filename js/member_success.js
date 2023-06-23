document.addEventListener("DOMContentLoaded", function () {
  const btn_login = document.querySelector("#btn_login");

  btn_login.addEventListener("click", function () {
    self.location.href = "./login.php";
  });
});
