<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" href="css/sobre.css">
	
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<title>Sobre a Mirror Fashion</title>
</head>
<body>
	<?php include("cabecalho.php");?>
	<!--Fim do cabeçalho-->
	<article class="container">
		<h1 class="titulo">A Mirror Fashion</h1>
		
		<section>
			<p>A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. 
			Fundada há <?php print date("Y") - 1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de 
			participação em 118 deles.
			</p>

			<iframe class="container" width="420" height="315" src="http://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allowfullscreen></iframe>

			<p>Nosso centro de distribuição fica em <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que 
			distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
			</p>

			<!--imagem centro de distribuição-->
			<figure id="centro-distribuicao">
				<img src="img/centro-distribuicao.png" alt="Centro de Distribuição">
				<figcaption>Centro de distribuição da Mirror Fashion</figcaption>
			</figure>

			<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="container" src="http://maps.google.com.br/maps?q=Jacarezinho&amp;output=embed"></iframe>

			<p>Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.php">nossa loja</a> ou entre em contato 
			se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.
			</p>	
		</section>
		<section>
			<!-- Inicio da seção da história-->
			<h2 id="historia">História</h2>
			<!--imagem familia pelho-->
			<figure id="familia-pelho">
				<img src="img/familia-pelho.jpg" alt="Familia Pelho">
				<figcaption>Familia Pelho</figcaption>
			</figure>
			<p>A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A 
			família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa, 
			revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão 
			administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado 
			de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
			</p>
			<p>O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. 
			Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões 
			de usuários diferentes, em bilhões de diferentes pedidos.
			</p>
			<p>O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do 
			Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do 
			Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e 
			nos escritórios em todo país.
			</p>
			<p>Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, 
			homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror 
			Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
			</p>
			<!-- Fim da seção História-->	
		</section>
		<section id="diferenciais">
			<!--Inicio da seção diferenciais-->

			<h2>Diferenciais</h2>

			<ul>
				<li>Menor preço do varejo, garantido</li>
				<li>Se você achar uma loja mais barata, leva o produto de graça</li>
				<li>Pague em reais, dólares, euros ou bitcoins</li>
				<li>Todas as compras com frete grátis para o mundo todo</li>
				<li>Maior comércio eletrônico de moda do mundo</li>
				<li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
				<li>Presente em 124 países</li>
				<li>Mais de um milhão de funcionários em todo o mundo</li>
			</ul>
			<!--Fim da seção diferenciais-->	
		</section>
		
	</article>
	
	<!--Rodapé-->
	<?php include("rodape.php");?>
	<!--Fim Rodapé-->
</body>
</html>