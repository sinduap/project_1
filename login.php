<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Friendster - Teman Baruku</title>

<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">
<div class="row">
<div class="col-md-6">
<p>&larr; <a href="index.php">Home</a>
<h4>Masuk Frienster</h4>
<p>Belum punya akun? <a href="register.php">Daftar di sini</a>

<form action="" method="POST">

<div class="form-group">
<label for="username">Username</label>
<input class="form-control" type="text" name='username'
placeholder="Username atau email" />
</div>

<div class="form-group">
<label for="password">Password</label>
<input class="form-control" type="password" name='password'
placeholder="Password" />
</div>

<input type="submit" class="btn btn-success btn-block" name="login"
value="Masuk" />
</form>

</div>
<div class="col-md-6">
</div>
</div>
</div>

</body>
</html>
<?php

require_once("config.php");

if isset($_POST("login"])){

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM users WHERE username=:username OR email=:email";
$stmt = $db->prepare($sql);

//bind parameter ke query
$params = array(
":username" => $username,
":email" => $username);

$stmt->execute($params);

$user = $stmt->fetch (PDO::fetch_ASSOC);

//jika user terdaftar
if($user){
//verifikasi password
if(password_verify($password, $user["password"])){
//buat session
session_start();
$_SESSION["user"] = $user;
// login sukses, alihkan ke halaman timeline
header("Location: timeline.php");
}
}
}
?>