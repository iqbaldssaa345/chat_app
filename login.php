<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>	
</head>
<body>
     <form action="" method="POST">
     <div class="mb-3 mt-3">
                <label for="username" class="form-label">Username:</label><br>
                <input type="user" class="form-control" id="user" placeholder="Enter username" name="usern">
            </div>
        <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label><br>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label><br>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
	if (isset($_POST['btn'])) {
        $username =$_POST['usern'];
		$email =$_POST['email'];
		$password =$_POST['pswd'];

	$users =$conn->query("SELECT * FROM `users` '");
	$result =$users->fetch_array();
	$row = $users->num_rows;
	if ($row > 0){
    $_SESSION['id']=$result['id'];
    header('location:index.php');
}else{
   	echo "Gagal Login";
}
	}
	
	 ?>	
</body>
</html>