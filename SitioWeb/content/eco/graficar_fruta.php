<?php

//$ids = $_GET["ids"];
$OK = "OK";

//$tejido = $_GET["aplicacion"];
$ddf = $_GET["aplicacion2"];
$cma = $_GET["campana"];
$patron=$_GET["patron"];
$modulo=$_GET["modulo"];
$turno=$_GET["turno"];
$lote=$_GET["lote"];
$tejido=$_GET["aplicacion"];

$consulta20 = "SELECT Empresa, Cultivar, Patron, Tejido, Etapa, Campana, Lote, Turno, Modulo, N, P, K, Ca, Mg, S, Fe, Cu, Mn, Zn, B, Mo, Na, Cl, Nr, Pr, Kr, Car, Mgr, Sr, Fer, Cur, Mnr, Znr, Br, Mor, Nar, Clr FROM datos_arato1 WHERE Empresa='$empresa' and Tejido ='$tejido' and Etapa ='$ddf' and Campana='$cma' and Modulo='$modulo' and Turno='$turno' and Lote='$lote'";
//Resultado para llenar xml-grafica
$res20 = mysqli_query($con,$consulta20);
//Resultado para tablas
$restabla = mysqli_query($con,$consulta20);

$Fila1=mysqli_fetch_row($res20);
	$dataN .= '<point name="'.'N'.'" y="'.$Fila1[23].'" />';
	$dataP .= '<point name="'.'P'.'" y="'.$Fila1[24].'" />';
	$dataK .= '<point name="'.'K'.'" y="'.$Fila1[25].'" />';
	$dataCa .= '<point name="'.'Ca'.'" y="'.$Fila1[26].'" />';
	$dataMg .= '<point name="'.'Mg'.'" y="'.$Fila1[27].'" />';
	$dataS .= '<point name="'.'S'.'" y="'.$Fila1[28].'" />';
	$dataFe .= '<point name="'.'Fe'.'" y="'.$Fila1[29].'" />';
	$dataCu .= '<point name="'.'Cu'.'" y="'.$Fila1[30].'" />';
	$dataMn .= '<point name="'.'Mn'.'" y="'.$Fila1[31].'" />';
	$dataZn .= '<point name="'.'Zn'.'" y="'.$Fila1[32].'" />';
	$dataB .= '<point name="'.'B'.'" y="'.$Fila1[33].'" />';
	$dataNa .= '<point name="'.'Na'.'" y="'.$Fila1[35].'" />';
	$dataCl .= '<point name="'.'Cl'.'" y="'.$Fila1[36].'" />';
			

// codigo para imprimir la consulta y probar: echo $consulta20;

$nombre=$ddf.'_aratodata.xml';
@include ($nombre);

if(file_exists($nombre)) 
{ 
unlink($nombre);
}
else 	 
{

$contenido.="<anychart>";
  $contenido.="<charts>";
   $contenido.="<chart plot_type='CategorizedHorizontal'>";
	  $contenido.="<data>";
	      $contenido.=" <series name='Series 1' type='Bar' shape_type='Cylinder' opacity='1'>";
			$contenido.=$dataN;
			$contenido.=$dataP; 
			$contenido.=$dataK;
			$contenido.=$dataCa; 
			$contenido.=$dataMg; 
			$contenido.=$dataS; 
			$contenido.=$dataFe; 
			$contenido.=$dataCu; 
			$contenido.=$dataMn; 
			$contenido.=$dataZn; 
			$contenido.=$dataB; 
			$contenido.=$dataNa; 
			$contenido.=$dataCl; 	
$contenido.="</series>";
	 $contenido.="</data>";
	 $contenido.="<chart_settings>";
	 $contenido.="<title enabled='false'>";
	 $contenido.="<background enabled='false'/>";
	 $contenido.="</title>";
	 $contenido.="<chart_background>";
	 $contenido.="<border enabled='false'/>";
	 $contenido.="</chart_background>";
	 $contenido.="<axes>";
	 $contenido.="<x_axis enabled='true'>";
	 $contenido.="<major_grid enabled='false'/>";
	 $contenido.="<minor_grid enabled='false'/>";
	 $contenido.="<major_tickmark enabled='false'/>";
	 $contenido.="<minor_tickmark enabled='false'/>";
	 $contenido.="<title>";
	 $contenido.=" <text>Nutrimentos</text>";
	 $contenido.="</title>";
	 $contenido.="</x_axis>";		
	 $contenido.="<y_axis position='Opposite'>";
	 $contenido.="<major_grid enabled='false'/>";
	 $contenido.="<minor_grid enabled='false'/>";
	 $contenido.="<major_tickmark enabled='false'/>";
	 $contenido.="<minor_tickmark enabled='false'/>";
	 $contenido.="<title>";
	 $contenido.=" <text>Índice de Balance</text>";
	 $contenido.="</title>";
	 $contenido.="<labels enabled='False'/>";
	 $contenido.="<axis_markers>";
	 $contenido.="<ranges>";
	 $contenido.="<range minimum='15' maximum='49'>";
	 $contenido.="<fill  opacity='0.15' color='Red'/>";
	 $contenido.="<label enabled='true'>";
	 $contenido.="<format>Deficiente</format>";
	 $contenido.="</label>";
	 $contenido.="</range>";
	 $contenido.="<range minimum='49' maximum='83' color='Gold'>";
	 $contenido.="<fill opacity='0.15' color='Orange'/>";
	 $contenido.="<label enabled='true'>";
	 $contenido.="<format>Abajo de lo normal</format>";
	 $contenido.="</label>";
	 $contenido.="</range>";
	 $contenido.="<range minimum='83' maximum='117'>";
	 $contenido.="<fill opacity='0.15' color='Green'/>";
	 $contenido.="<label enabled='true'>";
	 $contenido.="<format>Normal</format>";
	 $contenido.="</label>";
	 $contenido.="</range>";
	 $contenido.="<range minimum='117' maximum='151' color='Gold'>";
	 $contenido.="<fill opacity='0.15' color='Orange'/>";
	 $contenido.="<label enabled='true'>";
	 $contenido.="<format>Arriba de lo normal</format>";
	 $contenido.="</label>";
	 $contenido.="</range>";
	 $contenido.="<range minimum='151' maximum='185' color='Green'>";
	 $contenido.="<fill opacity='0.15' color='Red'/>";
	 $contenido.="<label enabled='true'>";
	 $contenido.="<format>Exceso</format>";
	 $contenido.="</label>";
	 $contenido.="</range>";
	 $contenido.="</ranges>";				  
	 $contenido.="</axis_markers>";
	 $contenido.="<scale minimum='15' maximum='185' />";
	 $contenido.="<labels>";
	 $contenido.="<format>{%Value}{numDecimals:0}</format>";
	 $contenido.="</labels>";
	 $contenido.="</y_axis>";
	 $contenido.="<x_axis>";
	 $contenido.="<labels align='Outside'/>";
	 $contenido.="</x_axis>";
	 $contenido.="</axes>";
	 $contenido.="</chart_settings>";
	 $contenido.="<data_plot_settings>";
	 $contenido.="<bar_series group_padding='0.3'>";
	 $contenido.="<tooltip_settings enabled='True'/>";
	 $contenido.="</bar_series>";
	 $contenido.="</data_plot_settings>";
  $contenido.="</chart>";
$contenido.=" </charts>";
$contenido.="</anychart>";

$archivo = fopen($nombre, 'w'); 
    $error = 0; 
    if (!isset($archivo)) { 
        $error = 1; 
        print "No se ha podido crear/abrir el archivo.<br />"; 
    }elseif (!fwrite($archivo, $contenido)) { 
        $error = 1; 
        print "No se ha podido escribir en el archivo.<br />"; 
    } 
	}

?>
<meta charset="UTF-8">
   <script src="js/anychart.min.js"></script>
   <script src="js/anychart-ui.min.js"></script>
<style>
table.tabla2 tr:nth-child(even) {
        background-color: #eee;
    }

table.tabla2 tr:nth-child(odd) {
        background-color: #fff;
    }
.Estilo71 {font-size: 10px;

	color: #333333;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
</style>
	
<div id="grafica">
    <h4>Información sobre el informe:</h4>
</div>

<div id="tabla_foliar-fruto">
      <?php
	//Arreglo para mostrar los datos de consulta
	$Fila=mysqli_fetch_row($restabla);
    ?>
  <table id="informacion" class="tabla2"> 
    	<tr> 
          <td width="120" class="Estilo71" style="color: #249f04"><div align="center">Empresa</div></td>
          <td width="120" class="Estilo71" style="color: #249f04"><div align="center">Cultivar</div></td>
          <td width="120" class="Estilo71" style="color: #249f04"><div align="center">Patron</div></td>
          <td width="120" class="Estilo71" style="color: #249f04"><div align="center">Tejido</div></td>
          <td width="120" class="Estilo71" style="color: #249f04"><div align="center">Etapa</div></td>
          <td width="120" class="Estilo71" style="color: #249f04"><div align="center">Campaña</div></td>
        </tr>
        <tr> 
       	  <td height="15" valign="top" class="Estilo71" style="color: #0D0D0D"><?php echo $Fila[0] ?></td>
          <td height="15" valign="top" class="Estilo71" style="color: #0D0D0D"><?php echo $Fila[1] ?></td>
          <td height="15" valign="top" class="Estilo71" style="color: #0D0D0D"><?php echo $Fila[2] ?></td>
          <td height="15" valign="top" class="Estilo71" style="color: #0D0D0D"><?php echo $Fila[3] ?></td>
          <td height="15" valign="top" class="Estilo71" style="color: #0D0D0D"><?php echo $Fila[4] ?></td>
          <td height="15" valign="top" class="Estilo71" style="color: #0D0D0D"><?php echo $Fila[5] ?></td>
        </tr>
    </table>
    <table border="0" cellspacing="0" class="tabla2" id="grafico">
        <tr> 
       	  <td height="320" align="center"> 
            <p>
              <?
	echo "<script type='text/javascript' language='javascript' src='grafica/js/AnyChart.js'></script>";
	//echo "</head>";
	//echo "<body>";
		echo "<div id='container'>";
		echo "<script type='text/javascript' language='javascript'>";
			//<![CDATA[
				echo "var chart = new AnyChart('grafica/swf/AnyChart.swf');";
				echo "chart.width = 1000;";
                echo "chart.height = 500;";
				echo "chart.setXMLFile('".$nombre."');";
				echo "chart.write('container');";
			//]]>
		echo "</script>";
	//echo "</body>";
	echo "</div>";
	?>
            </p>
          </td>
        </tr>
    </table>
	<table border="0" class="tabla2" id="tablanutrientes" style="margin: auto;">
        <tr>
          <td colspan="6" align="center"></td>
        </tr>
        <tr>
          <td colspan="6" style="background:#7DCC68">&nbsp;</td>
        </tr>
        <tr>
          <td width="124">&nbsp;</td>
          <td width="120" class="Estilo71" style="color: #249f04;"><div align="center">% en la hoja</div></td>
          <td width="147" class="Estilo71" style="color: #249f04;"><div align="center">&Iacute;ndice de Balance</div></td>
          <td width="114" class="Estilo71" style="color: #249f04;"><div align="center"></div></td>
          <td width="110" class="Estilo71" style="color: #249f04;"><div align="center">ppm en la hoja</div></td>
          <td width="132" class="Estilo71" style="color: #249f04;"><div align="center">&Iacute;ndice de Balance</div></td>
        </tr>
        <tr>
          <td height="15" valign="top" class="Estilo71"><div align="right">Nitr&oacute;geno (N)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[9] ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo number_format ($Fila[23],0) ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="right">Hierro (Fe)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[15] ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[29] ?></div></td>
        </tr>
        <tr>
          <td height="15" valign="top" class="Estilo71"><div align="right">F&oacute;sforo (P)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[10]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[24]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="right">Cobre (Cu)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[16]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[33]; ?></div></td>
        </tr>
        <tr>
          <td height="15" valign="top" class="Estilo71"><div align="right">Potasio (K)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[11]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[25]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="right">Manganeso (Mn)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[31]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[30]; ?></div></td>
        </tr>
        <tr>
          <td height="15" valign="top" class="Estilo71"><div align="right">Calcio (Ca)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[12]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[26]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="right">Zinc (Zn)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[18]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[32]; ?></div></td>
        </tr>
        <tr>
          <td height="15" valign="top" class="Estilo71"><div align="right">Magnesio (Mg)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[13]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[27]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="right">Boro (B)</div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[19]; ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[32]; ?></div></td>
        </tr>
        <tr>
          <td height="19" valign="top" class="Estilo71"><div align="right">Azufre (S)</div></td>
          <td height="19" align="center" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[14]; ?></div></td>
          <td height="19" align="center" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[28]; ?></div></td>
          <td height="19" valign="top" class="Estilo71">&nbsp;</td>
          <td height="19" align="center" valign="top" class="Estilo71"><div align="center"></div></td>
          <td height="19" align="center" valign="top" class="Estilo71"><div align="center"></div></td>
        </tr>
        <tr>
          <td height="19" valign="top" class="Estilo71"><div align="right">Sodio (Na)</div></td>
          <td height="19" align="center" valign="top" class="Estilo71"><?php echo $Fila[21]; ?></td>
          <td height="19" align="center" valign="top" class="Estilo71"><?php echo $Fila[35]; ?></td>
          <td colspan="3" valign="top" class="Estilo71"></td>
        </tr>
        <tr>
          <td height="19" valign="top" class="Estilo71"><div align="right">Cloruros (Cl<sup>-</sup>)</div></td>
          <td height="19" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[22]; ?></div></td>
          <td height="19" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[36]; ?></div></td>
        </tr>
    </table>
</div>