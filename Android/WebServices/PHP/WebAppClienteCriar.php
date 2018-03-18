<!DOCTYPE html>
<html>
    <head>
        <title>Pagina web cliente para criar clientes</title>
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
                                url: "http://aribeiro.atwebpages.com/ServerClienteCriar.php",
                                data: dataToSend, // post data || get data
                                success: function(result) {
                                    //console.log(result.content);
                                    $('.status').append(result.status);
                                    $('.content').append(result.content);
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
<?php 
include "WebAppMenu.php";
?>
<body>
<div class="status"></div>
<div class="content"></div>

<form action="" method="post" name="myform">
  <br>Username<br><input name="username" />
  <br>Password<br><input type="password" name="password" />
  <br>Nome<br><input name="nome" />
  <br>NIF<br><input name="nif" />
  <br>Morada<br><input name="morada" />
  <br><input id="submit" type="button" name="submit" value="Criar">
</form>

</body>

</html>