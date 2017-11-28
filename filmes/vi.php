<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="../css/corpo.css"/>
	<link rel="stylesheet" type="text/css" href="../css/geralID.css"/>
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"/>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" media="(max-width: 769px)" href="../css/Rcorpo.css"/>
	<link rel="stylesheet" type="text/css" media="(max-width: 769px)" href="../css/RgeralID.css"/>
	<script type="text/javascript">
		$(function(){
			$("button").click(function(){
				$(".usus").fadeIn("slow");
			});
			$("button").blur(function(){
				$(".usus").fadeOut("slow");
			});
		});
	</script>


	<title>
		Filmutopia
	</title>
</head>
<body>

<header style="top: 0">
	<ul id="ul">
		<li><img src="../img/filme.jpeg" id="logo"/></li>
		<div class="menu-desktop">
		<li><h4><a href="#dados" class="as">Dados</a></h4></li>
		<li><h4><a href="#sinopse" class="as">Sinopse</a></h4></li>
		<li><h4><a href="#trailer" class="as">Trailer</a></h4></li>
		<li><h4><a href="#comentar" class="as">Comentários</a></h4></li>
		</div>
		
	
		
		</ul>
		
</header>
<main style="margin-top: 80px">

<p class="titulo" id="dados">Vikings</p>
	<div>
	<div class="align"  >
	<h3>Ficha Técnica</h3>

Criado por	Michael Hirst (2013)<br><br>
Com	Danila Kozlovsky<br><br>
País	EUA, Reino Unido, Irlanda<br><br>
Gênero	Aventura, Drama, Histórico<br><br>
Status	Em andamento
	</div>
	<img src="../img/vi.jpg" class="img" class="align"/>
	</div>
<p class="titulo2" id="sinopse"> Sinopse </p>
<p class="sinopse">Ragnar Lothbrok (Travis Fimmel) é o maior guerreiro da sua era. Lider de seu bando, com seus irmãos e sua família, ele ascende ao poder e torna-se Rei da tribo dos vikings. Além de guerreiro implacável, Ragnar segue as tradições nórdicas e é devoto dos deuses. As lendas contam que ele descende diretamente de Odin, o deus da guerra. </p>
<p class="titulo2" id="trailer"> Trailer</p>
<iframe src="https://www.youtube.com/embed/xdm7Z3TQhDg" class="video"></iframe>


</main>
<footer class="footer">
	<p><strong> <a href="#">SOBRE</a> <span>Autores: Juan Victor e Ana Beatriz</span> 2017 </strong></p>
</footer>

</body>
</html>