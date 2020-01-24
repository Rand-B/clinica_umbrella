<?php

 // conexão com o BD
 require 'src/conexao-com-banco.php';

 // pegar ID
 $medicoId = isset($_GET['id']) ? $_GET['id'] : 0;

 // pesquisar todos os medicos
 $sql = "SELECT * FROM `medico` WHERE id = $medicoId;";

 $medico = mysqli_query($conexao, $sql);
 $medico = mysqli_fetch_assoc($medico);

 if (!$medico) {
     $medico = array();
     $medico['nome'] = "";
     $medico['area'] = "";
     $medico['email'] = "";
 }