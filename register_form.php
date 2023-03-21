<?php

@include 'connection.php';
 if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpass']);
    $user_type = $_POST['user_type']; 

    $select = " SELECT * FROM user_form WHERE email ='$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist!'; 
    }else{
    if ($pass != $cpass) {
        $error[] = 'password not matched!';
    }else {
        $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
    mysqli_query($conn, $insert);
    header('location:login_form.php');
    }

    }
 };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="weblogo2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> 
    <title>register form</title>
<style>
*{
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
}
/* NAVIGATION */
nav{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100px;
    padding: 10px 90px;
    box-sizing:border-box;
    background: #3b8132;
    border-bottom:#fff;
    font-family: Arial;    
}
nav .logo{
    padding:22px 0px;
    height:80px;
    float:left;
    font-size:30px;
    font-weight:bold;
    text-transform:uppercase;
    color:#fff;
}
nav ul{
    list-style: none;
    float:right;
    margin:0;
    padding:0;
    display:flex;
}
nav ul li a{
    line-height:80px;
    color:#fff;
    padding:12px 30px;
    text-decoration:none;
    font-size:20px;
    font-weight:bold;
    text-transform:uppercase;
    cursor:pointer;    
}
nav ul li a:hover{
    background:rgba(0,254,0,0.45); 
    border-radius:7px;
}

/* CONTENT */
.form-container{
    font-family: 'poppins', sans-serif;
    min-height:100vh;
    display: flex; /*different layout in different screen/devices*/
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background: #eee;
}
.form-container form{
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.2);
    background: #fff;
    text-align: center;
    width: 500px; 
}
.form-container form h3{
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 15px;
    color: #333;
}
.form-container form input,
.form-container form select{
    width: 100%;
    padding: 10px 15px;
    font-size: 20px;
    margin: 8px 0;
    background: #eee;
    border-radius:5px;
}
.form-container form select option{
    background:#fff;
}
.form-container form .form-btn{
    background:#cce7c9;
    color:#3b8132;
    text-transform:capitalize;
    font-size:20px;
    cursor:pointer;
}
.form-container form .form-btn:hover{
    background:#3b8132;
    color:#fff;
}
.form-container form p{
    margin-top: 10px;
    font-size:20px;
    color:#333;
}
.form-container form p a{
    color:#3b8132;
}
.form-container form .error-msg{
    margin:10px 0;
    display:block;
    background:crimson;
    color:#fff;
    border-radius:5px;
    font-size:20px;
    padding:10px;
}
</style>

</head>
<body>
<nav>
    <div class="logo">Trash Grab</div>
    <ul>
    <li><a href="about.php">about</a></li>
    <li><a href="contact.php">contact</a></li>
    <li><a href="login_form.php">log in</a></li>
    </ul>
</nav>

<div class="form-container">
    <form action="" method="post">
        <h3>register now</h3>
        <?php
        if (isset($error)) {
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        }
        ?>
        <input type="text" name="name" placeholder="enter your name" required>
        <input type="email" name="email" placeholder="enter your email" required>
        <input type="password" name="password" placeholder="enter your password" required>
        <input type="password" name="cpass" placeholder="confirm your password" required>
        <select name="user_type" id="">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">login now</a></p>
    </form>
</div>  
</body>
</html>