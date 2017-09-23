<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Teste<?php
      //Utiliza o a pagina do Fuseaction para alterar o titulo da pagina no navegador
      //echo ucfirst(Fuseaction);
    ?>
  </title>
<link href="src/template/Layouts/css/bootstrap.css" rel="stylesheet">
<!--<link rel="stylesheet" href="src/template/Layouts/style.css" type="text/css" media="screen" />-->
<script language="javascript" type="text/javascript" src="functions.js" ></script>
<!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="container-fluid">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
					<span class="sr-only">Abrir menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Estoque da Gi</a>
			</div>

      <div class="collapse navbar-collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li><a href="index.php?page=roupa">Roupa</a></li>
          <li><a href="index.php?page=caminha">Caminha</a></li>
          <li><a href="index.php?page=comedouro">Comedouro</a></li>
          <li><a href="index.php?page=brinquedo">Brinquedo</a></li>
          <li><a href="index.php?page=outros">Outros</a></li>
        </ul>

      </div>
    </div>
  </nav>

  <?php require('src/template/Layouts/erro.php');?>
  <?php echo $content; ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="src/template/Layouts/js/bootstrap.js"></script>
</body>
</html>
