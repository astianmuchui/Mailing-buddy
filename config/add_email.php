<?php
    require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Add Email</title>
</head>
<body class="jumbotron">
    <center>
        <br>
        <h1>Add Email</h1>
    <form action="./add_email.php" method="POST">
        <label>Username</label> <br> <br>
        <input type="text" name="name" required> <br> <br>
        <label>Email adress</label> <br> <br>
        <input type="email" name="email" required> <br> <br>
        <input type="submit" value="+ Add Email" name="submit" id="submit">

</form>
    </center>
    
<style>
    form{
    position: relative;
    margin-top: 80px;
    background: #00030a;
    width: 60%;
    padding: 40px;
    height: 400px;
}
input{
    padding: 10px;
    width: 600px;
    height: 30px;
    display:block;
    width:100%;
    height:calc(1.5em + .75rem + 2px);
    padding:.375rem .75rem;
    font-size:1rem;
    font-weight:400;
    line-height:1.5;
    color:#495057;
    background-color:#fff;
    background-clip:padding-box;
    border:1px solid #ced4da;
    border-radius:.25rem;
    transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
label{
    font-size: 20px;
    font-family: Arial,Helvetica,sans-serif;
    color: white;
}
#submit{
    color: black;
    background: #2fa4e7;
    border: white;
    width: max-content;
    padding: 10px 20px;
    text-align: center;
}
</style>
</body>
</html>