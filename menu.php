<?php
include_once "funcao.php";
session_start();
if (!isset($_SESSION['usuario'])) {
  header("location: frmLogin.php");
  exit(0);
}

?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="medicos.php">MEDICO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="especialidades.php">EPECIALIDADE</a>
        </li>
        <li class="nav-item" style="position: right;">
          <a class="nav-link active" aria-current="page" href="index.php">USUARIO : <?php $usuario = $_SESSION['usuario'];
                                                                                    echo $usuario['email'];
                                                                                    ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>