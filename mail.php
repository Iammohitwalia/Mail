<?php
if(isset($_POST['esubmit'])){
$to = "mohit.walia@webslaw.com, vinayak.patel@webslaw.com";
$subject= "test mail";
$message = $_POST['body'];
$from = $_POST['email'];
$headers = "From : $from"."\r\n";

mail($to , $subject , $message, $headers);
echo  "Mail Sent.";
}
?>

<html>
    <body>
        <form method="post" action="<?php echo $_server['PHP_SELF']; ?> ">
            <input name ="email" type="email"/>
              <input name ="body" type="textarea"/>
              <input name="esubmit" type ="submit" />
        </form>
    </body>
</html>