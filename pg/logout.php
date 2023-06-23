<?php
include "../inc/dbconfig.php";
include "../inc/member.php";

$mem = new Member($db);

$mem->logout();


?>

<script>
    alert('로그아웃 되었습니다.');
    self.location.href='../index.php';
</script>




