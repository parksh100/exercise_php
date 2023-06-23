<?php
session_start();
$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id']  : '';

include "./header.php";
$g_title = "인덱스";
$js_array = ['js/home.js'];

$menu_code = 'home';

?>
<!-- <script src="js/member_success.js"></script> -->

<main class="w-75 mx-auto border p-5 d-flex gap-3">
    <img src="./images/logo.png" alt="">
    <div>
        <h3> Home입니다 </h3>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sed sit tempore minus maxime in repellat iure
            vel eveniet quas, odio facere quo, ab minima ipsum nulla sint asperiores reprehenderit?</p>

    </div>


</main>
<?php
include "./footer.php";
?>