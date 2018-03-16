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
      
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
  </head>
  <body data-spy="scroll" data-target=".menu-navegacao" data-offset="80">
      <!-- Menu da aplicação -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navegacao" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
                <a class="navbar-brand" href="#page-top">MEELA</a>
            </div>  
            
            <div class="collapse navbar-collapse menu-navegacao" id="menu-navegacao">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#page-top"></a></li>
                    <li>
                        <a class="" href="#servicos">Serviços</a>
                    </li>
                    <li>
                        <a class="" href="#portfolio">Galeria de Fotos </a>
                    </li>
                    <li>
                        <a class="" href="#quemsomos">Quem Somos</a>
                    </li>
                    <li>
                        <a class="" href="#localizacao">Localização</a>
                    </li>
                    <li>
                        <a class="" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
            
        </div>
      </nav>
      <!-- // Menu da aplicação -->
      
      <!-- slider da aplicação -->
      <div class="divslider">
        <div class="container">
            <div class="col-xs-12">
                <div id="sliderprincipal" class="carousel slide" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        <li data-target="#sliderprincipal" data-slide-to="0" class="active"></li>
                        <li data-target="#sliderprincipal" data-slide-to="1"></li>
                        <li data-target="#sliderprincipal" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="imgs/slider/slider1.jpg" alt="Imagem slider 1">
                        </div>
                        <div class="item">
                            <img src="imgs/slider/slider2.jpg" alt="Imagem slider 2">
                        </div>
                        <div class="item">
                            <img src="imgs/slider/slider3.jpg" alt="Imagem slider 3">
                        </div>
                    </div>  
                    
                    <a class="left carousel-control" href="#sliderprincipal" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    
                    <a class="right carousel-control" href="#sliderprincipal" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                    
                </div>
            </div>
        </div>
      </div>      
      <!-- // slider da aplicação -->
      
      <!-- serviços -->
      <section id="servicos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Serviços <small>Conheça o que fazemos</small></h1></div>
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
                    <a href="#" class="btn btn-default btn-lg servicos_btn_todososservicos">Clique aqui para <br /> conhecer Melhor</a>
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
                    <a href="portfolio.html" class="btn btn-default btn-lg">Clique aqui para conhecer <br>todos os nossos clientes</a>
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
                    <div class="page-header"><h1>Quem Somos <small>Conheça nossa história</small></h1></div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="col-sm-8 text-right">
                        <h4>Texto sobre a empresa</h4>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="imgs/foto.jpg" class="img-responsive img-circle"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-sm-4">
                        <img src="imgs/foto.jpg" class="img-responsive img-circle" />
                    </div>
                    <div class="col-sm-8">
                        <h4>Missão da empresa</h4>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                        <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Nossa Equipe <small>Conheça nossos colaboradores</small></h1></div>
                </div> 
            </div>
            
            <div class="row">
                <div class="col-sm-3">
                    <div>
                        <div><img src="imgs/foto3.jpg" class="img-responsive grayscale"/></div>
                        <h4>Nome do funcionário</h4>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div>
                        <div><img src="imgs/foto3.jpg" class="img-responsive grayscale"/></div>
                        <h4>Nome do funcionário</h4>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div>
                        <div><img src="imgs/foto3.jpg" class="img-responsive grayscale"/></div>
                        <h4>Nome do funcionário</h4>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <div>
                        <div><img src="imgs/foto3.jpg" class="img-responsive grayscale"/></div>
                        <h4>Nome do funcionário</h4>
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="quem-somos.html" class="btn btn-default btn-lg">Clique aqui para conhecer <br>melhor a empresa</a>
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
      <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header"><h1>Contato <small>Fale conosco agora mesmo!</small></h1></div>
                </div>
            </div>
            
            <div class="row contato">
                <div class="col-xs-12">
                    <p class="bg-success aviso">Preencha o formulário abaixo para entrar em contato conosco!</p>
                </div>
            </div>
            
            <div class="row contato">
                <div class="col-xs-12">
                    
                    <form name="frmContato" id="formContato">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control input-lg" placeholder="Qual seu nome? *" required />
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" placeholder="Qual seu e-mail? *" required />
                                </div>
                                
                                <div class="form-group">
                                    <input type="tel" class="form-control input-lg" placeholder="Seu telefone?" />
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control input-lg" placeholder="Sua mensagem! *" required></textarea>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="alert alert-success">Envio realizado!</div>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success btn-lg">Enviar Formulário</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
      </section>      
      <!-- // contato -->
      
      <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    Informações gerais sobre a empresa, endereço, e-mail e etc!
                </div>
                <div class="col-sm-2 text-right">
                    <small>Desenvolvido por:</small><br/>
                    <strong>Devmedia.com</strong>
                </div>
            </div>  
        </div>
      </footer>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
  </body>
</html>