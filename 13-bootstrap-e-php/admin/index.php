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
    <title>Painel ADMIN</title>

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

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Atual.Tech</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul id="menu-principal" class="nav navbar-nav">
            <li class="active"><a ref_sys="sobre" href="#">Editar Sobre</a></li>
            <li><a ref_sys="cadastrar_equipe" href="#about">Gerenciar Equipe</a></li>
            <li><a ref_sys="listar_equipe" href="#contact">Listar Membros</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="?sair"><span class="glyphicon glyphicon-off"></span> Sair!</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div style="position: relative;top:50px" class="box">

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h2><span class="glyphicon glyphicon-cog"></span> Painel de Controle</h2>
          </div>
          <div class="col-md-3">
            <p> <span class="glyphicon glyphicon-time"></span> Seu último login foi : 28/06/2022</p>
          </div>
        </div>
      </div>
    </header>

    <section class="bread">
      <div class="container">
        <div class="row">
          <ol class="breadcrumb">
            <li>Home</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="principal">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active cor-padrao" ref_sys="sobre">
                <span class="glyphicon glyphicon-heart"></span> Sobre
              </a>
           
              <a href="#" class="list-group-item " ref_sys="cadastrar_equipe">
                <span class="glyphicon glyphicon-pencil"></span> Cadastrar Equipe
              </a>

              <a href="#" class="list-group-item" ref_sys="listar_equipe">
                <span class="glyphicon glyphicon-list-alt"></span> Lista Equipe
                 <span class="badge">2</span>
              </a>


            </div>

          </div>
          <div class="col-md-9">
            <?php 

            if(isset($_POST['editar_sobre'])){
              $sobre = $_POST['sobre'];


              $pdo->exec("DELETE FROM tb_sobre ");
              $sql = $pdo->prepare("INSERT INTO tb_sobre VALUES(null,?)");
              $sql->execute(array($sobre));


              $sobre = $pdo->prepare('SELECT * FROM tb_sobre');
              $sobre->execute();
              $sobre = $sobre->fetch()['sobre'];


              echo '<div class="alert alert-success" role="alert">O Código HTML <b>Sobre</b> foi editado com sucesso!</div>';
            }else if(isset($_POST['cadastrar_equipe'])){
              $nome = $_POST['nome'];
              $descricao = $_POST['descricao'];

              $sql = $pdo->prepare("INSERT INTO tb_equipe VALUES (null,?, ?)");
              $sql->execute(array($nome, $descricao));
               echo '<div class="alert alert-success" role="alert">O membro '.$nome.' foi cadastrado com sucesso!</div>';
            }

             ?>

            <div id="sobre_section" class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title">Sobre</h3>
              </div>
              <div class="panel-body">
                <!-- Body panel !-->
                <form method="post">
                  <div class="form-group">
                    <label for="">Código HTML :</label>
                    <textarea style="height:140px; resize: vertical;" name="sobre" id="sobre" class="form-control">
                      <?php echo $sobre; ?>
                    </textarea>
                  </div>
                  <input type="hidden" name="editar_sobre" value="">
                  <button name="acao" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>

            <div id="cadastrar_equipe_section"class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title">Cadastrar Equipe</h3>
              </div>
              <div class="panel-body">
                <!-- Body panel !-->
                <form method="post" >
                   <div class="form-group">
                    <label for="">Nome Membro :</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Descrição do Membro</label>
                    <textarea style="height:140px; resize: vertical;" name="descricao" id="descricao" class="form-control"></textarea>
                  </div>
                  <input type="hidden" name="cadastrar_equipe" value="">
                  <button nome="acao" class="btn btn-default">Submit</button>
                </form>
              </div>
            </div>

            <div id="listar_equipe_section"class="panel panel-default">
              <div class="panel-heading cor-padrao">
                <h3 class="panel-title">Membros da Equipe </h3>
              </div>
              <div class="panel-body">
                <!-- Body panel !-->
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID:</th>
                      <th>Nome do membro:</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $selecionarMembros = $pdo->prepare("SELECT id,nome FROM tb_equipe");
                    $selecionarMembros->execute();
                    $membros = $selecionarMembros->fetchAll();
                     foreach($membros as $key => $values):
                      ?>
                    <tr>
                      <td><?php echo $values['id']; ?></td>
                      <td><?php echo $values['nome']; ?></td>
                      <td><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>



          </div>
        </div>
      </div>

    </section>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){

         cliqueMenu() 
          scrollItem()


        function cliqueMenu(){

          $('#menu-principal a, .list-group a').click(function(){
            // Remove classe Active
            $('#menu-principal a, .list-group a').removeClass('active').removeClass('cor-padrao')
            $('#menu-principal a').parent().removeClass('active')

            //console.log($('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']'))
            // Adicioanr classe active no elemento clicado atual
            $('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active')
            $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('cor-padrao')

            return false;
          })
        }// CliqueMenu

        function scrollItem(){
          $('#menu-principal a, .list-group a').click(function(){
            var ref = '#'+$(this).attr('ref_sys')+'_section'
            var offset = $(ref).offset().top
            $('html,body').animate({'scrollTop':offset-50})
            if($(window)[0].innerWidth <= 768){
              $('.icon-bar').click()
            }
          })
        }// scrollItem

        
      })
    </script>
  </body>
</html>