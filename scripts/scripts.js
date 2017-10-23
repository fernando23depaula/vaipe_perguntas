$(document).ready(function(){

	// Validação Sim ou Não
	valorResposta1Alternativas = '';
	valorComentarioAlternativas= '';

	// Validação 10 alternativas
	valorResposta2Alternativas 	 = '';
	valorComentarioAlternativas2 = '';


	$('#pergunta1 button').click(function(){		
		$('#pergunta1 button').removeClass('naoPerguntas simNaoSelecionado');
		$('#pergunta1 button').removeClass('simPerguntas simNaoSelecionado');
		$('p.msg-error').fadeOut("slow");

		botaoSelecionado = $(this).html();
		if(botaoSelecionado === 'Sim'){
			$(this).addClass('simPerguntas simNaoSelecionado');
		}else if( botaoSelecionado === 'Não'){
			$(this).addClass('naoPerguntas simNaoSelecionado');						
		}
	});

	$('#listaBotoes button').click(function(){
		$('p.msg-error').fadeOut("slow");
		$('#listaBotoes button').removeClass('ativoNota');
		$(this).addClass('ativoNota');
		$(this).prevAll().addClass('ativosPorDemanda');
		$(this).nextAll().removeClass('ativosPorDemanda');
	});

	$('#enviarResposta1').click(function(){
		validaResposta1();		
	});

	$('#enviarResposta2').click(function(){
		validaResposta2();
	});

	function validaResposta1(){
		valorResposta1Alternativas  = $('.simNaoSelecionado').html();
		valorComentarioAlternativas = $('#comentarioAlternativas').val();

		if(valorResposta1Alternativas != '' && valorResposta1Alternativas != null && valorResposta1Alternativas != undefined){
			$('#linhaPergunta1').fadeOut('slow');
			$('#linhaPergunta2').fadeIn('slow');
			$('#ajusteMain').addClass('ajuste10alternativas');
		}else{
			console.log('Não selecionou nada');
			$('p.msg-error').fadeIn("slow");						
		}
	}
	function validaResposta2(){
		valorResposta2Alternativas = $('.ativoNota').html();
		valorComentarioAlternativas2 = $('#comentarioAlternativas2').val();
		if(valorResposta2Alternativas != '' && valorResposta2Alternativas != null && valorResposta2Alternativas != undefined){
			
			dadosParaEnvio = {
				reposta_1 : valorResposta1Alternativas,
				comentario_1 : valorComentarioAlternativas,
				reposta_2 : valorResposta2Alternativas,
				comentario_2 : valorComentarioAlternativas2
			}
			$('#linhaPergunta2').fadeOut('slow');
			$('#respostaEnviadaComSucesso').fadeIn('slow');
			

			// $.post('http://studios7design.com.br/jsonApp/teste.php',dadosParaEnvio,function(response, status){
			// 	if(status == "success"){
			// 		$('#linhaPergunta2').fadeOut('slow');
			// 		$('#respostaEnviadaComSucesso').fadeIn('slow');
			// 	}else{
			// 		alert('Ocorreu um erro tente outra vez');
			// 	}
			// });
		}else{
			$('p.msg-error').fadeIn("slow");
			$('p.msg-error').fadeIn("slow");						
		}
	}
});