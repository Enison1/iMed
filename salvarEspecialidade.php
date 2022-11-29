<?php
  include_once "funcao.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $especialidade = array();
  // variavel global $_POST
  $especialidade['id'] = $_POST['id'];
  $especialidade['descricao'] = $_POST['descricao'];

  if ($especialidade['id'] == 0) {
    salvarEspecialidade($especialidade);
  } else {
    alterarEspecialidade($especialidade);
  }
  setcookie("mensagem", "{$especialidade['descricao']} foi salva");

  // pede para o navegador chamar o recurso medicos.php
  header('location: especialidades.php');
 ?>
