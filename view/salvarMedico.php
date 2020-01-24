<?php require 'src/medico/pesquisarPorId.php' ?>
<div class="container">
        <h2> Salvar Médico </h2> 
        <form action="src/medico/salvar.php<?= isset($_GET['id']) ? '?' . $_GET['id'] : ''?>" method="post">

        <?php if (isset($_GET['id'])) { ?>
            <input type="hidden" name="id" value="<?= $_GET['id']?>">
        <?php } ?>
        
        <div class="form-group">
            <label for="input_nome">Nome</label>
            <input value="<?= $medico['nome'] ?>" required class="form-control" type="text" name="nome" id="input_nome">
        </div>

        <div class="form-group">
            <label for="input_data">Área</label>
            <!-- <input value=""required class="form-control" type="" name="area" id="input_area"> -->
            <select value="<?= $medico['area'] ?>" required class="form-control" name="area" id="input_area">
                <option value="Ortopedia">Ortopedia</option>
                <option value="Dermatologia">Dermatologia</option>
                <option value="Endocrinologia">Endocrinologia</option>
                <option value="Hematologia">Hematologia</option>
                <option value="Oftalmologia">Oftalmologia</option>
            </select>
        </div>

        <div class="form-group">
            <label for="input_cpf">E-mail</label>
            <input value="<?= $medico['email'] ?>"required class="form-control" type="email" name="email" id="input_email">
        </div>

            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?> </span>
            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn btn-sucess" type="submit" value="Salvar">
        </form>
    </div>
</div>