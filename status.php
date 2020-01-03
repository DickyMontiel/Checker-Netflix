<?php
    $ch =   curl_init();
            curl_setopt($ch, CURLOPT_URL, $urlCuenta);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
            curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);

    $rStatus = curl_exec($ch);

    if(strpos($rStatus, "<b>Estándar</b>")){
        $status = "Estándar";
    }else if(strpos($rStatus, "<b>Premium</b>")){
        $status = "Premium";
    }else if(strpos($rStatus, "<b>Básico</b>")){
        $status = "Premium";
    }else{
        if(!isset($status)){
            $status = "Free";
        }
    }

