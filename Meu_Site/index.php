<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilos.css">

	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<title>Mirror Fashion</title>
</head>
<body>
	<!-- Cabeçalho -->
	<?php include("cabecalho.php"); ?>
	<!--Fim do cabeçalho-->
	<!--Seção principal-->
	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>

			<form action="">
				<input type="search">
				<input type="image" src="img/busca.png">
			</form>
		</section><!--Fim da .busca-->
		<section class="menu-departamentos">
			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					</li>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section><!--Fim dos departamentos-->
		<a href="#" class="pause"></a>
		<img src="img/destaque-home.png" alt="Promoção: Big City Night">
	</div><!--Fim do container .destaque-->
	
	<div class="container paineis">
		
		<!-- Seção Novidades-->
		<section class="painel novidades">
			<h2>Novidades</h2>

			<!-- lista anterior sem PHP
			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura7.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura8.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura9.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura11.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura12.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>							
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura3.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura4.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura6.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			-->

			<ol>
				<?php
					$conexao = mysqli_connect("127.0.0.1", "root", "", "test");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data Desc LIMIT 0, 12");

					while($produto = mysqli_fetch_array($dados)):
				?>
				<li>
					<a href="produto.php?id=<?= $produto['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
							<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
						</figure>
					</a>
				</li>
				<?php endwhile; ?>
			</ol><!--Lista com PHP-->

			<button type="button">Mostra mais</button>
		</section>
		<!-- Fim seção novidades-->
		<!-- Seção Mais Vendidos-->
		<section class="painel mais-vendidos">
			<h2>Mais vendidos</h2>
			<!-- Lista anterior sem PHP
			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura7.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura8.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura9.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura11.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura12.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>							
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura3.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura4.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura6.png" alt="">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>
			-->
			
			<!--lista com PHP-->
			<ol>
				<?php
					$conexao = mysqli_connect("127.0.0.1", "root", "", "test");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas LIMIT 0, 12");

					while($produto = mysqli_fetch_array($dados)):
				?>
				<li>
					<a href="produto.php?id=<?= $produto['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= $produto['nome'] ?>">
							<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
						</figure>
					</a>
				</li>
			<?php endwhile; ?>
			</ol><!--Lista com PHP-->
			<button type="button">Mostra mais</button>
		</section>
		<!-- Fim seção mais vendidos-->

	</div><!--Fim do container paineis-->

	<!--Fim da seção principal-->

	<!--Rodapé-->
	<?php include("rodape.php");?>
	<!--Fim Rodapé-->
	<script src="js/jquery.js"></script>
	<script src="js/converteMoeda.js"></script>	
	<script src="js/testeConversao.js"></script>
	<script src="js/estilo.js"></script>
</body>
</html>