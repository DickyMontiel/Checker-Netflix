<?php
    $ch =   curl_init();
            curl_setopt($ch, CURLOPT_URL, $urlPrincipal);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
            curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);

    $rPrincipal = curl_exec($ch);

    $strpos = strpos($rPrincipal, '<input type="hidden" name="authURL" value="');
    $token = substr($rPrincipal, $strpos+43, 42);

    if(strpos($rPrincipal, "Netflix Site Error")){
        $status = "No se pudo ingresar con este usuario";
    }else{
        require("sesion.php");
    }