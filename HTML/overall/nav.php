<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="font-size: 17px" href="<?php echo URL; ?>Statistics"><b>Couples</b>  <b></b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
       <li><a href="<?php echo URL; ?>Temas/Agregar"> Agregar  <i class="fa fa-bed" aria-hidden="true"></i></a></li> 
     </ul>
     <ul class="nav navbar-nav">
       <li><a href="<?php echo URL; ?>Temas"> Listar <i class="fa fa-list" aria-hidden="true"></i></i></a></li> 
     </ul>
     <ul class="nav navbar-nav">
       <li><a href="<?php echo URL; ?>Statistics"> informe <i class="fa fa-bar-chart" aria-hidden="true"></i></i></i></a></li> 
     </ul>
     <ul class="nav navbar-nav navbar-right">

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <b><?php echo ucwords(strtolower($_SESSION['nombre'])); ?> </b>  <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="<?php echo URL; ?>miperfil">Mi Perfil</a></li>
        </ul>
      </li>

      <li><a href="<?php echo URL; ?>Logout">  Salir  <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
    </ul>
  </div>
</div>
</nav>