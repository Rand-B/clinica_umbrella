<div class="container">
        <h2> Salvar Paciente </h2> 
        <form action="src/paciente/salvar.php" method="post">

        <div class="form-group">
            <label for="input_nome">Nome</label>
            <input required class="form-control" type="text" name="nome" id="input_nome">
        </div>

        <div class="form-group">
            <label for="input_data">Data de Nascimento</label>
            <input required class="form-control" type="date" name="data_nascimento" id="input_data_nascimento">
        </div>

        <div class="form-group">
            <label for="input_cpf">CPF</label>
            <input required class="form-control" type="text" name="cpf" id="input_cpf">
        </div>

            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?> </span>
            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn btn-sucess" type="submit" value="Salvar">
        </form>
    </div>
</div>