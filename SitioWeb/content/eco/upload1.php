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
           <div align="center"></div>
                    
             <tr>
                <td colspan="5" class="Estilo711">&nbsp;</td>
                <?php
				
				$ids="";
$ptg="";
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
				
				error_reporting(E_ERROR);
				include "variables.php";
				$cnx= mysql_connect($hostname,$user,$pass);
              if (!$cnx){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
              $database = mysql_select_db("pruebaar_peru_prueba",$cnx);
              if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());} 
				
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
ini_set ('auto_detect_line_endings','1');
$file = file_get_contents($destino);
$separador = explode(",",$file);
$fp = fopen ($destino, "r");

$ids=$separador[0];

$ptg=$separador[1];

$ptr=$separador[2];

$situa=$separador[3];

$ddff=$separador[4];

$n=$separador[13];

$p=$separador[14];

$k=$separador[15];

$ca=$separador[16];

$mg=$separador[17];

$s=$separador[18];

$fe=$separador[19];

$cu=$separador[20];

$mn=$separador[21];

$zn=$separador[22];

$b=$separador[23];

$mo=$separador[24];

$na=$separador[25];

$cl=$separador[26];



while ($separador = fgetcsv ($fp, 1000, ",")){
if($separador[1]=="Antillano"){
if ($separador[4]==35){

$ns=2.49;

$ps=0.23;

$ks=1.22;

$cas=0.92;

$mgs=0.34;

$ss=0.24;

//ppmn's

$fes=155.50;

$cus=4.55;

$mns=61.50;

$zns=50.50;

$bs=84.50;

$mos=0.40;

$nas=250.50;

$cls=746.00;


//CV

//%'s

$ncv=7.95;

$pcv=0.15;

$kcv=15.71;

$cacv=3.07;

$mgcv=8.32;

$scv=9.03;
//ppmn's

$fecv=10.46;

$cucv=110.34;

$mncv=49.44;

$zncv=35.01;

$bcv=10.88;

$mocv=106.07;

$nacv=0.28;

$clcv=45.88;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==70){
	
$ns=2.27;

$ps=0.18;

$ks=1.90;

$cas=1.58;

$mgs=0.42;

$ss=0.27;

//ppmn's

$fes=89.92;

$cus=5.12;

$mns=121.59;

$zns=41.87;

$bs=55.52;

$mos=0.15;

$nas=250.06;

$cls=351.68;


//CV

//%'s

$ncv=10.8;

$pcv=15.7;

$kcv=16.1;

$cacv=22.4;

$mgcv=15.7;

$scv=18.08;
//ppmn's

$fecv=19.8;

$cucv=5.7;

$mncv=27.3;

$zncv=18.6;

$bcv=16.6;

$mocv=135.3;

$nacv=0.10;

$clcv=24.1;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==105){

$ns=2.16;

$ps=0.16;

$ks=0.79;

$cas=1.67;

$mgs=0.44;

$ss=0.28;

//ppmn's

$fes=100.37;

$cus=5.12;

$mns=121.27;

$zns=43.89;

$bs=47.77;

$mos=0.23;

$nas=250.06;

$cls=522.80;


//CV

//%'s

$ncv=6.71;

$pcv=11.0;

$kcv=18.08;

$cacv=17.80;

$mgcv=12.46;

$scv=13.48;
//ppmn's

$fecv=20.77;

$cucv=6.21;

$mncv=26.79;

$zncv=12.13;

$bcv=19.88;

$mocv=165.21;

$nacv=0.10;

$clcv=40.58;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==140){

$ns=2.16;

$ps=0.17;

$ks=0.85;

$cas=1.66;

$mgs=0.43;

$ss=0.32;

//ppmn's

$fes=101.79;

$cus=5.01;

$mns=133.16;

$zns=45.11;

$bs=51.19;

$mos=0.23;

$nas=250.06;

$cls=519.90;


//CV

//%'s

$ncv=4.52;

$pcv=8.74;

$kcv=16.12;

$cacv=13.34;

$mgcv=8.42;

$scv=18.70;
//ppmn's

$fecv=19.85;

$cucv=1.06;

$mncv=25.30;

$zncv=17.82;

$bcv=12.26;

$mocv=171.36;

$nacv=0.10;

$clcv=38.26;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==175){

$ns=2.22;

$ps=0.16;

$ks=0.86;

$cas=1.86;

$mgs=0.45;

$ss=0.29;

//ppmn's

$fes=97.90;

$cus=5.0;

$mns=145.82;

$zns=47.13;

$bs=51.10;

$mos=0.25;

$nas=250.06;

$cls=477.18;


//CV

//%'s

$ncv=6.83;

$pcv=10.10;

$kcv=16.75;

$cacv=16.92;

$mgcv=10.64;

$scv=16.60;
//ppmn's

$fecv=14.32;

$cucv=0.05;

$mncv=30.76;

$zncv=21.48;

$bcv=15.01;

$mocv=147.07;

$nacv=0.10;

$clcv=43.99;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==210){
$ns=2.27;

$ps=0.17;

$ks=0.90;

$cas=1.52;

$mgs=0.42;

$ss=0.30;

//ppmn's

$fes=93.01;

$cus=5.23;

$mns=112.79;

$zns=42.82;

$bs=50.13;

$mos=0.19;

$nas=250.06;

$cls=518.66;


//CV

//%'s

$ncv=7.72;

$pcv=12.30;

$kcv=10.51;

$cacv=19.06;

$mgcv=11.58;

$scv=16.29;
//ppmn's

$fecv=15.85;

$cucv=9.0;

$mncv=41.73;

$zncv=16.48;

$bcv=8.68;

$mocv=106.73;

$nacv=0.10;

$clcv=27.47;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==245){

$ns=2.11;

$ps=0.16;

$ks=0.75;

$cas=2.17;

$mgs=0.50;

$ss=0.27;

//ppmn's

$fes=109.34;

$cus=5.28;

$mns=180.63;

$zns=54.58;

$bs=44.37;

$mos=0.10;

$nas=250.06;

$cls=516.42;


//CV

//%'s

$ncv=6.0;

$pcv=10.36;

$kcv=18.78;

$cacv=13.31;

$mgcv=7.63;

$scv=17.45;
//ppmn's

$fecv=19.04;

$cucv=12.28;

$mncv=24.23;

$zncv=19.28;

$bcv=16.64;

$mocv=7.15;

$nacv=0.10;

$clcv=39.97;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}


if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==1){

$ns=3.29;

$ps=0.50;

$ks=2.20;

$cas=0.47;

$mgs=0.19;

$ss=0.22;

//ppmn's

$fes=65.44;

$cus=16.60;

$mns=43.94;

$zns=66.58;

$bs=91.32;

$mos=0.23;

$nas=200.0;

$cls=1041.0;


//CV

//%'s

$ncv=4.88;

$pcv=10.0;

$kcv=5.24;

$cacv=34.41;

$mgcv=20.28;

$scv=14.84;
//ppmn's

$fecv=22.97;

$cucv=30.39;

$mncv=23.92;

$zncv=19.04;

$bcv=8.83;

$mocv=98.97;

$nacv=43.30;

$clcv=104.76;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==2){

$ns=2.80;

$ps=0.44;

$ks=2.27;

$cas=0.44;

$mgs=0.18;

$ss=0.24;

//ppmn's

$fes=102.07;

$cus=16.81;

$mns=32.55;

$zns=66.84;

$bs=97.30;

$mos=1.47;

$nas=256.20;

$cls=683.0;


//CV

//%'s

$ncv=11.64;

$pcv=18.04;

$kcv=16.58;

$cacv=20.78;

$mgcv=22.71;

$scv=20.27;
//ppmn's

$fecv=19.78;

$cucv=41.02;

$mncv=10.30;

$zncv=27.63;

$bcv=21.02;

$mocv=68.12;

$nacv=4.19;

$clcv=88.77;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==3){

$ns=4.0;

$ps=0.63;

$ks=2.51;

$cas=0.52;

$mgs=0.30;

$ss=0.25;

//ppmn's

$fes=123.67;

$cus=20.67;

$mns=32.33;

$zns=103.67;

$bs=100.0;

$mos=0.50;

$nas=349.90;

$cls=451.33;


//CV

//%'s

$ncv=17.35;

$pcv=12.40;

$kcv=13.17;

$cacv=13.87;

$mgcv=16.97;

$scv=13.86;
//ppmn's

$fecv=15.96;

$cucv=21.82;

$mncv=18.90;

$zncv=12.29;

$bcv=14.80;

$mocv=138.56;

$nacv=23.65;

$clcv=58.08;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==4){

$ns=1.82;

$ps=0.30;

$ks=1.62;

$cas=0.19;

$mgs=0.16;

$ss=0.14;

//ppmn's

$fes=42.52;

$cus=7.40;

$mns=11.71;

$zns=43.88;

$bs=145.99;

$mos=0.36;

$nas=264.80;

$cls=303.48;


//CV

//%'s

$ncv=11.98;

$pcv=15.17;

$kcv=14.78;

$cacv=22.65;

$mgcv=19.32;

$scv=21.03;
//ppmn's

$fecv=20.40;

$cucv=19.28;

$mncv=11.20;

$zncv=15.56;

$bcv=26.36;

$mocv=63.31;

$nacv=9.20;

$clcv=3.63;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==5){

$ns=1.29;

$ps=0.24;

$ks=1.55;

$cas=0.13;

$mgs=0.11;

$ss=0.11;

//ppmn's

$fes=31.50;

$cus=6.08;

$mns=8.15;

$zns=34.71;


$bs=121.91;

$mos=0.35;

$nas=250.10;

$cls=300.10;


//CV

//%'s

$ncv=11.80;

$pcv=6.10;

$kcv=5.84;

$cacv=6.96;

$mgcv=5.97;

$scv=18.24;
//ppmn's

$fecv=28.90;

$cucv=9.36;

$mncv=13.44;

$zncv=7.45;

$bcv=21.59;

$mocv=107.70;

$nacv=0.13;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==6){
$ns=1.11;

$ps=0.22;

$ks=1.58;

$cas=0.11;

$mgs=0.10;

$ss=0.09;

//ppmn's

$fes=27.01;

$cus=5.52;

$mns=6.73;

$zns=31.66;

$bs=126.01;

$mos=0.27;

$nas=296.66;

$cls=300.10;


//CV

//%'s

$ncv=7.83;

$pcv=7.67;

$kcv=7.40;

$cacv=14.20;

$mgcv=10.23;

$scv=16.78;
//ppmn's

$fecv=30.16;

$cucv=7.51;

$mncv=17.54;

$zncv=8.95;

$bcv=15.26;

$mocv=70.51;

$nacv=11.55;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==7){
	
$ns=1.11;

$ps=0.19;

$ks=1.85;

$cas=0.06;

$mgs=0.08;

$ss=0.09;

//ppmn's

$fes=26.98;

$cus=5.41;

$mns=5.30;

$zns=23.95;

$bs=142.42;

$mos=0.23;

$nas=398.40;

$cls=300.10;


//CV

//%'s

$ncv=8.79;

$pcv=25.27;

$kcv=10.12;

$cacv=37.07;

$mgcv=33.62;

$scv=38.49;
//ppmn's

$fecv=56.14;

$cucv=11.72;

$mncv=8.82;

$zncv=35.79;

$bcv=32.06;

$mocv=70.79;

$nacv=16.66;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==8){

$ns=1.06;

$ps=0.17;

$ks=1.97;

$cas=0.04;

$mgs=0.08;

$ss=0.09;

//ppmn's

$fes=24.92;

$cus=5.11;

$mns=5.11;

$zns=21.60;

$bs=127.97;

$mos=0.18;

$nas=439.41;

$cls=300.10;


//CV

//%'s

$ncv=13.07;

$pcv=20.13;

$kcv=11.75;

$cacv=26.97;

$mgcv=23.73;

$scv=21.01;
//ppmn's

$fecv=43.50;

$cucv=4.50;

$mncv=3.57;

$zncv=23.43;

$bcv=23.0;

$mocv=64.07;

$nacv=16.24;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}	
}
/*
$insertar="INSERT INTO data_flor_fruto (ID, ptg, patron, estado, situacion, diametro, longitud, pesof, porcentaje, campania, E1, edad, FM, N, P, K, Ca, Mg, S, Fe, Cu, Mn, Zn, B, Mo, Na, Cl, Nr, Pr, Kr, Car, Mgr, Sr, Fer, Cur, Mnr, Znr, Br, Mor, Nar, Clr)
VALUES ('".$separador[0]."','".$separador[1]."','".$separador[2]."','".$separador[3]."','".$separador[4]."','".$separador[5]."','".$separador[6]."','".$separador[7]."','".$separador[8]."','".$separador[9]."','".$separador[10]."','".$separador[11]."','".$separador[12]."','".$separador[13]."','".$separador[14]."','".$separador[15]."','".$separador[16]."','".$separador[17]."','".$separador[18]."','".$separador[19]."','".$separador[20]."','".$separador[21]."','".$separador[22]."','".$separador[23]."','".$separador[24]."','".$separador[25]."','".$separador[26]."','".$nr."','".$pr."','".$kr."','".$car."','".$mgr."','".$sr."','".$fer."','".$cur."','".$mnr."','".$znr."','".$br."','".$mor."','".$nar."','".$clr."')";

$result= mysql_query($insertar, $cnx);
if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }
				else {echo "<center><td align='center' class='Estilo73'>DATOS INSERTADOS CORRECTAMENTE</td>";
				     }	

}

fclose($fp);

while ($separador = fgetcsv ($fp, 1000, ",")){*/
if($separador[1]=="Guatemalteco"||$separador[1]=="Hibrido"){
if ($separador[4]==35){

$ns=2.68;

$ps=0.25;

$ks=1.29;

$cas=1.06;

$mgs=0.36;

$ss=0.24;

//ppmn's

$fes=102.33;

$cus=3.33;

$mns=44.00;

$zns=37.33;

$bs=93.00;

$mos=0.10;

$nas=250.0;

$cls=1795.33;


//CV

//%'s

$ncv=13.31;

$pcv=6.19;

$kcv=6.15;

$cacv=7.59;

$mgcv=3.18;

$scv=2.37;
//ppmn's

$fecv=13.34;

$cucv=27.22;

$mncv=28.48;

$zncv=4.09;

$bcv=25.69;

$mocv=0.58;

$nacv=0.00;

$clcv=99.12;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==70){
	
$ns=2.25;

$ps=0.17;

$ks=0.82;

$cas=1.63;

$mgs=0.43;

$ss=0.26;

//ppmn's

$fes=89.20;

$cus=5.21;

$mns=126.37;

$zns=40.18;

$bs=52.58;

$mos=0.33;

$nas=250.07;

$cls=435.74;


//CV

//%'s

$ncv=9.1;

$pcv=8.7;

$kcv=17.3;

$cacv=27.0;

$mgcv=17.8;

$scv=10.4;
//ppmn's

$fecv=9.8;

$cucv=6.6;

$mncv=33.1;

$zncv=24.0;

$bcv=20.7;

$mocv=68.8;

$nacv=0.11;

$clcv=46.1;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==105){

$ns=2.32;

$ps=0.18;

$ks=0.87;

$cas=1.77;

$mgs=0.48;

$ss=0.27;

//ppmn's

$fes=99.25;

$cus=5.08;

$mns=128.12;

$zns=40.56;

$bs=50.03;

$mos=0.10;

$nas=250.07;

$cls=441.20;


//CV

//%'s

$ncv=8.62;

$pcv=9.40;

$kcv=8.19;

$cacv=10.40;

$mgcv=9.07;

$scv=10.48;
//ppmn's

$fecv=17.88;

$cucv=2.84;

$mncv=19.94;

$zncv=23.88;

$bcv=11.71;

$mocv=0.27;

$nacv=0.11;

$clcv=17.41;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==140){

$ns=2.24;

$ps=0.18;

$ks=0.90;

$cas=1.85;

$mgs=0.49;

$ss=0.30;

//ppmn's

$fes=99.43;

$cus=5.05;

$mns=143.72;

$zns=45.16;

$bs=52.25;

$mos=0.10;

$nas=250.07;

$cls=439.14;


//CV

//%'s

$ncv=9.68;

$pcv=6.20;

$kcv=16.18;

$cacv=15.24;

$mgcv=8.61;

$scv=17.97;
//ppmn's

$fecv=8.42;

$cucv=1.86;

$mncv=27.75;

$zncv=20.35;

$bcv=11.17;

$mocv=0.27;

$nacv=0.11;

$clcv=30.23;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==175){

$ns=2.16;

$ps=0.17;

$ks=0.85;

$cas=2.05;

$mgs=0.50;

$ss=0.27;

//ppmn's

$fes=104.59;

$cus=5.27;

$mns=159.29;

$zns=45.64;

$bs=50.0;

$mos=0.11;

$nas=250.07;

$cls=446.48;


//CV

//%'s

$ncv=5.54;

$pcv=6.10;

$kcv=21.44;

$cacv=15.43;

$mgcv=8.12;

$scv=15.38;
//ppmn's

$fecv=11.17;

$cucv=8.28;

$mncv=29.53;

$zncv=11.01;

$bcv=21.05;

$mocv=31.79;

$nacv=0.11;

$clcv=44.23;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==210){
$ns=2.07;

$ps=0.15;

$ks=0.76;

$cas=1.87;

$mgs=0.49;

$ss=0.28;

//ppmn's

$fes=102.78;

$cus=5.14;

$mns=150.96;

$zns=45.81;

$bs=51.45;

$mos=0.38;

$nas=250.07;

$cls=469.34;


//CV

//%'s

$ncv=6.64;

$pcv=8.92;

$kcv=21.84;

$cacv=12.14;

$mgcv=11.26;

$scv=16.65;
//ppmn's

$fecv=8.33;

$cucv=4.48;

$mncv=27.81;

$zncv=11.46;

$bcv=20.51;

$mocv=76.35;

$nacv=0.11;

$clcv=30.66;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==245){

$ns=2.08;

$ps=0.16;

$ks=0.75;

$cas=1.94;


$mgs=0.49;

$ss=0.26;

//ppmn's

$fes=97.83;

$cus=5.06;

$mns=159.54;

$zns=41.22;

$bs=50.23;

$mos=0.35;

$nas=250.07;

$cls=494.04;


//CV

//%'s

$ncv=9.52;

$pcv=8.96;

$kcv=20.11;

$cacv=12.58;

$mgcv=10.22;

$scv=10.99;
//ppmn's

$fecv=10.36;

$cucv=3.02;

$mncv=25.80;

$zncv=11.97;

$bcv=17.07;

$mocv=65.43;

$nacv=0.11;

$clcv=46.45;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==1){

$ns=3.35;

$ps=0.48;

$ks=2.14;

$cas=0.47;

$mgs=0.19;

$ss=0.23;

//ppmn's

$fes=71.12;

$cus=13.16;

$mns=37.82;

$zns=63.43;

$bs=103.09;

$mos=0.20;

$nas=220.0;

$cls=440.40;


//CV

//%'s

$ncv=7.27;

$pcv=9.91;

$kcv=8.80;

$cacv=18.24;

$mgcv=8.16;

$scv=12.43;
//ppmn's

$fecv=43.21;

$cucv=26.96;

$mncv=20.21;

$zncv=12.59;

$bcv=16.63;

$mocv=82.56;

$nacv=28.75;

$clcv=39.36;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==2){

$ns=2.81;

$ps=0.42;

$ks=2.11;

$cas=0.48;

$mgs=0.22;

$ss=0.25;

//ppmn's

$fes=121.46;

$cus=11.16;

$mns=35.57;

$zns=56.72;

$bs=96.30;

$mos=0.50;

$nas=262.66;

$cls=469.04;


//CV

//%'s

$ncv=9.92;

$pcv=16.11;

$kcv=12.39;

$cacv=24.74;

$mgcv=20.17;

$scv=15.55;
//ppmn's

$fecv=21.62;

$cucv=26.22;

$mncv=26.20;

$zncv=12.29;

$bcv=25.71;

$mocv=146.06;

$nacv=9.38;

$clcv=34.38;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==3){

$ns=3.94;

$ps=0.61;

$ks=2.43;

$cas=0.60;

$mgs=0.34;

$ss=0.26;

//ppmn's

$fes=123.20;

$cus=15.30;

$mns=39.30;

$zns=91.50;

$bs=113.10;

$mos=0.10;

$nas=331.40;

$cls=473.70;


//CV

//%'s

$ncv=17.92;

$pcv=17.09;

$kcv=11.0;

$cacv=13.46;

$mgcv=14.73;

$scv=8.07;
//ppmn's

$fecv=30.87;

$cucv=21.80;

$mncv=27.75;

$zncv=15.53;

$bcv=26.19;

$mocv=0.32;

$nacv=37.06;

$clcv=57.17;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==4){

$ns=1.97;

$ps=0.32;

$ks=1.55;

$cas=0.21;

$mgs=0.17;

$ss=0.14;

//ppmn's

$fes=48.61;

$cus=7.12;

$mns=11.55;

$zns=46.53;

$bs=137.63;

$mos=0.20;

$nas=351.75;

$cls=300.10;


//CV

//%'s

$ncv=10.35;

$pcv=12.95;

$kcv=17.89;

$cacv=16.85;

$mgcv=16.95;

$scv=11.23;
//ppmn's

$fecv=12.84;

$cucv=10.64;

$mncv=9.47;

$zncv=8.94;

$bcv=26.14;

$mocv=66.83;

$nacv=1.38;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==5){

$ns=1.48;

$ps=0.24;

$ks=1.60;

$cas=0.14;

$mgs=0.13;

$ss=0.12;

//ppmn's

$fes=38.17;

$cus=5.71;

$mns=8.05;

$zns=33.58;

$bs=126.71;

$mos=0.16;

$nas=258.80;

$cls=300.10;


//CV

//%'s

$ncv=4.18;

$pcv=3.40;

$kcv=10.11;

$cacv=7.48;

$mgcv=2.41;

$scv=7.24;
//ppmn's

$fecv=32.74;

$cucv=10.10;

$mncv=20.74;

$zncv=8.80;

$bcv=22.59;

$mocv=45.65;

$nacv=6.81;

$clcv=0.11;
if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==6){
$ns=1.16;

$ps=0.21;

$ks=1.49;

$cas=0.13;

$mgs=0.12;

$ss=0.11;

//ppmn's

$fes=39.89;

$cus=5.44;

$mns=8.84;

$zns=31.76;

$bs=121.50;

$mos=0.17;

$nas=299.05;

$cls=300.10;


//CV

//%'s

$ncv=7.60;

$pcv=5.22;

$kcv=4.82;

$cacv=8.43;

$mgcv=6.15;

$scv=14.98;
//ppmn's

$fecv=12.74;

$cucv=10.93;

$mncv=23.10;

$zncv=3.70;

$bcv=14.37;

$mocv=77.58;

$nacv=7.38;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==7){
	
$ns=1.08;

$ps=0.18;

$ks=1.85;

$cas=0.06;

$mgs=0.08;

$ss=0.09;

//ppmn's

$fes=31.26;

$cus=5.03;

$mns=5.33;

$zns=21.66;

$bs=136.13;

$mos=0.14;

$nas=410.55;

$cls=300.10;


//CV

//%'s

$ncv=10.88;

$pcv=23.57;

$kcv=8.42;

$cacv=39.51;

$mgcv=31.90;

$scv=19.69;
//ppmn's

$fecv=39.95;

$cucv=2.01;

$mncv=13.42;

$zncv=29.43;

$bcv=34.43;

$mocv=50.49;

$nacv=9.54;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==8){

$ns=1.01;

$ps=0.18;

$ks=1.85;

$cas=0.05;

$mgs=0.08;

$ss=0.10;

//ppmn's

$fes=34.12;

$cus=5.08;

$mns=5.13;

$zns=21.63;

$bs=133.83;

$mos=0.11;

$nas=399.31;

$cls=300.10;


//CV

//%'s

$ncv=20.80;

$pcv=20.13;

$kcv=12.28;

$cacv=27.43;

$mgcv=24.02;

$scv=24.43;
//ppmn's

$fecv=33.87;

$cucv=4.86;

$mncv=7.17;

$zncv=20.88;

$bcv=28.09;

$mocv=15.62;

$nacv=11.37;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
}
/*
$insertar="INSERT INTO data_flor_fruto (ID, ptg, patron, estado, situacion, diametro, longitud, pesof, porcentaje, campania, E1, edad, FM, N, P, K, Ca, Mg, S, Fe, Cu, Mn, Zn, B, Mo, Na, Cl, Nr, Pr, Kr, Car, Mgr, Sr, Fer, Cur, Mnr, Znr, Br, Mor, Nar, Clr)
VALUES ('".$separador[0]."','".$separador[1]."','".$separador[2]."','".$separador[3]."','".$separador[4]."','".$separador[5]."','".$separador[6]."','".$separador[7]."','".$separador[8]."','".$separador[9]."','".$separador[10]."','".$separador[11]."','".$separador[12]."','".$separador[13]."','".$separador[14]."','".$separador[15]."','".$separador[16]."','".$separador[17]."','".$separador[18]."','".$separador[19]."','".$separador[20]."','".$separador[21]."','".$separador[22]."','".$separador[23]."','".$separador[24]."','".$separador[25]."','".$separador[26]."','".$nr."','".$pr."','".$kr."','".$car."','".$mgr."','".$sr."','".$fer."','".$cur."','".$mnr."','".$znr."','".$br."','".$mor."','".$nar."','".$clr."')";

$result= mysql_query($insertar, $cnx);
if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }
				else {echo "<center><td align='center' class='Estilo73'>DATOS INSERTADOS CORRECTAMENTE</td>";
				     }	

}

fclose($fp);

while ($separador = fgetcsv ($fp, 1000, ",")){*/
if($separador[1]=="Mexicano"||$separador[1]=="Hibrido"){
if ($separador[4]==35){

$ns=2.63;

$ps=0.25;

$ks=1.42;

$cas=0.98;

$mgs=0.36;

$ss=0.30;

//ppmn's

$fes=123.80;

$cus=4.52;

$mns=44.80;

$zns=46.80;

$bs=82.80;

$mos=0.20;

$nas=250.20;

$cls=1269.0;


//CV

//%'s

$ncv=6.67;

$pcv=6.16;

$kcv=9.0;

$cacv=11.54;

$mgcv=5.99;

$scv=10.27;
//ppmn's

$fecv=28.22;

$cucv=56.82;

$mncv=52.60;

$zncv=28.92;

$bcv=21.76;

$mocv=111.80;

$nacv=0.18;

$clcv=16.41;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);


	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==70){
	
$ns=2.22;

$ps=0.16;

$ks=0.90;

$cas=1.64;

$mgs=0.45;

$ss=0.29;

//ppmn's

$fes=100.36;

$cus=5.52;

$mns=107.18;

$zns=39.71;

$bs=56.23;

$mos=0.29;

$nas=250.08;

$cls=620.52;


//CV

//%'s

$ncv=9.4;

$pcv=11.0;

$kcv=23.4;

$cacv=23.3;

$mgcv=15.1;

$scv=14.8;
//ppmn's

$fecv=9.5;

$cucv=15.7;

$mncv=40.0;

$zncv=11.7;

$bcv=21.2;

$mocv=68.50;

$nacv=0.11;

$clcv=32.5;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;


	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==105){

$ns=2.27;

$ps=0.16;

$ks=1.01;

$cas=1.63;

$mgs=0.46;

$ss=0.31;

//ppmn's

$fes=99.13;

$cus=5.17;

$mns=110.53;

$zns=40.32;

$bs=54.51;

$mos=0.30;

$nas=250.08;

$cls=741.70;


//CV

//%'s

$ncv=6.77;

$pcv=6.84;

$kcv=25.72;

$cacv=21.07;

$mgcv=11.17;

$scv=13.93;
//ppmn's

$fecv=15.01;

$cucv=4.55;

$mncv=48.44;

$zncv=30.78;

$bcv=18.01;

$mocv=72.20;

$nacv=0.11;

$clcv=43.48;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==140){

$ns=2.22;

$ps=0.16;

$ks=0.96;

$cas=1.73;

$mgs=0.47;

$ss=0.32;

//ppmn's

$fes=98.41;

$cus=5.58;

$mns=112.11;

$zns=43.70;

$bs=56.28;

$mos=0.39;

$nas=250.08;

$cls=669.98;


//CV

//%'s

$ncv=6.08;

$pcv=6.42;

$kcv=20.07;

$cacv=17.04;

$mgcv=10.49;

$scv=14.55;
//ppmn's

$fecv=10.55;

$cucv=17.02;

$mncv=52.01;

$zncv=19.93;

$bcv=15.46;

$mocv=68.95;

$nacv=0.11;

$clcv=33.36;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==175){

$ns=2.17;

$ps=0.15;

$ks=0.81;

$cas=1.78;

$mgs=0.48;

$ss=0.30;

//ppmn's

$fes=99.63;

$cus=5.50;

$mns=131.92;

$zns=43.97;

$bs=49.30;

$mos=0.27;

$nas=250.08;

$cls=572.01;


//CV

//%'s

$ncv=5.33;

$pcv=10.09;

$kcv=21.26;

$cacv=14.58;

$mgcv=8.25;

$scv=17.62;
//ppmn's

$fecv=11.67;

$cucv=12.20;

$mncv=30.74;

$zncv=21.88;

$bcv=19.68;

$mocv=64.24;

$nacv=0.11;

$clcv=41.61;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);


	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==210){
$ns=2.23;

$ps=0.16;

$ks=0.91;

$cas=1.58;

$mgs=0.45;

$ss=0.30;

//ppmn's

$fes=97.00;

$cus=5.42;

$mns=117.90;

$zns=43.56;

$bs=53.24;

$mos=0.36;

$nas=250.08;

$cls=559.80;


//CV

//%'s

$ncv=11.99;

$pcv=14.22;

$kcv=21.47;

$cacv=24.28;

$mgcv=17.63;

$scv=14.36;
//ppmn's

$fecv=15.66;

$cucv=9.83;

$mncv=47.03;

$zncv=14.93;

$bcv=13.48;

$mocv=69.65;

$nacv=0.11;

$clcv=32.66;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;


	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==245){

$ns=2.32;

$ps=0.17;

$ks=0.98;

$cas=1.49;

$mgs=0.43;

$ss=0.30;

//ppmn's

$fes=85.39;

$cus=5.52;

$mns=94.50;

$zns=39.45;

$bs=58.41;

$mos=0.39;

$nas=250.08;

$cls=612.47;


//CV

//%'s

$ncv=10.95;

$pcv=14.19;

$kcv=18.48;

$cacv=28.12;

$mgcv=17.97;

$scv=35.40;
//ppmn's

$fecv=9.68;

$cucv=15.93;

$mncv=42.06;

$zncv=7.83;

$bcv=12.34;

$mocv=91.36;

$nacv=0.11;

$clcv=49.41;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==1){

$ns=2.44;

$ps=0.48;

$ks=2.24;

$cas=0.50;

$mgs=0.19;

$ss=0.24;

//ppmn's

$fes=77.27;

$cus=13.70;

$mns=36.74;

$zns=65.75;

$bs=85.97;

$mos=0.45;

$nas=653.54;

$cls=226.92;


//CV

//%'s

$ncv=5.83;

$pcv=7.90;

$kcv=10.44;

$cacv=20.97;

$mgcv=10.62;

$scv=14.55;
//ppmn's

$fecv=38.52;

$cucv=38.78;

$mncv=33.47;

$zncv=11.29;

$bcv=30.92;

$mocv=171.05;

$nacv=102.76;

$clcv=24.82;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}

if ($separador[4]==2){

$ns=2.85;

$ps=0.41;

$ks=2.17;

$cas=0.45;

$mgs=0.22;

$ss=0.27;

//ppmn's

$fes=116.22;

$cus=11.55;

$mns=30.39;

$zns=59.95;

$bs=91.72;

$mos=0.59;

$nas=272.30;

$cls=578.95;


//CV

//%'s

$ncv=6.83;

$pcv=15.88;

$kcv=12.36;

$cacv=14.54;

$mgcv=25.84;

$scv=17.49;
//ppmn's

$fecv=38.18;

$cucv=27.61;

$mncv=30.13;

$zncv=20.59;

$bcv=33.33;

$mocv=114.86;

$nacv=12.13;

$clcv=36.68;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==3){

$ns=3.83;

$ps=0.60;

$ks=2.40;

$cas=0.59;

$mgs=0.32;

$ss=0.25;

//ppmn's

$fes=125.92;

$cus=15.84;

$mns=26.62;

$zns=85.00;

$bs=94.31;

$mos=0.18;

$nas=306.72;

$cls=879.23;


//CV

//%'s

$ncv=18.22;

$pcv=16.34;

$kcv=8.58;

$cacv=18.17;

$mgcv=12.29;

$scv=10.12;
//ppmn's

$fecv=42.69;

$cucv=33.76;

$mncv=19.07;

$zncv=20.87;

$bcv=24.52;

$mocv=115.73;

$nacv=31.70;

$clcv=98.80;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==4){

$ns=2.07;

$ps=0.32;

$ks=1.75;

$cas=0.20;

$mgs=0.18;

$ss=0.16;

//ppmn's

$fes=57.97;

$cus=8.16;

$mns=10.21;

$zns=44.86;

$bs=139.36;

$mos=0.14;

$nas=262.80;

$cls=316.18;


//CV

//%'s

$ncv=15.13;

$pcv=13.81;

$kcv=17.77;

$cacv=16.13;

$mgcv=14.14;

$scv=11.41;
//ppmn's

$fecv=8.16;

$cucv=14.87;

$mncv=8.30;

$zncv=19.42;

$bcv=32.31;

$mocv=40.33;

$nacv=8.56;

$clcv=9.29;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==5){

$ns=1.48;

$ps=0.25;

$ks=1.65;

$cas=0.14;

$mgs=0.13;

$ss=0.13;

//ppmn's

$fes=41.82;

$cus=6.05;

$mns=7.54;

$zns=32.72;

$bs=120.98;

$mos=0.14;

$nas=254.42;

$cls=300.10;


//CV

//%'s

$ncv=12.77;

$pcv=6.63;

$kcv=12.59;

$cacv=10.69;

$mgcv=9.82;

$scv=14.24;
//ppmn's

$fecv=17.06;

$cucv=11.88;

$mncv=22.05;

$zncv=8.85;

$bcv=24.48;

$mocv=60.00;

$nacv=5.49;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==6){
$ns=1.17;

$ps=0.20;

$ks=1.63;

$cas=0.11;

$mgs=0.11;

$ss=0.11;

//ppmn's

$fes=40.16;

$cus=5.37;

$mns=6.78;

$zns=27.84;

$bs=112.85;

$mos=0.23;

$nas=302.53;

$cls=300.10;


//CV

//%'s

$ncv=6.74;

$pcv=12.64;

$kcv=9.40;

$cacv=10.14;

$mgcv=13.25;

$scv=25.29;
//ppmn's

$fecv=22.07;

$cucv=7.17;

$mncv=27.80;

$zncv=11.13;

$bcv=17.74;

$mocv=147.45;

$nacv=14.83;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==7){
	
$ns=1.27;

$ps=0.21;

$ks=1.98;

$cas=0.07;

$mgs=0.11;

$ss=0.12;

//ppmn's

$fes=39.55;

$cus=5.28;

$mns=5.81;

$zns=26.54;

$bs=137.56;

$mos=0.16;

$nas=394.18;

$cls=300.10;


//CV

//%'s

$ncv=14.28;

$pcv=5.80;

$kcv=7.78;

$cacv=18.32;

$mgcv=12.93;

$scv=24.38;
//ppmn's

$fecv=21.73;

$cucv=7.67;

$mncv=14.71;

$zncv=5.52;

$bcv=10.11;

$mocv=66.54;

$nacv=18.09;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {


     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
if ($separador[4]==8){

$ns=1.08;

$ps=0.16;

$ks=1.85;

$cas=0.05;

$mgs=0.08;

$ss=0.13;

//ppmn's

$fes=35.85;

$cus=5.20;

$mns=5.31;

$zns=20.31;

$bs=110.32;

$mos=0.10;

$nas=425.37;

$cls=300.10;


//CV

//%'s

$ncv=14.56;

$pcv=28.34;

$kcv=21.95;

$cacv=54.97;

$mgcv=30.05;

$scv=52.45;
//ppmn's

$fecv=46.58;

$cucv=8.99;

$mncv=11.58;

$zncv=32.45;

$bcv=33.14;

$mocv=6.20;

$nacv=20.50;

$clcv=0.11;

if ($separador[13] < $ns && $separador[13]>0 )

    {

     $pn=($separador[13]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

	   


if ($separador[13] > $ns && $separador[13]>0)

    {

     $pn=($separador[13]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[14] < $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 

	   

if ($separador[14] > $ps && $separador[14]>0)

    {

     $pp=($separador[14]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[15] < $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 

	   

if ($separador[15] > $ks && $separador[15]>0)

    {

     $pk=($separador[15]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}


if ($separador[16] < $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	 

	   

if ($separador[16] > $cas && $separador[16]>0)

    {

     $pca=($separador[16]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[17] < $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	 

	   

if ($separador[17] > $mgs && $separador[17]>0)

    {

     $pmg=($separador[17]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}


if ($separador[18] < $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[18] > $ss && $separador[18]>0)

    {

     $ps=($separador[18]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}


if ($separador[19] < $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

	   

if ($separador[19] > $fes && $separador[19]>0)

    {

     $pfe=($separador[19]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}


if ($separador[20] < $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	 

	   

if ($separador[20] > $cus && $separador[20]>0)

    {

     $pcu=($separador[20]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}


if ($separador[21] < $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

	   

if ($separador[21] > $mns && $separador[21]>0)

    {

     $pmn=($separador[21]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}



if ($separador[22] < $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	 

	   

if ($separador[22] > $zns && $separador[22]>0)

    {

     $pzn=($separador[22]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[23] < $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

	   

if ($separador[23] > $bs && $separador[23]>0)

    {

     $pb=($separador[23]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[24] < $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

	   

if ($separador[24]> $mos && $separador[24]>0)

    {

     $pmo=($separador[24]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[25] < $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

	   

if ($separador[25] > $nas && $separador[25]>0)

    {

     $pna=($separador[25]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[26] < $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

	   

if ($separador[26]> $cls && $separador[26]>0)

    {

     $clb=($separador[26]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}



	//si el Estandar y el valor son iguales
	if($separador[13]==$ns)
	{
	$nr1=100;
	}
	if($separador[14]==$ps)
	{
	$pr1=100;
	}
	if($separador[15]==$ks)
	{
	$kr1=100;
	}
	if($separador[16]==$cas)
	{
	$car1=100;
	}
	if($separador[17]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[18]==$ss)
	{
	$sr1=100;
	}
	if($separador[19]==$fes)
	{
	$fer1=100;
	}
	if($separador[20]==$cus)
	{
	$cur1=100;
	}
	if($separador[21]==$mns)
	{
	$mnr1=100;
	}
	if($separador[22]==$zns)
	{
	$znr1=100;
	}
	if($separador[23]==$bs)
	{
	$br1=100;
	}	
	if($separador[24]==$mos)
	{
	$mor1=100;
	}	
	if($separador[25]==$nas)
	{
	$nar1=100;
	}	
	if($separador[26]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[13]==0)
	{
	$nr1=0;
	}
	if($separador[14]==0)
	{
	$pr1=0;
	}
	if($separador[15]==0)
	{
	$kr1=0;
	}
	if($separador[16]==0)
	{
	$car1=0;
	}
	if($separador[17]==0)
	{
	$mgr1=0;
	}
	if($separador[18]==0)
	{
	$sr1=0;
	}
	if($separador[19]==0)
	{
	$fer1=0;
	}
	if($separador[20]==0)
	{
	$cur1=0;
	}
	if($separador[21]==0)
	{
	$mnr1=0;
	}
	if($separador[22]==0)
	{
	$znr1=0;
	}
	if($separador[23]==0)
	{
	$br1=0;
	}	
	if($separador[24]==0)
	{
	$mor1=0;
	}
	if($separador[25]==0)
	{
	$nar1=0;
	}
	if($separador[26]==0)
	{
	$clr1=0;
	}	


	$nr=round($nr1,0);

	$pr=round($pr1,0);

	$kr=round($kr1,0);

	$car=round($car1,0);

	$mgr=round($mgr1,0);

	$sr=round($sr1,0);

	$fer=round($fer1,0);

	$cur=round($cur1,0);

	$mnr=round($mnr1,0);

	$znr=round($znr1,0);

	$br=round($br1,0);
	
	$mor=round($mor1,0);
	
	$nar=round($nar1,0);
	
	$clr=round($clr1,0);
	
}
}
$insertar="INSERT INTO data_flor_fruto (ID, ptg, patron, estado, situacion, diametro, longitud, pesof, porcentaje, campania, E1, edad, FM, N, P, K, Ca, Mg, S, Fe, Cu, Mn, Zn, B, Mo, Na, Cl, Nr, Pr, Kr, Car, Mgr, Sr, Fer, Cur, Mnr, Znr, Br, Mor, Nar, Clr)
VALUES ('".$separador[0]."','".$separador[1]."','".$separador[2]."','".$separador[3]."','".$separador[4]."','".$separador[5]."','".$separador[6]."','".$separador[7]."','".$separador[8]."','".$separador[9]."','".$separador[10]."','".$separador[11]."','".$separador[12]."','".$separador[13]."','".$separador[14]."','".$separador[15]."','".$separador[16]."','".$separador[17]."','".$separador[18]."','".$separador[19]."','".$separador[20]."','".$separador[21]."','".$separador[22]."','".$separador[23]."','".$separador[24]."','".$separador[25]."','".$separador[26]."','".$nr."','".$pr."','".$kr."','".$car."','".$mgr."','".$sr."','".$fer."','".$cur."','".$mnr."','".$znr."','".$br."','".$mor."','".$nar."','".$clr."')";

$result= mysql_query($insertar, $cnx);
if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }
				else {echo "<center><td align='center' class='Estilo73'>DATOS INSERTADOS CORRECTAMENTE</td>";
				     }	

}

fclose($fp);	
?>

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