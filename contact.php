<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="weblogo2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Cotact</title>
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
/* CONTENT */
.content{
    font-family: 'poppins', sans-serif;
    text-align:center;
    padding-top:10%;
}
.content .text{
    text-align:justify;
    padding:60px 120px;
    border-radius: 5px;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.2);
    background: #FAFFF9;
    width: 38%;
    height:270px; 
    margin:50px 30%;
    font-size:20px;
}
.content h1{
    font-size:50px;
}
.content p{
    font-size:20px;
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
    margin-top:30px;
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
    margin-top:30px;
}
</style>

</head>
<body>
<nav>
    <div class="logo">Trash Grab</div>
</nav>

<div class="content">
    <h1>CONTACT</h1>
    <p class="text">
    Name: Jan Jeric O. Cruz<br>
    Position: Team lead<br>
    CellPhone : +639666970110<br>
    Visit us in <br><a href="http://Facebook.com/TrashGrab/AboutUs">Facebook.com/TrashGrab/AboutUs</a> <br>
    </p>
    <button onclick="history.back()">Go Back</button>
</div>

</body>
</html>