<?php if (isset($_SESSION['usuario_fez_login'])) { ?>
<h1> Bem-vindo, <?php echo $_SESSION['nome_do_usuario'] ?> </h1>
<?php } else { ?>
    <h1> Bem-vindo à Clínica Umbrella!!</h1>
<?php } ?>
<hr>
<div class="center">
    <img id="img-home" src="img/umbrella.png" alt="Logo">
    
</div>

<script>
    let deg = 0;
    let img_home = document.getElementById("img-home")

    // Faz o javascript esperar por uma certa quantidade de milisegundos
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }


    (async function girarImagem() {
        img_home.style.transform = `rotate(${deg}deg)`
        deg = deg >= 360 ? 0 : deg + 1
        await sleep(23)
        girarImagem()
    })()
</script>