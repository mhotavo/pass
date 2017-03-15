<html>
<head>
	<?php include(HTML_DIR.'/overall/header.php') ?>
</head>
<body>
	<?php include(HTML_DIR.'/overall/nav.php') ?>
	<div class="container">
		<h3 align="center"> <?php echo  $datos['TEMA'] ;  ?></h3>
		<br>
		<div class="">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form class="form-horizontal" enctype="multipart/form-data" method="POST">
					<fieldset>

						<div class="form-group">
							<label for="inputNombres" class="col-lg-2 control-label">Lugar</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="inputTema" placeholder="Casa"   value="<?php echo $datos['TEMA'] ?>">
							</div>
						</div>	

						<div class="form-group">
							<label for="inputPrimerApellido" class="col-lg-2 control-label">Descripcion</label>
							<div class="col-lg-10">
								<!--	<textarea  type="text" class="form-control" name="inputDescripcion"  rows="10" required></textarea> -->
								<select name="inputDescripcion" id="inputDescripcion"  class="form-control">
									<option value="">[...]</option>
									<option value="Andres">Andrés</option>
									<option value="Sex">Sex</option>
									<option value="69">69</option>
									<option value="El">Oral a Él</option>
									<option value="Ella">Oral a Ella</option>
								</select>
							</div>
						</div>			
						<div class="form-group">
							<label for="inputSegundoApellido" class="col-lg-2 control-label"  style="font-weight: bold;">Fecha</label>
							<div class="col-lg-10">
								<input type="date" class="form-control" name="inputFecha" value="<?php echo $datos['FECHA'] ?>">
							</div>
						</div>			    	        


						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<input type="hidden" class="form-control" name="inputId" value="<?php echo $datos['ID_TEMA'] ?>">				 
								<button type="submit" class="btn btn-success">Editar</button>
							</div>
						</div>
					</fieldset>
				</form>


			</div>
			<div class="col-md-2"></div>
		</div>  
	</div>
	<?php include(HTML_DIR.'/overall/footer.php') ?> 
	<script>
		$("#inputDescripcion").val("<?php echo $datos['DESCRIPCION'] ?>");
	</script>

	
</body>
</html>   