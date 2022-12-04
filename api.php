<?php
/* code by coderswat
visit GitHub.com/coderswat*/
header("Content-Type:application/json");
$apikey=$_POST['api'];
if($apikey == "Enter Your Api"){
$to=$_POST['email'];
$subject=" This is a test message From $name";
$txt=$_POST['msg'];
$headers="From:example@domain.com";
mail($to,$subject,$txt,$headers);
$msg = "Mail Send Successfully";
$status = "success";
}else{
  $msg = "Invalid Api Key";
  $status = "failure";
}
$contents = array("status"=>$status,"message"=>$msg);
$api = json_encode($contents);
echo $api;
?>