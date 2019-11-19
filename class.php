<?php
class PHPQR {
    public function generateQRWithArray($size, $raw){
        if($raw == "" || $size == ""){
            trigger_error("PHPQR Error: Cannot get data");
        }
        else {
            $init = http_build_query(array(
                "cht" => "qr",
                "chs" => $size,
                "chl" => $raw,
                "choe" => "UTF-8"
            ));
            $url = "https://chart.googleapis.com/chart?".$init;
            $returns = array(
                "imgUrl" => $url,
                "htmlCode" => "<img src='".$url."'>"
            );
            return $returns;
        }
    }
    public function generateOnlyImageUrl($size, $raw){
        if($raw == "" || $size == ""){
            trigger_error("PHPQR Error: Cannot get data");
        }
        else {
            $init = http_build_query(array(
                "cht" => "qr",
                "chs" => $size,
                "chl" => $raw,
                "choe" => "UTF-8"
            ));
            $url = "https://chart.googleapis.com/chart?".$init;
            return $url;
    }
}
}
?>
