<html>
<head> <title>Trilheiros extremos</title>
<link rel="stylesheet" href="estilo.css" type="text/css" />
<meta charset="utf-8">
<link rel="icon" type="imagem/png" href="img/logocortada.png" width="50px" height="50px" />
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style>
/*Slider*/
#slider {overflow: hidden;}
#slider figure {position: relative;width: 625%;margin: 0;left: 0;animation: 20s slider infinite;}
#slider figure img {width: 16%;float: left;}

@keyframes slider {
	0% {left: 0;}
	20% {left: 0;}
	25% {left: -100%;}
	45% {left: -100%;}
	50% {left: -200%;}
	70% {left: -200%;}
	75% {left: -300%;}
	95% {left: -300%;}
	100%{left: -400%;}
}
.teste div{
	display: inline-block;
    margin:20px;
}

.teste {
	    margin:0 auto;
		width: 1260px;
		padding: 10px;
       }
figcaption{text-align: justify;
          }
	#nloguinho{
	position:absolute;
	left:1250px;
	top:40px;
}
#loguinho{
 position:absolute;
 top:40px;
 left:1160px;
}	
input[type='submit']{
	width: 70px;
	background-color:#228B22;
	border-radius: 10px;
	
}	
.content {
	    margin:0 auto;
		width: 1100px;
	
       }
.ilha{
	float:left;
	margin:20px;

	
}

.ilha img{
	width: 300px;
	height: 200px;
    
}
.ilha p{
    width:300px;
	text-align: justify;
    text-indent: 20px;
	background-color:rgb(206, 242, 230);
	padding:10px;
} 
.ilha h3{
	width:300px;
	background-color:rgb(206, 242, 230);
}
.ilha ul li{
	width:300px;
	background-color:rgb(206, 242, 230);
	padding:20px;
	list-style: none;
}
.imgrj {
	    margin:0 auto;
		width: 500px;
		
       }
.imgrj p{
    width:500px;
	text-align: justify;
    text-indent: 20px;
	background-color:rgb(206, 242, 230);
	padding:10px;
} 
.mtum{
	margin:0 auto;
	width: 1100px;

}
    



 
.mt{
	float:left;
	margin:20px;
}

.mt img{
	width: 300px;
	height: 200px;
    
}
.mt p{
    width:300px;
	text-align: justify;
    text-indent: 20px;
	background-color:rgb(206, 242, 230);
	padding:10px;
} 
.mt h3{
	width:300px;
	text-align: center;
    text-indent: 20px;
	background-color:rgb(206, 242, 230);
	padding:10px;
}
#pf{clear: both;}  
</style>
</head>

<body>


<div id="total">

<div id="topo">

      <div id="menu">
		<div id="logo">
		<a href="index.html">
		<img src="img/logotipo.png" width="110px" height="60px">
		</a>
        <p><h3>Trilheiros extremos</h3></p>
		</div>
		<div id="links">
		 <a href="index.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> HOME </a>
		 <a href="quem_somos.php"> QUEM SOMOS </a>
		 <a href="servicos.php"> SERVIÇOS </a>
		
		 <a href="contato.php"> CONTATOS </a>
      </div>
	  <form  method="post" action="sairf.php?action=sair"><input id="loguinho" type="submit"  value="sair"></Form>
	  <p id="nloguinho"><?php SESSION_START(); 
	        echo $_SESSION['usuario'];
		    
	  ?></p>
	 
	  </div>
	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
	 
</div>

<div id="banner">
   	
	<div id="slider">
			<figure>
                <img src="img/morro_caete.jpg" height="400px">
                <img src="img/pedra_gavea.jpg" height="400px">
                <img src= "img/pedra-branca-vista-do.jpg" height="400px">
                <img src= "img/do-topo-da-pedra-do-quilombo-em-jacarepagua-rio-de-janeiro_63139-635.jpg" height="400px">
                <img src="img/Pedra_Bonita.jpg" height="400px">
			</figure>
	</div>

	<script>
		var myIndex=0
		carousel();
		
		function carousel(){
		var i;
		var x= document.getElementsByClassName("mySlides");
		for(i=0;i < x.length; i++){
		  x[i].style.display ="none";
		}
		myIndex++;
		if(myIndex > x.length) {myIndex=1}
		x[myIndex-1].style.display = "block";
		setTimeout(carousel, 4000);//Change image every 0,10 seconds	 
		
		}
		</script>
	</div>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<br><br><br><br><br><br><br><br><br>
<div class="content">

 <div class="ilha">
	
	<img src="img/ILHAGRANDE.jpg">
	<p>No trekking de 7 dias, são realizadas caminhadas diárias e a média é de aproximadamente 14 km percorridos por dia. De fato, é bastante coisa, por isso a questão da preparação física é essencial. Ao longo do trekking, não somente são conhecidas mais de 20 praias, como também são vistas as principais vilas de Ilha Grande. O percurso atravessa pedaços da mata atlântica e proporciona contato com as mais diversas formas da natureza: rios, riachos, pedras, mata fechada, subidas, descidas, praias quase desertas. É, sem dúvidas, belíssimo.</p>
	<img src="img/mapa-ilha.png"><br><br><br><br>
 </div>

 <div class="ilha">
	
	<img src="img/trilhastranscariocas.jpg">
	<h3 style="text-align: center;">A Trilha Transcarioca cruza o Rio de Janeiro por um percurso de aproximadamente 180 km, saindo da Barra de Guaratiba até o Morro da Urca, aos pés do Pão de Açúcar.</h3>
	<p>Durante o seu trajeto, o visitante tem a oportunidade de apreciar atrativos naturais pouco conhecidos da cidade e descortinar a Cidade Maravilhosa de ângulos inusitados. A trilha pode ser percorrida na sua integralidade ou em seções, de acordo com o interesse, a aptidão e a disponibilidade de tempo de seus usuários.</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 </div>
	
 <div class="ilha">
	
	<img src="img/Travessia-Petropolis-Teresopolis-Nattrip-7dfef.jpg">
	<p>Sendo considerada por muitos como o trekking ou a caminhada de longo curso mais bonita do Brasil, a Travessia Petrópolis Teresópolis apresenta diversos mirantes e visuais de tirar o fôlego, com muitas subidas e descidas íngremes é considerada uma caminhada difícil e possui cerca de 32 km ligando o município de Petrópolis ao de Teresópolis. Tendo uma vivência em montanhas acima de 2.000m de altitude de forma intensa, segura e com excelentes companhias</p>
	<p>A Travessia Petrópolis Teresópolis geralmente é realizada em três dias, sendo o percurso dividido em:</p>
	<ul>
		<li>Sede do Parque Nacional da Serra dos Órgãos – Petrópolis x Castelos do Açú</li>
		<li>Castelos do Açú x Pedra do Sino</li>
		<li>Pedra do Sino x Sede Sede do Parque Nacional da Serra dos Órgãos – Teresópolis.</li>
	</ul>

 </div>			

 <br><br>

</div>
    

		<hr class="hr"/>
		<br>
	<div class="imgrj"><img src="img/rjtrilhar.jpg" width="500px"  height="300px">
	<p>Que a cidade do Rio de Janeiro é recheada de incríveis belezas naturais, todo mundo já sabe. Com isso, ela possui uma vasta rede de trilhas para você se aventurar, veja algumas trilhas do Rio de Janeiro a seguir.</p></div>
        <br>
		<div class="mtum">
		<div class="mt">	<img src="img/mtaum.jpg">
			<h3>Pico do Perdido</h3>
			<p>O Pico do Perdido é o principal símbolo do bairro Grajaú e faz parte do Maciço da Tijuca. Ele também é conhecido como Pedra do Andaraí ou ainda Pico do Papagaio, além de outros nomes menos comuns como Pedra do Grajaú, Andaraí Menor e Pão de Açúcar do Grajaú. 

			<br>Sua peculiar forma piramidal, em granito puro, chama atenção e pode ser admirada de todo bairro do Grajaú.</p>
		</div>	
		<div class="mt">	<img src="img/mtadois.jpg">
			<h3>Mirante da Cascatinha e Alto do Cruzeiro</h3>
			<p>O Mirante da Cascatinha está no Setor A do Parque Nacional da Tijuca. Recentemente,  ele recebeu uma nova estrutura para torná-lo ainda mais encantador e o caminho está muito bem sinalizado. 

				Dele é possível admirar uma bela vista da Cascatinha Taunay, do Morro do Conde, Pico da Tijuca e Andaraí Maior.
				
				O Alto do Cruzeiro não é um lugar que tem vista ou mirante. Na verdade, ele é um santuário a céu aberto que, hoje, é um atrativo histórico da floresta. Foi construído pelos escravos, pois eles não podiam participar das missas que eram realizadas na Capela Mayrink.</p>
		</div>
		
		<div class="mt">	<img src="img/mtatres.jpg">
			<h3>Mirante do Caeté</h3>
			<p>Com nome em Tupi, que significa “mata virgem”, este mirante fica localizado na Área de Proteção Ambiental da Prainha, um local cercado por encostas encobertas pela Mata Atlântica. De lá é possível ver a  praia da Macumba, a Pedra do Pontal, Recreio dos Bandeirantes e a Barra da Tijuca.

				Apesar da trilha exigir um certo grau de esforço, o local tem caminho bem definido e é bem sinalizado. Atenção: o Mirante do Caeté é bem exposto, tenha cuidado com os ventos fortes em determinadas épocas do ano. </p>
		</div>
		<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br><br><br>	<br>
		<div class="mt">	<img src="img/mtaquatro.png">
			<h3> Morro da Urca</h3>
			<p>Se você quer chegar até o Pão de Açúcar sem fazer o turista tradicional (via bondinho), o Morro da Urca é o caminho ideal. 

				A trilha Morro tem início em uma grande reentrância na Pista Claudio Coutinho, no canto esquerdo da Praia Vermelha (pista aberta diariamente das 7 as 18 horas). Caminhada fácil, pouco extensa, apesar de um pouco íngreme. Pode-se chegar lá no alto em mais ou menos uma hora.</p>
		</div>
		<div class="mt">	<img src="img/mtacinco.jpg">
			<h3>Circuito das Grutas</h3>
			<p>Um dos circuitos mais requisitados por aventureiros de todo o mundo é o Circuito das Grutas da Floresta da Tijuca. Ele é uma excelente experiência para quem gosta de se integrar à natureza e conhecer os recantos mais exclusivos e mágicos da área verde do Rio.</p>
		</div>
		<div class="mt">	<img src="img/mtaseis.jpg">
			<h3> Cascata Diamantina</h3>
			<p>A Cascata Baronesa foi aberta para visitação no fim de julho de 2016. Ela é um ótimo ponto de parada depois de uma trilha mais puxada como a do Circuito das Grutas, Bico do Papagaio ou Pico da Tijuca.</p>
			
		
		</div>
    </div>
	  <div id="pf"></div>

	

		<h2 class="mapa">Onde estamos</h2>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14704.498410825643!2d-43.35886127373203!3d-22.871855059296475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9962e0ea7680ef%3A0x774cd378e571e0f3!2sOswaldo%20Cruz%2C%20Rio%20de%20Janeiro%20-%20RJ!5e0!3m2!1spt-PT!2sbr!4v1663129030814!5m2!1spt-PT!2sbr"  width="750px" height="450px" frameborder="0" style="float:left; margin-left:6%; margin-top: 1%; border:0; border-radius: 15px;" allowfullscreen ></iframe>
	  
	  <div id="c1">
		<a href="servicos.php"><div class="container">
			<img src="img/montanhismo.jpg" alt="Avatar" class="image">
			<div class="overlay">Atividades</div>
		  </div></a>
		
		 <div class="container">
			<img src="img/trilhas.jpg" alt="Avatar" class="image">
			<div class="overlay">Encontros dos trilheiros</div>
		  </div>
		</div>

		
	 <div id="rodape">
	 
	  <div id="r1">
	
	  </div>  
	  
	  <div id="r2">
	  <div id="txt">
	  <br>
	  <p>Contatos<br>
	 </p>
	  <h3>Trilheiros extremos<br>
	  Tel (21) 985747278</h3>
	  </div>
	   
		<li><br><img src="img/facebook.png" width="26px" height="26px"> 
	   	<img src="img/instagram.png" width="26px" height="26px">  
		<img src="img/115757-removebg-preview.png" width="26px" height="26px"> 
		<img src="img/downloadsap.png" width="26px" height="26px">  </li>
		  
	  </div>
	  	  
	  <div id="r3"> <font face="Roboto" color="#808080">
	  <p>Desenvolvido por Hypertech. © Copyright 2020; Todos os direitos reservados </p> </font>
	  </div>
	   	 
	 </div>
	 	 
</div>	 
</body>
</html>
