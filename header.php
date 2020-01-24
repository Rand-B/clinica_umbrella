<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar sticked-top">
    <div class="container cabeçalho">
        <a href="?pagina=home">
            <img id="img-logo" src="img/umbrella.png" alt="Logo">
            <span id="nome-logo">Clínica Umbrella</span>
        </a>
        <div class="menu">
            <ul>
                <?php if (isset($_SESSION['usuario_fez_login'])) { ?>
                    
                    <a href="?pagina=consultas">
                    <li class="botao">
                        Consultas
                    </li>
            
                 </a>

                 <a href="?pagina=pacientes">
                    <li class="botao">
                        Pacientes
                    </li>
            
                 </a>

                 <a href="?pagina=medicos">
                    <li class="botao">
                        Médicos
                    </li>
                    
                 </a>

                 <a href="sair.php"> Logoff </a>

                <?php } else { ?>
                <a href="?pagina=login">
                    <li class="botao">
                        Fazer login
                    </li>
            
                 </a>

                <?php } ?>

            </ul>
        </div>
        
    </div>
    </nav>

</header>   
