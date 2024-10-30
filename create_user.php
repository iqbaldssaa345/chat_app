<?php 
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] =="POST") {
  $username = $_POST['username'];
  $email  = $_POST['email'];

  $stmt =$pdo->prepare("INSERT INTO users (username, email) VALUES (?, ?)");
  $stmt->execute([$username, $email]);

  header("Location: read_users.php");
}
?>

<form method="POST">
    Username: <input type="text" name="username"required>
    Email: <input type="text" name="email" required>
    <button type="submit">Simpan</button>
</form>
