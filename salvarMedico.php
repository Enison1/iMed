<?php
  include_once "funcao.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $medico = array();
  // variavel global $_POST
  $medico['id'] = $_POST['id'];
  $medico['nome'] = $_POST['nome'];
  $medico['email'] = $_POST['email'];
  $medico['especialidade_id'] = $_POST['especialidade_id'];
  $medico['data_aniversario'] = $_POST['data_aniversario'];
  $medico['foto'] = $_POST['foto'];

  $arquivo = $_FILES['arquivo'];
  if ($arquivo['name']!="") {
    $arquivoTemporario = $arquivo['tmp_name'];
    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
    $nomeArquivo = sha1(time()).".".$extensao;
    move_uploaded_file($arquivoTemporario, "imagens/".$nomeArquivo);
    if ($medico['foto'] != "") {
      unlink('imagens/'.$medico['foto']);
    }
    $medico['foto'] = $nomeArquivo;
  }

  if ($medico['id'] == 0) {
    salvarMedico($medico);
  } else {
    alterarMedico($medico);
  }
  setcookie("mensagem", "{$medico['nome']} foi salvo");
  // pede para o navegador chamar o recurso medicos.php
  header('location: medicos.php');
 ?>
