<?php 
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chat_id = $_POST['chat_id'];
    $user_id = $_POST['user_id'];
    $message= $_POST['message'];
    
    $stmt = $pdo->prepare("INSERT INTO massages (chat_id, user_id, masssage) VALUES (?, ?, ?)");
    $stmt->execute([$chat_id, $user_id, $massages]);

    echo json_encode(['succes' => true]);
    exit;
}
