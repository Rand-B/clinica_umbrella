<?php

    // conexão com o banco
    require '../conexao-com-banco.php';

    // pegar ID
    $pacienteId = isset($_GET['id']) ? $_GET['id'] : 0;

    // tentar excluir do BD
    $sql = "DELETE FROM `paciente` WHERE id = $pacienteId;";
    mysqli_query($conexao, $sql);

    // retornar para a página pacientes
    header('location: http://localhost/clinica_umbrella/index.php?pagina=pacientes');