var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner(){
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.destaque img').src = banners[bannerAtual];
}

var timer = setInterval(trocaBanner, 4000);
var controle = document.querySelector('.pause');

controle.onclick = controlaBannner;

function controlaBannner(){
	if(controle.className = 'pause'){
		clearInterval(timer);
		controle.className = 'play';
		controle = document.querySelector('.play');
	} 
	else if (controle.className = 'play'){
		timer = setInterval(trocaBanner, 4000);
		controle.className = 'pause';
		controle = document.querySelector('.pause');
	}

}
$('.novidades').addClass('painel-compacto');
$('.mais-vendidos').addClass('painel-compacto');
$('.novidades button').click(function(){
	$('.novidades').removeClass('painel-compacto');
});
$('.mais-vendidos button').click(function(){
	$('.mais-vendidos').removeClass('painel-compacto');
});

