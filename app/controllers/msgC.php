<?php
include_once("php/config.php");
session_start();
include_once("Chat_Model.php");

if (!isset($_SESSION['unique_id'])) {
  header('location:login.php');
}

$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$chat_model = new Chat_Model($conn);
$user = $chat_model->getUser($user_id);

include_once("chat_view.php")
?>