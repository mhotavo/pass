<html>
<head>
  <?php include(HTML_DIR.'/overall/header.php') ?>
  <link rel="stylesheet" type="text/css" href="Views/DataTables/media/css/dataTables.bootstrap.css">
</head>
<body>
  <?php include(HTML_DIR.'/overall/nav.php') ?>
  <div id="container">
    <h2 align="center"><i class="fa fa-heart text-danger" aria-hidden="true"></i></h2>
    <div class="">
      <div class="col-xs-12  col-sm-6 col-sm-offset-4 ">
        <div class="row">
         <div class="col-xs-6 col-sm-6  ">
          <p  class="text-primary">
            <img src="Views/images/sex.png" alt="Sex" width="60">
          </p>
        </div>
        <div class="col-xs-6 col-sm-6">
          <p><?php echo  $datos['UltimaVez']; ?> <small> (<?php echo $datos['TotalSex']; ?> días)</small></p>
          <p ><?php echo $datos['TotalSex']; ?> veces</p>
        </div>
      </div>
      <hr style="margin:0px">
      <div class="row">
        <div class="col-xs-6 col-sm-6  ">
          <p  class="text-primary">
            <img src="Views/images/69.png" alt="Total 69" width="70">
          </p>
        </div>
        <div class="col-xs-6 col-sm-6"><p ><?php echo $datos['Total69']; ?> veces</p></div>
      </div>
      <hr style="margin:0px">
      <div class="row">
        <div class="col-xs-6 col-sm-6  ">
          <p  class="text-primary">
            <img src="Views/images/oralElla.png" alt="Oral a el" width="40">
          </p>
        </div>
        <div class="col-xs-6 col-sm-6"><p ><?php echo ($datos['TotalOralEl']); ?> veces</p>  </div>
      </div>
      <hr style="margin:0px">
      <div class="row">
        <div class="col-xs-6 col-sm-6  ">
          <p  class="text-primary">
            <img src="Views/images/oralEl.png" alt="Oral a ella" width="70">
          </p>
        </div>          
        <div class="col-xs-6 col-sm-6"><p ><?php echo $datos['TotalOralElla']; ?> veces</p></div>
      </div>
      <hr style="margin:0px">
      <div class="row" style="font-weight: bold">
        <div class="col-xs-6 col-sm-6">
          <p  class="text-danger">Ultimo 
            <i class="fa fa-venus text-danger" aria-hidden="true"></i>
          </p>
        </div>
        <div class="col-xs-6 col-sm-6"><p class="text-danger"><b><?php echo $datos['UltimoAndres']; ?></b></p></div>
      </div>
      <hr style="margin:0px">
      <div class="row" style="font-weight: bold">
        <div class="col-xs-6 col-sm-6">
          <p  class="text-danger">Proximo
           <i class="fa fa-venus text-danger" aria-hidden="true"></i>
         </p>
       </div>
       <div class="col-xs-6 col-sm-6"><p class="text-danger"><b><?php echo $datos['ProximoAndres']; ?></b></p></div>
     </div>
   </div>
 </div>  
</div>

<?php include(HTML_DIR.'/overall/footer.php') ?> 
<script type="text/javascript" src="Views/DataTables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="Views/DataTables/media/js/dataTables.bootstrap.js"></script>
<script type="text/javascript">

</script>

</body>

</html>