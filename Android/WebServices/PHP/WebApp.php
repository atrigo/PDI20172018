<?php 
session_start();
?>
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
               
        $(document).ready(function() {
        
                function createFieldArray(formArray) {
                        var dataArray = {};
                        for (var i = 0; i < formArray.length; i++){
                                dataArray[formArray[i]['name']] = formArray[i]['value'];
                        }
                        return dataArray;
                }

                $("#submit").on('click', function(){
                       var form = $(document.myform);
                       //console.log(createFieldArray(form.serializeArray()));               
                       var dataToSend = JSON.stringify(createFieldArray(form.serializeArray()));
                       
                       $.ajax({
                                type: "POST",
                                url: "http://aribeiro.atwebpages.com/ServerClienteAutenticar.php",
                                data: dataToSend, // post data || get data
                                success: function(result) {
                                    if (result.status==0){
                                            alert(result.content);
                                    }
                                    else {
                                            console.log(result.content);
                                            $.post('/WebAppSetSession.php', { username: result.content });
                                            alert("Login efetuado com sucesso!");
                                            location.reload();
                                    }
                                },
                                error: function(xhr, resp, text) {
                                    alert("Erro: " + xhr.status);
                                },
                                dataType: "json",
                                contentType : "application/json"
                      });
              
                });
       
        });        
  
        </script>
</head>

<body>
<?php
include "WebAppMenu.php";

if (!$_SESSION["username"]) {
?>
<div id="login">
<br>
<form name="myform">
Login -> Username <input type="text" name="username"> 
Password <input type="password" name="password">
<input id="submit" type="button" name="submit" value="Entrar">
</form>
<br>Ainda não tem conta? -> <a href="WebAppClienteCriar.php">Criar conta cliente</a>
<br>
</div>
<?php }?>
<div id="user_loggedin" <?php if (!$_SESSION["username"]) echo 'style="display:none;"' ?> >
<br>
Selecione uma das opções do menu.
</div>
</body>
</html>