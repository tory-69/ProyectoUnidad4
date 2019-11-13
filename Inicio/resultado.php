<?php 
	include"../funciones/funcionesTriage.php";
	include"../funciones/funcionDatosPaciente.php";

	$paciente = $_POST["paciente"];
	$edad = $_POST["edad"];
	$genero = $_POST["genero"];
	$estCiv = $_POST["estciv"];
	$dirPa = $_POST["dirpa"];
	$persona = $_POST["pers"];
	$numTel =  $_POST["numtel"];
	$dirAs = $_POST["diras"];
	$relacion = $_POST["rel"];
	
	$G=($genero=="masculino")?"Masculino.":"Femenino.";
	
	$motivo = $_POST["motivo"];
	$fecha = $_POST["fech"];
	$hora = $_POST["h"];
	$est = $_POST["estatus"];

	$E=($est=="consciente")?1:5;
	//echo $E."--";
	list($h, $m,$meridiano) = preg_split('/[:|]/',$hora);
	//$h=$split[1];
	//$m=$split[2];
	//echo $m."--";

	//$strDateTime='$fecha $hora';
	//$mdate=DateTime::createFromFormat('Y-m-d H:i A'),$strDateTime;
	//$h=$mdate-->format('H');
	//$m=$mdate-->format('m');
	//echo $m.'--';

	$preSist = $_POST["sist"];
	$preDiast = $_POST["diast"];
	$frecResp = $_POST["resp"];
	$frecCar = $_POST["card"];
	$temp = $_POST["temp"];

	$resOc = $_POST["ocular"];
	$resVerb = $_POST["verbal"];
	$resMot = $_POST["motora"];

	$sistolica =sistolica($preSist);
	$diastolica = diastolica($preDiast);
	$respiratoria = respiratoria($frecResp);
	$cardiaca = cardiaca($frecCar);
	$temperatura = temperatura($temp);
	//echo $diastolica."--";
	$sigVit = $sistolica+$diastolica+$respiratoria+$cardiaca+$temperatura;

	$motCit = funcionMotCon($motivo);

	$ocular= respuestaOcular($resOc);
	$verbal = respuestaVerb($resVerb);
	$motora = respuestaMotora($resMot);
	$glasG=$ocular+$verbal+$motora;

	$triage = $E+$sigVit+$motCit+$glasG;

	$result = funcionTriage($triage);
	
	if ($result=="No urgente.") {
		$backResultado = "noUrgente";
		$t=$h+2;
		$hCita=$t.":".$m;
		//$hCita=$h+2;
		//$tCita=$hCita $m;
	}else {
		if ($result=="Prioritario.") {
			$backResultado = "prioritario";
			$t=$h+1;
			$hCita=$t.":".$m;
		}else {
			if ($result=="Urgencia.") {
				$backResultado = "urgencia";
				$t=$m+30;
				$hCita=$h.":".$t;
			}else {
				if ($result=="Emergencia") {
					$backResultado = "emergencia";
					$t=$m+15;
					$hCita=$h.":".$t;
				}else {
					$backResultado = "reanimacion";
					//$t=$m+30;
					$hCita="¡Atención inmediata!";
				}
			}
		}
	}

	$datosPaciente = datosPaciente($paciente,$edad,$genero,$estCiv,$dirPa);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio #28</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- bootstrap 4-->
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../plugins/fontawesome-free-5.8.1-web/css/all.min.css">
	<!-- Estilo personalizado -->
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<!-- bootstrap-toggle-master -->
	<link href="../plugins/bootstrap-toggle-master/css/bootstrap-toggle.css" rel="stylesheet">
	<link href="../plugins/bootstrap-toggle-master/stylesheet.css" rel="stylesheet">
	<!-- alertify -->
	<link href="../plugins/alertifyjs/css/alertify.css" rel="stylesheet">	
	<link href="../plugins/alertifyjs/css/themes/default.css" rel="stylesheet">	
	<!-- animate -->
	<link rel="stylesheet" href="../plugins/animate/animate.css">
</head>
<body>
	<header>
		<?php
			include '../layout/encabezadoB.php';
		?>
		<!-- encabezado -->
	</header><!-- /header -->	
	<div class="container-fluid " >
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cont">
			   <div class="titulo borde sombra">
					<h3 class="animated zoomIn titulo">
						<a href="index.php" class="btn btn-form"><i class="fas fa-angle-left"></i></a> 
						Triage.
					</h3>
			   </div>	
			   <div class="sombra" style="padding-right:18px;">
				   <div class="row">
				   		<span class="<?php echo $backResultado ?> sombra">
						   <?php echo $result ?>
						</span>
						<span class="res sombra">
							<?php echo "Número de ficha: 123"; ?><br><br>
						   <?php echo "Paciente: ".$paciente; ?><br>
						   <?php echo "Edad: ".$edad; ?><br>
						   <?php echo "Género: ".$G; ?><br>
						   <?php echo "Estado civil: ".$estCiv; ?><br>
						   <?php echo "Con dirección: ".$dirPa; ?><br>
						   <?php echo "Hora máxima de atención por un médico: ".$hCita; ?><br><br>
						   <?php echo "Persona asociada al paciente."; ?><br><br>
						   <?php echo "Paciente: ".$persona; ?><br>
						   <?php echo "Número telefónico: ".$numTel; ?><br>
						   <?php echo "Dirección: ".$dirAs; ?><br>
						   <?php echo "Relación con el paciente: ".$relacion; ?><br>
						</span>
					</div>
			   </div>	
			</div>			
		</div>
	</div>
	<footer class="fondo">
		<?php
			include'../layout/pie.php';
		?>
	</footer>

	<!-- SCRIPT JAVASCRIPT -->

	<!-- jquery -->
	<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- alertify -->
	<script src="../plugins/alertifyjs/alertify.js"></script>
	<!-- bootstrap -->
	<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- preloaders -->
	<script src="../plugins/Preloaders/jquery.preloaders.js"></script>
	<!-- bootstrap-toggle-master -->
	<script src="../plugins/bootstrap-toggle-master/doc/script.js"></script>
	<script src="../plugins/bootstrap-toggle-master/js/bootstrap-toggle.js"></script>
	<!-- Scripts personalizados -->
	<script src="../js/menu.js"></script>
	<script src="../js/precarga.js"></script>
	<script src="../js/salir.js"></script>

</body>
</html>