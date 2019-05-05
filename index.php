<?php

function line_notify($message, $token) {//create function 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "message=".$message);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $headers = array("Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token",);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}

$token = "QDNLJivYHiflbmjsL6iCFdOyKmPpwREy0CD1WlXBuEN"; //Token Generate-> https://notify-bot.line.me/th/
//
//example 1 
$message = "A1:TEST1
        A2:TEST2
        A3:TEST3"; //Max 1,000 characters.
line_notify($message, $token); //
//end example 1 

//example 2 
for ($i = 1; $i <= 3; $i++) {
    $message2 = "Test message -> " . $i; //Max 1,000 characters.
    line_notify($message2, $token); //  
}
//end example 2 
?>