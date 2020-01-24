<?php require 'src/paciente/listar.php'; ?>

    <br><br><br>
    <table class="table table-bordered table-hover table-striped" style="width: 100%"  id="tabela-pacientes">
        <caption>
        <a class="btn btn-sucess" href="?pagina=salvarPaciente">Cadastrar</a>
        </caption>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
        </thead>
        <body>
    
    <?php while ($linha = mysqli_fetch_assoc($tabelaPacientes)) { ?>

    <tr>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['data_nascimento'] ?></td>
        <td><?= $linha['cpf'] ?></td>
        <td>
            <a href="?pagina=salvarPaciente&id=<?= $linha['id'] ?>">Editar</a>
            |
            <a href="src/paciente/excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
        </td>
    </tr>

<?php } ?>
    </body>
</table>