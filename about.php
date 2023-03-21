<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="weblogo2.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>About</title>
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
    padding-top:15%;
}
.content .text{
    text-align:center;
    padding: 30px 200px;

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
    <h1>ABOUT</h1>
    <p class="text">
    The developer aims to provide announcement using notification <br>and the time of garbage disposal for the people of brgy ibaba.
    </p>
    <button onclick="history.back()">Go Back</button>
</div>

</body>
</html>