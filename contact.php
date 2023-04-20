<?php
$host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="event_management";

$con=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error()){
    die('Connect Error('. mysql_errno().')' . mysqli_connect_error());
}

if(isset($_POST['done'])){
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$district=$_POST['district'];
$zip=$_POST['zip'];
$state=$_POST['state'];
$country=$_POST['country'];
$textme=$_POST['textme'];

///name    email   pass    phone   address city    district    zip state   country textme
/*if(!empty($name) || !empty($email) || !empty($pass) || !empty($phone) || !empty($address) || !empty($city) || !empty($district) || !empty($zip) || !empty($state) || !empty($country) || !empty($textme)){*/
    
 $q =  " INSERT INTO `contactus`(`name`, `email` , `pass`,` phone` `address`, `city` , `district`,`  zip  ` ` state`, `country` , `textme`) VALUES ( '$name', '$email' , '$phone' ,'$pass', '$address',$city', '$district' , '$zip' , '$state',$country', '$textme')";
 $query = mysqli_query($con,$q);
 header('location:index.html');
}
?>
}
?>