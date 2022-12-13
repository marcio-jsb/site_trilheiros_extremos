<html>
<head> 
<title>trilheiros extremos</title>
<link rel="stylesheet" href="estilo.css" type="text/css" />
<meta charset="utf-8">
<link rel="icon" type="imagem/png" href="img/logocortada.png" width="50px" height="50px" />
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<script language="JavaScript">
	function validaForm(){
          var tamanho_nome = document.forms["meuForm"].name.value.length;
		  if(tamanho_nome < 6 || tamanho_nome > 20)
		  {
			alert("o campo 'Nome' deve ter entre 5 e 20 caracteres." );
			return false;
		  }


		  var mEmail = document.forms["meuForm"].email.value;
		  if(mEmail.length < 5 || mEmail.length > 30 || mEmail.indexOf('@') == -1 || mEmail.indexOf('.') == -1)
		  {
			alert("O campo 'E-mail' deve ter preenchido corretamente.");
			return false;
		  }


		  var tArea = document.forms["meuForm"].message.value.length;
		  if(tArea < 360)
        {
           alert(" A mensagem precisa ter do minimo 360 caracteres");
		    return false;
		}
		  document.forms["meuForm"].submit();
	}
</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
@import url('https://fonts.googleapis.com/css?family=Quando');
@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300');

.content{justify-content: center}
.contato{width: 500px ;}
.form{display: flex; flex-direction: column}
.field{padding: 10px; margin-bottom: 15px; border: 1px solid #828282; border-radius: 8px; font-family: Roboto, Helvetica, sans-serif; font-size: 16px;}
.field2{padding: 10px; margin-bottom: 15px; border: 1px solid #6B8E23; border-radius: 8px; color:white; font-family: Roboto, Helvetica, sans-serif; font-size: 16px; background-color: #6B8E23;}
textarea{height: 150px; min-width: 500px; max-width:500px;}

#contato_t{
	font-family: 'Roboto', sans-serif;
	margin-left: 43%;
	width: auto;
	margin-top: 2%;}

#nloguinho{
	position:absolute;
	left:1250px;
	top:40px;}
#sairloguinho{
 position:absolute;
 top:40px;
 left:1160px;
}
 #loguinho input[type='submit'] {
	width: 70px;
	background-color:#228B22;
	border-radius: 10px;
	position:absolute;
	top:38px;
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
		 <a href="quem_somos.php"> QUEM SOMOS </a>
		 <a href="servicos.php"> SERVIÇOS </a>
		 <a href="contato.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> CONTATOS </a>
      </div>
	  <form  method="post" action="sairf.php?action=sair"><div id="loguinho"><input type="submit"  value="sair"></div></Form>
	  <p id="nloguinho"><?php SESSION_START(); 
	        echo $_SESSION['usuario'];
		    
	  ?></p>
   </div>

<br><br><br><br><br><br>

<h1 style="font-family: 'Roboto', sans-serif;margin-left: 44%;">Fale Conosco</h1>
<div id="form">
<section class="content">
	<div class="contato">
	
	<font size="4" face="Roboto" color="#4F4F4F">
	 Formulário<br/> <br/> </font>
	 
	 <form class="form" method="post" action="enviar_email.php" name="meuForm">
	 
	 <input class="field" name='name' placeholder="Nome"  required>
	 
	 <input class="field" name='email' placeholder="Email" required>
	
	 <textarea class="field" name='message' placeholder="Digite aqui sua mensagem" required>	 </textarea>
	 
	 <input class="field2"  onclick="validaForm()" type="submit" value="Enviar">

	 </form>
	</div>
</div>

<div id="icons">
	<div id="icons2"><img src="img/facebook.png"> <p>Trilheiros extremos</p> </div>
	<div id="icons2"><img src="img/115757-removebg-preview.png"> <p>matmarciojsb@gmail.com</p> </div>
	<div id="icons2"><img src="img/instagram.png"> <p>trilheiros@extremos</p> </div>
	<div id="icons2"><img src="img/downloadsap.png"> <p>(21)954331267</p> </div>
</div>

<hr class="hr"/>
<div id="contato_t"><h1>Localização</h1></div>

<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.279460544278!2d-43.23264858539865!3d-22.9767
		4884614684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd5b700b6191d%3A0xb1ae310fe7c55482!2sR.+Marqu%C3%AAs
		+de+S%C3%A3o+Vicente%2C+124+-+G%C3%A1vea%2C+Rio+de+Janeiro+-+RJ%2C+22451-041%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v156323
		1896395!5m2!1spt-BR!2sus" width="1024px" height="500px" frameborder="0" style="float:left; margin-left:6%; margin-top: 1%; border:0; border-radius: 15px;" allowfullscreen></iframe>	

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
