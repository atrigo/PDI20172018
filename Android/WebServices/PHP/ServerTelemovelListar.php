<?php

//Importar o ficheiro com a ligacao a BD
//A ligacao a BD devera ser colocada na variavel conn

require 'Connection.php';

//Query a base de dados
$sql1 = "SELECT * from `Telemovel` as t";

//echo $sql1;
//Executa o query na base de dados
if ($result1 = $conn->query($sql1)){
    //Para cada linha da base de dados
    while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
           $resultArray[] = array("id" => $row1['ID'], "marca" => $row1['Marca'], 'modelo' => $row1['Modelo'], 
           'preco' => $row1['Preco'], 'descricao' => $row1['Descricao'], 'urlimagem' => $row1['ImagemURL']); 
    }
}

$returnArray = array("status" => 1, "content"=> array("telemoveis"=> $resultArray));
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');
echo json_encode($returnArray);

?>