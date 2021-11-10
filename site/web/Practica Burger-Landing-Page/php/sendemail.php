<?php

$to = trim($_POST["email"]);
$subject = "This is a test HTML email";

$message = "
<html>
<head>
<title>This is a test HTML email</title>
</head>
<body>
<p>Hi, ".trim($_POST["name"]).". Your request is being processed. Thank you for contact us.</p>
</body>
</html>
";

// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= 'From: <info@example.com>' . "\r\n";
$headers .= 'Cc: sales@example.com' . "\r\n";

echo ("to: ".$to."\n");
echo ("subject: ".$subject."\n");
echo ("mensaje: ".$message."\n");

mail($to,$subject,$message,$headers);
?>