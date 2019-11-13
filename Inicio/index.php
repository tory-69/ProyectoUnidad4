<?php 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 24</title>
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
		<!-- encabezado -->
		<?php
			include '../layout/encabezadoB.php';
		?>
		<!-- encabezado -->
	</header><!-- /header -->	
	<div class="container-fluid" >
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-12 col-lg-12 cont">
			   <h1 class="titulo centrar">Calculo de Triage.</h1>
			   	
			   	<div class="container-fluid">
					<!-- Elementos -->
						<div class="formulario animated  slideInUp">
							<form role="form" class="interno" action="resultado.php" method="POST">

								<div class="encabezado">
									Datos del paciente.
								</div>
								<div class="cuerpo">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Nombre del paciente:</label>
					        					<input name="paciente" type="text" class="form-control" autofocus required>
				        					</div>
			        					</div>
			        					<div class="col-xs-12 col-sm-6 col-md-1 col-lg-1">
				        					<div class="form-group">
					        					<label>Edad :</label>
					        					<input name="edad" type="number" class="form-control"  required>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
				        					<div class="form-group">
					        					<label>Género:</label>
					        					<select name="genero" class="form-control">
                                					<option value="masculino">Masculino.</option>
                                					<option value="femenino">Femenino.</option>
                            					</select>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
				        					<div class="form-group">
					        					<label>Estado civil:</label>
					        					<select name="estciv" class="form-control">
                                					<option value="soltero">Soltero.</option>
                                					<option value="casado">Casado.</option>
                                					<option value="divorciado">Divorciado.</option>
                                					<option value="viudo">Viudo.</option>
                                					<option value="otro">Otro.</option>
                            					</select>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				        					<div class="form-group">
					        					<label>Dirección:</label>
					        					<input name="dirpa" type="text" class="form-control" required>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Persona asociada al paciente:</label>
					        					<input name="pers" type="text" class="form-control"  required>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
				        					<div class="form-group">
					        					<label>Número telefónico:</label>
					        					<input name="numtel" type="number" class="form-control"  required>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Dirección:</label>
					        					<input name="diras" type="text" class="form-control" required>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
				        					<div class="form-group">
					        					<label>Relación con el paciente:</label>
					        					<input name="rel" type="text" class="form-control" required>
				        					</div>
										</div>
										<br>
									</div>
								</div>
								<div class="cuerpo">
									<div class="row">
										<div class="encabezado">
                							<label for="">Datos sobre la consulta.</label>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				        					<div class="form-group">
					        					<label>Motivo de consulta:</label>
					        					<select name="motivo" class="form-control">
                                					<option value="agre">Agresión.</option>
                                					<option value="alerg">Alergia, reacciones cutáneas.</option>
                                					<option value="mental">Alteración comportamiento-estado mental.</option>
                                					<option value="analitica">Alteración analítica.</option>
                                					<option value="consc">Alteración de la consciencia.</option>
                                					<option value="cardiaco">Alteración del ritmo cardiaco-ECG.</option>
                                					<option value="vom">Alteración del ritmo intenstinal-vómitos.</option>
                                					<option value="bebe">Bebe o niño que llora.</option>
                                					<option value="cefalia">Cefalea-cervicalgia.</option>
                                					<option value="conv">Convulciones, movimientos anormales.</option>
                                					<option value="ext">Cuerpo extraño.</option>
                                					<option value="dem">Demanda no urgentes.</option>
                                					<option value="dis">Disnea.</option>
                                					<option value="abd">Dolor abdominal (incluido suelo pélvico).</option>
                                					<option value="esp">Dolor de espalda.</option>
                                					<option value="extre">Dolor de extremidades.</option>
                                					<option value="escr">Dolor escrotal.</option>
                                					<option value="renal">Dolor fosa renal.</option>
                                					<option value="torac">Dolor torácico.</option>
                                					<option value="em">Embarazo.</option>
                                					<option value="fi">Fiebre.</option>
                                					<option value="foc">Focalidad neurológica.</option>
                                					<option value="hem">Hemorragia.</option>
                                					<option value="her">Heridas.</option>
                                					<option value="hip">Hipertensión arterial.</option>
                                					<option value="infl">Inflamación-inchazón.</option>
                                					<option value="int">Intoxicación.</option>
                                					<option value="bult">Lesiones locales, bultomas.</option>
                                					<option value="gral">Mal estado general, Sd. Constitucional.</option>
                                					<option value="mareo">Mareo-inestabilidad.</option>
                                					<option value="niño">Niño irritable.</option>
                                					<option value="cardio">Parada cardio-respiratoria.</option>
                                					<option value="poli">Politraumatismo.</option>
                                					<option value="quema">Quemaduras físicas y/o químicas.</option>
                                					<option value="lipo">Sincope-lipotimia.</option>
                                					<option value="buco">Síntomas buco dentales.</option>
                                					<option value="oido">Síntomas de oído.</option>
                                					<option value="geni">Síntomas genitourinario.</option>
                                					<option value="ocu">Síntomas oculares.</option>
                                					<option value="rino">Síntomas rinofaringeos.</option>
                                					<option value="craneo">Traumatismos craneofacial.</option>
                                					<option value="extremid">Traumatismos extremidades.</option>
                                					<option value="mult">Traumatismos múltiples.</option>
                                					<option value="torazo">Traumatismos torazo-abdominales.</option>
                                					<option value="otra">Otra</option>
                            					</select>
				        					</div>
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
				        					<div class="form-group">
					        					<label>Fecha:</label>
					        					<input name="fech" type="date" class="form-control" required>
				        					</div>
			        					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
				        					<div class="form-group">
					        					<label>Hora de llegada:</label>
					        					<input name="h" type="time" class="form-control" required>
				        					</div>
                    					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
				        					<div class="form-group">
					        					<label>Estatus:</label>
					        					<select name="estatus" class="form-control">
                                					<option value="consciente">Consciente.</option>
                                					<option value="inconsciente">Inconsciente.</option>
                            					</select>
				        					</div>
										</div>	
										<br>
									</div>
								</div>
								<div class="cuerpo">
									<div class="row">
                    					<div class="encabezado">
                        					<label for="">Signos vitales.</label> 
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				        					<div class="form-group">
					        					<label>Presión arterial sistólica:</label>
					        					<select name="sist" class="form-control">
                                					<option value="uno">Entre 0 y 49.</option>
                                					<option value="dos">Entre 50 y 69.</option>
                                					<option value="tres">Entre 70 y 89.</option>
                                					<option value="cuatro">Entre 90 y 129.</option>
                                					<option value="cinco">Entre 130 y 149.</option>
                            					</select>
				        					</div>
                    					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				        					<div class="form-group">
					        					<label>Presión arterial diastólica:</label>
					        					<select name="diast" class="form-control">
                                					<option value="puno">Entre 0 y 40.</option>
                                					<option value="pdos">Entre 41 y 49.</option>
                                					<option value="ptres">Entre 50 y 59.</option>
                                					<option value="pcuatro">Entre 60 y 89.</option>
                                					<option value="pcinco">Entre 90 y 109.</option>
                            					</select>
				        					</div>
                    					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Frecuencia respiratoria:</label>
					        					<input name="resp" type="number" class="form-control" required>
				        					</div>
                    					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Frecuencia cardiaca:</label>
					        					<input name="card" type="number" class="form-control" required>
				        					</div>
                    					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Temperatura:</label>
					        					<input name="temp" type="number" class="form-control" required>
				        					</div>
                    					</div>
										<br>
									</div>
								</div>
								<div class="cuerpo">
									<div class="row">
										<div class="encabezado">
                        					<label for="">Escala de Glasgow.</label> 
                    					</div>
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Respuesta ocular:</label>
                            					<select name="ocular" class="form-control">
                                					<option value="espontanea">Espontánea.</option>
                                					<option value="ordenver">Orden verbal.</option>
                                					<option value="dolor">Dolor.</option>
                                					<option value="noresp">No responden.</option>
                            					</select>
				        					</div>
                    					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Respuesta verbal:</label>
                            					<select name="verbal" class="form-control">
                                					<option value="orientado">Orientado y conversando.</option>
                                					<option value="desorientado">Desorientado y hablando.</option>
                                					<option value="inaprop">Palabras inapropiadas.</option>
                                					<option value="incompren">Sonidos incomprensibles.</option>
                                					<option value="ninguna">Ninguna respuesta.</option>
                            					</select>
				        					</div>
                    					</div>	
                    					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
				        					<div class="form-group">
					        					<label>Respuesta motora:</label>
                            					<select name="motora" class="form-control">
                                					<option value="obedece">Orden verbal obedece.</option>
                                					<option value="localizar">Localizar el dolor.</option>
                                					<option value="retirada">Retirada y flexión.</option>
                                					<option value="anormal">Flexión anormal.</option>
                                					<option value="extension">Extensión.</option>
                                					<option value="ninguna">Ninguna respuesta.</option>
                            					</select>
				        					</div>
                    					</div>	
		        					</div>
            					</div>
								<br>
								<div class="pie">
										<button type="submit" class="btn btn-form">Realizar Triage.</button>
								</div>

							</form>
						</div>
					<!-- Elementos -->
				</div>
			</div>			
		</div>
	</div>
	<footer class="fondo">
		<?php
			include'../layout/pie.php';
		?>
	</footer>

	<?php
			include'../layout/modal.php';
		?>
	<!-- Modal Info Usuario -->

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
	<script src="../plugins/select2/select2.min.js"></script>
</body>
</html>