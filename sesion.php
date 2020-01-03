<?php
    $post = "userLoginId=".$correo."&password=".$clave."&rememberMe=true&flow=websiteSignUp&mode=login&action=loginAction&withFields=rememberMe,nextPage,userLoginId,password,countryCode,countryIsoCode&authURL=".$token."&countryCode=+502&countryIsoCode=GT";

    $ch =   curl_init();
            curl_setopt($ch, CURLOPT_URL, $urlPrincipal);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
            curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);

    $rSesion = curl_exec($ch);

    if(strpos($rSesion, "Contraseña incorrecta") and !isset($status)){
        $status = "Correo o Clave Incorrecta";
    }