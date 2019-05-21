<?php
$vendor = __DIR__ . '/vendor';
if(is_dir($vendor) && file_exists($vendor.'/autoload.php')){
  require_once $vendor.'/autoload.php';
}
$filecontent = file(__DIR__ . '/config');
// var_dump($filecontent);
echo $filecontent[0];
echo $filecontent[1];

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.localhost.com', 25))
  ->setUsername('wale')
  ->setPassword('wallex')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

//messages and Addresses
$subject = 'Mail Test';
$from = ['wale@localhost.com' => 'wale',];
$to = [
  'wale@localhost.com',
  'olawaley2k@gmail.com' => 'wale'
];
$messageVar = <<<EOF
    Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.

  Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh.

  Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
EOF;

// Create a message
// $message = (new Swift_Message('Wonderful Subject'))
//   ->setFrom($from)
//   ->setTo($to)
//   ->setBody($message)
//   ;
//
// // Send the message
// $result = $mailer->send($message);

try {
    // Create the SMTP Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'ssl'))
        ->setUsername($filecontent[0])
        ->setPassword($filecontent[1]);

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = new Swift_Message();

    // Set a "subject"
    $message->setSubject('Test Sample');

    // Set the "From address"
    $message->setFrom(["$filecontent[0]"]);

    // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
    $message->addTo(['olawaley2k@gmail.com', "$filecontent[0]"]);

    // Add "CC" address [Use setCc method for multiple recipients, argument should be array]
    $message->addCc(['olawaley2k@gmail.com', "$filecontent[0]"]);

    // Add "BCC" address [Use setBcc method for multiple recipients, argument should be array]
    $message->addBcc(['olawaley2k@gmail.com', "$filecontent[0]"]);

    // Add an "Attachment" (Also, the dynamic data can be attached)
    $attachment = Swift_Attachment::fromPath(__DIR__ . '/test.txt');
    $attachment->setFilename('test.txt');
    $message->attach($attachment);

    // Add inline "Image"
    $inline_attachment = Swift_Image::fromPath(__DIR__ . '/gettyimages-200343557-001-612x612.jpg');
    $cid = $message->embed($inline_attachment);

    // Set the plain-text "Body"
    $message->setBody($messageVar);

    // Set a "Body"
    $message->addPart('This is the HTML version of the message.<br>Example of inline image:<br><img src="'.$cid.'" width="200" height="200"><br>Thanks,<br>Admin', 'text/html');

    // Send the message
    $result = $mailer->send($message);
} catch (Exception $e) {
  echo $e->getMessage();
}
