<?php include_once 'header.php'; ?>

<div class="body-container">
    <?php

    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

    switch ($pagina) {
        case 'login':
            include_once 'view/login.php';
            break;
        case 'home':
            include_once 'view/home.php';
            break;
        default:
            include_once 'view/home.php';
    }
    ?>
</div>

<?php include_once 'footer.php'; ?>