<?php

    // conexão com o banco
    require '../conexao-com-banco.php';

    // pegar ID
    $medicoId = isset($_GET['id']) ? $_GET['id'] : 0;

    // tentar excluir do BD
    $sql = "DELETE FROM `medico` WHERE id = $medicoId;";
    mysqli_query($conexao, $sql);

    // retornar para a página pacientes
    header('location: http://localhost/clinica_umbrella/index.php?pagina=medicos');