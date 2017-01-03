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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <style type="text/css">
    .BTN {border:solid #999 1px; border-radius: 5px; background-color:#F4F4F4; width:70px;}
    </style>
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
                                                <a href="analisis.php"><span>Análisis</span></a>
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
                        </div>
                    </div>
                </div>
            </header>
            <div id="Subheader" style="padding:210px 0 120px;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Datos para Remoción</h1>
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
                             <table width="200" border="0">
<tbody>
<!-- FORMULARIO PARA SOLICITAR LA CARGA DEL EXCEL -->
<form name="importa" method="post" action="<?php echo $PHP_SELF; ?>" enctype="multipart/form-data" >
<tr>
<td>&nbsp;</td>
<td>Subir datos:
<input type="file" name="excel" />
<span >
<input type='submit' name='enviar'  value="Importar"/>
</span></td>
  <td><input type="hidden" value="upload" name="action" /></td>
</tr>
</form>
</tbody>
<!-- CARGA LA MISMA PAGINA MANDANDO LA VARIABLE upload -->

<?php 
extract($_POST);
if ($action == "upload"){
//cargamos el archivo al servidor con el mismo nombre
//solo le agregue el sufijo bak_ 
	$archivo = $_FILES['excel']['name'];
	$tipo = $_FILES['excel']['type'];
	$destino = "bak_".$archivo;
	if (copy($_FILES['excel']['tmp_name'],$destino)) echo "Archivo Cargado Con Éxito";
	else echo "Error Al Cargar el Archivo";
////////////////////////////////////////////////////////
if (file_exists ("bak_".$archivo)){ 
/** Clases necesarias */
require_once('Classes/PHPExcel.php');
require_once('Classes/PHPExcel/Reader/Excel2007.php');

// Cargando la hoja de cálculo
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load("bak_".$archivo);
$objFecha = new PHPExcel_Shared_Date();       

// Asignar hoja de excel activa
$objPHPExcel->setActiveSheetIndex(0);

//conectamos con la base de datos 
            $cn = mysql_connect("localhost", "pruebaar", "de55(;(TnNgf") or die("ERROR EN LA CONEXION");
            $db = mysql_select_db("pruebaar_arato", $cn) or die("ERROR AL CONECTAR A LA BD");
        // Llenamos el arreglo con los datos  del archivo xlsx
	for ($i=1;$i<=1035;$i++){
	$_DATOS_EXCEL[$i]['Empresa'] = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Cultivar'] = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Patron']= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Campana']= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Lote'] = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Turno'] = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Modulo'] = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Fecha'] = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
	$_DATOS_EXCEL[$i]['Cantidad'] = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
}		
}
//si por algo no cargo el archivo bak_ 
else{echo "Necesitas primero importar el archivo";}
$errores=0;
//recorremos el arreglo multidimensional 
//para ir recuperando los datos obtenidos
//del excel e ir insertandolos en la BD
foreach($_DATOS_EXCEL as $campo => $valor){
	$sql = "INSERT INTO datos_arato_remocion VALUES (NULL,'";
	foreach ($valor as $campo2 => $valor2){
		$campo2 == "Cantidad" ? $sql.= $valor2."');" : $sql.= $valor2."','";
	}
	$result = mysql_query($sql);
	if (!$result){ echo "Error al insertar registro ".$campo;
	$errores+=1;
	}
}
/////////////////////////////////////////////////////////////////////////

echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES</center></strong>";
//una vez terminado el proceso borramos el 
//archivo que esta en el servidor el bak_
unlink($destino);
}

?>
</table>
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