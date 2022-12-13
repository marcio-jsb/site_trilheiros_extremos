<?php
include("conexaosl.php");

$sql = "select * from evento";
$query = mysqli_query($mysqli, $sql);

?>
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
#teste div{float:left;
           margin:15px;}
#teste{margin:o auto;}
figcaption{text-align: justify;
          }
          table {margin:0 auto;
       }
table td {width: 200px;
          text-align: center;}
	
.nloguinho{
	position:absolute;
	left:1250px;
	top:40px;
}
.loguinho{
 position:absolute;
 top:40px;
 left:1160px;
}
input[type='submit']{
	width: 70px;
	background-color:#228B22;
	border-radius: 10px;
	
}
.evento{
	margin:15px;
 }  
.ativ {
     width: 200px;
	 height: 400px;
	 border: 2px solid black;
	 float: left;
	 margin: 20px;
	
	 background-image: linear-gradient(to bottom, white 70%, rgb(24, 183, 101) 30%);
	 


}
.cativ{
	position:absolute;
	left:20%;
	right:20%;

 } 
.areaevento{
	height:600px;
}
.botaoparticipar{text-align: center;}
.participar{
	text-align:center;
	margin: 0 auto;

}
.participar a{
	border:1px solid black;
	padding:10px;
	border-radius:10px;
	text-decoration:none;
	color:black;
	background-color: #63a56d;
}
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
		 <a href="index.php"> HOME </a>
		 <a href="quem_somos.php"> QUEM SOMOS </a>
		 <a href="servicos.php" style="color:#6B8E23; border-bottom: solid #6b8e23 3px;"> SERVIÇOS </a>
		
		 <a href="contato.php"> CONTATOS </a>
      </div>
	  <form  method="post" action="sairf.php?action=sair"><input class="loguinho" type="submit"  value="sair"></Form>
	  <p class="nloguinho"><?php SESSION_START(); 
	        echo $_SESSION['usuario'];
		    
	  ?></p>
	  </div>
	  <form>
	  
	 
      <BR><br><br><br><br>    <BR><br><br>
	  <div class="areaevento">
	  <h1><center> Participantes </center></h1>
<table width="500" border="1" align="center" >
<thead> 
<tr>
    <th>NOME</th>
    <th>EMAIL</th>
   
  


</tr>
</thead>
<?php
while($L = mysqli_fetch_array($query)) {
    $nome       = $L["nome"];
	$email      = $L["email"];
	
    echo"
<tbody>
  <tr>
    <td>$nome</td>
    <td>$email</td>
   
   
  </tr>
  </tbody>\n";
}  
?>  
</table>
      </div>
	<p class="participar"><a href="formevento.php">Participar</a></p>
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