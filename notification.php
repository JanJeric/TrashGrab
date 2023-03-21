<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="weblogo2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Notification</title>
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
.box{
    margin-top:100px;
}
.box h1{

    text-align:center;
    margin-top:80px;
    font-size:50px;
    font-family: 'poppins', sans-serif;
}

.container {
    max-width: 700px;
    margin: 0 auto;
    padding: 20px;
}

.notification {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    margin-bottom: 30px;
    padding: 15px;
}

.notification h2 {
    font-family: 'ARIAL';
    margin-top: 0;
}

.notification p {
    font-family: 'poppins', sans-serif;
    margin-bottom: 0;
}

.time {
    font-family: 'poppins', sans-serif;
    font-size: 12px;
    color: #999;
}
.notification h2 p .time{
    padding-right:50px;
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
    <li><a href="user_page.php">home</a></li>
    <li><a href="truckroute.php">truck route</a></li>
    <li><a href="logout.php">logout</a></li>
    </ul>
</nav>
</nav>
<div class="box">
    <h1>NOTIFICATION</h1>
    <div class="container">
        <?php
            include('connection.php');
            $query = mysqli_query($conn, "SELECT * FROM notifications ORDER BY id DESC");
            while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <div class="notification">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['message']; ?></p>
            <span class="time"><?php echo $row['created_at']; ?></span><BR><BR>
            <button >DELETE</button>
    <button  onclick="history.back()">BACK</button>
        </div>
        <?php } ?>
</div>

</body>
</html>