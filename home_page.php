<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="weblogo2.png" type="image/x-icon">
    <title>Splash Page</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>
    *{
        margin:0;
        padding:0;
        text-decoration:none;
    }
    nav{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100px;
    padding: 10px 20px;
    box-sizing:border-box;
    background: #3b8132;
    border-bottom:#fff;    
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
.navfont{
    font-family: Arial;
}
    /* Add splash page styles here */
    .bg{
        background:rgba(0,0,0,0.15);
        max-width: 100%;
        height:auto;
    }
    .content{
    
    }
    .content img{
        margin-top:107px;
        width:100%;
        height:88vh;
    }
    .text {
        font-family: 'poppins', sans-serif;
        position:absolute;
        top:290px;
        background-color:rgba(0,0,0,0.5);
        text-align: center;
        height: 300px;
        width: 100%;
    }
    
    .text h1 {
        font-size: 55px;
        font-weight:bold;
        color:white;
    }

    .text p {
        margin:5px 0;
        font-size: 25px;
        color:white;
    }

     .link{
        background:#3b8132;
        color:#fff;
        font-size: 30px;
        padding: 12px 55px;
        border-radius: 5px;
        cursor: pointer;
    }

    .link:hover {
        font-weight:bold;
        background-color: white;
        color:#3b8132;
        font-size: 30px;
    } 

    @media(max-width:400px;){
      nav  {
        width: 100%;
      }  
    }
    </style>
<body>
<nav>
    <div class="navfont">
    <div class="logo">Trash Grab</div>
    <ul>
    <li><a href="home_page.php" onclick="notif()">truck route</a></li>
    <li><a href="home_page.php" onclick="notif()">Notification</a></li>
    <li><a href="login_form.php" >login</a></li>
    </ul>
    </div>
    <script>
function notif() {
  alert("LOG-IN FIRST");
}
</script>
</nav>
    <div class="bg">
        <div class="content">
        <img src="123.png" >
        <div class="text"><br><br>
            <h1>Welcome to Trash Grab</h1>
            <p>IoT Based Waste Management System for Barangay Ibaba Collection Team</p><br>
            <a href="register_form.php" class="link">EXPLORE!</a>
        </div>
        </div>
    </div>
</body>
</html>