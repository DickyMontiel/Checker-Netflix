<?php 
    $cookie = date("m").date("d").date("H").date("i").".txt";

    $headers = array();
    $headers[] = "HTTP/1.1 302 Found";
    $headers[] = "Cache-Control: no-cache";
    $headers[] = "no-store Date: Thu, 18 Jun 2020 17:41:39 GMT";
    $headers[] = "Edge-Control: no-cache, no-store location: https://www.netflix.com/login";
    $headers[] = "Server: nq_website_nonmember-prod-release 3ac4f5eb-a062-4e63-b3c3-343bd32e2cee";
    $headers[] = "Set-Cookie: memclid=9d973587-c23c-46af-951d-5318b88c89b0; Max-Age=31536000; Expires=Fri, 18 Jun 2021 17:41:39 GMT; Path=/; Domain=.netflix.com";
    $headers[] = "Strict-Transport-Security: max-age=31536000";
    $headers[] = "Via: 1.1 i-0efbcceb65936bd6e (us-east-1)";
    $headers[] = "X-Content-Type-Options: nosniff";
    $headers[] = "X-Frame-Options: DENY";
    $headers[] = "X-Netflix.nfstatus: 1_1";
    $headers[] = "X-Netflix.proxy.execution-time: 27";
    $headers[] = "X-Originating-URL: https://www.netflix.com/login";
    $headers[] = "X-Xss-Protection: 1; mode=block; report=https://www.netflix.com/ichnaea/log/freeform/xssreport";
    $headers[] = "Connection: keep-alive HTTP/1.1 408 Request Timeout";
    $headers[] = "Server: nq_website_nonmember-prod-release 6567d7c9-057b-44d7-8b9e-c4455331e68f";
    $headers[] = "Set-Cookie: memclid=9d973587-c23c-46af-951d-5318b88c89b0; Max-Age=31536000; Expires=Fri, 18 Jun 2021 17:41:44 GMT; Path=/; Domain=.netflix.com";
    $headers[] = "Strict-Transport-Security: max-age=31536000";
    $headers[] = "Via: 1.1 i-0091b87dd59216a95 (us-east-1)";
    $headers[] = "X-Content-Type-Options: nosniff";
    $headers[] = "X-Netflix.nfstatus: 2_18";
    $headers[] = "X-Netflix.proxy.execution-time: 5000";
    $headers[] = "X-Originating-URL: https://www.netflix.com/login";
    $headers[] = "X-Xss-Protection: 1; mode=block; report=https://www.netflix.com/ichnaea/log/freeform/xssreport";
    $headers[] = "Connection: keep-alive";