<?php

include "../inc/dbconfig.php";
include "../inc/member.php";

// 넘어온 값 받기
var_dump($_POST);
echo "<br>";
print_r($_POST);

$mem = new Member($db);
// 아이디중복체크
// 삼항연산자 : 조건 ? 참 : 거짓 적용
$id = (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id'] : '';
$email = (isset($_POST['email']) && $_POST['email'] != '') ? $_POST['email'] : '';
$name = (isset($_POST['name']) && $_POST['name'] != '') ? $_POST['name'] : '';
$zipcode = (isset($_POST['zipcode']) && $_POST['zipcode'] != '') ? $_POST['zipcode'] : '';
$addr1 = (isset($_POST['addr1']) && $_POST['addr1'] != '') ? $_POST['addr1'] : '';
$addr2 = (isset($_POST['addr2']) && $_POST['addr2'] != '') ? $_POST['addr2'] : '';


$mode = (isset($_POST['mode']) && $_POST['mode'] != '') ? $_POST['mode'] : '';


    // 아이디 중복체크
if($mode== 'id_chk'){
    if($id == ''){
        die(json_encode(['result' => 'empty_id']));
    }
    if($mem->id_exists($id)){
        die(json_encode(['result' => 'fail']))  ; 
    }else{
        // echo "사용가능한 아이디입니다.";
        die(json_encode(['result' => 'success']))  ;
    }
    // 이메일 중복체크
} else if($mode == 'email_chk'){
    if($email == ''){
        die(json_encode(['result' => 'empty_email']));
    }
    if($mem->email_exists($email)){
        die(json_encode(['result' => 'fail']))  ; 
    }else{
        // echo "사용가능한 아이디입니다.";
        die(json_encode(['result' => 'success']))  ;
    }
} else if($mode == 'input'){
    // 
    $arr = [
        'id' => $id,
        'email' => $email,
        'name' => $name,
        'zipcode' => $zipcode,
        'addr1' => $addr1,
        'addr2' => $addr2
    ];

    $mem->input($arr); 
}


?>