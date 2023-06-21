<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// db연결
include "inc/dbconfig.php";
include "inc/member.php";

// 아이디 중복 테스트

$id = "kingchobo";

$mem = new Member($db);

if($mem->id_exists($id)){
    echo "아이디가 이미 존재합니다.";
}else{
    echo "사용할 수 있는 아이디입니다.";
}

// 이메일 중복 테스트

// $email = "email11@email.com";

// $mem = new Member($db);

// if($mem->email_exists($email)){
//     echo "이메일이 이미 존재합니다.";
// }else{
//     echo "사용할 수 있는 이메일입니다.";
// }



?>