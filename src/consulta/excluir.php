<?php

    // conexão com o banco
    require '../conexao-com-banco.php';

    // pegar ID
    $consultaId = isset($_GET['id']) ? $_GET['id'] : 0;

    // tentar excluir do BD
    $sql = "DELETE FROM `consulta` WHERE id = $consultaId;";
    mysqli_query($conexao, $sql);

    // retornar para a página pacientes
    header('location: http://localhost/clinica_umbrella/index.php?pagina=consultas');