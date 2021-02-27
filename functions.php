<?php
/* Functions.php: PHPQR Functions
This file is for only integrating PHPQR functions to your project.
Copyright 2020 okyanusoz.
*/
function generateQRWithArray($size = "200x200", $raw, $encoding = "UTF-8"){
    if($raw == "" || $size == ""){
        trigger_error("PHPQR Error: Cannot get data", E_USER_ERROR);
    }
    else {
        $init = http_build_query(array(
            "cht" => "qr",
            "chs" => $size,
            "chl" => $raw,
            "choe" => $encoding
        ));
        $url = "https://chart.googleapis.com/chart?".$init;
        $returns = array(
            "imgUrl" => $url,
            "htmlCode" => "<img src='".$url."'>"
        );
        return $returns;
    }
}
function generateOnlyImageUrl($size = "200x200", $raw, $encoding = "UTF-8"){
    if($raw == "" || $size == ""){
        trigger_error("PHPQR Error: Cannot get data", E_USER_ERROR);
    }
    else {
        $init = http_build_query(array(
            "cht" => "qr",
            "chs" => $size,
            "chl" => $raw,
            "choe" => $encoding
        ));
        $url = "https://chart.googleapis.com/chart?".$init;
        return $url;
}
}
?>
