<?php 
require 'koneksi.php';

$chat_id = $_GET['chat_id'];
$stmt =  $pdo->prepare("SELECT messages.*, users,username FROM messages JOIN users ON messages.user_id = users.id WHERE chat_id = ?");
$stmt->execute([$chat_id]);
$massages = $stmt->fetchAll();

foreach ($messages as $message){
  echo "<div><strong>{$message['username']}:  </strong> {$message['message']} <em> {$message['created_at']} </em></div>";
}
