
<?php
define('pg','http://localhost/MEELA/Site');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Site da igreja">
    <meta name="author" content="diacanua Daniel Pedro">
    <link rel="icon" href="../../favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Website - Meela</title>
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
      
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
  </head>
  <body data-spy="scroll" data-target=".menu-navegacao" data-offset="80">
      <!-- Menu da aplicação -->
      

      <?php 

            include_once("menu.php");

       ?>

     
      <!-- // Menu da aplicação -->
      
      
      <!-- // slider da aplicação -->


    <?php
            include_once("carrosel.php");
    ?>


      
      <!-- serviços -->
      <section id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Organismos <small>Conheça as tres divisões do Meela</small></h1></div>
                </div>                 
            </div>  
            <div class="row">
                
                <div class="col-sm-4 col-md-4 servicos_item">
                    <div><img src="fotos/peniel.jpg" class="img-responsive img-circle" /></div>
                    <h4>CPN</h4>
                    <p>Centro Peniel Mundial .</p>
                </div>
                
                <div class="col-sm-4 col-md-4 servicos_item">
                    <div><img src="fotos/cmm.jpg" class="img-responsive"  /></div>
                    <h4>CIFMC</h4>
                    <p>descrição do serviço apresentado. Texto texto texto texto texto texto.</p>
                </div>
                
                <div class="col-sm-4 col-md-4 servicos_item">
                    <div><img src="fotos/jcc1.jpg" class="img-responsive img-circle" /></div>
                    <h4>JCC</h4>
                    <p>descrição do serviço apresentado. Texto texto texto texto texto texto.</p>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="Organismos.php" class="btn btn-default btn-lg servicos_btn_todososservicos">Clique aqui para <br /> conhecer Melhor</a>
                </div>
            </div>
        </div>
      </section>
      <!-- // serviços -->
      
      <!-- portfolio -->
      <section id="portfolio" class="div_colorida">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Galeria <small>Conheça nossas Actividades </small></h1></div>
                </div>                
            </div>
            <div class="row portfolio_row">
                <div class="col-sm-4">
                    <div class="portfolio_item">
                        <div><img src="imgs/foto3.jpg" class="img-responsive grayscale grayscale"/></div>
                        <h4>Nome do cliente</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="portfolio_item">
                        <div><img src="imgs/foto3.jpg" class="img-responsive grayscale"/></div>
                        <h4>Nome do cliente</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="portfolio_item">
                        <div><img src="imgs/foto3.jpg" class="img-responsive grayscale"/></div>
                        <h4>Nome do cliente</h4>
                    </div>
                </div>
            </div>
            <div class="row portfolio_row">
                <div class="col-sm-4">
                    <div class="portfolio_item">
                        <div><img src="imgs/foto2.jpg" class="img-responsive"/></div>
                        <h4>Nome do cliente</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="portfolio_item">
                        <div><img src="imgs/foto2.jpg" class="img-responsive"/></div>
                        <h4>Nome do cliente</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="portfolio_item">
                        <div><img src="imgs/foto2.jpg" class="img-responsive"/></div>
                        <h4>Nome do cliente</h4>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="galeria.php" class="btn btn-default btn-lg">Clique aqui para conhecer <br>todos os nossos clientes</a>
                </div>
            </div>
        </div>
      </section>
      <!-- // portfolio -->
      
      <!-- quem somos -->
      <section id="quemsomos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Casal Pastoral<small> e Visionarios do MEELA</small></h1></div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="col-sm-8 text-right">
                        <h4>Elizabeth Olangi</h4>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="fotos/mama.jpg" class="img-responsive "/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <img src="fotos/papa.jpg" class="img-responsive " />
                    </div>
                    <div class="col-sm-8">
                        <h4>Olangi Onasambi</h4>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Departamentos <small>do MEELA</small></h1></div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-sm-3">
                    <div>
                        <div><img src="fotos/BEMAMADO.jpg" class="img-responsive "/> clinica Rapha</div>
                        <h4>Clinica Rapha</h4>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div>
                        <div><img src="fotos/cvvlogo.jpg" class="img-responsive grayscale"/></div>
                        <h4> Canal CVV INTERNACIONAL</h4>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div>
                        <div><img src="fotos/AEMCF.bmp" class="img-responsive grayscale"/></div>
                        <h4>Associação das Igrejas e Ministerios </h4>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div>
                        <div><img src="fotos/estudio.jpg" class="img-responsive grayscale"/></div>
                        <h4>CVV CINEMA</h4>
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="departamentos.php" class="btn btn-default btn-lg">Clique aqui para conhecer <br>melhor os departamentos</a>
                </div>
            </div>
        </div>
      </section>
      <!-- // quem somos -->
      
      <!-- localização -->
      <section id="localizacao" class="div_colorida">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Localização <small>Veja onde estamos</small></h1></div>
                </div>  
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56225.60087559123!2d-52.40771264999999!3d-28.264982799999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e2bf7ecbc632df%3A0x8370fe5f60075c2b!2sPasso+Fundo+-+RS!5e0!3m2!1spt-BR!2sbr!4v1415809496191" width="100%" height="520" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
        </div>
      </section>      
      <!-- // localização -->
      
      <!-- contato -->
     <?php

     include_once("contacto.php");
     ?>

      <!-- // contato -->


<!-- Rodape -->

    <?php

        include_once("rodape.php");
    ?>

      
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>

        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="js/vendor/holder.min.js"></script>

  </body>
</html>