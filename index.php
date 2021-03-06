<?php session_start();

include_once 'header.php'; ?>

<div class="body-container container">
    <?php

    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

    switch ($pagina) {
        case 'login':
            include_once 'view/login.php';
            break;
        case 'home':
            include_once 'view/home.php';
            break;
        case 'pacientes':
            include_once 'view/paciente.php';
            break;
        case 'salvarPaciente':
            include_once 'view/salvarPaciente.php';
            break;
        case 'medicos':
            include_once 'view/medico.php';
            break;
        case 'salvarMedico':
            include_once 'view/salvarMedico.php';
            break;
        case 'consultas':
            include_once 'view/consulta.php';
            break;
        case 'salvarConsulta':
            include_once 'view/salvarConsulta.php';
        default:
            include_once 'view/home.php';
    }
    ?>
</div>

<?php include_once 'footer.php'; ?>