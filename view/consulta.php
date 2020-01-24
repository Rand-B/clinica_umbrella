<?php 

require 'src/consulta/listar.php';
    ?>

    <br><br><br>
    <table class="table table-bordered table-hover table-striped" style="width: 100%"  id="tabela-consultas">
        <caption>
        <a class="btn btn-sucess" href="?pagina=salvarConsulta">Cadastrar</a>
        </caption>
        <thead>
        <tr>
            <th>Data de Agendamento</th>
            <th>Data de Consulta</th>
            <th>Paciente</th>
            <th>Médico</th>
        </tr>
        </thead>
        <body>
    
    <?php while ($linha = mysqli_fetch_assoc($tabelaConsultas)) { ?>

    <tr>
        <td><?= $linha['data_agendamento'] ?></td>
        <td><?= $linha['data_consulta'] ?></td>
        <td><?= $linha['nome_paciente'] ?></td>
        <td><?= $linha['nome_medico'] ?></td>
        <td>
            <a href="?pagina=salvarConsulta&id=<?= $linha['id'] ?>">Editar</a>
            |
            <a href="src/consulta/excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
        </td>
    </tr>

<?php } ?>
    </body>
</table>