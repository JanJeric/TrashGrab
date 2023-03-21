<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="weblogo2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Create Notification</title>
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
.content{
    font-family: 'poppins', sans-serif;
    text-align:center;
    padding-top:8%;
}
.content h1{
    font-size:50px;
}
.content .text {
    border-radius: 5px;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.3);
    background: #FAFFF9;
    font-size:20px;
    width: 40%;
    height:400px;
    padding:20px 25px; 
    margin-top:25px;
}
.content .title {
    border-radius: 5px;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.2);
    background: #FAFFF9;
    font-size:25px;
    width: 40%;
    height:90px;
    padding:0 40px;
    margin:10px 0px;
}
/* BUTTON */
.content button{
    background:#cce7c9;
    color:#3b8132;
    text-transform:capitalize;
    cursor:pointer;
    padding: 8px 30px;
    border-radius:3px;
    border:solid rgba(0,0,0,0.2) 1px;
    font-size:20px;
    margin: 30px 100px;
}
.content button:hover{
    background:#3b8132;
    color:#fff;
    text-transform:capitalize;
    cursor:pointer;
    padding: 8px 30px;
    border-radius:3px;
    border:solid rgba(0,0,0,0.2) 1px;
    font-size:20px;
}
</style>

</head>
<body>
<nav>
    <div class="logo">Trash Grab</div>
    <ul>
    <li><a href="admin_page.php">home</a></li>
    <li><a href="employee_record.php">Employee Record</a></li>
    <li><a href="logout.php">logout</a></li>
    </ul>
</nav>
</nav>
<?php
    include('connection.php');
    $title = $_POST['title'];
    $message = $_POST['message'];
    $created_at = date('Y-m-d H:i:s');
    $query = mysqli_query($conn, "INSERT INTO notifications (title, message, created_at) VALUES ('$title', '$message', '$created_at')");
    if ($query) {
        header('Location: create_notification.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>
<div class="content">
    <h1>CREATE NOTIFICATION</h1>
    <form method="post" action="create_notification.php"> 
            <input type="text" class="title" name="title" placeholder="Input Title Here..." required><br>
            <textarea class="text"name="message" placeholder="Input Content Here..."required></textarea><br>
			<button type="submit">CREATE</button>
            <button type="submit">VIEW NOTIFICATION</button>
		</form>

</div>

</body>
</html>