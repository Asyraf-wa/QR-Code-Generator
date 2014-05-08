<?php
if(isset($_REQUEST['content'])){
    //capture from the form
    $qr_size          = $_REQUEST['size'];
    $qr_content       = $_REQUEST['content'];
    $qr_correction    = strtoupper($_REQUEST['correction']);
    $qr_encoding      = $_REQUEST['encoding'];
     
    //form google chart api link
    //$qrImageUrl = "https://chart.googleapis.com/chart?cht=qr&chs=$qr_size&chl=$qr_content&choe=$qr_encoding&chld=$qr_correction";
     $qrImageUrl = "https://chart.googleapis.com/chart?cht=qr&chs=$qr_size&chl=$qr_content&choe=$qr_encoding&chld=$qr_correction";
    //print out the image
    echo '<img src="'.$qrImageUrl.'">';
}
?>
