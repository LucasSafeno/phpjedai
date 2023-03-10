<?php
  $pdo = new PDO('mysql:host=localhost;dbname=paineladm', 'root', 'root');

  $sobre = $pdo->prepare('SELECT * FROM tb_sobre');
  $sobre->execute();
  $sobre = $sobre->fetch()['sobre'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projeto DevWEB</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo htmlentities('<'); ?>Atual.Tech</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


   <div class="box">
       <section class="banner">
       	<div class="overlay"></div>
   	     <div class="container chamada-banner">
   	  	   <div class="row">
   	  	   	<div class="col-md-12 text-center">
   	  	   		 <h2> <?php echo htmlentities('<')?>Atual.Tech</h2>
   	  	   		 <p>Empresa voltada para o desenvolvimento de sistemas e consultoria em T.I</p>
   	  	   		 <a href="#">Saiba mais</a>
   	  	   	</div>
   	  	   </div>
   	     </div>
        </section>
   
   

   <section class="cadastro-lead">
   	   <div class="container">
   	   	  <div class="row text-center">
   	   		<div class="col-md-6">
   	   			<h2>Entre na nossa lista!</h2>
   	   		</div>
   	   		<div class="col-md-6">
   	   			<form method="post">
   	   				<input type="text" name="nome" id="nome"><input type="submit" value="Enviar">
   	   			</form>
   	   		</div>
   	   	  </div>
   	   </div>
   </section>

   <section class="depoimentos text-center">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <h2>Depoimento</h2>
           <blockquote>
             <p>
             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
             </p>
           </blockquote>
         </div>
       </div>
     </div>
   </section>

   <section class="diferenciais text-center">
    <h2>Conhe??a Nossa Empresa</h2>
     <div class="container diferenciais-container">
       <div class="row">
            <?php echo $sobre; ?>
       </div>
     </div>
   </section>

   <section class="equipe">
     <h2>Equipe</h2>
     <div class="container equipe-container">
       <div class="row">
         
         <?php 
          $selecionarMembros = $pdo->prepare("SELECT * FROM tb_equipe");
          $selecionarMembros->execute();
          $membros = $selecionarMembros->fetchAll();

          for($i = 0; $i < count($membros); $i++):  

          ?>
          <div class="col-md-6">
            <div class="equipe-single">
             <div class="row">
               <div class="col-md-2">
                 <div class="user-picture">
                   <div class="user-picture-child"></div>
                 </div>
               </div>
               <div class="col-md-10">
                 <h3><?php echo $membros[$i]['nome']; ?></h3>
                 <p>
                    <?php echo $membros[$i]['descricao']; ?>
                 </p>
               </div>
             </div>
           </div>
         </div>
       <?php endfor; ?>
       </div>
     </div> <!-- Equipe container !-->
   </section>


   <section class="final-site">
     <div class="container">
       <div class="row">
         <div class="col-md-6">
          <h2>Fale Conosco</h2>
           <form action="">
             
             <div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="email" id="email"  class="form-control">
             </div>

             <div class="form-group">
               <label for="nome">Nome</label>
               <input type="text" name="nome" id="nome"  class="form-control">
             </div>

             <div class="form-group">
               <label for="mensagem">Mensagem</label>
               <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
             </div>


             <button class="btn btn-primary">Submit</button>

           </form>
         </div>
         <div class="col-md-6">
           <h2>Nossos planos de Hospedagem</h2>
           <table class="table">
             <thead>
               <tr>
                 <th>Plano Mensal</th>
                 <th>Plano Anual</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>R$ 100,00</td>
                 <td>R$ 100,00</td>
               </tr>
               <tr>
             </tbody>
           </table>
           
         </div>
       </div>
     </div>
   </section>

   <footer>
     <p class="text-center">Todos os direitos reservados a Atual.Tech</p>
   </footer>


   </div><!-- box !-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>