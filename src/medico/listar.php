<?php 

    // conexão com o banco
    require 'src/conexao-com-banco.php';

    // pesquisar todos os medicos
    $sql = 'SELECT * FROM `medico`;';

    $tabelaMedicos = mysqli_query($conexao, $sql);