<?php

$errorMSG = "";


// Jenis
//if (isset($_POST['jenis_borang']))
if (empty($_POST["jenis_borang"])) {
    $errorMSG = "Jenis Borang is required ";
} else {
       $jenis_borang = $_POST["jenis_borang"];
}
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
 // NOMBOR TELEFON
 
if (empty($_POST["nombor"])) {
    $errorMSG .= "Number Phone is required ";
} else {
    $nombor = $_POST["nombor"];
}
// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "saisyah.zainal@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Jenis Borang: ";
$Body .= $jenis_borang;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $nombor;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>