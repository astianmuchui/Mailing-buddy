    <?php
    require ('./config/fetch_database.php');
    function validateSelectBox($sender,$message,$recepient,$subject,$name){
        if(empty($sender) || empty($message) || empty($recepient) || empty($subject) || empty($name)){
            echo 'fill all fields for this to work <br> <br>';
        }else{
            return true;
        }
        if(strpos('Sender',$sender) || strpos('Choose recepient',$recepient)){
            echo "Choose valid email";
        }else{
            return true;
        }
        if(filter_var($sender, FILTER_VALIDATE_EMAIL) && filter_var($recepient,FILTER_VALIDATE_EMAIL) !== FALSE){
            return true;
        }else{
            echo "enter valid email";
        }
        
    }
    if(isset($_POST['submit'])){
        $sender = $_POST['sender'];
        $message = $_POST['message'];
        $recepient = $_POST['recepient'];
        $subject = $_POST['subject'];
        $name = $_POST['Username'];
        validateSelectBox($sender,$message,$recepient,$subject,$name);
        $body = "
            <p>
            $message
            </p>
";
        $header = "from: ".$name."<".$sender.">"."\r\n";
        if(validateSelectBox($sender,$message,$recepient,$subject,$name)){
            mail($recepient,$subject,$body,$header);    
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Mail Manager</title>
</head>
<body class="bg-light">
    <center>
        <br>
        <h1>Send Email</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-group well "style="width: 60%; " >
        <div class="form-group">
        <select name="sender" id="" class="form-control">
                <option value="">Available Emails</option></option>
                <option value="sebastianmuchui79@gmail.com" name="email">sebastianmuchui79@gmail.com</option>
                <option value="7iastian@gmail.com" name="email">7iastian@gmail.com</option>
                <?php foreach($emails as $email): ?>
              <option value="<?php echo $email['adress'];?>"> <?php echo $email['adress']; ?> </option>
        <?php endforeach ?>
            </select> <br> <br>
        </div>
            <div class="form-group">
            <input type="text" name="Username" placeholder="Google Username" class="form-control"> <br> <br>
            <input type="text" name="subject" placeholder="Subject" class="form-control"> <br> <br>
           
            </div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Write your message" class="form-control"></textarea> <br> <br>
           <div class="form-group">
                    <input type="text" class="form-control" name="recepient" placeholder="Recepient Email">
                </div>
            <input class="btn btn-primary" type="submit" value="Send message" name="submit"> <br> <br>
        </form>
    </center>

</body>
</html>
