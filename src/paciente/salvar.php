<?php

    // conexão com o BD
    require '../conexao-com-banco.php';

    //receber dados POST
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;

    // validar dados
    

    // se dados estiverem válidos...
    if (!empty($nome) && !empty($data_nascimento) && !empty($cpf)) {

        // se o ID foi enviado...
        if ($id > 0) {

            // atualizar
            $sql = "UPDATE `paciente` SET
                        nome = '$nome',
                        data_nascimento = '$data_nascimento',
                        cpf = '$cpf'
                    WHERE id = $id;";
        // se não...
        } else {

            // inserir
            $sql = "INSERT INTO `paciente`
                        (nome, data_nascimento, cpf)
                        VALUES ('$nome', '$data_nascimento', '$cpf');";
            }

        // faz a query
        mysqli_query($conexao, $sql);
        
        // retorna para página pacientes
        header('location: http://localhost/clinica_umbrella/index.php?pagina=pacientes');
    // se não... 
    } else {

        // retornar para página de cadastro
        header('location: http://localhost/clinica_umbrella/index.php?pagina=salvarPaciente&err= Dados inválidos');
    }
    ?>