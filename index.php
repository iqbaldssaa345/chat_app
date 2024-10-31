<?php 
if (!isset($_SESSION['iduser'])) {
    include"login.php";
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Chat room</title>
</head>
<body>
    <h1>Room Chat</h1>
</body>
</html>
<?php } ?>