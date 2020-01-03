<?php 
    $cookie = date("m").date("d").date("H").date("i").".txt";

    $headers = array();
    $headers[] = "Origin: https://www.netflix.com/";
    $headers[] = "Accept-Language: es-ES,es;q=0.8,en-US;q=0.6,en;q=0.4";
    $headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36";
    $headers[] = "Referer: https://www.netflix.com/";
    $headers[] = "Connection: keep-alive";