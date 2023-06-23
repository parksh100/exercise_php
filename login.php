<?php
$g_title = "로그인";
$js_array = ['js/login.js'];

$menu_code = 'login';
include "./header.php";

?>
<!-- <script src="js/member_success.js"></script> -->

<main class="w-75 mx-auto border p-5 d-flex gap-3">
    <form action="aaa.php" method="post">
        <h1 cl>로그인</h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="id" id="f_id">
            <label for="f_id">아이디</label>
        </div>
        <div class="form-floating mt-2">
            <input type="password" class="form-control" name="pw" id="f_pw">
            <label for="f_pw">비밀번호</label>
        </div>
        <button class="btn btn-primary w-100" type="button" id="btn_login">확인</button>
    </form>

</main>
<?php
include "./footer.php";
?>