<?php
if( $curl = curl_init() ) {
    $ip = $_SERVER["REMOTE_ADDR"];
    curl_setopt($curl, CURLOPT_URL, 'http://ip-whois.net/ip_geo.php?ip='.$ip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    $matches = array();
    $country = preg_match_all("/Страна: (.*)/i", $out, $matches);
    print_r($matches[1][1]);
    curl_close($curl);
}
?>