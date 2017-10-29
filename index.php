<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Vaipe</title>
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" href="css/perguntas.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<script  src="scripts/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
	<script src="scripts/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	
	
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg container ">
			<figure>
				<a class="navbar-brand" href="#">
					<p>Desenvolvido por:</p>
					<img src="img/logo_vaipe_negativo.svg" alt="" id="logo">
				</a>
			</figure>
		  
		</nav>
		<!-- <h1 class='text-center'>Manifesto do anonimato</h1> -->
	</header>
	<main>
		<div id="ajusteMain">
			<div class="marginNegativa" id="linhaPergunta1">
				<div class="containerPerguntas row tamanhoContainer">
					<div class="pergunta" id="pergunta1">
						<h3>Você se sente parte de uma equipe de alta performance?</h3>
						<p class="border border-danger msg-error text-danger">Selecione uma das alternativas</p>
						<button type="button" id="nao" class="naoPerguntas">Não</button>
						<button type="button" id="sim" class="simPerguntas">Sim</button>
						<p class="comentario">Tem algum comentário sobre sua reposta? <small>Opcional.</small></p>
						<div class="form-group"><input class="fonts_input" type="text" id="comentarioAlternativas" placeholder="Escreva aqui seu comentário"></div>
					</div>
				</div>
				<div class="tamanhoContainer">
					<button type="button" class="float-right enviarButton" id="enviarResposta1">Enviar</button>
					<div class="clearfix"></div>
				</div>
				<script>

					


				</script>
			</div>
			<div class="marginNegativa displayNone displayNone" id="linhaPergunta2">
				<div class="containerPerguntas avaliacaoNumerica row tamanhoContainer">
					<div class="lineInformacao">
						<div class="informacao">
							<p>
								<img src="img/icones/resposta_anonima_icone.svg" alt="Resposta anonima"><span>Resposta anonima</span>
								<button class="ovalInterrogacao"  data-container="body" data-toggle="popover" data-placement="top" data-content="Ninguém saberá que foi você quem deu esta resposta.">!</button>
							</p>
						</div>
					</div>
					<div class="checked-right"></div>
					<div class="pergunta">
						<h3 class="h3Questoes">De 0 a 10, qual a probabilidade de você indicar um familiar ou amigo qualificado para uma vaga na sua empresa?</h3>
						<p class="border border-danger msg-error text-danger" id="errorNotas">Selecione uma das alternativas</p>
						<div class="btn-toolbar listaBotoesNotas" role="toolbar" aria-label="Toolbar with button groups">
						  <div class="btn-group mr-2" role="group" aria-label="First group" id="listaBotoes">
						    <button type="button" class="btn resposta0 btn-secondary">0</button>
						    <button type="button" class="btn resposta1 btn-secondary">1</button>
						    <button type="button" class="btn resposta2 btn-secondary">2</button>
						    <button type="button" class="btn resposta3 btn-secondary">3</button>
						    <button type="button" class="btn resposta4 btn-secondary">4</button>
						    <button type="button" class="btn resposta5 btn-secondary">5</button>
						    <button type="button" class="btn resposta6 btn-secondary">6</button>
						    <button type="button" class="btn resposta7 btn-secondary">7</button>
						    <button type="button" class="btn resposta8 btn-secondary">8</button>
						    <button type="button" class="btn resposta9 btn-secondary">9</button>
						    <button type="button" class="btn resposta10 btn-secondary">10</button>
						  </div>
						</div>
						<p class="comentario">Tem algum comentário sobre sua reposta? <small>Opcional.</small></p>
						<div class="form-group"><input class="fonts_input" type="text" id="comentarioAlternativas2" placeholder="Escreva aqui seu comentário"></div>
					</div>
				</div>
				
				<div class="containerPerguntas avaliacaoNumerica row tamanhoContainer" id="liderEscolhido">
					<div class="lineInformacao">
						<div class="informacao">
							<p><img src="img/icones/saberao_que_e_voce_icone.svg" id="icone2liberado" alt="Resposta anonima"><span id="span2">Saberão que é você</span>
								<button class="ovalInterrogacao" id="botao2informacao" data-container="body" data-toggle="popover" data-placement="top" data-content="Os admistradores da plataforma e seu colega saberão que foi você quem deu esta resposta.">!</button></p>
						</div>
					</div>
					<div class="checked-right"></div>					
					<div class="pergunta">
						<h3 class="h3Questoes">Quem é o(a) colega ou líder que te inspirou dentro da empresa este mês?</h3>
						<p class="border border-danger msg-error text-danger" id="errorColega">Digite o nome do seu colega ou líder</p>
						<form-group id="colaboradorNome">
							<label for="nomeColaborador">Buscar pelo nome:</label>
							<input type="text" name="nomeColaborador" class="nomeColab" id="nomeColaborador">
						</form-group>
						
						<p class="comentario" id="comentarioColaboradorNome">Gostaria de compartilhar um comentário com o(a) colega?</p>
						<div class="form-group"><input class="fonts_input" type="text" id="comentarioColaboradorNome" placeholder="Escreva aqui seu comentário"></div>
					</div>
				</div>
				<div class="tamanhoContainer">
					<button type="button" class="float-right enviarButton" id="enviarResposta2">Enviar</button>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="marginNegativa displayNone" id="perguntaEncerrada">
				<div class="containerPerguntas perguntaEncerraRespostaEnviada row tamanhoContainer">
					<div class="pergunta" >
						<h3>Pergunta encerrada.</h3>
						
						<p class="comentario">Essa pergunta não está mais coletando respostas. Fique atento aos prazos para não perder a oportunidade de dar seu feedback.</p>
					</div>
				</div>
			</div>
			<div class="marginNegativa displayNone" id="respostaEnviadaComSucesso">
				<div class="containerPerguntas perguntaEncerraRespostaEnviada row tamanhoContainer">
					<div class="pergunta" >
						<h3>Resposta enviada com sucesso! <img src="img/icones/icone_verde.svg" alt=""></h3>
						
						<p class="comentario">Quer ajudar a acabar com o climão em outras empresas? Indique a gente e ganhe um voucher de R$100 para gastar como quiser!</p>

						<button>Quero ganhar o voucher!</button>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div id="footer1" class="container-fluid">
			<div class="container row" id="itens-lista">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3 class="titulosRodapeListas">Páginas</h3>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">Quem Somos</a></li>
						<li><a href="">Como Funciona</a></li>
						<li><a href="">Soluçoes</a></li>
						<li><a href="">Planos</a></li>
						<li><a href="">Anonimato</a></li>
						<li><a href="">Suporte</a></li>
						<li><a href="">Termos e Condições</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3 class="titulosRodapeListas">Redes Sociais</h3>
					<ul>
						<li><a href="">Facebook</a></li>
						<li><a href="">Instagram</a></li>
						<li><a href="">Linkedin</a></li>
						<li><a href="">Blog</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<h3 class="titulosRodapeListas">Contato</h3>
					<div>
						<p>
							+55 11 4420-3172<br />
							fale@vaipe.com.br
						</p>
						<p>
							Vaipe Tecnologia e Corretagem de Seguros SA<br />
							Rua Pais Leme, 215, Torre Office, Sala 1215<br />
							Pinheiros, São Paulo - SP<br />
							CEP 05424-150
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="centralizar">
						<img src="img/logo_vaipe_negativo.svg" alt="" id="logo">
						<p>Pergunte, escute, melhore :)</p>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</body>
<script src="scripts/scripts.js"></script>
<script src="scripts/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="scripts/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>	