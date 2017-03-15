<html>
<head>
	<?php include(HTML_DIR.'/overall/header.php') ?>
</head>
<body>
	<?php include(HTML_DIR.'/overall/nav.php') ?>
	<div class="container">
		<h3 align="center"> <?php echo  $datos['SITIO'] ;  ?></h3>
		<br>
		<div class="">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form class="form-horizontal" enctype="multipart/form-data" method="POST">
					<fieldset>
						<div class="form-group">
							<label for="inputNombres" class="col-lg-2 control-label">Usuario</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="usuario" value="<?php echo  $datos['USUARIO'] ;  ?>">
							</div>
						</div>	
						<div class="form-group">
							<label for="inputNombres" class="col-lg-2 control-label">Clave</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="clave" value="<?php echo  $datos['CLAVE'] ;  ?>"">
							</div>
						</div>  	
						<div class="form-group">
							<label for="inputNombres" class="col-lg-2 control-label">Sitio</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="sitio" value="<?php echo  $datos['SITIO'] ;  ?>"">
							</div>
						</div> 
						<div class="form-group">
							<label for="inputNombres" class="col-lg-2 control-label">URL</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="URL" value="<?php echo  $datos['URL'] ;  ?>"">
							</div>
						</div>  
						<div class="form-group">
							<label for="inputNombres" class="col-lg-2 control-label">Logo sitio</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="logo" value="<?php echo  $datos['IMG'] ;  ?>"">
							</div>
						</div>  
						<div class="form-group">
							<label for="inputSegundoApellido" class="col-lg-2 control-label">Fecha</label>
							<div class="col-lg-10">
								<input type="date" class="form-control" name="fecha" value="<?php echo  $datos['FECHA'] ;  ?>"">
							</div>
						</div>			    	        
						<div class="form-group text-center">
							<div class="col-lg-10 col-lg-offset-2">
								<input type="hidden" class="form-control" name="id" value="<?php echo $datos['ID'] ?>">				 
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
</body>
</html>   