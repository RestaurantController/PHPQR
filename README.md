# ARCHIVED

PHPQR is archived and no longer maintained.

Use the Chart API directly. See https://developers.google.com/chart/infographics/docs/qr_codes.

*Or, even better, use a QR code library for PHP*.

If you are still using PHPQR, I recommend you to fork this repo.

# PHPQR
Encode a text easily made with Google's API

This plugin for PHP that is easy to use makes creating QR codes easier. It sends a HTTP request to 'googleapis.com' to get a QR code.

# Getting Started

Download the lastest version and unpack it.

Write this code to include the library:<br>
<b>require 'path/to/phpqr/class.php';</b>
<br>
And then you can use the library in the PHP code.
<br>
<b>Install with Composer</b><br>
<b>composer require restaurantcontroller/phpqr dev-master<b><br>
<br>
  Then, call the class
  <br>
  <code>require 'path/to/vendor/restaurantcontroller/phpqr/class.php';</code>
<br>
<b>Docs are coming soon</b>

<b>Generating a QR Code<b>
  To generate a QR code, create an PHPQR instance.
  
And then, call `generateQRWithArray($size, $raw)` function to get the QR data as an array.The raw variable is your text.
<b>What does it return in an array?</b>
<br>
It returns "imgUrl" as the QR code URL and "htmlCode" as the html code for getting the code in your HTML page.
<br>
Size example: 200x200
<br>
  Size data: widthxheight


<br>
<h1>Report An Issue</h1>


Please if you have a problem post it in Issues in GitHub. We will help you.
