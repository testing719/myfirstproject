<?php

$result = print file_get_contents('https://restapi.surveygizmo.com/v4/survey?api_token=8538aa08a2d10a6bdb18eaa0d891978c6013465e09ee7fa2b3&api_token_secret=A9EaQg3W2sHwg');
die;
?>

<?php
  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'https://restapi.surveygizmo.com/v4/survey?api_token=8538aa08a2d10a6bdb18eaa0d891978c6013465e09ee7fa2b3&api_token_secret=A9EaQg3W2sHwg');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $buffer = curl_exec($curl_handle);
  curl_close($curl_handle);

$b=json_decode($buffer);

$i=0;
while($b->{'data'}[$i])
{
    print_r($b->{'data'}[$i]->{'title'});
    echo "<br />";
    $i++;
}
?>