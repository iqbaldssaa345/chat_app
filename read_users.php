<?php
require 'koneksi.php';

$stmt =$pdo->query("SELECT * FROM users");
$users =$stmt->fetchAll();
?>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($users as $user): ?>
     <td><?= $user['id'] ?></td>
     <td><?= $user['username'] ?></td>
     <td><?= $user['email'] ?></td>
     <td>
     <a href="update_user.php?id=<? $user['id'] ?>"Edit></a>
     <a href="delete_user.php?id=<? $user['id'] ?>"Edit></a>
     </td>
     </tr>
    <?php endforeach; ?>
    </table>