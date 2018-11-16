<?php

require_once("config.php");

if(isset($_POST ['register'])){

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING)
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING)
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)

$sql = "INSERT INTO users (name, username, email, password)
VALUES (:name, :username, :email, :password,)";
$stmt = $db->prepare($sql);

$params = array(
":name" => $name,
":username" => $username,
":password" => $password,
":email" => $email,
);

$saved = $stmt->execute ($params);
if ($saved) header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Register Friendster</title>

<link rel="stylesheet" href"css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="row">
<div class="col-md-6">

<p>&larr; <a href="index.php">Home</a>

<h4>Bergaunglang dengan ribuan orang lainnya...</h4>
<p>Sudah punya akun? <a href="login.php"> Login disini</a></p>

<form action="" method="POST">

<div class="form-group">
<label for="name">Nama Lengkap</label>
<input class="form-control" type="text" name="name" placeholder=
"nama kamu"/>
</div>

<div class="form-group">
<label for="username">Username</label>
<input class="form-control" type="text" name="username"
placeholder="username"/>
</div>

<div class="form-group">
<label for="email">Email</label>
<input class="form-control" type="email" name="email"
placeholder="Alamat Email"/>
</div>

<div class="form-group">
<label for="password">Password</label>
<input class="form-control" type="password" name="password"
placeholder="password"/>
</div>

<input type="submit" class="btn btn-success btn-block" name+register"
value="Daftar" />

</form>

</div>

<div class="col-md-6">
<img class="img img-responsive" src="img/connect.png" />
</div>
</div>

</body>
</html>