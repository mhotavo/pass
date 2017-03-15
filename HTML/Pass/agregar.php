  <html>
  <head>
  	<?php include(HTML_DIR.'/overall/header.php') ?>
  </head>
  <body>
  	<?php include(HTML_DIR.'/overall/nav.php') ?>

  	<div class="container">
  		<h3 align="center">Registrar  <i class="fa fa-key" aria-hidden="true"></i></h3> 
  		<br>
  		<div class="row">
  			<div class="col-md-2"></div>
  			<div class="col-md-8">
  				<form class="form-horizontal" enctype="multipart/form-data" method="POST">
  					<fieldset>
  						<div class="form-group">
  							<label for="inputNombres" class="col-lg-2 control-label">Usuario</label>
  							<div class="col-lg-10">
  								<input type="text" class="form-control" name="usuario" placeholder="usuario">
  							</div>
  						</div>	
              <div class="form-group">
                <label for="inputNombres" class="col-lg-2 control-label">Clave</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="clave" placeholder="Clave">
                </div>
              </div>  	
              <div class="form-group">
                <label for="inputNombres" class="col-lg-2 control-label">Sitio</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="sitio" placeholder="Ej. Facebook">
                </div>
              </div> 
              <div class="form-group">
                <label for="inputNombres" class="col-lg-2 control-label">URL</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="URL" placeholder="Ej. www.Facebook.com">
                </div>
              </div>  
              <div class="form-group">
                <label for="inputNombres" class="col-lg-2 control-label">Logo sitio</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="logo" placeholder="">
                </div>
              </div>  
              <div class="form-group">
               <label for="inputSegundoApellido" class="col-lg-2 control-label">Fecha</label>
               <div class="col-lg-10">
               <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>">
               </div>
             </div>			    	        


             <div class="form-group">
               <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-success">Guardar</button>
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