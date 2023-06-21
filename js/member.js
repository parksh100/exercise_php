document.addEventListener("DOMContentLoaded", function () {
  const btn_register = document.querySelector("#btn_register");
  btn_register.addEventListener("click", function () {
    // alert("버튼을 누르셨습니다.");
    // chk_agree1, chk_agree2 체크박스가 체크되어있는지 확인
    const chk_agree1 = document.querySelector("#chk_agree1");
    const chk_agree2 = document.querySelector("#chk_agree2");
    if (!chk_agree1.checked) {
      alert("회원약관에 동의해주세요.");
      return false;
    }
    if (!chk_agree2.checked) {
      alert("개인정보 취급방침에 동의해주세요.");
      return false;
    }
    // 회원가입 폼(form#frm_register)을 submit
    // const frm_register = document.querySelector("#btn_register");
    // frm_register.submit();

    const f = document.register_form;
    f.chk.value = 1;
    f.submit();
  });
});
