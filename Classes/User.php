<?php
class User {

  private $conn;
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

  public function checkExisted() {
    $sql = "SELECT * FROM users WHERE user_name = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $this->data['username']);
    $stmt->execute();
    $results = $stmt->get_result();
    if($results->num_rows == 1) {
      $this->addError('username', 'Username is used');
    }
    return $this->errors;
  }

  public function createAccount() {
    $this->data['user_hash'] = password_hash($this->data['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user_name, user_email, user_hash) VALUES (?,?,?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("sss", $this->data['username'], $this->data['email'], $this->data['user_hash']);
    $stmt->execute();
  }

  public static function logout() {
    $_SESSION = [];
    session_destroy();
    header("Location: index.php");
  }

}

 ?>
