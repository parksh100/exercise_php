<?php
// Member class file
class Member{
// 멤버 변수
 private $conn;

 // 생성자 public은 외부에서 접근 가능하다는 의미
public function __construct($db){
$this->conn = $db;
    }

// 아이디 중복 체크
public function id_exists($id){
    $sql = "SELECT * FROM member WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->rowCount() ? true : false; // 쿼리에서 나오는 갯수를 리턴해줌
   }

   public function email_exists($email){
    $sql = "SELECT * FROM member WHERE email = :email";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    return $stmt->rowCount() ? true : false; // 쿼리에서 나오는 갯수를 리턴해줌
   }

   // 이메일 중복 체크
   public function email_chk($email){
    $sql = "SELECT * FROM member WHERE email = :email";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    return $stmt->rowCount() ? true : false; // 쿼리에서 나오는 갯수를 리턴해줌
   }
  
   // 회원정보 입력
   public function input($marr){
    // var_dump($marray);
    
   }



};



?>