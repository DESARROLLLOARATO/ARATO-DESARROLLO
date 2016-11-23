<?php
$ids = $_GET["id"];
$OK = $_GET["OK"];
?>
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
    <script  type="text/javascript">
	
function cambiaCapa (valor) 

{

if (valor=="foliar") 

{

capa.className = "visible";

capa1.className = "oculto";

capa3.className = "visible";

capa2.className = "oculto";

capa6.className = "visible";

capa5.className = "oculto";

} else 

{

capa.className = "oculto";

capa3.className = "oculto";

capa1.className = "visible";

capa2.className = "visible";

capa5.className = "visible";

capa6.className = "oculto";

}

}
    </script>
    
    <script type="text/javascript">

	function pagoOnChange(sel) {
      		 
		   if (sel.value=="1"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
	   if (sel.value=="2"){
		    divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		   
	  }
		 if (sel.value=="3"){
		  	divT = document.getElementById("mfruta");
             divT.style.display = "block";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "block";
	  }
	 if (sel.value=="4"){
		  	 divT = document.getElementById("mfruta");
             divT.style.display = "block";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "block";
		  
	  }
	  if (sel.value=="5"){
		  	 divT = document.getElementById("mfruta");
             divT.style.display = "block";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "block";
	  }
	   if (sel.value=="6"){
		  	 divT = document.getElementById("mfruta");
             divT.style.display = "block";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "block";
	  }
	  if (sel.value=="7"){
		  	  divT = document.getElementById("mfruta");
             divT.style.display = "block";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "block";
	  }
	  if (sel.value=="8"){
		  	  divT = document.getElementById("mfruta");
             divT.style.display = "block";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta");
             divT.style.display = "block";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta");
             divT.style.display = "block";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta");
             divT.style.display = "block";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "block";
	  }
	  if (sel.value=="35"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
	  if (sel.value=="70"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
	 if (sel.value=="105"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
	  if (sel.value=="140"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
	  if (sel.value=="175"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
	  if (sel.value=="210"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
	  if (sel.value=="245"){
			 divT = document.getElementById("mfruta");
             divT.style.display = "none";
			 divT = document.getElementById("mfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta");
             divT.style.display = "none";
			 divT = document.getElementById("pfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta");
             divT.style.display = "none";
			 divT = document.getElementById("lfruta1");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta");
             divT.style.display = "none";
			 divT = document.getElementById("dfruta1");
             divT.style.display = "none";
		  
	  }
} 	

</script>
<script type="text/javascript">
      		 
		   function pagoOnChange1(sel) {
      		 
		   if (sel.value=="fruta"){
		     divT = document.getElementById("capa3");
             divT.style.display = "block";
			 divT = document.getElementById("capa4");
             divT.style.display = "block";
			 divT = document.getElementById("capa");
             divT.style.display = "none";
			 divT = document.getElementById("capa2");
             divT.style.display = "none";
			 
		  
	  }
	   if (sel.value=="foliar"){
		     divT = document.getElementById("capa");
             divT.style.display = "block";
			 divT = document.getElementById("capa2");
             divT.style.display = "block";
			 divT = document.getElementById("capa3");
             divT.style.display =  "none";
			 divT = document.getElementById("capa4");
             divT.style.display = "none";
		   
	  }
		 

		 
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
.Estilo73{font-family:  Arial, Helvetica, sans-serif; font-size: 18px; font-weight:bold; color:#FC0;}
.Estilo711 {font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#000;}
.Formulario{background-color:#FFF; font-family:Arial, Helvetica, sans-serif;}
.box_form{border:solid #999 1px; background-color:#FFF;}
.box_form_n{border:solid #999 1px; background-color:#FFF; width:80px;}
.blaco{ width:10px;}
.Espacio{height:5px;}
.BTN{ border:solid #999 1px; border-radius: 5px; background-color:#F4F4F4; width:50px;}

*.visible {

display:block;

}



*.oculto {

display:none;

}
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
      </div>
      <div align="center">
    <p align="left" class="">&nbsp;</p>
    <p align="left" class="">&nbsp;</p>
    <p  align="center" class="Estilo70" >[DATOS] Agregar diagnóstico nutrimental por etapa</p>
    
    <p align="left" class="">&nbsp;</p>
    <p align="left" class="">&nbsp;</p>
    </div>
      <div align="center" class="Formulario">
        <table width="1228" height="32" border="0" cellspacing="10">
          <div align="center">
            <div align="center"></div>
            
          <form id="form1" name="form1" method="post" action="data_etapas.php">
            <table width="600" align="center" cellspacing="10">
              <tr bgcolor="#FF9900">
                <td height="25" colspan="5" align="center"><span class="Estilo72" aling="center">Datos Generales</span></td>
              </tr>
              <tr><td>&nbsp;</td></tr>
               <?php
				error_reporting(E_ERROR);
				include "variables.php";
				$status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
   
    if ($archivo != "") {
        // guardamos el archivo a la carpeta files
        $destino =  "file/".$prefijo."_".$archivo;
        if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = "Archivo subido: <b>".$archivo."</b>";
        } else {
            $status = "Error al subir el archivo";
        }
    } else {
        $status = "Error al subir archivo";
    }
}
/*
$row = 1; 
$handle = fopen($archivo, "r");  
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {  
    $num = count($data);  
    $row++; 
    $cadena = "insert into data_flor_fruto(ID, ptg, patron, estado, situacion, diametro, longitud, pesof, porcentaje, campania, E1, edad, FM, N, P, K, Ca, Mg, S, Fe, Cu, Mn, Zn, B, Mo, Na, Cl) values(null,";  
    for ($c=0; $c < $num; $c++) {  
        if ($c ==($num-1)) 
              $cadena = $cadena."'".$data[$c] . "'"; 
        else 
              $cadena = $cadena."'".$data[$c] . "'"; 
    } 

    $cadena = $cadena.");"; 

} 

fclose($handle);*/  
$ids="";
$raz="";
$ptr="";
$situa="";
$ddf="";
$pct="";
$dia="";
$anch="";
$mo="";
$temp="";
$fm="";
$edad="";
$f1="";
$n="";
$p="";
$k="";
$ca="";
$mg="";
$s="";
$fe="";
$cu="";
$mn="";
$zn="";
$b="";
$mo="";
$na="";
$cl="";
$id="";

$file = file_get_contents($destino);
$separador = explode(",",$file);

$ids=$separador[0];
$raz=$separador[1];
$ptr=$separador[2];
$situa=$separador[3];
$ddf=$separador[4];
$pct=$separador[5];
$dia=$separador[6];
$anch=$separador[7];
$mo=$separador[8];
$temp=$separador[9];
$fm=$separador[10];
$edad=$separador[11];
$f1=$separador[12];
$n=$separador[13];
$p=$separador[14];
$k=$separador[15];
$ca=$separador[16];
$mg=$separador[17];
$as=$separador[18];
$fe=$separador[19];
$cu=$separador[20];
$mn=$separador[21];
$zn=$separador[22];
$b=$separador[23];
$mo=$separador[24];
$na=$separador[25];
$cl=$separador[26];
$id=$separador[27];

?>
              <tr>
              <?php
			  include "variables.php";   
              $con= mysql_connect($hostname,$user,$pass);
              if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
              $database = mysql_select_db("pruebaar_peru_prueba",$con);
              if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());} 
   			
			$sql="SELECT * FROM Estacions ORDER BY estacion";
            $resultado = mysql_query($sql);
			  ?>
                <td nowrap="nowrap" class="Estilo711" width="80"><div align="left">Estación: </div></td>
                <td nowrap="nowrap"><div align="left">
                        <select size="1" name="id" id="id">
                        <option value="0">&lt; Seleccione&gt;</option>
                         <?php 
  								while($fila=mysql_fetch_array($resultado)) {
								$s = ($fila["id"]==$ids?"selected='selected'":"");
								 echo "<option value='".$fila["id"]."'".$s.">".$fila["estacion"]."</option>"; 
  								}
							?>
                          </select>
                        </div></td>
                <td width="20">&nbsp;</td>
                <?php
   
                   $seleccionado = "";
   
                   if($_SERVER['REQUEST_METHOD']=='GET')
                    {
                       $seleccionado = $situa;
                    }
					$datos = array(
					"foliar"=>"foliar", 
					"fruta"=>"fruta");
                   ?>
                <td colspan="1" width="95" class="Estilo71"><div align="left"><span class="Estilo71">Seleccione una opción:</span></div></td>
                <td nowrap="nowrap"><div align="left">
                        <select size="1" name="situa" id="situa" onChange="pagoOnChange1(this)">
                          <option>&lt; Seleccione&gt;</option>
                          <?php
              foreach($datos as $key=>$value){
			if($situa==$key)
              {
            echo "<option value='".$key."' selected>".$value."</option>";
        }else{
            echo "<option value='".$key."'>".$value."</option>";
        }
         }
      
      ?>
                          </select>
                        </div></td>
                <td width="50">&nbsp;</td>
                <td width="70" class="Estilo71" nowrap="nowrap"><div align="left">
              </div></td>
              </tr>
              </table>
             <table width="600" align="center" cellspacing="10">
              <tr class="Espacio"><td><div align="center">
              </div></td></tr>
              <tr>
              <td width="50">&nbsp;</td>
              <td width="50">&nbsp;</td>
              <td width="50">&nbsp;</td>
              <td width="50">&nbsp;</td>
               <td width="50">&nbsp;</td>
                <td width="50">&nbsp;</td>
              <td colspan="1" width="95" class="Estilo71"><div align="left" id="capa" style="display:none;"><span class="Estilo71">Días de follaje :</span></div></td>
                <td nowrap="nowrap"><div align="left" id="capa2" style="display:none;">
                        <select size="1" name="ddf1" id="ddf1" onChange="pagoOnChange(this)">
                          <option selected="selected">&lt; Seleccione&gt;</option>
                          <option value="35">35 Días</option>
                          <option value="70">70 Días</option>
                          <option value="105">105 Días</option>
                          <option value="140">140 Días</option>
                          <option value="175">175 Días (Anual)</option>
                          <option value="210">210 Días</option>
                          <option value="245">245 Días</option>
                          </select>
                        </div></td>
                        <td  colspan="1" width="95" class="Estilo71"><div align="left" id="capa3" style="display:none;"><span class="Estilo71">Estado Fruta:</span></div></td>
                <td nowrap="nowrap"><div align="left" id="capa4" style="display:none;">
                        <select size="1" name="ddf" id="ddf" onChange="pagoOnChange(this)">
                          <option selected="selected" value="0">&lt; Seleccione&gt;</option>
                          <option value="1">PP(S-9)</option>
                          <option value="2">Antesis</option>
                          <option value="3">Cuaja de fruto</option>
                          <option value="4">Tamaño aceituna</option>
                          <option value="5">Crecimiento 1</option>
                          <option value="6">Crecimiento 2</option>
                          <option value="7">Crecimiento 3</option>
                          <option value="8">Cosecha</option>
                          </select>
                        </div></td>
                        </tr>
                        </table>
                        <table align="center"><div align="center">
                        <tr>
                        <td  colspan="1" width="95" class="Estilo71"></td>
                        <td  colspan="1" width="95" class="Estilo71"></td>
                        <td  colspan="1" width="95" class="Estilo71"></td>
                        <td  colspan="1" width="95" class="Estilo71"></td>
                        <td align="center">
             <table align="center"> 
  <tr>
  <td align="center"><div align="left" id="dfruta1" class="Estilo71" style="display:none;">D. Ecuatorial</div></td>
  <td align="left"><div align="left" id="dfruta" class="box_form" style="display:none;">
    <input type="text" name="die" id="die" />
  </div></td>
  <td align="left"><div align="left" id="lfruta1" class="Estilo71" style="display:none;">Longitud</div></td>
  <td align="left"><div align="left" id="lfruta" class="box_form" style="display:none;">
    <input type="text" name="lg" id="lg" />
  </div></td>
  </tr>
  <tr>
              <td>&nbsp;</td>
              </tr>
  <tr>
  <td align="left"><div id="pfruta1" align="left" class="Estilo71" style="display:none;">Peso</div></td>
  <td align="left"><div id="pfruta" align="left" class="box_form" style="display:none;">
    <input type="text" name="pesof" id="pesof" />
 </div></td>
  <td align="left"><div align="left" id="mfruta1" class="Estilo71" style="display:none;">% MS</div></td>
  <td align="left"><div align="left" id="mfruta" class="box_form" style="display:none;"><input type="text" name="ms" id="ms" />
  </div></td>
  </tr>
 </table>
            </td> </tr>
             </div></table>
            <table align="center">
               <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td width="95" class="Estilo71" nowrap="nowrap">Raza :</td>
                <?php
				
			  include "variables.php";   
              $con= mysql_connect($hostname,$user,$pass);
              if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
              $database = mysql_select_db("pruebaar_peru_prueba",$con);
              if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());} 
   			
			$sql="SELECT * FROM Estacions ORDER BY estacion";
            $resultado = mysql_query($sql);
			  ?>
                <td nowrap="nowrap"><div align="left">
                        <select size="1" name="ptg" id="ptg">
                          <option selected="selected">&lt; Seleccione&gt;</option>
                          <?php 
  								while($fila=mysql_fetch_array($resultado)) {
								$s = ($fila["id"]==$ids?"selected='selected'":"");
								 echo "<option value='".$fila["raza"]."'".$s.">".$fila["raza"]."</option>"; 
  								}
							?>
                          </select>
                        </div></td>
                        <td width="50">&nbsp;</td>
                         <td width="95" class="Estilo71" nowrap="nowrap">Patrón :</td>
                <?php
			  include "variables.php";   
              $con= mysql_connect($hostname,$user,$pass);
              if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
              $database = mysql_select_db("pruebaar_peru_prueba",$con);
              if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());} 
   			
			$sql="SELECT * FROM Estacions ORDER BY estacion";
            $resultado = mysql_query($sql);
			  ?>
                <td nowrap="nowrap"><div align="left">
                        <select size="1" name="ptr" id="ptr">
                          <option selected="selected">&lt; Seleccione&gt;</option>
                          <?php 
  								while($fila=mysql_fetch_array($resultado)) {
								$s = ($fila["id"]==$ids?"selected='selected'":"");
								 echo "<option value='".$fila["patron"]."'".$s.">".$fila["patron"]."</option>"; 
  								}
							?>
                          </select>
                        </div></td>
                        </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr><?php
   
                   $seleccionado = "";
   
                   if($_SERVER['REQUEST_METHOD']=='GET')
                    {
                       $seleccionado = $temp;
                    }
					$datos = array(
					"2010-2011"=>"2010-2011", 
					"2011-2012"=>"2011-2012", 
					"2012-2013"=>"2012-2013", 
					"2013-2014"=>"2013-2014",
					"2014-2015"=>"2014-2015",
					"2015-2016"=>"2015-2016",
					"2016-2017"=>"2016-2017",
					"2017-2018"=>"2017-2018",
					"2018-2019"=>"2018-2019",
					"2019-2020"=>"2019-2020",
					"2020-2021"=>"2020-2021");
                   ?>
               <td colspan="1" width="95" class="Estilo71"><div align="left"><span class="Estilo71">Campaña:</span></div></td>
                <td nowrap="nowrap"><div align="left">
                        <select size="1" name="cma" id="cma">
                          <option>&lt; Seleccione&gt;</option>
                          <?php
              foreach($datos as $key=>$value){
			if($temp==$key)
              {
            echo "<option value='".$key."' selected>".$value."</option>";
        }else{
            echo "<option value='".$key."'>".$value."</option>";
        }
         }
      
      ?>
                          </select>
                        </div></td>
                <td width="50">&nbsp;</td>
                <?php
				$ids = $_GET["ids"];
				$cma = $_GET["cma"];
			  include "variables.php";   
              $con= mysql_connect($hostname,$user,$pass);
              if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
              $database = mysql_select_db("pruebaar_peru_prueba",$con);
              if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());} 
   			
			$sql="SELECT E1 FROM data_flor_fruto where id='$id' AND campania='$temp'";
            $resultado = mysql_query($sql);
			  ?>
                <td class="Estilo711"><div align="left">Fecha(E1)</div></td>
                <td colspan="1"><div align="left" class="box_form">
                <?php
              if ($row=mysql_fetch_array($resultado)){
                 echo"<input name='e1' type='text' id='e1' size='20' maxlength='20' value=".$row["E1"].">";
				 }
				 else{
				 echo"<input name='e1' type='text' id='e1' size='20' maxlength='20' value='".$f1."'>";
				 }
                ?>
                </div></td>
              </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711" width="87"><div align="left">Edad</div></td>
                <td div align="center" width="88"><div align="left" class="box_form">
                  <input name="ed" type="text" id="ed" size="20" maxlength="15" value="<?php echo $edad ?>" />
                </div></td>
                <td width="50">&nbsp;</td>
                <td class="Estilo711" width="87"><div align="left">Fecha(m)</div></td>
                <td colspan="1" width="88"><div align="left" class="box_form">
                  <input name="fm" type="text" id="fm" size="20" maxlength="20" value="<?php echo $fm ?>" />
                </div></td>
              </tr>
              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
              <tr>
              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="25" colspan="5" class="Estilo72" align="center" width="500">Resultado del an&aacute;lisis foliar</td>
              </tr>
              <tr>
                <td colspan="1" nowrap="nowrap" bgcolor="#FFCC00" align="left" width="105"><span class="Estilo72">Nutriente</span></td>
                <td colspan="1" nowrap="nowrap" bgcolor="#FFCC00" align="center" width="105"><span class="Estilo72">(%)</span></td>
                <td colspan="1" nowrap="nowrap" bgcolor="#FFCC00" align="center" width="105">
                <td colspan="1" nowrap="nowrap" bgcolor="#FFCC00" align="left" width="105"><span class="Estilo72">Nutriente</span></td>
                <td colspan="1" nowrap="nowrap" bgcolor="#FFCC00" align="center" width="105"><span class="Estilo72">(ppm)</span></td>
                </tr>
                <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711"><div align="left">Nitr&oacute;geno (N)</div></td>
                <td  div align="center"><div align="left" class="box_form_n">
                  <input name="n1" type="text" id="n1" size="6" maxlength="6" value="<?php echo $n ?>" />
                  </div></td>
                  <td width="50">&nbsp;</td>
                <td class="Estilo711"><div align="left">Hierro (Fe)</div></td>
                <td colspan="1"><div align="left" class="box_form_n">
                  <input name="fe1" type="text" id="fe1" size="6" maxlength="6" value="<?php echo $fe ?>"/>
                </div></td>
              </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711"><div align="left">F&oacute;sforo (P)</div></td>
                <td div align="center"><div align="left" class="box_form_n">
                  <input name="p1" type="text" id="p1" size="6" maxlength="6" value="<?php echo $p ?>" />
                  </div></td>
                  <td width="50">&nbsp;</td>
                <td class="Estilo711"><div align="left">Cobre (Cu)</div></td>
                <td colspan="1"><div align="left" class="box_form_n">
                  <input name="cu1" type="text" id="cu1" size="6" maxlength="6"  value="<?php echo $cu ?>"/>
                  </div></td>
              </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711"><div align="left">Potasio (K)</div></td>
                <td align="center"><div align="left" class="box_form_n">
                    <input name="k1" type="text" id="k1" size="6" maxlength="6" value="<?php echo $k ?>"/>
                  </div></td>
                  <td width="50">&nbsp;</td>
                <td class="Estilo711"><div align="left">Manganeso (Mn)</div></td>
                <td colspan="1">
                  <div align="left" class="box_form_n">
                    <input name="mn1" type="text" id="mn1" size="6" maxlength="6" value="<?php echo $mn ?>"/>
                  </div></td>
              </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711"><div align="left">Calcio (Ca)</div></td>
                <td align="center"><div align="left" class="box_form_n">
                    <input name="ca1" type="text" id="ca1" size="6" maxlength="6" value="<?php echo $ca ?>"/>
                  </div></td>
                  <td width="50">&nbsp;</td>
                <td class="Estilo711"><div align="left">Zinc (Zn)</div></td>
                <td colspan="1">
                  <div align="left" class="box_form_n">
                    <input name="zn1" type="text" id="zn1" size="6" maxlength="6" value="<?php echo $zn ?>"/>
                  </div></td>
              </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711"><div align="left">Magnesio (Mg)</div></td>
                <td><div align="center">
                  <div align="left" class="box_form_n">
                    <input name="mg1" type="text" id="mg1" size="6" maxlength="6" value="<?php echo $mg ?>"/>
                  </div></td>
                  <td width="50">&nbsp;</td>
                <td class="Estilo711"><div align="left">Boro (B)</div></td>
                <td colspan="1">
                  <div align="left" class="box_form_n">
                    <input name="b1" type="text" id="b1" size="6" maxlength="6" value="<?php echo $b ?>"/>
                  </div></td>
                                </tr>
                                <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711"><div align="left">Azufre (S)</div></td>
                <td align="center"><div align="left" class="box_form_n">
                  <input name="s1" type="text" id="s1" size="6" maxlength="6" value="<?php echo $as ?>"/>
                  </div></td>
                  <td width="50">&nbsp;</td>
                <td height="32" class="Estilo711"><div align="left">Molibdeno (Mo)</div></td>
                <td colspan="1"><div align="left" class="box_form_n">
                  <input name="mo1" type="text" id="mo1" size="6" maxlength="6" value="<?php echo $mo ?>"/>
                </div></td>
              </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711">&nbsp;</td>
                <td></td>
                <td width="50">&nbsp;</td>
                <td height="32" class="Estilo711"><div align="left">Sodio (Na)</div></td>
                <td colspan="1"><div align="left" class="box_form_n">
                  <input name="na1" type="text" id="na1" size="6" maxlength="6" value="<?php echo $na ?>"/>
                </div></td>
              </tr>
              <tr class="Espacio"><td>&nbsp;</td></tr>
              <tr>
                <td class="Estilo711">&nbsp;</td>
                <td></td>
                <td width="50">&nbsp;</td>
                <td height="32" class="Estilo711"><div align="left">Cloro (Cl)</div></td>
                <td colspan="1"><div align="left" class="box_form_n">
                  <input name="cl1" type="text" id="cl1" size="6" maxlength="7" value="<?php echo $cl ?>"/>
                </div></td>
              </tr>
              <tr>
                <td colspan="5" class="Estilo711">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5" class="Estilo711">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5" class="Estilo711">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="5" class="Estilo71" align="center"><label>

                <div align="center" class="BTN">
                  <input name="Guardar" type="submit" id="Guardar"  value="Guardar" />
                  </div>
              </label></td>
              </tr>
            </table>
            </form>
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