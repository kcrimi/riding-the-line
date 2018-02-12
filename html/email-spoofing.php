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
<p>Hello Melissa,</p>
<p>I came across your profile on Angel List and I think you would be a great fit for our new startup. Imagine Uber for food photographers! This is a completely untapped 3.3 billion dollar market, trust me. Really, it’s only a matter of time before we’re purchased by Amazon, or Facebook, or Google, or possibly all three. We’re going to be rich, that’s all that matters.
</p><p>
Anyways, you can get in on the ground floor since you like using a camera or something. I don’t really know much about photography, but trust me, we’re going to revolutionize the industry. DISRUPT THE MARKET! Sorry….well, looking through your website, it looks like you can take some good pictures. You probably have an iPhone 6S or something. Remember though, our company is focused on FOOD PHOTOGRAPHY. Sunsets and rivers are lame. No one follows instagrams of nature shots. People want 2 things: Kanye tweets and food porn. We started as a random sentence generator to emulate the Kanye effect but it didn’t catch on because it sounded too sane. So now we’ve pivoted to the food.
</p><p>
Though you look promising, this is an opportunity to get in on the ground floor of the next multi billion dollar company so we have to test you out a bit first. We’re going to hook you up with a beta version of our app that will allow me to directly communicate with you and give you tasks. If you leak this to techcrunch, I’m gonna sue you so hard! Eh hem...just pay attention to the clues and you’ll do fine. Even people who didn’t go to Harvard Business school can probably figure out how to use it.
</p><p>
You can download the app <a href='https://drive.google.com/file/d/0BycBa1pJNvAfbU82bC1qVVcwWGs/view?usp=sharing'>here.</a> My CTO, Jeff, is too busy crushing it, developing new features to help you so if you need help, just ask someone around you. You can figure it out and I really don’t have time to be dealing with photographers. I have a business to run!
</p><p>
Cheers</p><p>
Mark Crowton</p><p>
CEO iFoodtography</p>
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
