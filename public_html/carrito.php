<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GameZone | Carrito</title>
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
            	<center><h1>COMPRAS REALIZADAS</h1></center>
                <div class="FR"></div>
                <div class="categorias">
 <br>
    <p style=" text-align:center; margin-bottom:10px; clear:both;"><br /><a href="javascript:history.back(1)">ATRAS</a>   
      <br>
    <table width="90%"  height="90%"border="1" align="center" id="tablacarrito">
<tr align="center" style="background-color:#085e55; color:#fff">
    <td width="27%">PRODUCTO</td>
    <td width="18%">PRECIO</td>
    <td width="37%">CANTIDAD</td>
    <td width="18%">TOTAL</td>
  </tr>
  <?php
  if(isset($_SESSION['carrito'])){
	  $total=0;

for($i=0;$i<=count($compras)-1;$i++){
	
	if($compras[$i]!=NULL){

	
  ?>
  <tr align="center">
    <td required><?php echo $compras[$i]['nombre']; ?></td>
    <td><?php echo $compras[$i]['precio']; ?></td>
    <td>
      <form name="form1" method="post" action="">
      <input type="hidden" name="id" id="id" value="<?php echo $i;?>" >
      <input type="text" name="cantidadactualizada" value="<?php echo $compras[$i]['cantidad'];?>"  size="2" required>
      <span id="toolTipBox" width="200"></span>
        <input type="image" name="actualizar" id="actualizar" src="imagenes/actualizar.gif" onmouseover="toolTip('Presione para actualizar su pedido',this)">
      </form></td>
    <td>
	<form method="post" action=""><?php echo $compras[$i]['cantidad'] * $compras[$i]['precio'];?>
    <span id="toolTipBox" width="200"></span>
       <input name="id2" type="hidden" id="id2" value="<?php echo $i;?>"> 
               <input type="image" name="imageField" id="imageField" src="imagenes/eliminar.gif" onmouseover="toolTip('Presione para eliminar su pedido',this)"></form></td>
  </tr>
  <?php
  $total= $total+($compras[$i]['cantidad'] * $compras[$i]['precio']);
}
  }
  }else{
    echo "No hay productos en el carrito";
  }
  ?>


  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><p>&nbsp;</p>
      <p>TOTAL A PAGAR::</p></td>
    <td><p>&nbsp;</p>
    <p><?php if(isset($_SESSION['carrito'])){ echo "$ ".$total." Dolares ";}?></p>
    </td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td>
      <input type="submit" name="button" id="button" value="Enviar Pedido">
    </form></td>
  </tr>
    </table>
</div>
        </div>
   	</div>

    <div id="pie">
    <p>GameZone | Tecnológico de Estudios Superiores de Ixtapaluca |  2017.</p>
    </div>
    </div>
</body>
</html>