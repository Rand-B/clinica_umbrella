<?php

$conexao = mysqli_connect('localhost', 'root', 'aluno', 'umbrella');

if (!$conexao) {
    die (mysqli_error($conexao));
}