<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meu Site</title>
    <link rel="stylesheet" href="./style/bootstrap.css">
    <link rel="stylesheet" href="./style/lightbox.css">
    <link rel="stylesheet" href="./style/custom.css">

</head>
<body>

   <header>
       <nav class="navbar navbar-inverse">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Igreja</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Página Ínicial<span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">Sobre Nós</a></li>
        <li><a href="events.php">Eventos</a></li>
        <li><a href="dept.php">Departamentos</a></li>
        <li><a href="photos.php">Fotos</a></li>
        <li><a href="contact.php">Contacto</a></li>
      </ul>
<!--
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<h1 class="contact-header">Fale Connosco</h1>

<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="example@gmail.com">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Título</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder = 'Título de mensagem'>
  </div>
  <div class="form-group">
      <textarea name="message" id="text" cols="30" rows="10" placeholder="Escreva a sua mensagem aqui"></textarea>
  </div>
    <button class="btn btn-primary">Enviar</button>
</form>
</div>
