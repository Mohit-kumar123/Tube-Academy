<?php
$to="mohit15eu@gmail.com";
$sub="testing email";
$message="you are selected for the job";
$from="mk0733920@gmail.com";
$headers="From:".$from;

$check=mail($to,$sub,$message,$from,$headers);
if($check){
    echo"mail sent";
}
else{
    echo "email not sent successfully";
}

?>
