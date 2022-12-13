<html>
<head> <title>Trilheiros extremos</title>
<link rel="stylesheet" href="estilo.css" type="text/css" />
<meta charset="utf-8">
<link rel="icon" type="imagem/png" href="img/logocortada.png" width="50px" height="50px" />
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<style rel="stylesheet" type="text/css">
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

         
.text {margin:0 auto;
       width:1000px;
       background:rgba(148, 153, 133, 0.145);
       padding-top: 10px;
       box-shadow:-2px 0px 10px rgb(63, 89, 24),2px 0px 10px rgb(63, 89, 24);}

h1{text-align: center;
}

.text p{text-align: justify;
  text-indent:20px;
  padding:20px;}
table { margin-left:20px;}
table td{text-align: center;
        background-color:  rgb(128, 139, 103);}
        #nloguinho{
	position:absolute;
	left:1210px;
	top:30px;
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
</style>
</head>

<body>

<div id="total">
  <div id="menu">
		<div id="logo">
		<a href="index.html">
		<img src="img/logotipo.png" width="110px" height="60px">
		</a>
        <p><h3>Trilheiros extremos</h3></p>
		</div>
		<div id="links">
		 <a href="index.php"> HOME </a>
		 <a href="quem_somos.php"  style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> QUEM SOMOS </a>
		 <a href="servicos.php"> SERVIÇOS </a>
		
		 <a href="contato.php"> CONTATOS </a>
      </div>
      <form  method="post" action="sairf.php?action=sair"><input id="loguinho" type="submit"  value="sair"></Form>
	  <p id="nloguinho"><?php SESSION_START(); 
	        echo $_SESSION['usuario'];
		    
	  ?></p>
	 </div>
  <br><br><br><br><br><br><br>
	<div class="text">
    <h1>Quem somos</h1>
    <p>Somos um grupo de guias com anos de expêriencia em montanhismo. O montanhismo são atividades de rapel e caminhada em trilha, as atividades são realizadas geralmente aos finais de semana.O grupo tambem possue os seguintes cursos: rapel, primeiros socorros e montanhismo.So admitimos guias que tenha realizado trilhas durante anos e cursos feitos da area. </p>
    <br>
    <hr>
    <br>
    <p>Motivos para pratica de montanhismo:</p>

    <table>
   <tr><td>atividades</td><td>o guia só pode marcar atividade se tiver feito antes</td></tr>
   <tr><td>segurança</td><td>os guias possuem o material necessario para minimizar ao maximo os riscos e tambem passam as informações necessarias.</td></tr>
   <tr><td>saúde</td><td>proporciona bem estar</td></tr>
   <tr><td>dificuldades</td><td>São marcadas várias atividades com diferentes niveis de dificuldades.Os niveis das atividades variam de leve a pesado. </td></tr>
  
    </table>
   <br>
   <h1> benefícios de fazer trilhas:</h1>
    <dl>
    <dt> Conhecer lugares incríveis</dt>
    
   <dd> As trilhas são uma ótima maneira de conhecer novos lugares e estar junto a natureza. O Brasil possui muita beleza natural, explore e conheça também através de trilhas.<dd>
    
     
    <dt>Felicidade e bem-estar</dt>
    
    <dd>Sair da rotina já é motivo para melhorar o humor e deixar as pessoas mais felizes. Se for junto a natureza, melhor ainda!</dd>
    
    <dd>Um estudo publicado na revista internacional Landscape and Urban Planning mostrou que pessoas que caminharam 50 minutos em meio a natureza relataram se sentir menos ansiosas e mais felizes em comparação com outras que andaram perto de veículos.</dd>
    
     
    <dt>Coração saudável</dt>
    
    <dd>Ao fazer trilhas você tem um risco menor de contrair doenças cardíacas já que o exercício estimula o sistema cardiovascular fazendo com que o coração bombeie mais sangue para o corpo. Os vasos e artérias também ficam mais flexíveis, saudáveis e com uma menor probabilidade de problemas.</dd>
    
     
    
     
     
     
    <dt>Preparação para outros esportes</dt>
    
    <dd>A caminhada e a corrida melhoram o condicionamento físico, portanto fazer trilhas pode ajudar no seu desempenho ao realizar outras atividades esportivas.</dd>
    
     
    <dd>Pernas mais torneadas e abdomen fortalecido</dd>
    
    <dd>Como muitas trilhas contém trechos de subidas e descidas, essa é uma ótima combinação de estímulos para as pernas, exercitando toda a parte inferior que inclui glúteos, quadríceps e outros músculos.</dd>
    
    <dd>Ao caminhar em terrenos mais duros e inclinados exige-se que os músculos do abdômen trabalhem mais para manter o seu corpo estabilizado e reto.</dd>
    
     
    <dt>Capacidade de improvisar</dt>
    
    <dd>Cenários diferentes e se deparar com novas situações a todo momento são estímulos incríveis para se fazer trilhas. Ao fazer uma trilha você se adapta a novos trajetos, improvisa maneiras diferentes de passar por obstáculos. São dificuldades vencidas de uma forma prazerosa e que muitas vezes trazem aquela sensação incrível de que todo o esforço valeu a pena ao ver uma linda cachoeira, aquela paisagem incrível do alto da montanha.</dd>
    
     
    <dt>Combate a insônia, a ansiedade e a depressão</dt>
    
    <dd>A prática de atividades físicas regulares pode ajudar muito nesses quesitos. Mas a trilha traz estímulos extras com o contato com a natureza e superação de desafios, ajudando muito nesses problemas e melhorando a qualidade de vida no geral.</dd>
    
     
    
    <dt>Fazer novas amizades</dt>
    
    <dd>Convidar amigos para fazer uma trilha com você é incrível, mas que tal participar de grupos de trilhas e fazer novos amigos? As experiências trocadas com novas pessoas podem te trazer dicas de outras trilhas, conhecer histórias e quem sabe uma nova parceria para as próximas trilhas?</dd>
    
     
    <dt>Desafiar os próprios limites</dt>
    
    <dd>A sensação de vencer um novo desafio é maravilhosa. Fazer trilhas pode causar um certo vício (do bem!), você começa por trilhas mais rápidas e de fácil intensidade e vai querendo mais, desafiando os seus limites e percorrendo novos caminhos com novos desafios e aventuras.</dd>
   </dl>
     
    <p>Bom, esses são só alguns dos benefícios de fazer trilhas, esperamos que tenham gostado de saber um pouco mais sobre o assunto.</p>
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
			  
	

</div>	 
</body>
</html>


