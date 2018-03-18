<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pagina web cliente para listar telemoveis</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
        
        $(document).ready(function() {
                $.ajax({
                        url: "http://aribeiro.atwebpages.com/ServerTelemovelListar.php"
                       }).then(function(data) {
                
                $('.status').append(data.status);
                $('.content').append(data.content);
                
                
                var t = data.content.telemoveis;

                for(var i in t)
                {

                        $('#myTable > tbody:last-child').append('<tr><td>'+t[i].id+'</td><td>'+t[i].marca+'</td><td>'+t[i].modelo+'</td><td>'+t[i].preco+'</td><td>'+t[i].descricao+'</td><td><img width="32" src="'+t[i].urlimagem+'"></td><td><a href="WebAppTelemovelComprar.php?id='+t[i].id+'">Comprar</a></td></tr>');

                 }

      
            });
        });        
  
        </script>
    </head>
<?php
include "WebAppMenu.php";
?>
    <body>
<br>
<div class="status"></div>
<div class="content"></div>
<br>
<table id="myTable">
<tr>
<th>Id</th>
<th>Marca</th>
<th>Modelo</th>
<th>Preco</th>
<th>Descricao</th>
<th>Foto</th>
<th>Acao</th>
</tr>            
</table>

</body>
</html>




