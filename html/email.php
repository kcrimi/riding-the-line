<?php
/*
Email Spoofing script (PHP). For Educational Purposes only.
To note that capabilities of the script have been intentionally limited.
This work is licensed under a MIT License. Copyright 2012 Florian Bersier
*/
// Get posted data into local variables
$EmailFrom = "kevincrimi@gmail.com";    // Your email, e.g. me@example.com
//$EmailTo = "masechoi@gmail.com";        // Recipient, e.g. email of your friend
$EmailTo = "masechoi@gmail.com";        // Recipient, e.g. email of your friend
$FakeEmail = "Mark@iFoodtography.com";    // Fake email, e.g. sarkozy@elysee.fr
$FakeDomain = "iFoodtography.com";      // Fake Domain, e.g. elysee.fr
$Name = "";              // Your name
$FakeName = "Mark Crowton";      // Your fake name, e.g. Nicolas Sarkozy
$Subject = "Exciting VC backed food photography startup wants you!";        // Subject of the email
$Message = "<html><body>
Uhhhh... Melissa?

Solve the clues! You have so many tasks to go! Think about my stitched up leather pants. Have you ever tried stitching up leather pockets? that shit is hard. How good do your pockets look on that bag you made?
</body></html>
"; // Body of the email
// Modify headers of the Email
//$FakeSender = "X-Sender: $FakeDomain";
//$FakeReturn = "Return-Path: $EmailFrom";
$From = "From: $FakeName <$FakeEmail>";
//$Reply = "Reply-To: $EmailFrom";
$BCC = "Bcc: $EmailFrom";
$additional = "-f $FakeEmail";                          // Hide the Mailed-by or Via
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
//$headers .= $FakeSender. "\r\n";
//$headers .= "X-Priority: 3\r\n";                        // Normal priority (3), urgent is often categorized as Spam
$headers .= $From . "\r\n";
//$headers .= $Reply . "\r\n";
$headers .= $BCC . "\r\n";
//$headers .= $FakeReturn . "\r\n";
// Finally, Send Email
//mail($EmailTo, $Subject, $Message, $headers, $additional);
?>
