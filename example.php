<?php
require 'class.php';
echo "<h1>PHPQR Example</h1>";
// Example with array
$qr = new PHPQR();
$response = $qr->generateQRWithArray("200x200", "Hello World! This is my first QR code html code created with PHPQR");
echo "Example with array: QR Code";
echo $response["htmlCode"];
echo "<br>";
// Example with only the image url
$response2 = $qr->generateOnlyImageUrl("200x200", "Hello World! This is my first QR code image url created with PHPQR");
echo "Example with only image url: Image Url<br>";
echo $response2;
?>
