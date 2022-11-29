<?php
  include_once "funcao.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <meta name="generator" content="Hugo 0.104.2">
     <title>Construção de Páginas Web II</title>

     <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">





 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <style>
       .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
       }

       @media (min-width: 768px) {
         .bd-placeholder-img-lg {
           font-size: 3.5rem;
         }
       }

       .b-example-divider {
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
       }

       .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
       }

       .bi {
         vertical-align: -.125em;
         fill: currentColor;
       }

       .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
       }

       .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
       }


       /* Show it is fixed to the top */
       body {
         min-height: 75rem;
         padding-top: 4.5rem;
       }
       td>img {
         width: 40px;
       }

     </style>


   </head>
   <body>
       <?php
         include_once "menu.php";
        ?>

 <main class="container">
   <div class="bg-light p-5 rounded">
     <?php
        if (isset($_COOKIE['mensagem'])) {
          echo "
          <div class='alert alert-success'>
            {$_COOKIE['mensagem']}
          </div>";
          unset($_COOKIE['mensagem']);
          setcookie("mensagem", "", 1);
        }
      ?>

     <h1>Lista de Médicos</h1>
     <a href="frmMedico.php" class="btn btn-primary">Cadastrar novo médico</a>
     <br>
     <table class="table table-striped table-bordered">
      <br>
       <thead>
         <tr>
           <th></th>
           <th>ID</th>
           <th>Nome</th>
           <th>Especialidade</th>
           <th>E-mail</th>
           <th>Nascimento</th>
           <th>Excluir</th>
           <th>Editar</th>
         </tr>
       </thead>
     <tbody>
       <?php
         $medicos = getMedicos();
         foreach ($medicos as $medico) {
           $data = date("d/m/Y", strtotime(
			          $medico['data_aniversario']));
                $foto = $medico['foto']!= ""? $medico['foto']: 'anonimo.jpg';
           echo "
           <tr>
              <td>
                <img src='imagens/$foto'>
              </td>
              <td>{$medico['id']}</td>
              <td>{$medico['nome']}</td>
              <td>{$medico['especialidade_descricao']}</td>
              <td>{$medico['email']}</td>
              <td>$data</td>
              <td><a href='excluirMedico.php?id={$medico['id']}' class='btn btn-danger'>-</a></td>
              <td><a href='editarMedico.php?id={$medico['id']}' class='btn btn-primary'>+</a></td>
           </tr>";
         }
        ?>

     </tbody>
   </table>
   </div>
 </main>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   </body>
 </html>
