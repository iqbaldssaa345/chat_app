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
<form action="messagefrom">
    Chat:
    <select name="user_id" id="user_id">
      <!-- Opsi user diisi melalui PHP -->
    </select>
    Message: <textarea name="message" id="message"required></textarea>
    <button type="submit">Kirim</button>
</form>

<div id="message"></div>

<script>
    document.getElementById('messageFrom').addEventListener('submit',
    function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('send_message.php', {
            method: 'POST',
            body:formData
        })
        .then(response => response.json())
        .then(data =>{
            if(data.success){
            loadMassages();
            document.getElementById('message').value = '';
            // Clear the message input
            }else{
                alert('Error: ' +data.error);
            }
    });
});
function loadMassages(){
        fetch('load_messages.php?chat_id=' + 
document.getElementById('chat_id'.value)
         .then(response => response.text ())
         .then(html => {
            document.getElementById('messages').innerHTML = html; 
         });

        }
        // Load  messages on page load 
        loadMassages();
</script>