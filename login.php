<?php
include('connect.php');
include('session.php');


include('connect.php');
if(isset($_POST['btn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `login`( `email`, `password`) VALUES ('$email','$password')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo"fail";
    }
}
?>


<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.php  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Soccer :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>

</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="index-2.php"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <form action="login.php" method="POST">
                <div class="card-title">Login to your account</div>
                <div class="form-group">
                    <select class="custom-select">
                        <option>Project Manager</option>
                        <option>Team Leader</option>
                        <option>Employee</option>
                    </select>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="form-label">Password<a href="forgot-password.php" class="float-right small">I forgot password</a></label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div cla ss="form-footer">
                    <button  type="submit" name="btn"  class="btn btn-primary btn-block">Sign in</button>
                </div>
            </div>
            <div class="text-center text-muted">
                Don't have account yet? <a href="register.php">Sign up</a>
            </div>
        </div>        
        </form>
    </div>
    <div class="auth_right full_img"></div>
</div>
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="assets/js/core.js"></script>
</body>

<!-- soccer/project/login.php  07 Jan 2020 03:42:43 GMT -->
</html>