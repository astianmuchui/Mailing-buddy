<?php
    require ('db_config.php');
  $query = "SELECT * FROM my_Emails";
  $result = mysqli_query($conn,$query);
  $emails = mysqli_fetch_all($result,MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($conn);  
?>