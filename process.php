<?php
if(isset($_POST['name'],$_POST['email'], $_POST['message'],$_POST['date'],$_POST['sendmail'],$_POST['address'])){
// print_r($_POST);
$n = $_POST['name'];
$e = $_POST['email'];
$a = $_POST['address'];
$m = nl2br ($_POST['message']);
$d = $_POST['date'];


$to = "dhayoralabi@gmail.com";
$from = $e;
$subject = 'CONTACT FORM';
$message ='<b>Name:</b> '.$n.
'<br><b>Email:</b>'.$e.'<br><b>Date:</b>'.$d.'<br><b>Message:</b> '.$m.
'<br><b>Address:</b> '.$a.'<br>';

$headers = "From: $from\n";
$headers .= "MIME-Version : 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";

if( mail($to, $subject , $message,$headers,"-f dhayoralabi@gmail.com")){
   echo "Message sent successfully";
   
}else{
   echo "Failed, Please try again later";
}
}
?>
