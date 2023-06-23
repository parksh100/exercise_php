<?php
$id = (isset($_POST['id']) && $_POST['id'] != '') ? $_POST['id'] : '';
$pw = (isset($_POST['pw']) && $_POST['pw'] != '') ? $_POST['pw'] : '';



if($id == ''){
    $arr = [
        'result' => 'empty_id',
    ];
    die(json_encode($arr));  // json_encode : 배열을 json형태로 변환 ["result" => "empty_id"]
}

if($pw == ''){
    $arr = [
        'result' => 'empty_pw',
    ];
    die(json_encode($arr));  // json_encode : 배열을 json형태로 변환 ["result" => "empty_id"]
}

// DB에서 id, pw 조회
include "../inc/dbconfig.php";
include "../inc/member.php";

$mem = new Member($db);

if($mem->login($id, $pw)){
    $arr = ['result' => 'login_success'];

    session_start();
    $_SESSION['ses_id'] = $id;
    // $_SESSION['ses_name'] = $name;
    
    }else{
        $arr = [
            'result' => 'login_fail',
        ];
    }
    die(json_encode($arr));  // json_encode : 배열을 json형태로 변환 ["result" => "fail"]







?>