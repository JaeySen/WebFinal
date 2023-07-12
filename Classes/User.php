<?php
// include 'db/db.php';

class User {
  public $user_id;
  public $user_name;
  public $user_email;
  public $user_hash;
  public $user_password;
  public $conn;
  private $user = [];
  public $users = [];
  public $errors = [];

  private $data; 

  public function __construct($conn, $post_data) {
    $this->conn = $conn;
    $this->data = $post_data;
  }

  private function addError($key, $val) {
    $this->errors[$key] = $val;
  }

  private function getUser() {
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $this->data['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
      return $result->fetch_assoc();
    }
  }

  public function login() {
    $this->user = $this->getUser();
    if(!empty($this->user)) {
      if(!password_verify($this->data['password'], $this->user['user_hash'])) {
        $this->addError('login_password', "Password fail!");
      } 
    } else {
      $this->addError('login_username', "This username does not exist!");
    }
    return $this->errors;
  }

  public function runLoginSession($user) {
    $_SESSION['user_id'] = $user->user['ID'];
    $_SESSION['user_name'] = $user->user['user_name'];
    $_SESSION['loggedin'] = true;
    header("Location: /pollgenz-php");
  }

  public function checkNewUser() {
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $this->user_name);
    $stmt->execute();
    $results = $stmt->get_result();
    if($results->num_rows == 1) {
      $this->user = $results->fetch_assoc();
    }
  }

  public function createAccount() {
    $this->user_hash = password_hash($this->user_password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user_name, user_email, user_hash) VALUES (?,?,?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("sss", $this->user_name, $this->user_email, $this->user_hash);
    $stmt->execute();
    if($stmt->affected_rows == 1) {
      $this->user_id = $stmt->insert_id;
      $this->getUser();
      $this->login();
    }
  }

  public function checkRegistration($user_name, $user_email, $user_password, $user_password2) {
  // assign vals to properties
    $this->user_name = $user_name;
    $this->user_email = $user_email;
    $this->user_password = $user_password;
    $this->checkNewUser();

    // check if username is already taken
    if(!empty($this->user)) {
      $this->errors['create_username'] ="Username is already taken!";
    }
    // check email is valid
    if(!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) {
      $this->errors['create_email'] = "Invalid email!";
    }
    //check passwords match and are a certain length
    if($this->user_password != $user_password2 || strlen($this->user_password) < 5) {
      $this->errors['create_password'] = "Passwords don't match or are too short!";
    }

    if(empty($this->errors)) {
      $this->createAccount();
    }
  }

  public static function logout() {
    $_SESSION = [];
    session_destroy();
    header("Location: index.php");
  }

}

 ?>
