<?php
  include_once "funcao.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

// variavel global que contem informacoes do método GET
  $id = $_GET['id'];

  $medico = getMedico($id);
  excluirMedico($id);
  setcookie("mensagem", "Medico {$medico['nome']} foi excluído");
  header('location: medicos.php');
 ?>
