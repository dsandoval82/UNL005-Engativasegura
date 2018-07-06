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
        Pagina Inicial de la APP
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
      </ol>
    </section>
 
    
    <section class="content">
 
      <div class="row">
        <div class="col-md-12">
          
         <h2>Bienvenido a la APP Localidad Segura</h2><br>
		 <h3> en colaboracion con</h3>
          <img src="<?php echo URL_VIEW; ?>img/logo-bm.png" class="img-fluid" alt="">
        </div>
        
      </div>
      
    </section>
  </div>
 
<?php 
 }
?>
<?php require_once 'public/overall/footer-index.php'; ?>
<?php require_once 'public/overall/footer.php'; ?>