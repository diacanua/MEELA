<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Organismos</title>
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
      
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
  </head>
  <body data-spy="scroll" data-target=".menu-navegacao" data-offset="80">
      
    <!-- Menu -->

      <?php

        include("menu.php");
      ?>




      <!-- título da página -->
      <div class="divslider">
        <div class="container">
            <div class="col-xs-12">
                <div class="page-header"><h1>Organismos</h1></div>
            </div>
        </div>
      </div>      
      <!-- // título da página -->
      
      <!-- quem somos -->
      <section id="quemsomos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div ><h1><small>O Meela esta Dividida em 3   partes  </small></h1></div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-8 text-right">
                        <h4 class="page-header"> Centro Peniel Mundial </h4>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="fotos/peniel.jpg" class="img-responsive "/>
                    </div>
                </div>
                <div class="col-md-12">

                    <div class="col-sm-4">
                        <img src="fotos/cmm.jpg" class="img-responsive " />
                    </div>
                    <h4 class="page-header">CIFMC</h4>
                    <div class="col-sm-8">
                       
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </div>
            </div>




            <div class="col-md-12">
            <h4 class="page-header">Centro Peniel Mundial</h4>
                    <div class="col-sm-8 text-right">
                        
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="fotos/jcc.jpg" class="img-responsive "/>
                    </div>
                </div>

              </div>
                           
            </div>
            </section>

            <?php
            include_once("carrosel.php");
    ?>
      <!-- // quem somos -->
      
      
      <?php

        include("rodape.php");
        ?>
    <!--
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script> -->
  </body>
</html>