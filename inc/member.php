<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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

   // 이메일 형식 체크
   public function email_format_check($email){
    $rs = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $rs;
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

    // 단방향 암호화
    $new_hash_password = password_hash($marr['password'], PASSWORD_DEFAULT);

    // var_dump($marr); 
    $sql = "INSERT INTO member (id, name, password, email, zipcode, addr1, addr2, photo, ip) 
             VALUES (:id, :name, :password, :email, :zipcode, :addr1, :addr2, :photo, :ip)";
    
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':id', $marr['id']);
    $stmt->bindParam(':email', $marr['email']);
    $stmt->bindParam(':password', $new_hash_password);
    $stmt->bindParam(':name', $marr['name']);
    $stmt->bindParam(':zipcode', $marr['zipcode']);
    $stmt->bindParam(':addr1', $marr['addr1']);
    $stmt->bindParam(':addr2', $marr['addr2']);
    $stmt->bindParam(':ip', $_SERVER['REMOTE_ADDR']);
    $stmt->bindParam(':photo', $marr['photo']);
    $stmt->execute();
   }

   // login
   public function login($id, $pw){

    // password_verify($password, $new_password )


    $sql = "SELECT * FROM member WHERE id = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    if($stmt->rowCount()){
        $row = $stmt->fetch();

        if(password_verify($pw, $row['password'])){
            $sql = "UPDATE member SET login_dt=now() WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

        return true;
    }else{
        return false;
    }
    }else{return false;}
   }

    // logout
    public function logout(){
        session_start();
        session_destroy();

        die("<script>
        self.location.href='../index.php';
        alert('로그아웃 되었습니다.');
        </script>
        ");

    }
};



?>