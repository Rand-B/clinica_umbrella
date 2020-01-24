<?php 

    require 'src/consulta/pesquisarPorId.php';
    require 'src/paciente/listar.php';
    require 'src/medico/listar.php';
?>

<div class="container">
        <h2> Salvar Consulta </h2> 
        <form action="src/consulta/salvar.php<?= isset($_GET['id']) ? '?' . $_GET['id'] : ''?>" method="post">

        <?php if (isset($_GET['id'])) { ?>
            <input type="hidden" name="id" value="<?= $_GET['id']?>">
        <?php } ?>
        
        <div class="form-group">
            <label for="input_data_consulta">Data de Consulta</label>
            <input value="<?= $consulta['data_consulta'] ?>" required class="form-control" type="date" name="data_consulta" id="input_data_consulta">
        </div>

        <div class="form-group">
            <label for="input_paciente">Paciente</label>
            <select class="form-control" name="id_paciente" id="select_paciente">
                <?php while ($paciente = mysqli_fetch_assoc($tabelaPacientes)) { ?>
                    <option value="<?= $paciente['id']?>"><?= $paciente['nome'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="input_medico">Médico</label>
            <select class="form-control" name="id_medico" id="select_medico">
                <?php while ($medico = mysqli_fetch_assoc($tabelaMedicos)) { ?>
                    <option value="<?= $medico['id']?>"><?= $medico['nome'] ?></option>
                <?php } ?>
            </select>
        </div>

            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?> </span>
            <?php } ?>

            <input style="float: right; margin-top: 20px" class="btn btn-sucess" type="submit" value="Salvar">
        </form>
    </div>
</div>