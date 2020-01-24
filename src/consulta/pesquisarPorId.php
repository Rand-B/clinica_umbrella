<?php

 // conexão com o BD
 require 'src/conexao-com-banco.php';

 // pegar ID
 $consultaId = isset($_GET['id']) ? $_GET['id'] : 0;

 // pesquisar todos os medicos
 $sql = "SELECT * FROM `medico` WHERE id = $consultaId;";

 $consulta = mysqli_query($conexao, $sql);
 $consulta = mysqli_fetch_assoc($consulta);

 if (!$consulta) {
     $consulta = array();
     $consulta['data_consulta'] = "";
 }