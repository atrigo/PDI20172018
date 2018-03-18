<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pagina web cliente para ver os dados do cliente</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
        
        $(document).ready(function() {
                $.ajax({
                        url: "http://aribeiro.atwebpages.com/ServerClientePesquisarPorUsername.php?username=<?php echo $_SESSION['username'];?>"
                       }).then(function(data) {
                
                $('.status').append(data.status);
                $('.content').append(data.content);
                
                
                var t = data.content.cliente;
                
                console.log(data.content);

                for(var i in t)
                {

                        $('#myTable > tbody:last-child').append('<tr><td>'+t[i].id+'</td><td>'+t[i].username+'</td><td>'+t[i].nome+'</td><td>'+t[i].nif+'</td><td>'+t[i].morada+'</td><td></tr>');

                 }

      
            });
        });        
  
        </script>
    </head>
    <body>
    
    <?php
include "WebAppMenu.php";
?>

<br>
<div class="status"></div>
<div class="content"></div>
<br>
<table id="myTable">
<tr>
<th>Id</th>
<th>Username</th>
<th>Nome</th>
<th>NIF</th>
<th>Morada</th>
</tr>            
</table>

</body>
</html>