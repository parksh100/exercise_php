<?php
include "./header.php";
$g_title = "회원가입완료";
$js_array = ['js/member_success.js'];

$menu_code = 'member';

?>
<!-- <script src="js/member_success.js"></script> -->

<main class="w-75 mx-auto border p-5 d-flex gap-3">
    <img src="./images/logo.png" alt="">
    <div>
        <h3>
            회원가입을 축하합니다.
        </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sed sit tempore minus maxime in repellat iure
            vel eveniet quas, odio facere quo, ab minima ipsum nulla sint asperiores reprehenderit?</p>
        <button class="btn btn-primary" id="btn_login">로그인</button>
    </div>


</main>
<?php
include "../footer.php";
?>