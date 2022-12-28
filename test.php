<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://open-api.coinglass.com/public/v2/long_short?time_type=h1&symbol=BTC',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    '38e7db7991494a988883b547e90f834b: '
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$output = json_decode($response);
    
$exchanger = ($output->data[0]->list[0]->exchangeName);
$short = ($output->data[0]->list[0]->shortRate);
$long = ($output->data[0]->list[0]->longRate);

?>

<?php echo $exchanger ?> <br />Long = <?php echo $long ?>% Vs Short = <?php echo $short ?>%