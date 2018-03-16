<!DOCTYPE html>
<html>
    <head>
        <title>Pagina web cliente para listar telemoveis</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
        
        $(document).ready(function() {
                $.ajax({
                        url: "http://aribeiro.atwebpages.com/ListarTelemoveis.php"
                       }).then(function(data) {
                
                $('.status').append(data.status);
                $('.content').append(data.content);
                
                
                var t = data.content.telemoveis;

                for(var i in t)
                {

                        $('#myTable > tbody:last-child').append('<tr><td>'+t[i].id+'</td><td>'+t[i].marca+'</td><td>'+t[i].modelo+'</td><td>'+t[i].preco+'</td><td>'+t[i].descricao+'</td><td><img width="32" src="'+t[i].urlimagem+'"></td></tr>');

                 }

      
            });
        });        
  
        </script>
    </head>

    <body>

<div class="status"></div>
<div class="content"></div>

<table id="myTable">
<tr>
<th>Id</th>
<th>Marca</th>
<th>Modelo</th>
<th>Preco</th>
<th>Descricao</th>
<th>Foto</th>
</tr>            
</table>

</body>
</html>




