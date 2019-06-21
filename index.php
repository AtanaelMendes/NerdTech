<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>NerdTech</title>		
        
        <!-- define a viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="imagem/png" href="img/nerdtech-ICO.png" />        
        <!-- adicionar css bootstrap -->        
        <link href="css/bootstrap.css" rel="stylesheet" media="all">
        <link href="css/estilo.css" rel="stylesheet" media="all"> 
    </head>
    
    <body data-spy="scroll" data-target=".menu-navegacao" data-offset="80">  
    
<!-- Menu da Aplicacao -->
<nav class="navbar navbar-default navbar-fixed-top" >
	<div class="container">
		<div class="row">
		<div class="navbar-header">
			
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navegacao">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>	
			</button>
			<div class="col-xs-3"><a href="#"><img src="img/nerdtech-logo2.jpg" class="img-circle img-responsive" style="height:60px; width:80px;"></a></div>
			<div class="col-xs-5 col-sm-9 col-md-9"><a href="#" class="navbar-brand"><font size="+2"><strong>NerdTech</strong>
			<small class="hidden-xs"> <em>Soluções Web</em></small></font></a></div>
			
		</div>
		
		<div class="collapse navbar-collapse menu-navegacao" id="menu-navegacao">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="page-top"></a></li>
					<li><a class="" href="#servicos">
						<button class="btn btn-outline-success"><font size="+1">Serviços</font></button></a></li>
					<li><a class="" href="#portfolio">
						<button class="btn btn-outline-success"><font size="+1">Temas</font></button></a></li>
					<li><a class="" href="#quem-somos">
						<button class="btn btn-outline-success"><font size="+1">Quem Somos</font></button></a></li>
					<li><a class="" href="#localizacao">
						<button class="btn btn-outline-success"><font size="+1">Localização</font></button></a></li>
					<li><a href="contato.php">
						<button class="btn btn-outline-success"><font size="+1">Contato</font></button>
						</a></li>
			</ul>
		</div>
		</div>
	</div>
</nav>
<!-- // Fim do Menu da Aplicaçao -->	
	
<!-- Slider Da Aplicacao -->			
<div class="divslider div_colorida" style="height: 100vh; padding-top: 5%">
	<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg6">
		   <div id="sliderprincipal" class="carousel slide" data-slider="carousel" data-ride="carousel" data-interval="3000" style="padding:20px">
			   
			   <ol class="carousel-indicators">
				   <li data-target="#sliderprincipal" data-slide-to="0" class="active"></li>
				   <li data-target="#sliderprincipal" data-slide-to="1"></li>
				   <li data-target="#sliderprincipal" data-slide-to="2"></li>			   
			   </ol>
			   
			   <center>
			   <div class="carousel-inner" role="listbox">
			   <div class="item active">
			   <img src="img/slider1.png" alt="imagem slider 1">
			   </div>
				   <div class="item ">
				   <img src="img/slider2.jpg" alt="imagem slider 2">
				   </div>
				   <div class="item ">
					   <img src="img/slider3.png" alt="imagem slider 3">
				   </div>				
			   </div>
			   </center>
			   
			   <a class="left carousel-control" href="#sliderprincipal" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Anterior</span>   
			   </a>

				<a class="right carousel-control" href="#sliderprincipal" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Proximo</span>   
			   </a>
			   
			</div>
		</div>
	
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 " style="padding-top: 10px;">
			<center><span class="text-center"><h4 class="sombraPretatexto">O que é design responsivo?</h4></span></center>
			<iframe class="embed-responsive-item" width="100%" height="300px" src="https://www.youtube.com/embed/HWQk-Vrwcu0" frameborder="0" allowfullscreen></iframe>
			
		</div>
		</div>
	</div>
	</div>
</div>


<!-- // Fim do Slider -->		
<!-- Serviços -->

<section id="servicos">
	<div class="container">
		<div class="row">
		   <div class="col-xs-12">
	         <div class="page-header"><h1 class="sombraPretatexto"><strong>Serviços</strong> <small>conheça o que fazemos</small></h1></div>
			
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4 servicos_item">
					<div>
						<img src="img/ecommercel.jpg" class="img-responsive img-circle">
						<h3 class="text-center servicosItemH4"><strong>E-commerce</strong></h3>
						<p class="text-justify"><font size="+2" class="sombraPretatexto">
							Sua loja e seus produdos online. Expanda seu comércio para o mundo virtual e atenda mais clientes.</font></p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 servicos_item">
					<div>
						<img src="img/criacaoSite.jpg" class="img-responsive img-circle">
						<h3 class="text-center servicosItemH4"><strong>Site</strong></h3>
						<p class="text-justify"><font size="+2" class="sombraPretatexto">
							Apresente sua empresa e seu trabalho no mundo virtual para que todos possam ver e disponibilize mais uma maneira para o cliente entrar em contato. </font></p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 servicos_item">
					<div>
						<img src="img/sistemaWeb.jpg" class="img-responsive img-circle">
						<h3 class="text-center servicosItemH4"><strong>Sistema Web</strong></h3>
						<p class="text-justify"><font size="+2" class="sombraPretatexto">
							Gerencie seu estoque ou almoxarifado com mais facilidade, tenha mais controle de seus produtos e tenha acesso a hora que quiser de qualquer lugar. </font></p>
					</div>
				</div>
			</div>
		</div>		
	</div>
</section>			

<!-- // fim Serviços -->		
<!-- Portifolios -->

<section id="portfolio" class="div_colorida" style="overflow: auto; height: 100vh">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-header"><h1 class="sombraPretatexto"><strong>Temas </strong> <small>veja os modelos pré definidos </small></h1></div>
			</div>			
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-cyborg.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/cyborg/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-darkly.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/darkly/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-slate.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/slate/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>				
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-solar.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/solar/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-md-3 col-sm-3 text-center" >
				<div><img src="img/t-superhero.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/superhero/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-sandstone.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/sandstone/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-cosmo.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/cosmo/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>				
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-yeti.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/yeti/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-md-3 col-sm-3 text-center">
				<div><img src="img/t-cerulan.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/cerulean/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-united.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/united/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-spacelab.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/spacelab/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>				
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-journal.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/journal/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-lumen.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/lumen/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-minty.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/minty/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-pulse.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/pulse/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>				
			</div>
			<div class="col-md-3 col-sm-3 text-center" style="margin-top: 10px;">
				<div><img src="img/t-flatly.jpg" class="img-responsive img-rounded"></div>
				<a href="https://bootswatch.com/flatly/" class="btn btn-success" style="margin-top: 10px;">Visualize o Tema</a>
			</div>
		</div>
	</div>
</section>	

<!-- // Fim do Portifolio -->		
<!-- Quem Somos -->

<section id="quem-somos">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-header"><h1 class="sombraPretatexto"><strong>Quem Somos</strong> <small>Conheça nossa história</small></h1></div>
			</div>		
		</div>
		
		<div class="row sombraPretatexto">
			<div class="col-sm-6 col-md-6">
				<div class="col-sm-6 col-md-6 text-right">
					<h3>Atanael Mendes <small><p style="padding-top: 5px;">Graduado em Análise e desenvolvimento de sistemas</p></small></h3>
					
				</div>
				<div class="col-sm-6 col-md-6">
					<img src="img/atanael.jpg" class="img-responsive img-circle image">
				</div>
			</div>
			<div class="col-sm-6 col-md-6">				
				<div class="col-sm-6 col-md-6">
					<img src="img/nerdtech-logo2.jpg" class="img-responsive img-circle" style="margin-top: 10px;">
				</div>
				<div class="col-sm-6 col-md-6 text-left">
					<h3>Missão da Empresa <small><p style="padding-top: 5px;">Tornar sua empresa visível no mundo virtual.</p></small></h3>
					
				</div>
			</div>
		</div>
		
	</div>
</section>


<!-- // Fim quem somos -->		
<!-- Localizaçao -->

<section id="localizacao" class="div_colorida">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="page-header"><h1 class="sombraPretatexto"><strong>Localização</strong> <small>Veja onde estamos</small></h1></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d499983.46643617237!2d-55.685637317830626!3d-11.756537454780341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93082bf713914109%3A0x4375b4fe34738268!2sSinop+-+MT!5e0!3m2!1spt-BR!2sbr!4v1509932503418" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<!-- // Fim Localizaçao -->	


<footer>
	<div class="container div_colorida controlafooter">
		<div class="row">
			<div class="col-sm-8 sombraPretatexto">
				atanaelmendes@gmail.com
			</div>
			<div class="col-sm-2">
			<a href="https://app.umbler.com/u/2j3p4lmk">
	<img src="https://static.umbler.com/brand/umbler-badges/umbler-badge-hostedby-dark-bg-mono.png' width='75%' alt='Hosted by Umbler">
</a>
			</div>
			<div class="col-sm-2 text-right sombraPretatexto">
				<small>Desenvolvido por: </small><br/>
				<strong>Atanael Mendes</strong>
			</div>
		</div>
	</div>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>        
    <script src="js/pushmail.js"></script>        
    <script src="js/ga.js"></script>        
    </body>
    
</html>