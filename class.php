<?php
/* code by coderswat
visit GitHub.com/coderswat*/
class Emailsend{
  private $email;
  private $name;
  private $texti;
  
  public function addDetails($email,$name,$texti){
  $this->email = $email;
  $this->name = $name;
  $this->texti = $texti;
  }
  public function sendMail(){
$url = "https://yourdomain../api.php";
$mn = " $this->texti , This Email is From $this->email";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_POST,true);
$data=array(
    "api"=>'Enter Your Api',
    "email"=>"Enter Your Email Here To Recive Mails",
    "msg"=>"$mn"
    );
curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response);
$status = $data->status;
if($status == "success"){
  return 5;
}else{
  return 10;
}
  }
  public function checkNull() {
    if(empty($this->email) || empty($this->name) || empty($this->texti)){
      return 2; 
    }else{
      return 3;
    } 
  }
}
class Echos {
  public $unknown = "Unknown Error";
  public $done = "Email Send Successfully";
  public $feild = "Please Fill All The Fields";
  
}
class Resub {
   public $red = "index.php";
}
?>
