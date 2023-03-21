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
body {
background-image: url("map.jpg");
background-repeat: no-repeat;
background-size: 80%;
background-position: left center;
background-attachment: fixed;
background-color:#fffbf0;


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
    text-align: right; 
    padding-top:8%;
    
}
.content h1{
    font-size:50px;
}
.content p, h3 {
    text-align: left;
}
.content .text{
    
    border-radius: 5px;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.4);
    background: #FAFFF9;
    font-size:20px;
    width: 37%;
    height:400px; 
    margin:50px 58%;
    text-align:center;
    padding:70px 100px;
    font-weight: 400;
}
.TRUCK {
    text-align: right;
    padding-right: 280px;
}
/* .trimage{
        background:#3b8132;
        color:#fff;
        text-align:center;
        cursor: pointer;
    }
    .trimage{
    padding:10px 20px;
    }

    .trimage:hover {
        font-weight:bold;
        background-color: white;
        color:#3b8132;

    }  */

</style>

</head>
<body>
<nav>
    <div class="logo">Trash Grab</div>
    <ul>
    <li><a href="user_page.php">home</a></li>
    <li><a href="notification.php">notification</a></li>
    <li><a href="logout.php">logout</a></li>
    </ul>
</nav>

<div class="content">

    <h1 class="TRUCK"> TRUCK ROUTE</h1>
    <div class="text">
    <h2>FEBRUARY 21, 2023</h2>
        <h3>ESTIMATED TIME CONSUME IN EVERY STATION</h3> <br>
        <p>  Example:<br>
        STATION 1 COMSUME TIME IS 6-8 MINUTES<br>
        STATION 2 COMSUME TIME IS 10-15 MINUTES<br>
        STATION 3 COMSUME TIME IS 4-7 MINUTES<br>
        </p>
    </div>
<!-- </div>
    <div class="trimage">
    <button type="submit" formaction="tr_image.php" class="map">Full View</button>
    </div> -->
</form>
</body>
</html>