<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  if (!isset($especialidade)) {
    $especialidade = array();
    $especialidade['id'] = 0;
    $especialidade['descricao'] = "";
  }
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

     </style>


   </head>
   <body>
       <?php
         include_once "menu.php";
        ?>

 <main class="container">
   <div class="bg-light p-5 rounded">

     <h1>Cadastro de Área</h1>
     <form class="m-5 container" action="salvarEspecialidade.php" method="post">
       <div class="mb-3">
         <label for="id" class="form-label">ID</label>
         <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $especialidade['id'];?>">
       </div>
       <div class="mb-3">
         <label for="descricao" class="form-label">Descrição</label>
         <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $especialidade['descricao'];?>">
       </div>
       <button type="submit" class="btn btn-primary">Salvar</button>
     </form>

   </div>
 </main>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   </body>
 </html>
