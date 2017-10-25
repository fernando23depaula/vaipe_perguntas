$(document).ready(function(){

	// Validação Sim ou Não
	valorResposta1Alternativas = '';
	valorComentarioAlternativas= '';

	// Validação 10 alternativas
	valorResposta2Alternativas 	 = '';
	valorComentarioAlternativas2 = '';
	nomeColaborador = '';
	comentarioColaborador = '';

	$('#pergunta1 button').click(function(){		
		$('#pergunta1 button').removeClass('naoPerguntas simNaoSelecionado');
		$('#pergunta1 button').removeClass('simPerguntas simNaoSelecionado');
		$('p.msg-error').fadeOut("slow");

		botaoSelecionado = $(this).html();
		if(botaoSelecionado === 'Sim'){
			$(this).addClass('simNaoSelecionado');
			$('#sim').addClass('simPerguntas');
			$('#nao').removeClass('naoPerguntas');
		}else if( botaoSelecionado === 'Não'){
			$(this).addClass('simNaoSelecionado');	
			$('#nao').addClass('naoPerguntas');
			$('#sim').removeClass('simPerguntas');
		}
	});

	$('#listaBotoes button').click(function(){
		$('#listaBotoes button').removeClass('ativosPorDemanda');
		$('p.msg-error').fadeOut("slow");
		$('#listaBotoes button').removeClass('ativoNota');
		$(this).addClass('ativoNota');
		$(this).prevAll().addClass('ativosPorDemanda');
		$(this).nextAll().addClass('ativosPorDemanda');
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
			$('#ajusteMain').addClass('ajusteMain');
		}else{
			console.log('Não selecionou nada');
			$('p.msg-error').fadeIn("slow");						
		}
	}
	function validaResposta2(){
		valorResposta2Alternativas = $('.ativoNota').html();
		valorComentarioAlternativas2 = $('#comentarioAlternativas2').val();
		nomeColaborador = $('#nomeColaborador').val();
		comentarioColaborador = $('#comentarioColaboradorNome').val();
		if(valorResposta2Alternativas != '' && valorResposta2Alternativas != null && valorResposta2Alternativas != undefined){
			
			if(nomeColaborador != '' && nomeColaborador != null && nomeColaborador != undefined ){
				dadosParaEnvio = {
					reposta_1 : valorResposta1Alternativas,
					comentario_1 : valorComentarioAlternativas,
					reposta_2 : valorResposta2Alternativas,
					comentario_2 : valorComentarioAlternativas2,	
					nome_Colaborador : nomeColaborador,
					comentario_comentarioColaborador : comentarioColaborador
				}
				$('.informacao button').popover('hide');
				$('#linhaPergunta2').fadeOut('slow');
				$('#respostaEnviadaComSucesso').fadeIn('slow');
				$('#ajusteMain').removeClass('ajusteMain');
			}else{
				$('#errorColega').fadeIn();
			}
			

			// $.post('http://studios7design.com.br/jsonApp/teste.php',dadosParaEnvio,function(response, status){
			// 	if(status == "success"){
			// 		$('#linhaPergunta2').fadeOut('slow');
			// 		$('#respostaEnviadaComSucesso').fadeIn('slow');
			// 	}else{
			// 		alert('Ocorreu um erro tente outra vez');
			// 	}
			// });
		}else{
			$('#errorNotas').fadeIn("slow");						
		}
	}

	//Popover

	$('.informacao button').popover();
});