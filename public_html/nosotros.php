<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GameZone</title>
<link href="css/estilo.css" type="text/css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
<script src="jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>  
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>

<style type="text/css">
<!--
body,td,th {
	color: #333;
}
-->
</style></head>
<body>
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Bienvenido a GameZone</h1>
				<h2>Tienda de juegos para Android</h2>		
				<p class="grey">Bienvenido a GameZone, puedes iniciar sesión para iniciar tus compras, en caso contrario, puedes registrarte</p>
				
				
			</div>
			<div class="left">
				<!-- Login Form -->
					<?php
					if ( ! empty($_SESSION["usuario"]) ) {
						echo '<a href="cerrar_sesion.php">Cerrar Sesion</a> ';
					} else {
						echo '
						<form class="clearfix" action="index2.php" method="post">
					<h1>Miembros</h1>
					<label class="grey" for="log">Usuario:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">Contraeña:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Recordarme</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Entrar" class="bt_login" />
					<a class="lost-pwd" href="#">¿A perdido su contraseña?</a>
				</form>
						';
					}
				?>
			</div>
			
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hola <?php if (!isset($_SESSION["usuario"])) {
			echo "Invitado";}else {echo $_SESSION["usuario"];} ?></li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#"><?php if (!isset($_SESSION["usuario"])) {
			echo "Entrar";}else {echo "Salir"; } ?></a>
				<a id="close" style="display: none;" class="close" href="#">Cerrar Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div>
<div id="total">


   	<div id="contenido">
   	  <div id="cabecera">
            <div id="nav">
    	<ul>
       <li><a href="index.php" class="main">Inicio</a></li>
        <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
         <li><a href="nosotros.php" class="main">Acerca de GameZone</a></li>
         <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
         <li><a href="videos.php" class="main">Videos</a></li>
         <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
          <li><a href="videojuegos.php" class="main">Videojuegos</a></li>
          <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
           <li><a href="contacto.php" class="main">Contacto</a></li>
            <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
           <li><a href="carrito.php" class="main">Carrito</a></li>
           <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
           <li><a href="realidad.php" class="main">VR</a></li><li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
           <li><a href="realidad2.php" class="main">VR2</a></li>
           <li><img src="img/naviseparator.gif" alt="" width="40" height="13" /></li>
           <li><a href="realidad3.php" class="main">VR3</a></li>
        </ul>
	</div>
            	<div class="FL"><img src="img/nosotros.jpg"/></div>      
      </div>
<div id="historia" style=" clear:left; line-height:40px; font-size:18px; text-align:center">
<br />
<p>Gamezone es creado con el fin de ofrecer mejores alternativas a las tiendas digitales convencionales ofrecidas para el mercado móvil.</p>
<p>En GameZone, encontrarás los videojuegos del momento, a excelente precio y sobre todo, cuidando tu ecónomia.</p>
<p>Sé bienvenido a esta nueva experiencia de compras.</p><br></div><br />
    
    </div>
    <div id="pie" >
    <p>GameZone | Tecnológico de Estudios Superiores de Ixtapaluca |  2017.</p>
    </div>
</body>
</html>
