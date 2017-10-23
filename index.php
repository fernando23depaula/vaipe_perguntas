<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Vaipe</title>
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="stylesheet" href="css/perguntas.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="scripts/scripts.js"></script>
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
						<button type="button">Não</button>
						<button type="button">Sim</button>
						<p class="comentario">Tem algum comentário sobre sua reposta? <small>Opcional.</small></p>
						<div class="form-group"><input class="fonts_input" type="text" id="comentarioAlternativas" placeholder="Acredito que minha equipe seja de alta performance sim!"></div>
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
					<div class="pergunta">
						<h3>De 0 a 10, qual a probabilidade de você indicar um familiar ou amigo qualificado para uma vaga na sua empresa?</h3>
						<p class="border border-danger msg-error text-danger">Selecione uma das alternativas</p>
						<div class="btn-toolbar listaBotoesNotas" role="toolbar" aria-label="Toolbar with button groups">
						  <div class="btn-group mr-2" role="group" aria-label="First group" id="listaBotoes">
						    <button type="button" class="btn btn-secondary">1</button>
						    <button type="button" class="btn btn-secondary">2</button>
						    <button type="button" class="btn btn-secondary">3</button>
						    <button type="button" class="btn btn-secondary">4</button>
						    <button type="button" class="btn btn-secondary">5</button>
						    <button type="button" class="btn btn-secondary">6</button>
						    <button type="button" class="btn btn-secondary">7</button>
						    <button type="button" class="btn btn-secondary">8</button>
						    <button type="button" class="btn btn-secondary">9</button>
						    <button type="button" class="btn btn-secondary">10</button>
						  </div>
						</div>
						<p class="comentario">Tem algum comentário sobre sua reposta? <small>Opcional.</small></p>
						<div class="form-group"><input class="fonts_input" type="text" id="comentarioAlternativas2" placeholder="Estou bem engajado!"></div>
					</div>
				</div>
				<div class="tamanhoContainer">
					<button type="button" class="float-right enviarButton" id="enviarResposta2">Enviar</button>
					<div class="clearfix"></div>
				</div>
				<script>

				</script>
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
						<h3>Resposta enviada com sucesso!</h3>
						
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
</html>	