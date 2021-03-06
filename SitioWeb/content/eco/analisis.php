<?php

$con = new mysqli('localhost', 'pruebaar', 'de55(;(TnNgf', 'pruebaar_arato');
//$con = new mysqli('localhost', 'root', '', 'prueba');
        
$con->query("SET NAMES 'utf8'");

if($con->connect_errno > 0){
    die('Imposible conectarse con la base de datos: [' . $con->connect_error . ']');
}else{}

//LLENAR SELECTS
$empresa = null;

if(isset($_GET["empresa"]) and $_GET["empresa"]==1){
    $empresa = "BEGGIE";
}
if(isset($_GET["empresa"]) and $_GET["empresa"]==2){
    $empresa = "ARATO";
}
if(isset($_GET["empresa"]) and $_GET["empresa"]==3){
    $empresa = "INAGRO";
}

$consulta = "SELECT DISTINCT Modulo FROM datos_arato1 WHERE Empresa = '$empresa'";
$res = mysqli_query($con,$consulta);

$consulta2 = "SELECT DISTINCT Patron FROM datos_arato1 WHERE Empresa = '$empresa'";
$res2 = mysqli_query($con,$consulta2);

$consulta4 = "SELECT DISTINCT Lote FROM datos_arato1 WHERE Empresa = '$empresa'";
$res4 = mysqli_query($con,$consulta4);

$consulta5 = "SELECT DISTINCT Cultivar FROM datos_arato1 WHERE Empresa = '$empresa'";
$res5 = mysqli_query($con,$consulta5);

$consulta10 = "SELECT DISTINCT Campana FROM datos_arato1 WHERE Empresa = '$empresa'";
$res10 = mysqli_query($con,$consulta10);
//FIN LLENAR SELECTS

?>

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
    
    <!-- JQUERY -->
    <script src="js/highcharts.js"></script>
	<script src="js/modules/exporting.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script language="javascript" type="text/javascript">
        	$(document).ready(function(){
            $(".contenido").fadeOut("normal");
            $("#aplication").change(function(){
            $(".contenido").hide();
                $("#div_" + $(this).val()).fadeIn("normal");
            });
        });
    </script>
    
    <!-- CSS -->
    <style type="text/css">
    body,td,th {
	color: #243228;
}
    h4 {
        color: #171D1F;
        text-align: left;
        font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
    }
    h1 {
        color: #171D1F;
    }
    h3 {
        color: #171D1F;
    }
    h5 {
        color: #171D1F;
    }
    h6 {
        color: #171D1F;
    }
        
    table.tabla {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 13px;
        text-align: left;
        border-collapse: collapse;
        margin: auto;
        margin-bottom: 25px;
        width: 400px;
    }
        
    table.tabla tr:nth-child(even) {
        background-color: #eee;
    }

    table.tabla tr:nth-child(odd) {
        background-color: #fff;
    }

    table.tabla th {
        font-size: 14px;
        padding: 8px;
        border-top: 2px solid #7DCC68;
        border-bottom: 1px solid #fff;
        color: #249f04;
    }

    table.tabla td {
        padding: 8px;
        color: #000000;
    }
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
                                    <a id="logo" href="#" title="BeEco - BeTheme">
                                    <img class="logo-main scale-with-grid" src="images/imagen.png" alt="ara" />
                                    <img class="logo-sticky scale-with-grid" src="images/imagen.png" alt="ara" />
                                    <img class="logo-mobile scale-with-grid" src="images/imagen.png" alt="ara" />
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu" class="menu-main-menu-container">
                                        <ul id="menu-main-menu" class="menu">
                                            <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="../../index.html"><span>Inicio</span></a></li>
                                            <li id="menu-item-2302" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="importar.php"><span>Bases de datos</span></a></li>
                                            <li id="menu-item-2301" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="informes.php"><span>Informes</span></a></li>
                                            <li id="menu-item-2300" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2293 current_page_item">
                                                <a href="analisis.php"><span>Análisis</span></a></li>
                                            <li id="menu-item-2299" class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="contactanos.html"><span>Contactanos</span></a></li>   
                                        </ul>
                                    </nav><a class="responsive-menu-toggle " href="#"><i class="icon-menu"></i></a>
                                </div>
                                <div class="secondary_menu_wrapper"></div>
                                <div class="banner_wrapper"></div>
                                <div class="search_wrapper">                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mfn-main-slider" id="mfn-rev-slider">
                    <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <div id="rev_slider_1_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.4">
                            <ul>
                                    <img src="images/home_eco_sliderbg3.jpg" alt="" title="Campos" width="1920" height="700	" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
                                    <div class="tp-caption mfnrs_eco_large   tp-resizeme rs-parallaxlevel-3" id="slide-1-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-120" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;">
                                        Informes
                                    </div>
                            </ul>
                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="Subheader" style="padding:210px 0 120px;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Informes</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                  <div class="entry-content" itemprop="mainContentOfPage">                       
                        <div id="informe" class="section mcb-section" style="padding-top:30px; padding-bottom:0px; background-color:#EFFBF5">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  column-margin-30px valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column  ">
                                            <div class="column_attr align_center">
                                                <h4 style="margin: 0; text-align: center;">Análisis- Ejemplo</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:80px; padding-bottom:240px;  background-image:url(images/.png); background-repeat:no-repeat; background-position:center bottom;">
                          <div class="section_wrapper mcb-section-inner">
                            <div class="wpcf7-captchar">
                              <div class="column_attr">
                                <form action="analisis_grafica.php" method="get">
                                    <table  border="0" align="center"  background="">
                                      <tbody>
                                            <tr>
                                              <td width="80" align="center"><h4 class="wpcf7-mail-sent-ok">Empresa:</h4>
                                                <p>
                                                  <label>
                                                    <input onchange="location.href='analisis.php?empresa='+this.value+'#informe'" name="empresa" id="select_empresa" type="radio" name="empresa" id="select_empresa" <?php if(isset($_GET["empresa"]) and $_GET["empresa"] == 1){ echo"selected"; } ?> value="1">BEGGIE PERÚ</label>
                                                  <label>
                                                   <input onchange="location.href='analisis.php?empresa='+this.value+'#informe'" name="empresa" id="select_empresa" type="radio" name="empresa" id="select_empresa" <?php if(isset($_GET["empresa"]) and $_GET["empresa"] == 2){ echo "selected"; } ?>value="2">ARATO PERÚ</label>
                                                  <label>
                                                   <input onchange="location.href='analisis.php?empresa='+this.value+'#informe'" name="empresa" id="select_empresa" type="radio" name="empresa" id="select_empresa" <?php if(isset($_GET["empresa"]) and $_GET["empresa"] == 3){ echo "selected"; } ?>value="3">INAGRO</label>
                                                </p>
                                                
                                                </td>
                                              <td width="80" align="center"><h4 class="wpcf7-mail-sent-ok">Temas:</h4>
                                                <p>
                                                  <select name="cultivar" id="select_cultivar">
                                                    <option value="0" selected>Seleccione un cultivar</option>
                                                    <?php while($datos5 = mysqli_fetch_row($res5)) { ?>
                                                    <option value="<?php echo $datos5[0] ?>"><?php echo $datos5[0] ?></option>
                                                    <?php } ?>
                                                  </select>
                                                </p>
                                                <p>
                                                  <select name="patron" id="select_patron">
                                                    <option selected value="0">Seleccione un patrón</option>
                                                    <?php while($datos2 = mysqli_fetch_row($res2)) { ?>
                                                    <option value="<?php echo $datos2[0] ?>"><?php echo $datos2[0] ?></option>
                                                    <?php } ?>
                                                  </select>
                                                </p>
                                                <p>
                                                  <select name="modulo" id="select_modulo">
                                                    <option value="0">Seleccione un módulo</option>
                                                    <?php while($datos = mysqli_fetch_row($res)) { ?>
                                                    <option value="<?php echo $datos[0] ?>"><?php echo $datos[0] ?></option>
                                                    <?php } ?>
                                                  </select>
                                                </p>
                                                <p>
                                                  <select name="lote" id="select_lote">
                                                    <option value="0">Seleccione un lote</option>
                                                    <?php while($datos4 = mysqli_fetch_row($res4)) { ?>
                                                    <option value="<?php echo $datos4[0] ?>"><?php echo $datos4[0] ?></option>
                                                    <?php } ?>
                                                  </select>
                                              </p></td>
                                              <td width="80" align="center"><h4 class="wpcf7-mail-sent-ok">Temas:</h4>
                                                <p>
                                                  <select name="campana" id="select_campana">
                                                      <option value="0">Seleccione la campaña</option>
                                                    <?php while($datos6 = mysqli_fetch_row($res10)) { ?>
                                                    <option value="<?php echo $datos6[0] ?>"><?php echo $datos6[0] ?></option>
                                                    <?php } ?>
                                                  </select>
                                                </p>
                                                <p>
                                                  <select name="aplicacion" id="aplication">
                                                      <option value="0" selected>Seleccione la aplicación</option>
                                                      <option value="1">Remoción Nutrimental</option>
                                                      <option value="Foliar">Diagnóstico Nutrimental Foliar</option>
                                                      <option value="Pulpa">Diagnóstico Nutrimental Pulpa</option>
                                                  </select>
                                                </p>
                                                <!--  SELECT OPCIONALES   -->
                                                    <p>
                                                      <select name="aplicacion2" id="aplication">
                                                    <option value="0" selected>Elija la etapa Foliar</option>
                                                    <option value="Hojas de 5 cm">Hojas de 5 cm</option>
                                                    <option value="Antesis">Antesis</option>
                                                    <option value="Cuajado de fruto">Cuajado de fruto</option>
                                                    <option value="Fruto tamaño aceituna">Fruto tamaño aceituna</option>
                                                    <option value="Fruto en Crec-1">Fruto en Crec-1</option>
                                                    <option value="Fruto en Crec-2">Fruto en Crec-2</option>
                                                    <option value="Fruto en Crec-3">Fruto en Crec-3</option>
                                                    <option value="Fruto en cosecha (≥ 21.5% MS)">Fruto en cosecha (≥ 21.5% MS)</option>
                                                    <option value="Fruto en media cosecha (≥ 24% MS)">Fruto en media cosecha (≥ 24% MS)</option>
                                                      </select>
                                                    </p>
                                                    <p>
                                                      <select name="aplicacion3" id="aplication">
                                                    <option value="0" selected>Elija la etapa de la pulpa</option>
                                                    <option value="Fruto tamaño aceituna">Fruto tamaño aceituna</option>
                                                    <option value="Fruto en Crec-1">Fruto en Crec-1</option>
                                                    <option value="Fruto en Crec-2">Fruto en Crec-2</option>
                                                    <option value="Fruto en Crec-3">Fruto en Crec-3</option>
                                                    <option value="Fruto en cosecha (≥ 21.5% MS)">Fruto en cosecha (≥ 21.5% MS)</option>
                                                    <option value="Fruto en media cosecha (≥ 24% MS)">Fruto en media cosecha (≥ 24% MS)</option>
                                                      </select>
                                                    </p>
                                               
                                                <!-- FIN SELECT OPCIONALES   -->
                                              </td>
                                            </tr>
                                        </tbody>
                                  </table>
                                    <p>
                                      <input   align="center" type="submit" value="Graficar">
                                    </p>
                                </form>
                                    
                              </div>
                                
                                <!--     CONTENIDO DE GRAFICAS    -->
                                
                                <div id="graficas" style="border-top: 2px solid #7DCC68; padding-top: 30px;">
                                
                                    <!--     /////////////////////////////////////////////////////////////////////////////////    -->
                                    <!--     GENERAR GRAFICA FOLIAR    -->
                                    
                                    <?php 
                                    if (isset($_GET["aplicacion"]) and $_GET["aplicacion"] == "Pulpa" || $_GET["aplicacion"] == "Foliar")
                                    {
                                        include ("analisis_grafica.php");
                                    }  
                                    ?>
                                    <!--     FINAL GENERAR GRAFICA FOLIAR    -->
                                    
                                    
                                </div>
                            
                                <!--  FINAL CONTENIDO GRAFICAS    -->
                              
                              
                              
                              </div>
                          </div>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                        </div>
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
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
                        &copy; 2016  - Derechos reservados para Grupo Agrícola Arato</div>
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