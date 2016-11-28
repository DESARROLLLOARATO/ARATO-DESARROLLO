<script language="JavaScript" type="text/javascript">
alert("Gracias por completar los datos. En breve recibirá un correo electrónico con el reporte del Diagnóstico Nutrimental Foliar según la Etapa Fenológica del Aguacate ‘Méndez’ en Jalisco con sus datos.");
</script>
               
<?php
$OK = $_POST["OK"];
//date_default_timezone_set('America/Mexico_City');

//$fec=date("Y-m-d");
$fec=$_POST['fecha'];
$hor=date("H:i:s");

if (isset($_POST['usuario']) && !empty($_POST['usuario']) &&
   isset($_POST['huerto']) && !empty($_POST['huerto']) &&
   isset($_POST['localidad']) && !empty($_POST['localidad']) &&
   isset($_POST['correo']) && !empty($_POST['correo'])){
    

if ($_POST['fenolo']=="Fruto tamaño aceituna (20-30 mm Ø) 110 días (26 Noviembre)"){
//valor estÃƒÂ¡ndar

//%'s
$ns=2.06;
$ps=0.30;
$ks=1.53;
$cas=0.23;
$mgs=0.17;
$ss=0.12;
$nas=261.20;
$cls=300.00;

//ppmn's
$fes=58.84;
$cus=17.34;
$mns=5.00;
$zns=52.48;
$bs=122.00;


//CV
//%'s
$ncv=21.83;
$pcv=24.04;
$kcv=2.31;
$cacv=26.09;
$mgcv=19.95;
$scv=16.67;
$nacv=9.59;
$clcv=0.00;

//ppmn's
$fecv=23.52;
$cucv=22.61;
$mncv=0.00;
$zncv=14.59;
$bcv=10.43;
}


if ($_POST['fenolo']=="Fruto Etapa I (35-45 mm Ø) 140 días (24 Diciembre)"){
//valor estÃƒÂ¡ndar

//%'s
$ns=1.15;
$ps=0.18;
$ks=1.66;
$cas=0.10;
$mgs=0.09;
$ss=0.10;
$nas=257.91;
$cls=300.00;

//ppmn's
$fes=33.04;
$cus=9.16;
$mns=5.03;
$zns=32.85;
$bs=106.95;


//CV
//%'s
$ncv=10.71;
$pcv=8.01;
$kcv=23.26;
$cacv=47.65;
$mgcv=21.35;
$scv=17.93;
$nacv=9.79;
$clcv=0.00;

//ppmn's
$fecv=19.29;
$cucv=28.23;
$mncv=1.17;
$zncv=29.91;
$bcv=22.06;
}              

if ($_POST['fenolo']=="Fruto Etapa II (50-60 mm Ø) 259 días (25 Abril)"){
//valor estÃƒÂ¡ndar

//%'s
$ns=1.11;
$ps=0.20;
$ks=1.83;
$cas=0.07;
$mgs=0.09;
$ss=0.10;
$nas=290.13;
$cls=300.00;

//ppmn's
$fes=33.54;
$cus=9.58;
$mns=5.00;
$zns=33.80;
$bs=148.50;


//CV
//%'s
$ncv=13.99;
$pcv=5.40;
$kcv=16.54;
$cacv=26.33;
$mgcv=17.02;
$scv=13.39;
$nacv=19.35;
$clcv=0.00;

//ppmn's
$fecv=14.78;
$cucv=22.70;
$mncv=0.00;
$zncv=9.22;
$bcv=27.68;
}

if ($_POST['fenolo']=="Fruto Etapa III (60-70 mm Ø) 293 días (28 Mayo)"){
//valor estÃƒÂ¡ndar

//%'s
$ns=1.21;
$ps=0.19;
$ks=1.80;
$cas=0.07;
$mgs=0.11;
$ss=0.13;
$nas=267.80;
$cls=198.70;

//ppmn's
$fes=34.83;
$cus=9.47;
$mns=6.31;
$zns=34.95;
$bs=142.18;


//CV
//%'s
$ncv=12.45;
$pcv=10.66;
$kcv=17.08;
$cacv=23.90;
$mgcv=15.71;
$scv=18.79;
$nacv=14.28;
$clcv=54.23;

//ppmn's
$fecv=25.89;
$cucv=29.21;
$mncv=24.22;
$zncv=15.67;
$bcv=29.22;
}

if ($_POST['fenolo']=="Madurez de cosecha >70 mm Ø (≥ 21.5% m.s. en pulpa) 324 días (28 Junio)"){
					  
//valor estÃƒÂ¡ndar

//%'s
$ns=1.13;
$ps=0.21;
$ks=2.38;
$cas=0.04;
$mgs=0.09;
$ss=0.11;
$nas=450.04;
$cls=180.29;

//ppmn's
$fes=28.47;
$cus=9.67;
$mns=5.12;
$zns=30.29;
$bs=170.80;


//CV
//%'s
$ncv=7.87;
$pcv=22.21;
$kcv=13.11;
$cacv=25.50;
$mgcv=26.40;
$scv=21.42;
$nacv=35.89;
$clcv=70.11;

//ppmn's
$fecv=26.64;
$cucv=40.65;
$mncv=4.95;
$zncv=27.18;
$bcv=19.84;
}
    
if ($_POST['fenolo']=="Madurez de cosecha 2 >70 mm Ø (≥ 24% m.s. en pulpa) 324 días (28 Junio)"){
					  
//valor estÃƒÂ¡ndar

//%'s
$ns=0.99;
$ps=0.23;
$ks=1.98;
$cas=0.03;
$mgs=0.08;
$ss=0.14;
$nas=416.22;
$cls=250.00;

//ppmn's
$fes=24.98;
$cus=9.51;
$mns=15.81;
$zns=32.56;
$bs=119.50;


//CV
//%'s
$ncv=8.20;
$pcv=20.25;
$kcv=11.33;
$cacv=18.04;
$mgcv=14.56;
$scv=18.22;
$nacv=29.39;
$clcv=0.00;

//ppmn's
$fecv=45.01;
$cucv=52.00;
$mncv=211.63;
$zncv=32.37;
$bcv=29.13;
}

//nitrogeno porcentajes
if ($_POST['n1'] < $ns && $_POST['n1']>0 )
    {
     $pn=($_POST['n1']/$ns)*100;
	 $in=(100-$pn)*($ncv/100);
	 $nr1=$pn+$in;       
	}	 
if ($_POST['n1'] > $ns && $_POST['n1']>0)
    {
     $pn=($_POST['n1']/$ns)*100;
	 $in=($pn-100)*($ncv/100);
	 $nr1=$pn-$in;
	}

//fosforo porcentajes
if ($_POST['p1'] < $ps && $_POST['p1']>0)
    {
     $pp=($_POST['p1']/$ps)*100;
	 $ip=(100-$pp)*($pcv/100);
	 $pr1=$pp+$ip;       
	}	 
if ($_POST['p1'] > $ps && $_POST['p1']>0)
    {
     $pp=($_POST['p1']/$ps)*100;
	 $ip=($pp-100)*($pcv/100);
	 $pr1=$pp-$ip;
	}

//potasio porcentajes
if ($_POST['k1'] < $ks && $_POST['k1']>0)
    {
     $pk=($_POST['k1']/$ks)*100;
	 $ik=(100-$pk)*($kcv/100);
	 $kr1=$pk+$ik;       
	}	 
if ($_POST['k1'] > $ks && $_POST['k1']>0)
    {
     $pk=($_POST['k1']/$ks)*100;
	 $ik=($pk-100)*($kcv/100);
	 $kr1=$pk-$ik;
	}

//calcio porcentajes
if ($_POST['ca1'] < $cas && $_POST['ca1']>0)
    {
     $pca=($_POST['ca1']/$cas)*100;
	 $ica=(100-$pca)*($cacv/100);
	 $car1=$pca+$ica;       
	}	 
if ($_POST['ca1'] > $cas && $_POST['ca1']>0)
    {
     $pca=($_POST['ca1']/$cas)*100;
	 $ica=($pca-100)*($cacv/100);
	 $car1=$pca-$ica;
	}

//magnesio porcentajes
if ($_POST['mg1'] < $mgs && $_POST['mg1']>0)
    {
     $pmg=($_POST['mg1']/$mgs)*100;
	 $img=(100-$pmg)*($mgcv/100);
	 $mgr1=$pmg+$img;       
	}	 
if ($_POST['mg1'] > $mgs && $_POST['mg1']>0)
    {
     $pmg=($_POST['mg1']/$mgs)*100;
	 $img=($pmg-100)*($mgcv/100);
	 $mgr1=$pmg-$img;
	}

//azufre porcentajes
if ($_POST['s1'] < $ss && $_POST['s1']>0)
    {
     $ps=($_POST['s1']/$ss)*100;
	 $is=(100-$ps)*($scv/100);
	 $sr1=$ps+$is;       
	}	 
if ($_POST['s1'] > $ss && $_POST['s1']>0)
    {
     $ps=($_POST['s1']/$ss)*100;
	 $is=($ps-100)*($scv/100);
	 $sr1=$ps-$is;
	}

//hierro ppm
if ($_POST['fe1'] < $fes && $_POST['fe1']>0)
    {
     $pfe=($_POST['fe1']/$fes)*100;
	 $ife=(100-$pfe)*($fecv/100);
	 $fer1=$pfe+$ife;       
	}	 
if ($_POST['fe1'] > $fes && $_POST['fe1']>0)
    {
     $pfe=($_POST['fe1']/$fes)*100;
	 $ife=($pfe-100)*($fecv/100);
	 $fer1=$pfe-$ife;
	}

//cobre ppm
if ($_POST['cu1'] < $cus && $_POST['cu1']>0)
    {
     $pcu=($_POST['cu1']/$cus)*100;
	 $icu=(100-$pcu)*($cucv/100);
	 $cur1=$pcu+$icu;       
	}	 
if ($_POST['cu1'] > $cus && $_POST['cu1']>0)
    {
     $pcu=($_POST['cu1']/$cus)*100;
	 $icu=($pcu-100)*($cucv/100);
	 $cur1=$pcu-$icu;
	}

//manganeso ppm
if ($_POST['mn1'] < $mns && $_POST['mn1']>0)
    {
     $pmn=($_POST['mn1']/$mns)*100;
	 $imn=(100-$pmn)*($mncv/100);
	 $mnr1=$pmn+$imn;       
	}	 

if ($_POST['mn1'] > $mns && $_POST['mn1']>0)
    {
     $pmn=($_POST['mn1']/$mns)*100;
	 $imn=($pmn-100)*($mncv/100);
	 $mnr1=$pmn-$imn;
	}

//zinc ppm
if ($_POST['zn1'] < $zns && $_POST['zn1']>0)
    {
     $pzn=($_POST['zn1']/$zns)*100;
	 $izn=(100-$pzn)*($zncv/100);
	 $znr1=$pzn+$izn;       
	}	 
if ($_POST['zn1'] > $zns && $_POST['zn1']>0)
    {
     $pzn=($_POST['zn1']/$zns)*100;
	 $izn=($pzn-100)*($zncv/100);
	 $znr1=$pzn-$izn;
	}

//boro ppm
if ($_POST['b1'] < $bs && $_POST['b1']>0)
    {
     $pb=($_POST['b1']/$bs)*100;
	 $ib=(100-$pb)*($bcv/100);
	 $br1=$pb+$ib;       
	}	 
if ($_POST['b1'] > $bs && $_POST['b1']>0)
    {
     $pb=($_POST['b1']/$bs)*100;
	 $ib=($pb-100)*($bcv/100);
	 $br1=$pb-$ib;
	}

//Sodio porcentajes
if ($_POST['na1'] < $nas && $_POST['na1']>0)
    {
     $pna=($_POST['na1']/$nas)*100;
	 $ina=(100-$pna)*($nacv/100);
	 $so1=$pna+$ina;       
	}
if ($_POST['na1'] > $nas && $_POST['na1']>0)
    {
     $pna=($_POST['na1']/$nas)*100;
	 $ina=($pna-100)*($nacv/100);
	 $so1=$pna-$ina;
	}
	
//Cloro porcentajes
if ($_POST['cl1'] < $cls && $_POST['cl1']>0)
    {
     $pcl=($_POST['cl1']/$cls)*100;
	 $icl=(100-$pcl)*($clcv/100);
	 $clo1=$pcl+$icl;       
	}
if ($_POST['cl1'] > $cls && $_POST['cl1']>0)
    {
     $pcl=($_POST['cl1']/$cls)*100;
	 $icl=($pcl-100)*($clcv/100);
	 $clo1=$pcl-$icl;
	}

/*
//Sodio ppm
if ($_POST['na1'] < $nas && $_POST['na1']>0)
    {
     $pb=($_POST['na1']/$nas)*100;
	 $ib=(100-$pb)*($nacv/100);
	 $so1=$pb+$ib;       
	}	 
if ($_POST['na1'] > $nas && $_POST['na1']>0)
    {
     $pb=($_POST['na1']/$nas)*100;
	 $ib=($pb-100)*($nacv/100);
	 $so1=$pb-$ib;
	}

//Cloro ppm
if ($_POST['cl1'] < $cls && $_POST['cl1']>0)
    {
     $pb=($_POST['cl1']/$cls)*100;
	 $ib=(100-$pb)*($clcv/100);
	 $clo1=$pb+$ib;       
	}	 
if ($_POST['cl1'] > $cls && $_POST['cl1']>0)
    {
     $pb=($_POST['cl1']/$cls)*100;
	 $ib=($pb-100)*($clcv/100);
	 $clo1=$pb-$ib;
	}
*/

	//si el Estandar y el valor son iguales
	if($_POST['n1']==$ns)	{	$nr1=100;	}
	if($_POST['p1']==$ps)	{	$pr1=100;	}
	if($_POST['k1']==$ks)	{	$kr1=100;	}
	if($_POST['ca1']==$cas)	{	$car1=100;	}
	if($_POST['mg1']==$mgs)	{	$mgr1=100;	}
	if($_POST['s1']==$ss)	{	$sr1=100;	}
	if($_POST['fe1']==$fes)	{	$fer1=100;	}
	if($_POST['cu1']==$cus)	{	$cur1=100;	}
	if($_POST['mn1']==$mns)	{	$mnr1=100;	}
	if($_POST['zn1']==$zns)	{	$znr1=100;	}
	if($_POST['b1']==$bs)	{	$br1=100;	}	
	if($_POST['na1']==$nas)	{	$so1=100;	}	
	if($_POST['cl1']==$cls)	{	$clo1=100;	}	

//si es 0
    	if($_POST['n1']==0)	{	$nr1=0;		}
	if($_POST['p1']==0)	{	$pr1=0;		}
	if($_POST['k1']==0)	{	$kr1=0;		}
	if($_POST['ca1']==0)	{	$car1=0;	}
	if($_POST['mg1']==0)	{	$mgr1=0;	}
	if($_POST['s1']==0)	{	$sr1=0;		}
	if($_POST['fe1']==0)	{	$fer1=0;	}
	if($_POST['cu1']==0)	{	$cur1=0;	}
	if($_POST['mn1']==0)	{	$mnr1=0;	}
	if($_POST['zn1']==0)	{	$znr1=0;	}
	if($_POST['b1']==0)	{	$br1=0;		}
	if($_POST['na1']==0)	{	$so1=0;		}
	if($_POST['cl1']==0)	{	$clo1=0;	}

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
	$nar=round($so1,0);
	$clr=round($clo1,0);

 $link=mysql_connect("localhost","cesixini","2013_CeSiX") or die ("No se ha logrado acceder a MySQL");
	   mysql_select_db("cesixini_diagnostico",$link);     

$consulta = "INSERT INTO registro_mendez_jalisco(fecha, cultivar, hora, fenolo, usuario, huerto, ejido, municipio, estado, correo, tel, edad, distancia, distancia1, cantidad, produccion, riego, fertirriego, sistema, nitrogeno, fosforo, potasio, calcio, magnesio, azufre, hierro, cobre, manganeso, zinc, boro, sodio, cloro, ng, pg, kg, cag, mgg, sg, feg, cug, mng, zng, bg, nag, clg, nr, pr, kr, car, mgr, sr, fer, cur, mnr, znr, br, nar, clr)

		VALUES ('".$fec."','Méndez','".$hor."','{$_POST['fenolo']}','{$_POST['usuario']}','{$_POST['huerto']}','{$_POST['localidad']}','{$_POST['municipio']}','{$_POST['estado']}','{$_POST['correo']}','{$_POST['telefono']}','{$_POST['edad']}','{$_POST['dist']}','{$_POST['dist2']}','{$_POST['arboles']}','{$_POST['produccion']}','{$_POST['riego']}','{$_POST['ferti']}','{$_POST['sistema']}','{$_POST['n']}','{$_POST['p']}','{$_POST['k']}','{$_POST['ca']}','{$_POST['mg']}','{$_POST['s']}','{$_POST['fe']}','{$_POST['cu']}','{$_POST['mn']}','{$_POST['zn']}','{$_POST['b']}','{$_POST['na']}','{$_POST['cl']}','{$_POST['n1']}','{$_POST['p1']}','{$_POST['k1']}','{$_POST['ca1']}','{$_POST['mg1']}','{$_POST['s1']}','{$_POST['fe1']}','{$_POST['cu1']}','{$_POST['mn1']}','{$_POST['zn1']}','{$_POST['b1']}','{$_POST['na1']}','{$_POST['cl1']}','".$nr."','".$pr."','".$kr."','".$car."','".$mgr."','".$sr."','".$fer."','".$cur."','".$mnr."','".$znr."','".$br."','".$nar."','".$clr."');";

     //echo $consulta;					
 mysql_query($consulta, $link);
 //$consulta2="Select id FROM registro_ataulfo_nayarit WHERE hora='".$hor."'";	 
 $consulta2="Select id FROM registro_mendez_jalisco WHERE hora='".$hor."' And fecha='".$fec."'";	 
 $cursor= mysql_query($consulta2,$link);
 $Fila=mysql_fetch_row($cursor);
// echo $consulta2;
 mysql_close($link);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- Sistema Internet de Presidencia, 2012 - Plantilla ( Ver. 3.0 ) -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" >
	<head>
		<title>Instituto Nacional de Investigaciones Forestales, Agrícolas y Pecuarias INIFAP</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
		<meta http-equiv="Content-Script-Type" content="text/javascript" />
		
		<meta name="Author" content="Sistema Internet de presidencia - Rogelio Argumedo Uribe, rogelio.argumedo@sip.gob.mx" />
		<meta name="description" content="Sitio Oficial del Gobierno Federal Presidencia de la República" />

		<link rel="icon" type="image/ico" href="../favicon.ico" />
        <link rel="stylesheet" href="http://www.encuentra.gob.mx/css/apf.css" type="text/css" />
<script src="http://www.encuentra.gob.mx/api/gobmxWidgetAPI-min.js" type="text/javascript"></script>
<script src="http://www.encuentra.gob.mx/properties/gobmxWidgetAPI-conf.js" type="text/javascript"></script>

<link id="estilo_m" rel="stylesheet" href="../css/estilo_m.css" type="text/css" media="handheld, all" />
		<style id="estilo" type="text/css" media="print, screen and (min-width: 666px)">
		/*<![CDATA[*/
		@import url("../css/estilo.css");
		/*]]>*/
		</style>
        <!--[if IE 8]><link rel="stylesheet" type="text/css" href="css/estilo.css" /><![endif]-->
		<link rel="alternate" type="application/rss+xml" title="Presidencia.gob.mx - México - Presidencia de la República" href="../index.rss" />
<style type="text/css">
<!--
body {
	margin-right: 2px;
}
.style2 {
	color: #030303;
	font-weight: bold;
}
.style3 {color: orange}
-->
</style>
<style type="text/css">

.Estilo62 {color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }

.Estilo601 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #FFFFFF; font-weight: bold; }

.Estilo86 {font-family: Arial, Helvetica, sans-serif; font-size: 11px;}

.Estilo87 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px;}

.Estilo12 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }

.Estilo57 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; color: #999999; }

.Estilo71 {
	font-size: 10px;
	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-align: justify;
}

.style1 {color: #8C8C8C;

	font-weight: bold;

}

.style3 {color: #8C8C8C}

.style52 {color: #FFFFFF}

.style56 {color: #000000}

.Estilo3 {font-family: Arial, Helvetica, sans-serif;

	font-size: 12px;

}

.Estilo5 {color: #FFFFFF}

.style8 {font-size: 12px; color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }

.Estilo571 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	color: #FFF;

}
.Table1{
 width:122px;
 position:relative;
}
.Estilo711 {font-size: 10px;

	color: #333333;

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;
}
</style>
<script type="text/javascript">
<!--
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
//-->
</script>
</head>
<body>
		
		<!-- pagina -->
        <div id="cuerpo_principal">    
				
			<!-- Encabezado de la Pagina -->

<script type="text/javascript" src="js/encabezado_nuevo.js"></script>				
			
			<!-- Cuerpo de la página -->
			<div id="cuerpo">   
				
				<!-- Primer Renglon -->
	<div class="renglon">
					
						<h2>Programa de Frutales</h2>
                    
    </div>                
    		  <!-- Fin del Primer Renglon -->

			  <!-- Segundo Renglon -->
		  <div class="renglon">
					<ul class="menu ul">
                   <!--     <li><a title="Infromación del proyecto" href="../proyecto1.html"> Proyecto </a></li>
		                <li><a title="Quienes somos" href="../quienes.html" target="_blank" class="ext"> Quienes Somos </a> </li>
		                <li><a title="Ubicación" href="../donde.html" target="_blank" class="ext"> Donde Estamos </a></li>
		                <li><a title="Personal de investigación" href="../investigadores.html" target="_blank" class="ext"> Investigadores </a></li>
		                <li><a title="Personal administrativos, proyectos y de campo" href="../personal.html" target="_blank" class="ext"> Personal </a></li>-->
                        <li><a href="programas.html"> Programas de cómputo</a></li>
		                <li><a href="buscafrutales.php"> Publicaciones técnicas y científicas</a> </li>
		                <li><a href="directorio.html"> Directorio de investigadores </a></li>
                        <li><a href="proyectos.html"> Proyectos </a></li>
            </ul>
                            
  <div class="tab_contenido">
    
      <p>&nbsp;</p>
    
    <table width="770" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">

  <tr>
    
    <td width="780" bgcolor="#FFFFFF"><div align="center"><img src="imgs/diagnosticofoliaretapasmendezjal.jpg" alt="" width="770" height="355" /><br />
      
      </div></td>
    
  </tr>

  <tr>

    <td height="25" bgcolor="#C0C0C0"><div align="center">
      <p class="Estilo88"><span class="Estilo71">Uso de la información: </span></p>
      <p class="Estilo71"><span class="Estilo711">Sus datos fueron registrados satisfactoriamente y serán incorporados en este Sistema para generar el informe de Diagnóstico nutrimental foliar según la etapa fenológica del aguacate ‘Méndez’ en Jalisco. También, servirán para enviarle a su correo electrónico el vínculo para acceder a los resultados del diagnóstico.</span></p>
<p class="Estilo71">&nbsp;</p>
</div></td>

  </tr>

  <tr>
    
    <td bgcolor="#FFFFFF"><div align="center"><span class="Estilo57">
  <form id="form1" name="form1" method="post" action="">
    
  <?php
$id=$Fila[0];
/*<button  type="button" onClick="location.href='nutrifolnayarit_informe.php?id=<?php echo $id ?>'" >Generar Informe</button>*/
?>
    
  <button  type="button" class="caja_encabezado" onClick="location.href='http://cesix.inifap.gob.mx/'" >Salir</button>
  <button  type="button" class="caja_encabezado" onClick="location.href='diagnosticofoliaretapasmendezjalisco_inicio.php'" >Regresar al inicio</button>
  <button  type="button" class="caja_encabezado" onClick="location.href='diagnosticofoliaretapasmendezjaliscov_informe.php?id=<?php echo $id ?>'">Ir a informe</button>
    
    </span>
    
    <label class="Estilo57"></label>
    
    <span class="box_form">
    <?php


	{
		
if (empty($_POST['huerto'])) {
  echo "Es necesario que escriba el nombre de su huerto"; 
}


if (empty($_POST['correo'])) {
  echo "El campo Correo Electrónico está vacío"; 
}  
  
if(isset($_POST['correo'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "" . $_POST['correo'] . "";
$asunto = "Reporte del Sistema para el Diagnóstico nutrimental foliar según la etapa fenológica del aguacate ‘Méndez’ en Jalisco(CESIX-INIFAP)";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['usuario']) ||
!isset($_POST['huerto']) ||
!isset($_POST['correo']) ||
!isset($_POST['localidad'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$cuerpo = "<br>Este se correo se ha generado automáticamente por el <b>Diagnóstico nutrimental foliar según la etapa fenológica del aguacate ‘Méndez’ en Jalisco</b>. A continuación se detallan algunos datos ingresados en el sistema en el momento de su captura:\n\n</p>

<b>Datos del Usuario:\n\n</p></b>
<b>Usuario:</b> " . $_POST['usuario'] . "\n</p>
<b>Nombre del huerto:</b> " . $_POST['huerto'] . "\n</p>
<b>Localidad:</b> " . $_POST['localidad'] . "\n</p>
Estos datos quedaron registrados al correo " . $_POST['correo'] . ". De clic en el enlace siguiente o copie y pegue en su explorar para ver su reporte correspondiente al <b>Diagnóstico nutrimental foliar según la etapa fenológica del aguacate ‘Méndez’ en Jalisco</b> :\n\n</p>
http://cesix.inifap.gob.mx/frutalestropicales/diagnosticofoliaretapasmendezjaliscov_informe.php?id=$id\n\n


<br>----------------------------------------------------------------------------------------------------------------------------<br/>
<br>Este mensaje se ha enviado automáticamente al correo ". $_POST['correo'] . ". Si este no es su correo por favor ignore este mensaje o háganoslo saber mediante un correo para darlo de baja.<br/>

<br>Le informamos que únicamente guardamos sus datos personales con el interés de proporcionarle información de su reporte generado con base en la información que usted capturó en el formato del <b>Diagnóstico nutrimental foliar según la etapa fenológica del aguacate ‘Méndez’ en Jalisco</b>. Los datos que usted proporcionó no se usarán para ningún otro fin, en caso contrario se solicitará su autorización.<br/>

<br>INIFAP Campo Experimental Santiago Ixcuintla:<br/>
<br>Campo Experimental Santiago Ixcuintla. Km 6 Entronque Carret. Internacional México-Nogales, Santiago Ixcuintla, Nayarit; Apartado Postal 100. Tel: (800) 088 2222 y (55) 3871-8700 Ext.84401.<br/>

<td align='center'><br>Para cualquier aclaración sobre el contenido del presente correo favor de comunicarse con:<br />
       <em><a href='mailto:salazar.samuel@inifap.gob.mx'>Dr. Samuel Salazar-Garc&iacute;a</a></em> &oacute;&nbsp;
       <em><a href='mailto:alvarez.arturo@inifap.gob.mx'>M.C. Arturo &Aacute;lvarez-Bravo</a></em></td><br/>
       
www.inifap.gob.mx/<br/>
www.cesix.inifap.gob.mx/<br/>";


// Ahora se envía el e-mail usando la función mail() de PHP

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: Emision de alertas CESIX! <sistema_de_alerta@cesix.inifap.gob.mx>\r\n"; 

mail($email_to,$asunto,utf8_decode($cuerpo),$headers); 

}
}
?>
    </span>
  </form></p>
      </div></td>
    
  </tr>
</table>
  </div>
        <!-- Fin del Segundo Renglon -->
        
        <!-- Tercer Renglon -->
            <!-- Fin del Tercer Renglon -->
        
            <!-- Cuarto Renglon -->
            <!-- Fin del Cuarto Renglon -->
        
            <!-- Quinto Renglon -->
        
            <!-- Fin del Quinto Renglon -->
        
            <!-- Fin del Cuerpo de la página -->
        
            <!-- Pie de página -->
            <script type="text/javascript" src="js/pie.js"></script>
        
            <!-- Fin del pie de página -->
        
        
            </div>
            <!-- Fin de la pagina -->
        
        
        <!-- Scripts de la Pagina -->
                    <script type="text/javascript" src="js/general.js"></script>
                    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fdf8cc94940859d"></script>
        
        
        <!-- Fin de los Sgripts de la Pagina -->
        </div>
      <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
                </script>
	</body>
    <script type="text/javascript">
    Calendar.setup({
        inputField     :    "campo_fecha1",      
        ifFormat       :    "%Y-%m-%d",       
        button         :    "lanzador1"   
    });
</script>
</html>