<?php 
require 'koneksi.php';

$id =$_GET['id'];
$stmt = $pdo->prepare("DELETE FROM users WHERE id =?");
$stmt->execute([$id]);

header("Location: read_users.php");
