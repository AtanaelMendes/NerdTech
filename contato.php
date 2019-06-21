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
    <body>
    
    <!-- Contatos -->

<section id="contato">
	<div class="container">
	
		  <div class="col-xs-12 col-sm-12 col-md-12">
			<div class="page-header"><h1 class="sombraPretatexto"><strong>Contato</strong> <small>Fale conosco agora memso!</small></h1></div>
		</div>		
		<div class="row contato">
			<div class="col-xs-12">
				<font size="+1" class="sombraPretatexto"><p>Preencha o formulario abaixo para entrar em contato conosco.</p></font>
			</div>
		</div>
		<div class="row contato">
			<div id="conteudo" class="col-xs-12">							
								
				<form name="form1" id="form" method="get">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input id="name" name="name" type="text" class="form-control input-lg" placeholder="Qual seu nome?" required="required">
							</div>
							<div class="form-group">
								<input  id="email" name="email" type="email" class="form-control input-lg" placeholder="Qual seu e-mail?" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
							</div>
							<div class="form-group">								
								<input id="phone" name="phone" type="text" class="form-control input-lg" placeholder="Seu Telefone? EX: 99999999999" maxlength="12">
							</div>
						</div>
						<div class="col-md-6">
							<textarea id="message" name="message" class="form-control" placeholder="Sua Mensagem? *"  required style="height: 170px;"></textarea>
						</div>
					</div>
					<div class="row">						
						<div id="menu" class="col-sm-6">		                   
						<button type="submit" class="btn btn-info" style="margin-top: 10px;">ENVIAR</button>
						<a href="index.php"><button type="button" class="btn btn-primary" style="margin-top: 10px;">VOLTAR</button></a>
		                </div>
					</div>
				</form>
				<?php
				
				if(isset($_GET['name'], $_GET['email'], $_GET['phone'], $_GET['message'])){
					$phone = $_GET['phone'];
					$name = $_GET['name'];
					$message = $_GET['message'];					
					if(!is_numeric($phone) || $phone =="") {
						echo "<div class='alert alert-danger' style='margin-top: 10px;' role='alert'>O telefone não é válido!</div>";
					} elseif($name =="" || strlen($name)<5) {					
						echo "<div class='alert alert-danger' style='margin-top: 10px;' role='alert'>Campo nome Incorreto!</div>";
					}elseif(strlen($message)< 10){
						echo "<div class='alert alert-danger' role='alert' style='margin-top: 10px;'>Campo Mensagem em branco ou muito curta!</div>";
					}
					else{
						require_once('mailto.php');
					}
				}			
				?>		
				
			
			</div>
		</div>		
	
	  </div>
</section>		

<!-- //  Fim Contatos -->
	  
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>      
    <script src="js/pushmail.js"></script>        
    </body>
    
</html>