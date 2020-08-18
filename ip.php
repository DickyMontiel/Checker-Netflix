<?php
   $ip = "190.148.52.56";

    $ch =   curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://api.ipstack.com/".$ip."?access_key=7d74beceeae0ba004b2e06d89a3af8d4");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $resultado = curl_exec($ch);

    $response = json_decode($resultado, true);

    print_r($response['country_code']);
