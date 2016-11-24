<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Camposol</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript">
    function cerrar_ventana(){ 
        window.close();
	 }
</script>
     <script language='JavaScript'> 

  function envia(elemento){
var valor = elemento.previousSibling.value;
var el_id = elemento.previousSibling.id;
window.location.href = '?valor='+ valor + '&id=' + el_id;
}

  </script> 	
<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
<!--[if lt IE 9]>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
<style type="text/css">
<!--
.white-shape .head-content div .Estilo71 {
	font-family: Arial, Helvetica, sans-serif;
}
.Estilo70{font-family:  Arial, Helvetica, sans-serif; font-size: 16px; font-weight:bold; color:#FC0;}
.Estilo71{ font-family::Arial, Helvetica, sans-serif; font-size:12px; color:#000;}
.Estilo72{ font-family::Arial, Helvetica, sans-serif; font-size:14px; color:#000; font-weight:bold;}
.Estilo711 {font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;}
.Formulario{background-color:#FFF; font-family:Arial, Helvetica, sans-serif;}
.box_form{border:solid #999 1px; background-color:#FFF;}
.blaco{ width:10px;}
.Espacio{height:5px;}
.BTN{ border:solid #999 1px; border-radius: 5px; background-color:#F4F4F4; width:70px;}
.box_form_n{border:solid #999 1px; background-color:#FFF; width:80px;}
-->
</style>
</head>
<body>
<div class="white-shape">
<!--==============================header=================================-->
<header>
  <div class="head-content">
     <div class="menu">
            <nav>
              <ul class="sf-menu">
                <li><a href="index.html">Inicio<span></span></a></li>
              <li class="current">
              <a>Datos</a>
                	<ul>
                      <li>
                      <a href="">Estaciones</a>
                      <ul>
                      <li><a href="nueva_estacion.php">Agregar</a></li>
                      <li><a href="modifica_estacion.php">Modificar</a></li>
                      </ul>
                      <li><a href="">Diagnóstico nutrimental por etapa</a>
                      <ul>
                      <li><a href="insertar_datos_peru_etapas.php">Agregar</a></li>
                      <li><a href="upload.php">Subir conjunto de datos</a></li>
                      <li><a href="insertar_datos_peru_modifica1.php">Modificar</a></li>
                      <li><a href="elimina_datos.php">Eliminar</a></li>
                      </ul>
                      </li>
                      </li>
                   </ul>
                </li>
                 <li> <a>Informe</a>
                	<ul>               
                      <li><a href="graficar_frut.php">Flor-Fruto</a></li>
                      <li><a href="graficar_flor.php">Foliar</a></li>                   
                      <li><a href="por_nutrimentos.php">Comparativo múltiples estaciones por etapa por nutrimento</a></li>
                      <li><a href="por_nutrimentos1.php">Evolución por nutrimento</a></li>
                      <li><a href="nutrimento_por_estacion.php">Evolución por nutrimento múltiples estaciones</a></li>
                   </ul>
                   </li>
                    <li>
                   <a>Estadística</a>
                    <ul>
                     <li><a href="historica_cam.php">Histórico de registros</a></li>
                     <li><a href="estadistica_cam.php">Estadísticas</a></li>
                     <li><a href="cuantificador.php">Cuantificador de muestreos</a></li>
                     <li><a href="consulta_estaciones.php">Gestor de estaciones</a></li>
                   </ul>
                   </li>
                   <li><a href="#"onclick="setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 1000);">Salir</a></li>
              </ul>
            <div class="clear"></div> 
          </nav>        
            
          <div class="clear"></div>
   </div>     
    <div class="logo" class="Formulario">
<h1><a href="index.html"><img src="images/logo.png" alt="" width="400" height="72"></a></h1>
      <p class="">Líder en la producción y exportación de paltas de la mejor calidad.</p>
      <div align="center" class="Formulario">
        <table width="1228" height="32" border="0" cellspacing="10">
          <div align="center">
            <div align="center"></div>
            
         <form action="upload1.php" method="post" enctype="multipart/form-data">
            <table width="545" align="center" cellspacing="10">
              <tr bgcolor="#FF9900"> 
              <td>
              <div>
  <input name="archivo" type="file" size="35" />
  </div>
  </td>
  <td width="50">&nbsp;</td>
  <td>
   <div align="center" class="BTN">
  <input name="enviar" type="submit" value="Upload File" />
  </div>
  </td>
  <td width="50">&nbsp;</td>
  <td >
  <input name="action" type="hidden" value="upload" /> 
  </td>   
</form></td>               
                        </tr>
              <tr>
                <td colspan="5" class="Estilo711">&nbsp;</td>
                              </tr>
              <tr>
                <td colspan="5" class="Estilo711">&nbsp;</td>
  </table></div>
    </header>    
      <!--==============================content================================--><!--==============================footer=================================-->
      <footer>
    
    <div class="container_12">
        <div class="grid_12">
        		<div class="line-1"></div>
              <p class="foot-text">Camposol &copy; 2013&nbsp;<img src="images/smalllogo.png" alt="" width="19" height="18" class="">&nbsp;<a href="index-6.html">derechos reservados, perÚ</a>&nbsp;<!-- {%FOOTER_LINK} --></p>
 
      </div>
        <div class="clear"></div>
  	</div>

   </footer> 
 </div>
</body>
</html>