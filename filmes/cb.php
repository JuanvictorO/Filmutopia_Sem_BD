<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<link rel="stylesheet" type="text/css" href="../css/corpo.css"/>
	<link rel="stylesheet" type="text/css" href="../css/geralID.css"/>
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css"/>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
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


<p class="titulo" id="dados">A Cabana</p>
	<div>
	<div class="align"  >
	<h3>Ficha Técnica</h3>
	Data de lançamento 6 de abril de 2017 <br><br>
Direção: Stuart Hazeldine<br><br>
Elenco: Sam Worthington, Octavia Spencer, Tim McGraw<br><br> 
Gênero Drama<br><br>
Nacionalidade EUA<br><br>
	</div>
	<img src="../img/cabana.jpeg" class="img" class="align"/>
	</div>
<p class="titulo2" id="sinopse"> Sinopse </p>
<p class="sinopse">Um homem vive atormentado após perder a sua filha mais nova, cujo corpo nunca foi encontrado, mas sinais de que ela teria sido violentada e assassinada são encontrados em uma cabana nas montanhas. Anos depois da tragédia, ele recebe um chamado misterioso para retornar a esse local, onde ele vai receber uma lição de vida.</p>
<p class="titulo2" id="trailer"> Trailer</p>
<iframe src="https://www.youtube.com/embed/tbpGAowldac" class="video"></iframe>


</main>
<footer class="footer">
	<p><strong> <a href="#">SOBRE</a> <span>Autores: Juan Victor e Ana Beatriz</span> 2017 </strong></p>
</footer>

</body>
</html>