<?php


// db연결
include "inc/dbconfig.php";
include "inc/member.php";

// 아이디 중복 테스트

// $id = "kingchobo";

// $mem = new Member($db);

// if($mem->id_exists($id)){
//     echo "아이디가 이미 존재합니다.";
// }else{
//     echo "사용할 수 있는 아이디입니다.";
// }

// 이메일 중복 테스트

// $email = "email11@email.com";

// $mem = new Member($db);

// if($mem->email_exists($email)){
//     echo "이메일이 이미 존재합니다.";
// }else{
//     echo "사용할 수 있는 이메일입니다.";
// }

    // Profile image처리
    // $_FILES['photo']['name'] = "2020_KAI LOGO_155_190.png";
    // $id = "zzz";
    // $arr = explode('.', $_FILES['photo']['name']);
    // $ext = end($arr);

    // $photo = $id.'.'.$ext;

    // echo $photo;

    $email = 'ddd@email.com';

    $rs = filter_var($email, FILTER_VALIDATE_EMAIL);

    if($rs){
        echo "올바른 이메일입니다.";
    }else{
        echo "올바르지 않은 이메일입니다.";
    }
    

?>