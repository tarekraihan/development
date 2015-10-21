<?php
$feedback="";
if(isset($_POST["btnSubmit"])){
$name=$_POST["txtName"];
$to="tarekraihan@yahoo.com";
$phone=$_POST["txtPhone"];
$email=$_POST["txtEmail"];

$subject=$_POST["txtSubject"];
$message=$_POST["txtMessage"];

$message1 = '
<html>
<head>
  <title>Message from Bangladesh Gateway</title>
</head>
<body>
  <p>Message from '.$name.' </p>
  <p>Message from '.$phone.' </p>
  <p>Message from '.$email.' </p>
  <br/>
  <p>
  Message : '.$message.'
  </p>
</body>
</html>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$result=mail($to, $subject, $message, $headers);

if($result)
{
	$feedback="Mail Successfully Send !!!";	
}



}
?>