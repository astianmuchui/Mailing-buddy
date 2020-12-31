<?php
    require './fetch_database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/min.css">
    <title>Current Added Emails</title>
</head>
<body class="jumbotron">
    <div class="container">
    <table >
  <tr>
    <th>Username</th>
    <th>Email Adress </th>
    <th>Time Added</th>
  </tr>
  <?php foreach($emails as $email): ?>
  <tr>

    <td><?php echo $email['username'];?></td>
    <td><?php echo $email['adress'];?></td>
    <td><?php echo $email['time']?></td>
    <?php endforeach ?>
  </tr>
  
</table>
    </div>
<style>
    body{
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    /* background: url(../pexels-julien-brion-102061.jpg) no-repeat center center/cover; */
    
}
.container{
    width: 700px;
    background: rgba(0,0,0,0.1);
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    backdrop-filter: blur(20px);
    padding: 30px;
    z-index: 2;
    
}
table{
    margin-top: 5px;
    align-content: center;
    text-align: center;
    height: max-content;
    padding: 100px;
}
th{
    height: 50px;
    background: transparent;
    backdrop-filter: blur(5px);
    color: rgb(219, 219, 219);
}
td{
    border: 1px solid rgb(245, 245, 245);
    color: rgb(0, 0, 0);
    padding: 10px 20px;
}
tr:nth-child(1),
tr:nth-child(3),
tr:nth-child(5),
tr:nth-child(7)
tr:nth-child(9),
tr:nth-child(11),
tr:nth-child(13),
tr:nth-child(15),
tr:nth-child(17),
tr:nth-child(21),
tr:nth-child(23),
tr:nth-child(25){
    background-color: #00000062;
    backdrop-filter: blur(5px)
}
</style>
</body>
</html>