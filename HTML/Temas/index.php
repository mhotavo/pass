  <html>
  <head>
    <?php include(HTML_DIR.'/overall/header.php') ?>
    <link rel="stylesheet" type="text/css" href="Views/DataTables/media/css/dataTables.bootstrap.css">
  </head>
  <body>
    <?php include(HTML_DIR.'/overall/nav.php') ?>
    <div id="container">
      <h2 align="center"></h2>
      <div class="">
        <div class="col-md-2"></div>
        <div class="col-md-8">

          <table class="table table-striped table-hover dataTable" id="">
            <thead>
              <tr>
                <th><i class="fa fa-bed" aria-hidden="true"></i></th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody> 
              <?php while($row = mysqli_fetch_array($datos)){ ?>
              <tr>           
                <td>
                  <a style="text-decoration: none;" href="<?php echo URL; ?>Temas/ver/<?php echo $row['ID_TEMA']; ?>"> 
                    <?php  switch ($row['DESCRIPCION']) {
                      case 'Andres':
                      echo '<img src="Views/images/andres.png" alt="Sex" width="40">';
                      break;
                      case 'Sex':
                      echo '<img src="Views/images/sex.png" alt="Sex" width="60">';
                      break;
                      case '69':
                      echo '<img src="Views/images/69.png" alt="Total 69" width="70">';
                      break;
                      case 'El':
                      echo '<img src="Views/images/oralElla.png" alt="Oral a el" width="40">';
                      break;
                      case 'Ella':
                      echo '<img src="Views/images/oralEl.png" alt="Oral a ella" width="70">';
                      break;
                    }   ?> </a>
                  </td>
                  <td><?php  echo $row['TEMA']; ?></td>
                  <td><?php  echo $row['FECHA']; ?></td>
                  <td>
                    <a  class="btn btn-warning" href="<?php echo URL; ?>Temas/editar/<?php echo $row['ID_TEMA']; ?>">Editar&nbsp;</a> 
                    <a  class="btn btn-danger" onclick="DeleteItem('¿Está seguro de eliminar este familiar?','<?php echo URL; ?>Temas/eliminar/<?php echo $row['ID_TEMA']; ?>')" >Borrar</a> 
                  </td>
                </tr>
                <?php 
              }
              ?>

            </tbody>
          </table>

        </div>
        <div class="col-md-2"></div>
      </div>  
    </div>
    <?php include(HTML_DIR.'/overall/footer.php') ?> 
    <script type="text/javascript" src="Views/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="Views/DataTables/media/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.dataTable').DataTable({
          "iDisplayLength": 25,
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
          "autoWidth": true,           
          "sPaginationType": "full_numbers",
          "order": [[ 1, 'desc' ]]
        });
      } );
    </script>
  </body>
  </html>   