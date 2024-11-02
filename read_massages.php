<?php
require 'koneksi.php';

$chat_id =$_GET['chat_id'];
$stmt = $pdo->prepare("SELECT * FROM massages WHERE chat_id =?");
$stmt =$stmt->fetchAll();
?>

<table>
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Message</th>
        <th>Waktu</th>
    </tr>
    <?php foreach ($massages as $message): ?>
    <tr>
     <td><?= $massages['id'] ?></td>
     <>
        <?php 
        $user_stmt = $pdo->prepare("SELECT username  FROM users WHERE id =?");
        $user_stmt->execute([$massages['user_id']]);
        $user = $user_stmt->fetchAll();
        echo $user['username'];
        ?>
     </td>
    </tr>
    <?php endforeach; ?>
</table>