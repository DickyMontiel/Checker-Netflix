<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Netflix Checker</title>
</head>
<body>
    <center>
        <textarea name="" id="accounts" style="width: 100%; height: 300px;"></textarea>
        <br><br>
        <button onclick="parse_accounts()" class="bt">Checkear</button>
        <br><br><br><hr><br>
        
        <table id="resultado">
            <tr class="principalTR">
                <td class="principalTD">Correo</td>
                <td class="principalTD">Clave</td>
                <td class="principalTD">Status</td>
            </tr>
        </table>
    </center>
    <script src="combo.js"></script>
</body>
</html>