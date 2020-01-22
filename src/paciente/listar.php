<?php 

    // conexão com o banco
    require 'src/conexao-com-banco.php';

    // pesquisar todos os paciente
    $sql = 'SELECT * FROM `paciente`;';

    $tabelaPacientes = mysqli_query($conexao, $sql);