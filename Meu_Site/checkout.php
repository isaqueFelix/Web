<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap.css">
		<style>
			.navbar{
				margin: 0;
			}
			.navbar .glyphicon{
				color: white;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Mirror Fashion</a>
				<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"><span class="glyphicon glyphicon-align-justify"></span></button>
			</div><!--Fim do .nav Header-->

			<ul class="nav navbar-nav collapse navbar-collapse">
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
				<li><a href="#">Perguntas Frequentes</a></li>
				<li><a href="#">Entre em contato</a></li>
			</ul>
		</nav>

		<div class="jumbotron">
			<div class="container">
					<h1>Ótima escolha!</h1>
					<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
		
			</div><!--Fim do .container Cabeçalho-->
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" alt="" class="img-thumbnail img-responsive">
							<dl>
								<dt>Produto</dt>
								<dd><?= $_POST['nome'] ?></dd>

								<dt>Preço</dt>
								<dd id="preco"><?= $_POST['preco'] ?></dd>

								<dt>Cor</dt>
								<dd><?= $_POST['cor'] ?></dd>

								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho']?></dd>
								
							</dl>

							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input class="form-control" type="number" id="qt" min="0" max="99" value="1">
							</div>
	
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt valor" id="total" class="form-control"><?= $_POST['preco'] ?></output>
							</div>
						</div>
					</div><!--Fim dos paineis-->
				</div>

				<form action="" class="col-sm-8" >
					<div class="row">
						<fildset class="col-md-6">
							<legend>Dados Pessoais</legend>
						
							<div class="form-group">
								<label for="nome">Nome completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">	
								</div>
								
							</div>

							<div class="form-group">
								<label for="cpf">CPF</label>
								<input data-mask="999.999.999-99" type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
							</div>

							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked>Quero receber spam da Mirror Fashion
								</label>
							</div>
						</fildset>

						<fildset class="col-md-6">
							<legend>Cartão de Crédito</legend>

							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input data-mask="9999 9999 9999 9999 - 999" type="text" class="form-control" id="numero-cartao" name="numero-cartao">
							</div>

							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
									<option value="master">Mastercard</option>
									<option value="visa">VISA</option>
									<option value="elo">Elo</option>
								</select>
							</div>

							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
							</div>
						</fildset>

					</div><!--Fim .rowFormularios-->
					
					<button type="submit" class="btn btn-primary btn-lg pull-right"><span class="glyphicon glyphicon-thumbs-up"></span> Confirmar Pedido</button>
				</form><!--Fim do formulário-->
			</div><!--Final.row-->
		</div><!--Final.container-->
		<script src="js/converteMoeda.js"></script>
		<script src="js/testeConversao.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/inputmask-plugin.js"></script>	
		<script src="js/total.js"></script>
	</body>
</html>