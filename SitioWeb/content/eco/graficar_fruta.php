<?php

//$ids = $_GET["ids"];
$OK = "OK";

if (isset($_GET["aplicacion"]) and $_GET["aplicacion"] ==2 )
{
    $tejido = "Foliar";
}  

//$tejido = $_GET["aplicacion"];
$ddf = $_GET["aplicacion2"];
$cma = $_GET["campana"];
$patron=$_GET["patron"];
$modulo=$_GET["modulo"];
$turno=$_GET["turno"];
$lote=$_GET["lote"];



$consulta20 = "SELECT Empresa, Cultivar, Patron, Tejido, Etapa, Campana, Lote, Turno, Modulo, N, P, K, Ca, Mg, S, Fe, Cu, Mn, Zn, B, Mo, Na, Cl, Nr, Pr, Kr, Car, Mgr, Sr, Fer, Cur, Mnr, Znr, Br, Mor, Nar, Clr FROM datos_arato1 WHERE Empresa='$empresa' and Tejido ='$tejido' and Etapa ='$ddf' and Campana='$cma' and Modulo=$modulo and Turno='$turno' and Lote=$lote";
$res20 = mysqli_query($con,$consulta20);

    
    /*while($datos3 = mysqli_fetch_row($res20)) {
        echo $datos3[0]."  ";
        echo $datos3[1]."  ";
        echo $datos3[2]."  ";
        echo $datos3[3]."  ";
        echo $datos3[4]."  ";
        echo $datos3[5]."  ";
        echo $datos3[6]."  ";
        echo $datos3[7]."  ";
        echo $datos3[8]."  ";
        echo $datos3[9]."  ";
        echo $datos3[10]."  ";
        echo $datos3[11]."  ";
        echo $datos3[12]."  ";
        echo $datos3[13]."  ";
        echo $datos3[14]."  ";
        echo $datos3[15]."  ";
        echo $datos3[16]."  ";
        echo $datos3[17]."  ";
        echo $datos3[18]."  ";
        echo $datos3[19]."  ";
        echo $datos3[20]."  ";
        echo $datos3[21]."  ";
        echo $datos3[22]."  ";
        echo $datos3[23]."  ";
        echo $datos3[24]."  ";
        echo $datos3[25]."  ";
        echo $datos3[26]."  ";
        echo $datos3[27]."  ";
        echo $datos3[28]."  ";
        echo $datos3[29]."  ";
        echo $datos3[30]."  ";
        echo $datos3[31]."  ";
        echo $datos3[32]."  ";
        echo $datos3[33]."  ";
        echo $datos3[34]."  ";
        echo $datos3[35]."  ";
        echo $datos3[36]."  ";
    }*/
?>

<div id="grafica">
    <h1>AQUI GRAFICA</h1>
</div>

<div id="tabla_foliar">
</div>