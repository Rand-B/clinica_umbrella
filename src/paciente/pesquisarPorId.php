<?php

 // conexão com o BD
 require 'src/conexao-com-banco.php';

 // pegar ID
 $pacienteId = isset($_GET['id']) ? $_GET['id'] : 0;

 // pesquisar todos os pacientes
 $sql = "SELECT * FROM `paciente` WHERE id = $pacienteId;";

 $paciente = mysqli_query($conexao, $sql);
 $paciente = mysqli_fetch_assoc($paciente);

 if (!$paciente) {
     $paciente = array();
     $paciente['nome'] = "";
     $paciente['data_nascimento'] = "";
     $paciente['cpf'] = "";
 }