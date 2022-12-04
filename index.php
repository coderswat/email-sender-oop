<!DOCTYPE html>
<html>
  <!-- Front End by https://codepen.io/ZachSaucier/pen/jOwNvO , backend by coderswat.co -->
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <title></title>
    
  </head>
  <body>
    <form action="" method="post">      
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
  <input type="submit" name="submit" value="SUBMIT"/>
</form>
  </body>
</html>
<?php
/* code by coderswat
visit GitHub.com/coderswat*/
  include('class.php');
  if(isset($_POST['submit'])){
  $class = new Emailsend();
  $class2 = new Echos();
  $class3 = new Resub();
  $class->addDetails($_POST['email'],$_POST['name'],$_POST['text']);
$check = $class->checkNull();
if($check == 2){
  echo "<script>alert('$class2->feild')</script>";
  echo "<meta http-equiv = 'refresh' content = '0; url = $class3->red' />";
}else{
 $mail = $class->sendMail();
 if($mail == 5){
   echo "<script>alert('$class2->done')</script>";
   echo "<meta http-equiv = 'refresh' content = '0; url = $class3->red' />";
 }else{
   echo "<script>alert('$class2->unknown')</script>";
   echo "<meta http-equiv = 'refresh' content = '0; url = $class3->red' />";
 
  }
 }
}
?>