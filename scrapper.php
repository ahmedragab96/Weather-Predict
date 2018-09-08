<?php 

$city = $_GET['city'];

$city = str_replace(" ","",$city);

$url = "https://www.weather-forecast.com/locations/".$city."/forecasts/latest";


try{
    $contents = file_get_contents($url);

    preg_match('/class="phrase">(.*?)</s', $contents , $matches);

    echo $matches[1];
}
catch(Exception $e){
    echo($e);
}
?>