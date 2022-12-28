<?php
include "test.php";
 
define('BOT_TOKEN', '5895604345:AAFFNFvzYOCa80RI2pO-U073aoUluAeH9CA');
define('CHAT_ID','-696246647');


function kirimTelegram($pesan) {
    $pesan = json_encode($pesan);
    $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

kirimTelegram("Crypto Short & Long \n\n $exchanger = $long % VS $short %");

?>