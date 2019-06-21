// JavaScript Document

  
         
		$(document).ready(function(){
			$("#envia").click(function( e ) {
			e.preventDefault();
			var href = $( this ).attr('href');
			$("#conteudo").load( href +" #conteudo");
			});
			}); 
