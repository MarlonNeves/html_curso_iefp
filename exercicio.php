<?php
  if(isset($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['senha'])){
    $nome = htmlspecialchars($_POST['nome']);
    $sobrenome = htmlspecialchars($_POST['sobrenome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);

    echo "Olá, $nome $sobrenome! Seu email é $email.";
  }
?>