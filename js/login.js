document.addEventListener("DOMContentLoaded", function () {
  const btn_login = document.getElementById("btn_login");
  btn_login.addEventListener("click", function () {
    // alert("login");
    const f_id = document.getElementById("f_id");
    const f_pw = document.getElementById("f_pw");

    if (f_id.value == "") {
      alert("아이디를 입력하세요.");
      f_id.focus();
      return false;
    }
    if (f_pw.value == "") {
      alert("비밀번호를 입력하세요.");
      f_pw.focus();
      return false;
    }
    console.log(f_id.value);
    console.log(f_pw.value);
    // ajax
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "./pg/login_process.php", "true");

    const f1 = new FormData();
    f1.append("id", f_id.value);
    f1.append("pw", f_pw.value);

    console.log(f1);
    xhr.send(f1);

    xhr.onload = function () {
      if (xhr.status == 200) {
        console.log(xhr.responseText);
        const data = JSON.parse(xhr.responseText);
        console.log(data);
        if (data.result == "login_fail") {
          alert("아이디 또는 비밀번호가 일치하지 않습니다.");
          f_id.value = "";
          f_pw.value = "";
          f_id.focus();
          return false;
        } else if (data.result == "login_success") {
          alert("로그인 성공");
          self.location.href = "./index.php";
        }
      } else {
        alert("서버 통신 오류 발생");
      }
    };
  });
});
