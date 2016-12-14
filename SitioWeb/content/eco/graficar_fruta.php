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
$res20 = mysqli_query($con,$consulta20);

echo $consulta20;
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
</style>
	
<div id="grafica">
    <h3>Información sobre del informe:</h3>
</div>

<div id="tabla_foliar-fruto">
      <?php
	//Arreglo de la consulta
    $Fila=mysqli_fetch_row($res20);
    ?>
  <table id="informacion" class="tabla2"> 
    	<tr> 
        	<td width="120" class="Estilo71" style="color: #249f04;"><div align="center">Empresa</div></td>
            <td width="120" class="Estilo71" style="color: #249f04;"><div align="center">Cultivar</div></td>
            <td width="120" class="Estilo71" style="color: #249f04;"><div align="center">Patron</div></td>
            <td width="120" class="Estilo71" style="color: #249f04;"><div align="center">Tejido</div></td>
            <td width="120" class="Estilo71" style="color: #249f04;"><div align="center">Etapa</div></td>
            <td width="120" class="Estilo71" style="color: #249f04;"><div align="center">Campaña</div></td>
        </tr>
        <tr> 
       	  <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[0] ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[1] ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[2] ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[3] ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[4] ?></div></td>
          <td height="15" valign="top" class="Estilo71"><div align="center"><?php echo $Fila[5] ?></div></td>
        </tr>
    </table>
    <table id="grafico" class="tabla2">
        <tr> 
       	  <td width="120" height="15"> 
                <script type="text/javascript">
         anychart.onDocumentReady(function() {
    // create column chart
    chart = anychart.column3d();

    // set container id for the chart
    chart.container('container');

    // turn on chart animation
    chart.animation(true);
    
    // set chart title text settings
    chart.title('Top 10 Cosmetic Products by Revenue');

    // create area series with passed data
    chart.column([
['Rouge', '80540'],
['Foundation', '94190'],
['Mascara', '102610'],
['Lip gloss', '110430'],
['Pomade', '128000'],
['Nail polish', '143760'],
['Eyebrow pencil', '170670'],
['Eyeliner', '213210'],
['Eyeshadows', '249980']
    ]);

    chart.tooltip()
    .position('top')
    .anchor('bottom')
    .offsetX(0)
    .offsetY(5)
    .textFormatter('${%Value}');

    // set scale minimum
    chart.yScale().minimum(0);

    // set yAxis labels formatter
    chart.yAxis().labels().textFormatter(function() {
return this.value.toLocaleString();
    });

    chart.tooltip().positionMode('point');
    chart.interactivity().hoverMode('byX');

    chart.xAxis().title('Products by Revenue');
    chart.yAxis().title('Revenue in Dollars');

    chart.grid();
    chart.grid(1).layout('vertical');

    // initiate chart drawing
    chart.draw();
});
        </script>
          </td>
        </tr>
    </table>
	<table id="tablanutrientes" class="tabla2" style="margin: auto;">
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