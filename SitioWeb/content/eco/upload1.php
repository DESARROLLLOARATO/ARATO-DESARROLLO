<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' id='Roboto-css' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Patua+One-css' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' id='Lato-css' href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic'>
    <link rel='stylesheet' id='Merriweather-css' href='http://fonts.googleapis.com/css?family=Merriweather:300,400,400italic,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' id='global-css' href='../../css/global.css'>
    <link rel='stylesheet' id='structure-css' href='css/structure.css'>
    <link rel='stylesheet' id='local-css' href='css/eco.css'>
    <link rel='stylesheet' id='custom-css' href='css/custom.css'>


</head>

<body class="color-custom style-simple layout-full-width nice-scroll-on mobile-tb-hide button-flat no-content-padding header-fixed minimalist-header-no sticky-header sticky-white ab-hide subheader-both-center menu-line-below-80 menuo-right menuo-no-borders tr-menu">
    <div id="Wrapper">
        <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="#" title="BeEco - BeTheme"><img class="logo-main scale-with-grid" src="images/imagen.png" alt="ara" /><img class="logo-sticky scale-with-grid" src="images/imagen.png" alt="ara" /><img class="logo-mobile scale-with-grid" src="images/imagen.png" alt="ara" />
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu" class="menu-main-menu-container">
                                        <ul id="menu-main-menu" class="menu">
                                            <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="../../index.html"><span>Inicio</span></a>
                                            </li>
                                            <li id="menu-item-2302" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2291 current_page_item">
                                                <a href="upload.php"><span>Bases de datos</span></a>
                                            </li>
                                            <li id="menu-item-2301" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="informes.php"><span>Informes</span></a>
                                            </li>
                                            <li id="menu-item-2300" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="analisis.html"><span>Análisis</span></a>
                                            </li>
                                            <li id="menu-item-2299" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="contactanos.html"><span>Contactanos</span></a>
                                            </li>
                                        </ul>
                                    </nav><a class="responsive-menu-toggle " href="#"><i class="icon-menu"></i></a>
                                </div>
                                <div class="secondary_menu_wrapper"></div>
                                <div class="banner_wrapper"></div>
                                <div class="search_wrapper">
                                    <form method="get" id="searchform">
                                        <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                        <input type="text" class="field" name="s" id="s" placeholder="Que deseas buscar" />
                                        <input type="submit" class="submit" value="" style="display:none;" />
                                    </form>
                                </div>
                            </div>
                            <div class="top_bar_right">
                                <div class="top_bar_right_wrapper">
                                    <a href="http://themeforest.net/item/betheme-html-responsive-multipurpose-template/13925633?ref=beantownthemes" class="button button_theme button_js action_button " target="_blank"><span class="button_label">Terminar sesión</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="Subheader" style="padding:210px 0 120px;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Programs</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content" itemprop="mainContentOfPage">
                        <div class="section mcb-section" style="padding-top:30px; padding-bottom:0px; background-color:#f0eee4">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  column-margin-30px valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column  ">
                                            <div class="column_attr align_center">
                                                <h4 style="margin: 0;">Opción para importar datos al sistema</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:80px; padding-bottom:40px; ">
                            <div class="section_wrapper mcb-section-inner">
                             
                             
                             <?php
				/*SCRIPT CALCULO NUTRIENTES*/
							
//CAMPOS DEL ARCHIVO
$empresa="";
$cultivar="";
$patron="";
$tejido="";
$etapa="";
$campa="";
$lote="";
$turno="";
$modulo="";
$fechamuestreo="";
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

								
				error_reporting(E_ERROR);
				include "variables.php";
				$cnx= mysql_connect($hostname,$user,$pass);
              if (!$cnx){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
              $database = mysql_select_db("pruebaar_arato",$cnx);
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

//Leer campos para calculos
$empresa=$separador[0];
$patron=$separador[2];
$tejido=$separador[3];
$etapa=$separador[4];

$n=$separador[10];
$p=$separador[11];
$k=$separador[12];
$ca=$separador[13];
$mg=$separador[14];
$s=$separador[15];
$fe=$separador[16];
$cu=$separador[17];
$mn=$separador[18];
$zn=$separador[19];
$b=$separador[20];
$mo=$separador[21];
$na=$separador[22];
$cl=$separador[23];


while ($separador = fgetcsv ($fp, 1000, ",")){
	
	         ////////////////// CONDICIONES PARA FOLIAR  /////////////////////////////
///// CONDICION ARATO -ZUTANO ETAPA Hojas de 5 cm /////
if($separador[3]=="Foliar"){
if($separador[0]=="Arato Perú"){
if($separador[2]=="Zutano"){
if ($separador[4]=="Hojas de 5 cm"){

$ns=3.03;

$ps=0.51;

$ks=2.21;

$cas=0.49;

$mgs=0.25;

$ss=0.29;

//ppmn's

$fes=166.00;

$cus=18.42;

$mns=33.88;

$zns=68.58;

$bs=131.83;

$mos=0.63;

$nas=250.00;

$cls=283.33;


//CV

//%'s

$ncv=11.92;

$pcv=15.62;

$kcv=10.87;

$cacv=12.47;

$mgcv=7.20;

$scv=6.94;
//ppmn's

$fecv=5.42;

$cucv=10.48;

$mncv=23.66;

$zncv=17.24;

$bcv=4.87;

$mocv=65.19;

$nacv=0.00;

$clcv=8.69;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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


		///// CONDICION ARATO -ZUTANO ETAPA Antesis /////

if ($separador[4]=="Antesis"){

$ns=2.26;

$ps=0.32;

$ks=1.65;

$cas=0.64;

$mgs=0.27;

$ss=0.24;

//ppmn's

$fes=137.29;

$cus=10.75;

$mns=44.53;

$zns=59.03;

$bs=139.43;

$mos=0.61;

$nas=252.29;

$cls=298.14;


//CV

//%'s

$ncv=8.20;

$pcv=10.05;

$kcv=10.59;

$cacv=11.63;

$mgcv=10.30;

$scv=10.10;
//ppmn's

$fecv=12.07;

$cucv=10.60;

$mncv=21.19;

$zncv=17.94;

$bcv=9.59;

$mocv=72.04;

$nacv=1.55;

$clcv=6.84;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

		///// CONDICION ARATO -ZUTANO ETAPA Cuajado de fruto /////

if ($separador[4]=="Cuajado de fruto"){

$ns=2.64;

$ps=0.23;

$ks=1.18;

$cas=1.19;

$mgs=0.37;

$ss=0.32;

//ppmn's

$fes=274.14;

$cus=8.35;

$mns=58.94;

$zns=103.47;

$bs=103.09;

$mos=0.20;

$nas=250.00;

$cls=574.71;


//CV

//%'s

$ncv=12.39;

$pcv=17.54;

$kcv=11.65;

$cacv=22.26;

$mgcv=22.33;

$scv=9.38;
//ppmn's

$fecv=32.78;

$cucv=20.50;

$mncv=55.52;

$zncv=30.12;

$bcv=34.21;

$mocv=87.13;

$nacv=0.00;

$clcv=21.98;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

		///// CONDICION ARATO -ZUTANO ETAPA Fruto tamaño aceituna /////

if ($separador[4]=="Fruto tamaño aceituna"){

$ns=2.39;

$ps=0.19;

$ks=1.13;

$cas=1.02;

$mgs=0.35;

$ss=0.31;

//ppmn's

$fes=220.88;

$cus=6.90;

$mns=62.46;

$zns=102.96;

$bs=92.48;

$mos=0.22;

$nas=250.00;

$cls=441.00;


//CV

//%'s

$ncv=21.13;

$pcv=26.74;

$kcv=19.71;

$cacv=20.57;

$mgcv=18.26;

$scv=33.21;
//ppmn's

$fecv=31.53;

$cucv=30.78;

$mncv=45.11;

$zncv=17.32;

$bcv=23.82;

$mocv=78.83;

$nacv=0.00;

$clcv=25.40;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

		///// CONDICION ARATO -ZUTANO ETAPA Fruto en Crec-1 /////

if ($separador[4]=="Fruto en Crec-1"){

$ns=2.46;

$ps=0.18;

$ks=1.34;

$cas=1.40;

$mgs=0.44;

$ss=0.35;

//ppmn's

$fes=360.25;

$cus=7.04;

$mns=112.50;

$zns=160.00;

$bs=96.85;

$mos=0.15;

$nas=250.00;

$cls=821.00;


//CV

//%'s

$ncv=17.65;

$pcv=14.00;

$kcv=15.81;

$cacv=12.54;

$mgcv=11.23;

$scv=10.02;
//ppmn's

$fecv=45.73;

$cucv=15.14;

$mncv=16.72;

$zncv=11.29;

$bcv=9.81;

$mocv=38.44;

$nacv=0.00;

$clcv=45.37;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

		///// CONDICION ARATO-ZUTANO ETAPA Fruto en Crec-2 /////

if ($separador[4]=="Fruto en Crec-2"){

$ns=2.32;

$ps=0.17;

$ks=1.16;

$cas=1.69;

$mgs=0.45;

$ss=0.35;

//ppmn's

$fes=383.38;

$cus=40.80;

$mns=137.00;

$zns=137.63;

$bs=94.24;

$mos=0.13;

$nas=250.00;

$cls=769.88;


//CV

//%'s

$ncv=11.15;

$pcv=7.83;

$kcv=20.17;

$cacv=16.77;

$mgcv=9.57;

$scv=12.73;
//ppmn's

$fecv=35.99;

$cucv=202.06;

$mncv=19.83;

$zncv=16.70;

$bcv=7.37;

$mocv=68.40;

$nacv=0.00;

$clcv=35.19;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

		///// CONDICION ARATO-ZUTANO ETAPA Fruto en Crec-3 /////

if ($separador[4]=="Fruto en Crec-3"){

$ns=2.18;

$ps=0.17;

$ks=1.05;

$cas=1.93;

$mgs=0.48;

$ss=0.37;

//ppmn's

$fes=294.00;

$cus=23.10;

$mns=152.38;

$zns=150.63;

$bs=87.34;

$mos=0.12;

$nas=250.00;

$cls=763.88;


//CV

//%'s

$ncv=9.85;

$pcv=15.33;

$kcv=16.32;

$cacv=15.95;

$mgcv=12.20;

$scv=13.70;
//ppmn's

$fecv=32.32;

$cucv=84.53;

$mncv=20.79;

$zncv=46.79;

$bcv=9.00;

$mocv=24.20;

$nacv=0.00;

$clcv=56.66;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

		///// CONDICION ARATO-ZUTANO ETAPA Fruto en cosecha (≥ 21.5% MS) /////

if ($separador[4]=="Fruto en cosecha (≥ 21.5% MS)"){

$ns=2.15;

$ps=0.15;

$ks=1.04;

$cas=1.44;

$mgs=0.46;

$ss=0.32;

//ppmn's

$fes=340.25;

$cus=44.18;

$mns=137.03;

$zns=127.45;

$bs=85.80;

$mos=0.17;

$nas=250.00;

$cls=1369.88;


//CV

//%'s

$ncv=8.92;

$pcv=5.81;

$kcv=14.39;

$cacv=22.10;

$mgcv=25.87;

$scv=14.40;
//ppmn's

$fecv=54.39;

$cucv=128.34;

$mncv=57.83;

$zncv=45.02;

$bcv=21.64;

$mocv=36.18;

$nacv=0.00;

$clcv=78.20;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

		///// CONDICION ARATO-ZUTANO ETAPA Fruto en media cosecha (≥ 24% MS) /////

if ($separador[4]=="Fruto en media cosecha (≥ 24% MS)"){

$ns=1.96;

$ps=0.15;

$ks=1.10;

$cas=1.77;

$mgs=0.47;

$ss=0.43;

//ppmn's

$fes=379.90;

$cus=42.86;

$mns=187.11;

$zns=189.70;

$bs=56.73;

$mos=0.40;

$nas=250.80;

$cls=1360.90;


//CV

//%'s

$ncv=11.66;

$pcv=19.61;

$kcv=21.75;

$cacv=21.54;

$mgcv=15.44;

$scv=22.82;
//ppmn's

$fecv=18.87;

$cucv=99.00;

$mncv=50.81;

$zncv=32.35;

$bcv=19.17;

$mocv=60.24;

$nacv=1.01;

$clcv=46.11;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Hojas de 5 cm /////
if($separador[2]=="Lula"){
if($separador[4]=="Hojas de 5 cm"){

$ns=3.06;

$ps=0.49;

$ks=2.16;

$cas=0.49;

$mgs=0.25;

$ss=0.27;

//ppmn's

$fes=167.00;

$cus=18.25;

$mns=31.90;

$zns=70.13;

$bs=130.00;

$mos=0.77;

$nas=269.75;

$cls=308.63;


//CV

//%'s

$ncv=17.5;

$pcv=18.8;

$kcv=12.1;

$cacv=8.5;

$mgcv=11.1;

$scv=9.9;
//ppmn's

$fecv=12.3;

$cucv=21.6;

$mncv=7.0;

$zncv=17.2;

$bcv=6.5;

$mocv=62.4;

$nacv=10.4;

$clcv=9.9;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Antesis /////
if ($separador[4]=="Antesis"){

$ns=2.2;

$ps=0.3;

$ks=1.6;

$cas=0.7;

$mgs=0.3;

$ss=0.2;

//ppmn's

$fes=126.4;

$cus=10.5;

$mns=37.0;

$zns=71.1;

$bs=144.3;

$mos=0.4;

$nas=253.3;

$cls=291.3;


//CV

//%'s

$ncv=6.8;

$pcv=6.8;

$kcv=10.2;

$cacv=12.9;

$mgcv=16.8;

$scv=12.3;
//ppmn's

$fecv=13.7;

$cucv=15.5;

$mncv=42.2;

$zncv=19.1;

$bcv=9.2;

$mocv=63.0;

$nacv=2.5;

$clcv=10.8;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Cuajado de fruto /////
if ($separador[4]=="Cuajado de fruto"){

$ns=2.5;

$ps=0.2;

$ks=1.2;

$cas=1.5;

$mgs=0.4;

$ss=0.4;

//ppmn's

$fes=330.9;

$cus=12.5;

$mns=100.7;

$zns=117.0;

$bs=110.9;

$mos=0.3;

$nas=250.0;

$cls=711.0;


//CV

//%'s

$ncv=17.7;

$pcv=26.7;

$kcv=10.1;

$cacv=16.8;

$mgcv=11.8;

$scv=10.1;
//ppmn's

$fecv=41.2;

$cucv=67.6;

$mncv=38.9;

$zncv=31.3;

$bcv=19.8;

$mocv=78.4;

$nacv=0.0;

$clcv=25.7;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Fruto tamaño aceituna /////
if ($separador[4]=="Fruto tamaño aceituna"){

$ns=2.4;

$ps=0.2;

$ks=1.1;

$cas=1.2;

$mgs=0.4;

$ss=0.3;

//ppmn's

$fes=258.6;

$cus=6.0;

$mns=57.9;

$zns=130.4;

$bs=84.7;

$mos=0.2;

$nas=250.0;

$cls=387.8;


//CV

//%'s

$ncv=17.2;

$pcv=18.7;

$kcv=16.5;

$cacv=28.0;

$mgcv=26.6;

$scv=23.1;
//ppmn's

$fecv=13.8;

$cucv=22.6;

$mncv=9.2;

$zncv=29.9;

$bcv=17.9;

$mocv=60.9;

$nacv=0.0;

$clcv=27.9;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Fruto en Crec-1 /////
if ($separador[4]=="Fruto en Crec-1"){

$ns=2.5;

$ps=0.2;

$ks=1.0;

$cas=1.7;

$mgs=0.5;

$ss=0.4;

//ppmn's

$fes=326.5;

$cus=6.8;

$mns=106.1;

$zns=184.1;

$bs=91.7;

$mos=0.1;

$nas=250.0;

$cls=427.6;


//CV

//%'s

$ncv=10.1;

$pcv=12.5;

$kcv=11.0;

$cacv=8.2;

$mgcv=12.6;

$scv=13.5;
//ppmn's

$fecv=30.1;

$cucv=18.5;

$mncv=36.1;

$zncv=20.0;

$bcv=17.4;

$mocv=28.0;

$nacv=0.0;

$clcv=39.2;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Fruto en Crec-2 /////
if ($separador[4]=="Fruto en Crec-2"){

$ns=2.1;

$ps=0.2;

$ks=0.9;

$cas=1.8;

$mgs=0.5;

$ss=0.4;

//ppmn's

$fes=405.0;

$cus=7.1;

$mns=150.3;

$zns=216.0;

$bs=92.3;

$mos=0.2;

$nas=250.0;

$cls=474.1;


//CV

//%'s

$ncv=11.4;

$pcv=12.5;

$kcv=16.8;

$cacv=12.3;

$mgcv=4.9;

$scv=15.0;
//ppmn's

$fecv=22.2;

$cucv=37.9;

$mncv=16.5;

$zncv=52.2;

$bcv=8.0;

$mocv=78.1;

$nacv=0.0;

$clcv=30.1;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Fruto en Crec-3 /////
if ($separador[4]=="Fruto en Crec-3"){

$ns=2.2;

$ps=0.2;

$ks=1.0;

$cas=1.7;

$mgs=0.5;

$ss=0.3;

//ppmn's

$fes=283.5;

$cus=11.9;

$mns=136.5;

$zns=166.8;

$bs=90.1;

$mos=0.1;

$nas=250.0;

$cls=662.3;


//CV

//%'s

$ncv=8.3;

$pcv=14.9;

$kcv=24.5;

$cacv=40.9;

$mgcv=13.6;

$scv=17.3;
//ppmn's

$fecv=60.1;

$cucv=100.9;

$mncv=33.4;

$zncv=18.2;

$bcv=9.6;

$mocv=26.0;

$nacv=0.0;

$clcv=57.4;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;

	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Fruto en cosecha (≥ 21.5% MS) /////
if ($separador[4]=="Fruto en cosecha (≥ 21.5% MS)"){

$ns=2.2;

$ps=0.2;

$ks=1.0;

$cas=1.7;

$mgs=0.5;

$ss=0.3;

//ppmn's

$fes=373.8;

$cus=7.3;

$mns=126.7;

$zns=190.1;

$bs=80.1;

$mos=0.1;

$nas=250.0;

$cls=1144.8;


//CV

//%'s

$ncv=7.8;

$pcv=10.7;

$kcv=19.2;

$cacv=11.6;

$mgcv=13.0;

$scv=6.3;
//ppmn's

$fecv=21.6;

$cucv=42.0;

$mncv=33.3;

$zncv=19.8;

$bcv=14.9;

$mocv=49.5;

$nacv=0.0;

$clcv=62.0;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-LULA ETAPA Fruto en media cosecha (≥ 24% MS) /////
if ($separador[4]=="Fruto en media cosecha (≥ 24% MS)"){

$ns=1.9;

$ps=0.2;

$ks=1.0;

$cas=2.0;

$mgs=0.5;

$ss=0.5;

//ppmn's

$fes=380.2;

$cus=6.4;

$mns=175.0;

$zns=209.1;

$bs=63.0;

$mos=0.4;

$nas=284.0;

$cls=1000.8;


//CV

//%'s

$ncv=14.7;

$pcv=20.2;

$kcv=15.9;

$cacv=20.9;

$mgcv=15.2;

$scv=39.7;
//ppmn's

$fecv=22.7;

$cucv=30.4;

$mncv=33.0;

$zncv=25.2;

$bcv=15.3;

$mocv=82.7;

$nacv=22.9;

$clcv=45.8;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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
}

///// CONDICION Beggie Perú-ZUTANO ETAPA Hojas de 5 cm /////
if($separador[0]=="Beggie Perú"){
if($separador[2]=="Zutano"){
if($separador[4]=="Hojas de 5 cm"){
	
$ns=3.26;

$ps=0.50;

$ks=2.08;

$cas=0.34;

$mgs=0.18;

$ss=0.24;

//ppmn's

$fes=112.50;

$cus=19.26;

$mns=19.96;

$zns=67.57;

$bs=107.66;

$mos=0.84;

$nas=250.00;

$cls=289.29;


//CV

//%'s

$ncv=17.28;

$pcv=13.86;

$kcv=6.68;

$cacv=15.77;

$mgcv=6.31;

$scv=10.03;
//ppmn's

$fecv=8.06;

$cucv=7.73;

$mncv=26.34;

$zncv=11.56;

$bcv=14.92;

$mocv=46.06;

$nacv=0.00;

$clcv=7.36;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Antesis /////
if($separador[4]=="Antesis"){
	
$ns=2.5;

$ps=0.3;

$ks=1.6;

$cas=0.7;

$mgs=0.3;

$ss=0.3;

//ppmn's

$fes=129.3;

$cus=11.4;

$mns=27.0;

$zns=47.7;

$bs=115.6;

$mos=0.4;

$nas=251.4;

$cls=297.4;


//CV

//%'s

$ncv=12.4;

$pcv=7.2;

$kcv=12.2;

$cacv=18.7;

$mgcv=11.0;

$scv=16.4;
//ppmn's

$fecv=9.3;

$cucv=16.0;

$mncv=24.0;

$zncv=16.9;

$bcv=17.9;

$mocv=52.8;

$nacv=1.6;

$clcv=11.0;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Cuajado de fruto /////
if($separador[4]=="Cuajado de fruto"){
	
$ns=2.5;

$ps=0.2;

$ks=1.3;

$cas=0.9;

$mgs=0.3;

$ss=0.3;

//ppmn's

$fes=117.8;

$cus=8.3;

$mns=31.3;

$zns=67.4;

$bs=93.1;

$mos=0.2;

$nas=250.0;

$cls=359.8;


//CV

//%'s

$ncv=5.6;

$pcv=13.1;

$kcv=8.2;

$cacv=42.4;

$mgcv=16.9;

$scv=21.1;
//ppmn's

$fecv=69.7;

$cucv=11.2;

$mncv=51.5;

$zncv=31.8;

$bcv=20.1;

$mocv=82.2;

$nacv=0.0;

$clcv=17.4;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Fruto tamaño aceituna /////
if($separador[4]=="Fruto tamaño aceituna"){
	
$ns=2.6;

$ps=0.2;

$ks=1.2;

$cas=1.1;

$mgs=0.3;

$ss=0.2;

//ppmn's

$fes=175.1;

$cus=7.0;

$mns=47.1;

$zns=65.8;

$bs=63.9;

$mos=0.3;

$nas=250.0;

$cls=324.8;


//CV

//%'s

$ncv=5.6;

$pcv=11.1;

$kcv=11.0;

$cacv=14.5;

$mgcv=13.9;

$scv=18.1;
//ppmn's

$fecv=26.1;

$cucv=13.0;

$mncv=42.2;

$zncv=45.9;

$bcv=20.1;

$mocv=116.5;

$nacv=0.0;

$clcv=11.1;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Fruto en Crec-1 /////
if($separador[4]=="Fruto en Crec-1"){
	
$ns=2.6;

$ps=0.2;

$ks=1.3;

$cas=1.4;

$mgs=0.3;

$ss=0.3;

//ppmn's

$fes=172.6;

$cus=6.7;

$mns=64.1;

$zns=69.7;

$bs=58.4;

$mos=0.2;

$nas=250.0;

$cls=420.4;


//CV

//%'s

$ncv=5.4;

$pcv=8.3;

$kcv=14.4;

$cacv=18.5;

$mgcv=10.7;

$scv=20.4;
//ppmn's

$fecv=45.1;

$cucv=9.4;

$mncv=22.4;

$zncv=47.3;

$bcv=18.8;

$mocv=64.1;

$nacv=0.0;

$clcv=33.7;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Fruto en Crec-2 /////
if($separador[4]=="Fruto en Crec-2"){
	
$ns=2.5;

$ps=0.2;

$ks=1.1;

$cas=1.5;

$mgs=0.4;

$ss=0.3;

//ppmn's

$fes=231.9;

$cus=75.1;

$mns=81.0;

$zns=82.6;

$bs=73.9;

$mos=2.3;

$nas=250.0;

$cls=522.8;


//CV

//%'s

$ncv=5.9;

$pcv=5.1;

$kcv=17.6;

$cacv=11.6;

$mgcv=13.3;

$scv=20.4;
//ppmn's

$fecv=23.1;

$cucv=108.6;

$mncv=19.5;

$zncv=33.6;

$bcv=21.4;

$mocv=184.6;

$nacv=0.0;

$clcv=46.0;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Fruto en Crec-3 /////
if($separador[4]=="Fruto en Crec-3"){
	
$ns=2.4;

$ps=0.2;

$ks=1.3;

$cas=1.9;

$mgs=0.4;

$ss=0.3;

//ppmn's

$fes=260.0;

$cus=34.6;

$mns=102.1;

$zns=108.0;

$bs=76.9;

$mos=1.6;

$nas=250.0;

$cls=883.3;


//CV

//%'s

$ncv=10.0;

$pcv=9.2;

$kcv=28.2;

$cacv=29.6;

$mgcv=13.5;

$scv=18.3;
//ppmn's

$fecv=29.6;

$cucv=114.3;

$mncv=49.3;

$zncv=42.6;

$bcv=21.4;

$mocv=218.0;

$nacv=0.0;

$clcv=83.9;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Fruto en cosecha (≥ 21.5% MS) /////
if($separador[4]=="Fruto en cosecha (≥ 21.5% MS)"){
	
$ns=2.2;

$ps=0.2;

$ks=1.2;

$cas=1.8;

$mgs=0.5;

$ss=0.4;

//ppmn's

$fes=221.8;

$cus=44.4;

$mns=106.5;

$zns=95.3;

$bs=67.3;

$mos=0.3;

$nas=250.0;

$cls=1138.6;


//CV

//%'s

$ncv=9.5;

$pcv=9.3;

$kcv=26.0;

$cacv=19.5;

$mgcv=19.9;

$scv=21.7;
//ppmn's

$fecv=39.9;

$cucv=98.9;

$mncv=55.8;

$zncv=52.0;

$bcv=30.4;

$mocv=72.3;

$nacv=0.0;

$clcv=85.0;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-ZUTANO ETAPA Fruto en media cosecha (≥ 24% MS) /////
if($separador[4]=="Fruto en media cosecha (≥ 24% MS)"){
	
$ns=2.3;

$ps=0.2;

$ks=1.3;

$cas=1.8;

$mgs=0.4;

$ss=0.4;

//ppmn's

$fes=284.2;

$cus=40.0;

$mns=124.8;

$zns=78.7;

$bs=51.3;

$mos=0.6;

$nas=250.0;

$cls=789.4;


//CV

//%'s

$ncv=12.3;

$pcv=13.7;

$kcv=14.5;

$cacv=20.5;

$mgcv=9.3;

$scv=21.5;
//ppmn's

$fecv=22.7;

$cucv=88.6;

$mncv=24.1;

$zncv=69.8;

$bcv=27.5;

$mocv=31.0;

$nacv=0.0;

$clcv=44.1;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Hojas de 5 cm /////
if($separador[0]=="Beggie Perú"){
if($separador[2]=="Lula"){
if($separador[4]=="Hojas de 5 cm"){
	
$ns=3.44;

$ps=0.52;

$ks=2.17;

$cas=0.36;

$mgs=0.21;

$ss=0.25;

//ppmn's

$fes=151.58;

$cus=22.22;

$mns=23.55;

$zns=78.47;

$bs=131.08;

$mos=0.79;

$nas=254.29;

$cls=354.25;


//CV

//%'s

$ncv=14.1;

$pcv=15.9;

$kcv=7.9;

$cacv=13.0;

$mgcv=11.1;

$scv=13.5;
//ppmn's

$fecv=21.2;

$cucv=19.4;

$mncv=75.0;

$zncv=16.3;

$bcv=15.4;

$mocv=56.2;

$nacv=5.8;

$clcv=59.5;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Antesis /////
if($separador[4]=="Antesis"){
	
$ns=2.7;

$ps=0.4;

$ks=1.4;

$cas=0.7;

$mgs=0.3;

$ss=0.3;

//ppmn's

$fes=176.7;

$cus=14.9;

$mns=25.5;

$zns=61.5;

$bs=186.3;

$mos=0.4;

$nas=258.4;

$cls=327.2;


//CV

//%'s

$ncv=14.4;

$pcv=18.6;

$kcv=24.8;

$cacv=14.8;

$mgcv=15.4;

$scv=22.1;
//ppmn's

$fecv=20.9;

$cucv=16.6;

$mncv=85.5;

$zncv=18.1;

$bcv=26.9;

$mocv=63.2;

$nacv=8.8;

$clcv=26.5;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Cuajado de fruto /////
if($separador[4]=="Cuajado de fruto"){
	
$ns=2.5;

$ps=0.2;

$ks=1.2;

$cas=0.9;

$mgs=0.3;

$ss=0.3;

//ppmn's

$fes=121.0;

$cus=7.9;

$mns=31.9;

$zns=60.3;

$bs=88.4;

$mos=0.3;

$nas=250.0;

$cls=382.4;


//CV

//%'s

$ncv=6.0;

$pcv=17.1;

$kcv=12.9;

$cacv=43.1;

$mgcv=18.9;

$scv=28.3;
//ppmn's

$fecv=78.5;

$cucv=17.5;

$mncv=69.4;

$zncv=38.2;

$bcv=27.1;

$mocv=96.5;

$nacv=0.0;

$clcv=17.5;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Fruto tamaño aceituna /////
if($separador[4]=="Fruto tamaño aceituna"){
	
$ns=2.7;

$ps=0.2;

$ks=1.2;

$cas=1.3;

$mgs=0.4;

$ss=0.3;

//ppmn's

$fes=211.2;

$cus=8.6;

$mns=47.9;

$zns=105.1;

$bs=91.2;

$mos=0.3;

$nas=250.0;

$cls=319.6;


//CV

//%'s

$ncv=5.6;

$pcv=16.0;

$kcv=16.7;

$cacv=14.7;

$mgcv=6.5;

$scv=21.9;
//ppmn's

$fecv=20.8;

$cucv=19.5;

$mncv=46.1;

$zncv=23.3;

$bcv=25.3;

$mocv=129.3;

$nacv=0.0;

$clcv=11.4;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Fruto en Crec-1 /////
if($separador[4]=="Fruto en Crec-1"){
	
$ns=2.5;

$ps=0.2;

$ks=1.2;

$cas=1.6;

$mgs=0.4;

$ss=0.3;

//ppmn's

$fes=192.3;

$cus=7.7;

$mns=57.9;

$zns=100.4;

$bs=76.1;

$mos=0.2;

$nas=250.0;

$cls=375.6;


//CV

//%'s

$ncv=4.9;

$pcv=11.7;

$kcv=15.1;

$cacv=13.9;

$mgcv=10.2;

$scv=23.8;
//ppmn's

$fecv=38.0;

$cucv=16.0;

$mncv=31.2;

$zncv=32.1;

$bcv=26.3;

$mocv=58.8;

$nacv=0.0;

$clcv=20.3;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Fruto en Crec-2 /////
if($separador[4]=="Fruto en Crec-2"){
	
$ns=2.4;

$ps=0.2;

$ks=1.0;

$cas=1.6;

$mgs=0.4;

$ss=0.3;

//ppmn's

$fes=226.6;

$cus=37.0;

$mns=77.5;

$zns=99.0;

$bs=75.1;

$mos=0.2;

$nas=250.0;

$cls=421.1;


//CV

//%'s

$ncv=5.2;

$pcv=6.5;

$kcv=15.9;

$cacv=26.4;

$mgcv=10.8;

$scv=17.7;
//ppmn's

$fecv=9.2;

$cucv=70.1;

$mncv=23.7;

$zncv=49.4;

$bcv=26.2;

$mocv=81.5;

$nacv=0.0;

$clcv=21.3;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Fruto en Crec-3 /////
if($separador[4]=="Fruto en Crec-3"){
	
$ns=2.5;

$ps=0.2;

$ks=1.1;

$cas=2.0;

$mgs=0.4;

$ss=0.3;

//ppmn's

$fes=273.4;

$cus=13.5;

$mns=93.5;

$zns=106.9;

$bs=65.5;

$mos=0.2;

$nas=250.0;

$cls=517.7;


//CV

//%'s

$ncv=10.1;

$pcv=16.4;

$kcv=17.0;

$cacv=28.3;

$mgcv=19.2;

$scv=15.8;
//ppmn's

$fecv=24.3;

$cucv=142.0;

$mncv=37.5;

$zncv=52.2;

$bcv=30.3;

$mocv=70.2;

$nacv=0.0;

$clcv=68.0;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Fruto en cosecha (≥ 21.5% MS) /////
if($separador[4]=="Fruto en cosecha (≥ 21.5% MS)"){
	
$ns=2.3;

$ps=0.2;

$ks=1.1;

$cas=1.9;

$mgs=0.5;

$ss=0.4;

//ppmn's

$fes=257.4;

$cus=7.2;

$mns=81.8;

$zns=113.9;

$bs=76.2;

$mos=0.2;

$nas=250.0;

$cls=934.7;


//CV

//%'s

$ncv=7.0;

$pcv=11.2;

$kcv=16.7;

$cacv=21.8;

$mgcv=25.5;

$scv=20.0;
//ppmn's

$fecv=49.9;

$cucv=17.6;

$mncv=49.2;

$zncv=48.0;

$bcv=27.4;

$mocv=63.1;

$nacv=0.0;

$clcv=56.1;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION Beggie Perú-Lula ETAPA Fruto en media cosecha (≥ 24% MS) /////
if($separador[4]=="Fruto en media cosecha (≥ 24% MS)"){
	
$ns=2.3;

$ps=0.2;

$ks=1.1;

$cas=1.9;

$mgs=0.5;

$ss=0.4;

//ppmn's

$fes=257.4;

$cus=7.2;

$mns=81.8;

$zns=113.9;

$bs=76.2;

$mos=0.2;

$nas=250.0;

$cls=934.7;


//CV

//%'s

$ncv=7.0;

$pcv=11.2;

$kcv=16.7;

$cacv=21.8;

$mgcv=25.5;

$scv=20.0;
//ppmn's

$fecv=49.9;

$cucv=17.6;

$mncv=49.2;

$zncv=48.0;

$bcv=27.4;

$mocv=63.1;

$nacv=0.0;

$clcv=56.1;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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
	
}////FIN DEL CICLO ETAPA
}////FIN DEL CICLO RAZA
}////FIN DEL CICLO EMPRESA
}////FIN DEL CICLO TEJIDO

	         ////////////////// CONDICIONES PARA PULPA  /////////////////////////////
///// CONDICION ARATO -ZUTANO ETAPA Fruto tamaño aceituna /////
if($separador[3]=="Pulpa"){
if($separador[0]=="Arato Perú"){
if($separador[2]=="Zutano"){
if($separador[4]=="Fruto tamaño aceituna"){
	
$ns=2.12;

$ps=0.27;

$ks=1.57;

$cas=0.17;

$mgs=0.15;

$ss=0.11;

//ppmn's

$fes=30.78;

$cus=12.99;

$mns=5.00;

$zns=47.64;

$bs=121.46;

$mos=0.21;

$nas=256.60;

$cls=300.00;


//CV

//%'s

$ncv=13.36;

$pcv=11.77;

$kcv=4.39;

$cacv=20.43;

$mgcv=20.84;

$scv=21.32;
//ppmn's

$fecv=43.74;

$cucv=33.23;

$mncv=0.00;

$zncv=22.25;

$bcv=24.16;

$mocv=62.81;

$nacv=5.75;

$clcv=0.00;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-ZUTANO ETAPA Fruto en Crec-1 /////

if($separador[4]=="Fruto en Crec-1"){
	
$ns=1.18;

$ps=0.19;

$ks=1.65;

$cas=0.12;

$mgs=0.10;

$ss=0.11;

//ppmn's

$fes=78.09;

$cus=6.97;

$mns=5.00;

$zns=36.50;

$bs=136.34;

$mos=0.14;

$nas=275.63;

$cls=300.00;


//CV

//%'s

$ncv=10.03;

$pcv=7.94;

$kcv=10.81;

$cacv=26.39;

$mgcv=17.88;

$scv=10.12;
//ppmn's

$fecv=56.39;

$cucv=46.34;

$mncv=0.00;

$zncv=26.49;

$bcv=32.09;

$mocv=31.61;

$nacv=14.50;

$clcv=0.00;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-ZUTANO ETAPA Fruto en Crec-2 /////

if($separador[4]=="Fruto en Crec-2"){
	
$ns=1.22;

$ps=0.20;

$ks=1.72;

$cas=0.11;

$mgs=0.11;

$ss=0.12;

//ppmn's

$fes=99.75;

$cus=10.76;

$mns=5.00;

$zns=42.44;

$bs=172.13;

$mos=0.21;

$nas=313.13;

$cls=300.00;


//CV

//%'s

$ncv=7.74;

$pcv=10.04;

$kcv=12.15;

$cacv=39.58;

$mgcv=24.70;

$scv=6.88;
//ppmn's

$fecv=76.43;

$cucv=24.79;

$mncv=0.00;

$zncv=22.45;

$bcv=10.77;

$mocv=46.57;

$nacv=16.33;

$clcv=0.00;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-ZUTANO ETAPA Fruto en Crec-3/////

if($separador[4]=="Fruto en Crec-3"){
	
$ns=1.27;

$ps=0.16;

$ks=1.98;

$cas=0.07;

$mgs=0.10;

$ss=0.12;

//ppmn's

$fes=62.96;

$cus=8.15;

$mns=7.40;

$zns=35.99;

$bs=153.38;

$mos=0.11;

$nas=401.00;

$cls=181.84;


//CV

//%'s

$ncv=20.88;

$pcv=39.39;

$kcv=7.37;

$cacv=28.28;

$mgcv=26.73;

$scv=15.59;
//ppmn's

$fecv=48.70;

$cucv=31.89;

$mncv=29.36;

$zncv=31.10;

$bcv=11.50;

$mocv=31.43;

$nacv=29.73;

$clcv=54.29;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-ZUTANO ETAPA Fruto en cosecha (≥ 21.5% MS)/////

if($separador[4]=="Fruto en cosecha (≥ 21.5% MS)"){
	
$ns=1.08;

$ps=0.16;

$ks=1.82;

$cas=0.05;

$mgs=0.07;

$ss=0.09;

//ppmn's

$fes=40.89;

$cus=6.95;

$mns=5.05;

$zns=26.26;

$bs=122.81;

$mos=0.10;

$nas=383.13;

$cls=228.13;


//CV

//%'s

$ncv=10.97;

$pcv=15.69;

$kcv=10.44;

$cacv=71.43;

$mgcv=25.12;

$scv=21.24;
//ppmn's

$fecv=76.03;

$cucv=29.02;

$mncv=2.59;

$zncv=30.91;

$bcv=32.87;

$mocv=0.00;

$nacv=14.26;

$clcv=30.86;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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

///// CONDICION ARATO-ZUTANO ETAPA Fruto en media cosecha (≥ 24% MS)/////

if($separador[4]=="Fruto en media cosecha (≥ 24% MS)"){
	
$ns=1.09;

$ps=0.26;

$ks=2.20;

$cas=0.05;

$mgs=0.09;

$ss=0.18;

//ppmn's

$fes=47.74;

$cus=9.45;

$mns=5.74;

$zns=31.59;

$bs=165.89;

$mos=0.17;

$nas=746.44;

$cls=250.00;


//CV

//%'s

$ncv=15.03;

$pcv=13.91;

$kcv=18.47;

$cacv=35.08;

$mgcv=11.97;

$scv=18.82;
//ppmn's

$fecv=68.96;

$cucv=25.26;

$mncv=17.01;

$zncv=26.02;

$bcv=17.29;

$mocv=36.51;

$nacv=26.76;

$clcv=0.00;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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
	
}////FIN DEL CICLO ETAPA
}////FIN DEL CICLO RAZA

if($separador[2]=="Lula"){
if($separador[4]=="Fruto tamaño aceituna"){
	
$ns=2.11;

$ps=0.29;

$ks=1.60;

$cas=0.24;

$mgs=0.19;

$ss=0.14;

//ppmn's

$fes=45.44;

$cus=12.37;

$mns=5.00;

$zns=59.08;

$bs=156.06;

$mos=0.21;

$nas=274.60;

$cls=300.00;


//CV

//%'s

$ncv=6.63;

$pcv=9.32;

$kcv=3.51;

$cacv=16.84;

$mgcv=14.27;

$scv=16.81;
//ppmn's

$fecv=34.94;

$cucv=25.44;

$mncv=0.00;

$zncv=20.70;

$bcv=21.08;

$mocv=81.92;

$nacv=6.97;

$clcv=0.00;

if ($separador[10] < $ns && $separador[10]>0 )

    {

     $pn=($separador[10]/$ns)*100;

	 $in=(100-$pn)*($ncv/100);

	 $nr1=$pn+$in;       

	}	 

if ($separador[10] > $ns && $separador[10]>0)

    {

     $pn=($separador[10]/$ns)*100;

	 $in=($pn-100)*($ncv/100);

	 $nr1=$pn-$in;

	}

if ($separador[11] < $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=(100-$pp)*($pcv/100);

	 $pr1=$pp+$ip;       

	}	 
   

if ($separador[11] > $ps && $separador[11]>0)

    {

     $pp=($separador[11]/$ps)*100;

	 $ip=($pp-100)*($pcv/100);

	 $pr1=$pp-$ip;

	}

if ($separador[12] < $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=(100-$pk)*($kcv/100);

	 $kr1=$pk+$ik;       

	}	 	   

if ($separador[12] > $ks && $separador[12]>0)

    {

     $pk=($separador[12]/$ks)*100;

	 $ik=($pk-100)*($kcv/100);

	 $kr1=$pk-$ik;

	}

if ($separador[13] < $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=(100-$pca)*($cacv/100);

	 $car1=$pca+$ica;       

	}	    

if ($separador[13] > $cas && $separador[13]>0)

    {

     $pca=($separador[13]/$cas)*100;

	 $ica=($pca-100)*($cacv/100);

	 $car1=$pca-$ica;

	}

if ($separador[14] < $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=(100-$pmg)*($mgcv/100);

	 $mgr1=$pmg+$img;       

	}	    

if ($separador[14] > $mgs && $separador[14]>0)

    {

     $pmg=($separador[14]/$mgs)*100;

	 $img=($pmg-100)*($mgcv/100);

	 $mgr1=$pmg-$img;

	}

if ($separador[15] < $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=(100-$ps)*($scv/100);

	 $sr1=$ps+$is;       

	}	 

if ($separador[15] > $ss && $separador[15]>0)

    {

     $ps=($separador[15]/$ss)*100;

	 $is=($ps-100)*($scv/100);

	 $sr1=$ps-$is;

	}

if ($separador[16] < $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=(100-$pfe)*($fecv/100);

	 $fer1=$pfe+$ife;       

	}	 

if ($separador[16] > $fes && $separador[16]>0)

    {

     $pfe=($separador[16]/$fes)*100;

	 $ife=($pfe-100)*($fecv/100);

	 $fer1=$pfe-$ife;

	}

if ($separador[17] < $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=(100-$pcu)*($cucv/100);

	 $cur1=$pcu+$icu;       

	}	    

if ($separador[17] > $cus && $separador[17]>0)

    {

     $pcu=($separador[17]/$cus)*100;

	 $icu=($pcu-100)*($cucv/100);

	 $cur1=$pcu-$icu;

	}

if ($separador[18] < $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=(100-$pmn)*($mncv/100);

	 $mnr1=$pmn+$imn;       

	}	 

if ($separador[18] > $mns && $separador[18]>0)

    {

     $pmn=($separador[18]/$mns)*100;

	 $imn=($pmn-100)*($mncv/100);

	 $mnr1=$pmn-$imn;

	}

if ($separador[19] < $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=(100-$pzn)*($zncv/100);

	 $znr1=$pzn+$izn;       

	}	   

if ($separador[19] > $zns && $separador[19]>0)

    {

     $pzn=($separador[19]/$zns)*100;

	 $izn=($pzn-100)*($zncv/100);

	 $znr1=$pzn-$izn;

	}

if ($separador[20] < $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=(100-$pb)*($bcv/100);

	 $br1=$pb+$ib;       

	}	 

if ($separador[20] > $bs && $separador[20]>0)

    {

     $pb=($separador[20]/$bs)*100;

	 $ib=($pb-100)*($bcv/100);

	 $br1=$pb-$ib;


	}

if ($separador[21] < $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=(100-$mob)*($mocv/100);

	 $mor1=$pmo+$imo;       

	}	 

if ($separador[21]> $mos && $separador[21]>0)

    {

     $pmo=($separador[21]/$mos)*100;

	 $imo=($pmo-100)*($mocv/100);

	 $mor1=$pmo-$imo;

	}
	
	if ($separador[22] < $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=(100-$pna)*($nacv/100);

	 $nar1=$pna+$ina;       

	}	 

if ($separador[22] > $nas && $separador[22]>0)

    {

     $pna=($separador[22]/$nas)*100;

	 $ina=($pna-100)*($nacv/100);

	 $nar1=$pna-$ina;

	}

if ($separador[23] < $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=(100-$clb)*($clcv/100);

	 $clr1=$clb+$icl;       

	}	 

if ($separador[23]> $cls && $separador[23]>0)

    {

     $clb=($separador[23]/$cls)*100;

	 $icl=($clb-100)*($clcv/100);

	 $clr1=$clb-$icl;

	}

	//si el Estandar y el valor son iguales
	if($separador[10]==$ns)
	{
	$nr1=100;
	}
	if($separador[11]==$ps)
	{
	$pr1=100;
	}
	if($separador[12]==$ks)
	{
	$kr1=100;
	}
	if($separador[13]==$cas)
	{
	$car1=100;
	}
	if($separador[14]==$mgs)
	{
	$mgr1=100;
	}
	if($separador[15]==$ss)
	{
	$sr1=100;
	}
	if($separador[16]==$fes)
	{
	$fer1=100;
	}
	if($separador[17]==$cus)
	{
	$cur1=100;
	}
	if($separador[18]==$mns)
	{
	$mnr1=100;
	}
	if($separador[19]==$zns)
	{
	$znr1=100;
	}
	if($separador[20]==$bs)
	{
	$br1=100;
	}	
	if($separador[21]==$mos)
	{
	$mor1=100;
	}	
	if($separador[22]==$nas)
	{
	$nar1=100;
	}	
	if($separador[23]==$cls)
	{
	$clr1=100;
	}	

//si es 0
    if($separador[10]==0)
	{
	$nr1=0;
	}
	if($separador[11]==0)
	{
	$pr1=0;
	}
	if($separador[12]==0)
	{
	$kr1=0;
	}
	if($separador[13]==0)
	{
	$car1=0;
	}
	if($separador[14]==0)
	{
	$mgr1=0;
	}
	if($separador[15]==0)
	{
	$sr1=0;
	}
	if($separador[16]==0)
	{
	$fer1=0;
	}
	if($separador[17]==0)
	{
	$cur1=0;
	}
	if($separador[18]==0)
	{
	$mnr1=0;
	}
	if($separador[19]==0)
	{
	$znr1=0;
	}
	if($separador[20]==0)
	{
	$br1=0;
	}	
	if($separador[21]==0)
	{
	$mor1=0;
	}
	if($separador[22]==0)
	{
	$nar1=0;
	}
	if($separador[23]==0)
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
}////FIN DEL CICLO RAZA
}////FIN DEL CICLO EMPRESA
}////FIN DEL CICLO TEJIDO
	
} ////FIN DEL CICLO WHILE

$insertar="INSERT INTO datos_arato (ID, ptg, patron, estado, situacion, diametro, longitud, pesof, porcentaje, campania, E1, edad, FM, N, P, K, Ca, Mg, S, Fe, Cu, Mn, Zn, B, Mo, Na, Cl, Nr, Pr, Kr, Car, Mgr, Sr, Fer, Cur, Mnr, Znr, Br, Mor, Nar, Clr)
VALUES ('".$separador[0]."','".$separador[1]."','".$separador[2]."','".$separador[3]."','".$separador[4]."','".$separador[5]."','".$separador[6]."','".$separador[7]."','".$separador[8]."','".$separador[9]."','".$separador[10]."','".$separador[11]."','".$separador[12]."','".$separador[13]."','".$separador[14]."','".$separador[15]."','".$separador[16]."','".$separador[17]."','".$separador[18]."','".$separador[19]."','".$separador[20]."','".$separador[21]."','".$separador[22]."','".$separador[23]."','".$separador[24]."','".$separador[25]."','".$separador[26]."','".$nr."','".$pr."','".$kr."','".$car."','".$mgr."','".$sr."','".$fer."','".$cur."','".$mnr."','".$znr."','".$br."','".$mor."','".$nar."','".$clr."')";

$result= mysql_query($insertar, $cnx);
if (! $result){
                               echo "La consulta SQL contiene errores.".mysql_error();
                               exit();
                }
				else {echo "<center><td align='center' class='Estilo73'>Importación correcta!</td>";
				     }	

}

fclose($fp);	
?>
                              </div>
                        </div>
                        <div class="section the_content no_content"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="Footer" class="clearfix">
          <div class="footer_copy">
              <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_left button_js" href="#"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                        <div class="copyright">
                            &copy; © 2016 - Derechos reservados para Grupo Agrícola Arato
                        </div>
                        <ul class="social"></ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="../../js/jquery-2.1.4.min.js"></script>

    <script type="text/javascript" src="../../js/mfn.menu.js"></script>
    <script type="text/javascript" src="../../js/jquery.plugins.js"></script>
    <script type="text/javascript" src="../../js/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="../../js/animations/animations.js"></script>
    <script type="text/javascript" src="../../js/scripts.js"></script>


    <script id="mfn-dnmc-retina-js">
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/imagen.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/imagen.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "images/imagen.png").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>

</body>

</html>