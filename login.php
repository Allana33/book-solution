<?php

include 'classes/conexao.php';

if (empty($_POST['email_usuario']) || empty($_POST['senha_usuario'])) {
               
    header('Location: index');

    exit();

    }