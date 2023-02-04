<?php 
class Chat_Model {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function getUser($user_id) {
    $user_id = mysqli_real_escape_string($this->conn, $user_id);
    $sql = mysqli_query($this->conn,"SELECT * FROM users WHERE unique_id = '{$user_id}'");
    return mysqli_fetch_assoc($sql);
  }
}