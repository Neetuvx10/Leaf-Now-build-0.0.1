<?php
require_once __DIR__ . '/vendor/autoload.php';


$name=$_POST['name'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pincode=$_POST['pincode'];
$addr=$_POST['addr'];


$mpdf= new mPDF();

$data='';


$data.='<h1>your data</h1>';
$data.='<strong>name</strong> ' . $name . '<br />';
$data.='<strong>city</strong> ' . $city . '<br />';
$data.='<strong>mobile</strong> ' . $mobile . '<br />';
$data.='<strong>email</strong> ' . $email . '<br />';
$data.='<strong>pincode</strong> ' . $pincode . '<br />';
$data.='<strong>Address</strong> ' . $addr . '<br />';





if($message)
{
	//$data .="<br /><strong>message</strong><br />" . $message
}

$mpdf->WriteHTML($data);
$mpdf->Output('myfile.pdf', 'D');

?>