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
          <a class="navbar-brand" href="#">ProjetoWEB</a>
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
   	  	   		 <h2> <?php echo htmlentities('<')?>AtualTech</h2>
   	  	   		 <p>Empresa voltada para o desenvolvimento de sistemas e consultoria em T.I</p>
   	  	   		 <a href="#">Saiba mais</a>
   	  	   	</div>
   	  	   </div>
   	     </div>
        </section>
   </div><!-- box !-->
   

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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>