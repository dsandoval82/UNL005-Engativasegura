<?php
require_once 'public/overall/header.php'; 
   if (!isset($_SESSION['sesion_id'])){
    include('public/overall/login.php');
   }
 else { ?>
<?php include 'public/overall/menu-header.php'; ?>
<?php include 'public/overall/menu-aside.php'; ?>
 
  
  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>
        Perfil de Usuario
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Perfil de usuario</li>
      </ol>
    </section>
 
    
    <section class="content">
 
      <div class="row">
        <div class="col-md-12">
          
          <div class="box box-widget widget-user">
            
            <div class="widget-user-header bg-black" style="background: url('<?php echo URL_VIEW; ?>bootstrap-default/img/bg_user.jpg') center center;">
              <h3 class="widget-user-username"><?php echo $_usuario[$_SESSION['sesion_id']]['nombre']; ?></h3>
              <h5 class="widget-user-desc"><?php echo $_usuario[$_SESSION['sesion_id']]['informacion']; ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo URL_VIEW; ?>bootstrap-default/img/<?php echo $_usuario[$_SESSION['sesion_id']]['imgperfil']; ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">999</h5>
                    <span class="description-text">REPORTES</span>
                  </div>
                </div>
 
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">999</h5>
                    <span class="description-text">DENUNCIAS</span>
                  </div>
                </div>
 
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">999</h5>
                    <span class="description-text">SOLICITUDES</span>
                  </div>
                </div>
 
              </div>
              
            </div>
          </div>
          
        </div>
        
      </div>
      
      <div class="row">
        <div class="col-md-4">
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Información del Usuario</h3>
            </div>
            
            <div class="box-body">
              
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
 
              <p class="text-muted">User Location</p>

              <strong><i class="fa fa-pencil margin-r-5"></i> Informacion adicional</strong>
 
              <p>
                <span>aaaa</span>
                <span>aaaa</span>
                <span>aaaa</span>
                <span>aaaa</span>
              </p>
 
            </div>
            
          </div>
          
 
        </div>
 
        <div class="col-md-4">
          <div class="box box-primary">
			<div class="box-header with-border">
              <h3 class="box-title">Opciones de Configuracion</h3>
            </div>
 
          </div>
        </div>
         
        <div class="col-md-4">
                  
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Redes Sociales:</h3>
            </div>
            
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                <input type="text" class="form-control" value="@aaaaaaaa" disabled>
              </div>
              <br>
 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                <input type="text" class="form-control" value="aaaaaaaa" disabled>
              </div>
              <br>
 
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                <input type="text" class="form-control" value="aaa" disabled="disabled">
              </div>
              <br>
            </div>
           
          </div>
          
        </div>
      </div>
    </section>
  </div>
 
<?php 
 }
?>
<?php require_once 'public/overall/footer-index.php'; ?>
<?php require_once 'public/overall/footer.php'; ?>