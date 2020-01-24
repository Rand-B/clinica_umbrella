<?php

    // conexão com o BD
    require '../conexao-com-banco.php';

    //receber dados POST
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $area = isset($_POST['area']) ? $_POST['area'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;

    // validar dados
    

    // se dados estiverem válidos
    if (!empty($nome) && !empty($area) && !empty($email)) {

        // se o ID foi enviado...
        if ($id > 0) {

            // atualizar
            $sql = "UPDATE `medico` SET
                        nome = '$nome',
                        area = '$area',
                        email = '$email'
                    WHERE id = $id;";
        // se não...
        } else {

            // inserir
            $sql = "INSERT INTO `medico`
                        (nome, area, email)
                        VALUES ('$nome', '$area', '$email');";
            }

        // faz a query
        mysqli_query($conexao, $sql);
        
        // retorna para página medicos
        header('location: http://localhost/clinica_umbrella/index.php?pagina=medicos');
    // se não... 
    } else {

        // retornar para página de cadastro
        header('location: http://localhost/clinica_umbrella/index.php?pagina=salvarMedico&err= Dados inválidos');
    }
    ?>