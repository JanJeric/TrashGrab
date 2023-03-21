 <?php 

 @include 'connection.php';
 
 session_start();

if (!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
 ?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="weblogo2.png" type="image/x-icon">
    <title>Admin Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
*{
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
}

body {
background-image: url("truck.png");
background-repeat: no-repeat;
background-size: 60% 60%;
background-position: right center;
background-attachment: fixed;
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
.container{
    font-family: 'poppins', sans-serif;
    min-height:100vh;
    display: flex; /*different layout in different screen/devices*/
    align-items: center;
    justify-content: left;
    padding: 200px;
    padding-bottom: 60px;
}
.container .content{
    text-align: left;
}
.container .content h3{
    font-size: 30px;
    color: #333;
}
.container .content h3 span{
    background: #3b8132;
    color: #fff;
    border-radius: 5px;
    padding: 0 15px;
}
.container .content h1{
    font-size: 55px;
    color: #333;    
}

.container .content h1 span{
    color:#3b8132;
    padding-left: 15px;
}
.container .content p{
    font-size: 25px;
    margin-bottom: 20px;
}

</style>
</head>
<body>

<nav>
    <div class="logo">Trash Grab</div>
    <ul>
    <li><a href="employee_record.php">Employee Record</a></li>
    <li><a href="create_notification.php">Create notification</a></li>
    <li><a href="logout.php">logout</a></li>
    </ul>
</nav>

 <div class="container">

    <div class="content">
        <h3>hi <span>admin</span></h3>
        <h1 >Welcome<span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p>this is admin page</p>

    </div>

 </div>


</body>
</html>