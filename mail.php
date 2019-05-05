<?php


//Connect to server.
$con=mysqli_connect('localhost','root');
if(!$con){
  die("Server Connection Failed" . mysqli_error($con));
}


//Connect to database.
$db=mysqli_select_db($con,'session');
if(!$db){
  die("Database Connection Failed" . mysqli_error($db));
}


$email=$_REQUEST["email"];
echo $email;

$q="select * from signin where email='$email'";
$result=mysqli_query($con,$q);
$e=mysqli_fetch_array($result);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "vaibhavpawade5@gmail.com";
  $mail->Password = "9403957392";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "vaibhavpawade5@gmail.com";
  $mail->FromName = "Vaibhav";
  
  $mail->addAddress($e["email"]);
//mail->addAddress("vaibhavpawade5@gmail.com");
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>".$e["password"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
    header('location:forgotpassword.php?mail=No such email registered.');
    //echo "Mailer Error: " . $mail->ErrorInfo;
    //echo "<script>
    //alert('Something went wrong.Try again.');
    //window.location.href='http://localhost/Database_Project_GCOEN/index.php';
    //</script>";
  }
  //elseif ($e==0) {
  //  echo "<script>
  //alert('No such email registered');
  //window.location.href='http://localhost/Database_Project_GCOEN/index.php';
  //</script>";
  //}
  else
  {
    header('location:forgotpassword.php?mail=Password has been sent to your email successfully');
   //echo "Message has been sent successfully";
    //echo "<script>
    //alert('Password has been sent to your email successfully');
    //window.location.href='http://localhost/Database_Project_GCOEN/index.php';
    //</script>";
  }
  
  ?>