<?php require 'src/medico/listar.php'; ?>

    <br><br><br>
    <table class="table table-bordered table-hover table-striped" style="width: 100%"  id="tabela-medicos">
        <caption>
        <a class="btn btn-sucess" href="?pagina=salvarMedico">Cadastrar</a>
        </caption>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Área</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        </thead>
        <body>
    
    <?php while ($linha = mysqli_fetch_assoc($tabelaMedicos)) { ?>

    <tr>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['area'] ?></td>
        <td><?= $linha['email'] ?></td>
        <td>
            <a href="?pagina=salvarMedico&id=<?= $linha['id'] ?>">Editar</a>
            |
            <a href="src/medico/excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
        </td>
    </tr>

<?php } ?>
    </body>
</table>