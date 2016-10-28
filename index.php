<?php require("conexao.php"); ?>
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
      <a class="navbar-brand" href="index.php">Igreja
    </a>
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

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


   </header>

        <section class="first">
        <div class="row">
        <div class="container">
        <div class="col-md-8 col-xs-12">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="./images/df.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
        <div class="item">
          <img src="./images/Selma.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>
         <div class="item">
          <img src="./images/Pastor%20Gil.jpg" alt="...">
          <div class="carousel-caption">
            ...
          </div>
        </div>


      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>


  <div class="col-md-4 col-xs-0">
    <div class="thumbnail next">
      <img src="./images/k.jpg" alt="...">
      <div class="caption">
        <h3>Historial</h3>
        <p>Saudamos o povo de Deus com a paz do Senhor, a Igreja publicitada neste site foi fundada aos <strong> 05/08/2009</strong> na cidade de Luanda com os pastores Gil Capupue e Osvaldo Ernesto.Somos a igreja Assembleia de Deus Pentecostal Centro Nova Aliança.O nosso foco é Jesus e a nossa missão é salvar vidas para o Senhor</p>
        <p><a href="about.php" role="button">Ler mais...</a></p>
      </div>
    </div>
  </div>

    </div>
</div>
</section>

<hr>


<h2 class="events"></h2>
<br>
<h3> Eventos Brevemente...</h3>

  <section id="second">
       <div class="container">
       <div class="row">
      <div class="col-md-4 ">
        <div class="thumbnail">
          <img src="./images/Baterista.jpg" alt="...">
          <div class="caption">
            <h3>Conferencia</h3>
            <p>Brevemente a igreja terá uma conferencia da juventude, um evento organizado pelos jovens.</p>
            <p><a href="events.html" role="button"></a></p>
          </div>
        </div>
      </div>

        <div class="col-md-4">
        <div class="thumbnail">
          <img src="./images/ca.jpg" alt="...">
          <div class="caption">
            <h3>Casamento</h3>
            <p>Em breve haverá um casamento no nosso centro, e toda igreja está entimada a aparecer.</p>
            <p><a href="events.html" role="button"></a>
          </div>
        </div>
      </div>

          <div class="col-md-4">
        <div class="thumbnail">
          <img src="./images/Selma.jpg" alt="...">
          <div class="caption">
            <h3>Congresso</h3>
            <p>Faltando ja poucos dias a nossa igreja realizará o seu sétimo congresso.Que Deus abençoe.</p>
            <p><a href="events.html" role="button"></a></p>
          </div>
        </div>
      </div>

    </div>
    </div>
   </section>




    <footer>
       &copy; copyright 2016 Igreja Pentecostal Centro Nova Aliança
   </footer>








        <script src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="javascript/lightbox.js"></script>

</body>
</html>
