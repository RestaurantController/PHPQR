# PHPQR
Encode a text easily made with Google's API

This plugin for PHP that is easy to use makes creating QR codes easier. It sends a HTTP request to 'googleapis.com' to get a QR code.
<b>Note: This plugin hasn't been set up yet.</b>

# Getting Started

Download the lastest version and unpack it.

Write this code to include the library:<br>
<b>require 'path/to/phpqr/class.php';</b>
<br>
And then you can use the library in the PHP code.
<br>
<b>Install with Composer</b><br>
<b>composer require restaurantcontroller/phpqr 1.0<b><br>
  Replace 1.0 with the version
<br>
  Then, load the class located at vendor/restaurantcontroller/phpqr/class.php.
<br>
For more, see the docs in the site.
<b>Docs are coming soon</b>

<b>Generating a QR Code<b>
  To generate a QR code, create an PHPQR instance.
  
And then, call generateQRWithArray($size, $raw) function to get the QR data as an array.The raw variable is your text.
<b>What does it return in an array?</b>
<br>
It returns "imgUrl" as the QR code URL and "htmlCode" as the html code for getting the code in your HTML page.
<br>
Size example: 200x200
<br>
  Size data: widthxheight
