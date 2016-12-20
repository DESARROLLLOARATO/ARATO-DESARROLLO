<?php
$con = new mysqli('localhost', 'pruebaar', 'de55(;(TnNgf', 'pruebaar_arato');
?>

		<meta charset="UTF-8">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

            <h4>Prueba grafica análisis:</h4>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>

<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>     

<script type="text/javascript">
$(function () {
    $('#container2').highcharts({
        title: {
            text: 'Prueba: Datos de N por Lote para la campaña 2016-2017 en Pulpa',
            x: -20 //center
        },
        subtitle: {
            text: 'ARATO',
            x: -20
        },
        xAxis: {
            categories: [
            <?php 
            $sql = "SELECT * FROM datos_arato1 WHERE Tejido='Pulpa' and Campana='2016-2017'";
            $result = mysqli_query($con,$sql);
            while ($registros = mysqli_fetch_array($result))
            {
            ?>
                '<?php echo $registros["Lote"]; ?>',
            <?php
            }
            ?>
            ]
        },
        yAxis: {
            title: {
                text: 'N y P por Lote en la campaña 2016-2017 en Pulpa'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'N por Lote',
            data: [
            <?php 
           	$sql = "SELECT * FROM datos_arato1 WHERE Tejido='Pulpa' and Campana='2016-2017'";
            $result = mysqli_query($con,$sql);
            while ($registros = mysqli_fetch_array($result))
            {
            ?>
                <?php echo $registros["N"] ?>,
            <?php
            }
            ?>
            ] //Llave para cierre de 1ra serie
			
			},{
			name: 'P por Lote',
            data: [
            <?php 
           	$sql = "SELECT * FROM datos_arato1 WHERE Tejido='Pulpa' and Campana='2016-2017'";
            $result = mysqli_query($con,$sql);
            while ($registros = mysqli_fetch_array($result))
            {
            ?>
                <?php echo $registros["P"] ?>,
            <?php
            }
            ?>
			] //Llave para cierre de 2da serie
        }]
    });
});
</script>

