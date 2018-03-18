<?php

//Importar o ficheiro com a ligacao a BD
//A ligacao a BD devera ser colocada na variavel conn

require 'Connection.php';

if (!$_GET['username']){
        $returnArray = array("status" => 0, "content"=> "Utilizador inexistente!");
        header("Access-Control-Allow-Origin: *");
        header('Content-type: application/json');
        echo json_encode($returnArray);
        exit();
}

//Query a base de dados
$sql1 = "SELECT * from `Cliente` where username = '".$_GET['username']."'";

//echo $sql1;
//Executa o query na base de dados
if ($result1 = $conn->query($sql1)){
    //Para cada linha da base de dados
    while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
           $resultArray[] = array("id" => $row1['ID'], "username" => $row1['Username'], 'nome' => $row1['Nome'], 
           'nif' => $row1['NIF'], 'morada' => $row1['Morada']); 
    }
}

$returnArray = array("status" => 1, "content"=> array("cliente"=> $resultArray));
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');
echo json_encode($returnArray);

?>