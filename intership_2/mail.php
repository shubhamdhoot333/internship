<?php
//get data from form  
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$location= $_POST['location'];
$message= $_POST['message'];
$to = "shubhamdhoot333@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name .
	  "\r\n  Email = " . $email .
	  "\r\n  Phone Number = ".$number .
	  "\r\n  location = ".$location . 
	  ".\r\n Message =" . $message;
	  
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
  $result1= mail($to,$subject,$txt,$headers);
}

//redirect
if ($result1) {
	header("Location:index.html");
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
}
?>