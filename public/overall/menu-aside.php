<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
 
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
 
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo URL_VIEW.'bootstrap-default/img/'.$_usuario[$_SESSION['sesion_id']]['imgperfil']; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_usuario[$_SESSION['sesion_id']]['nombre']; ?></p>
        <!-- Status -->
      </div>
    </div>
 
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MENU OPCIONES</li>
      <!-- Optionally, you can add icons to the links -->
     
	  <li><a href="?view=index" target="_self"><i><img src="<?php echo URL_VIEW.'bootstrap-default/img/icon-inicio-2.png'; ?>"></i> <span><img src="<?php echo URL_VIEW.'bootstrap-default/img/btn-inicio-2.png'; ?>"></span></a></li>
	  <li><a href="#" target="_self"><i><img src="<?php echo URL_VIEW.'bootstrap-default/img/icon-emergencia-2.png'; ?>"></i> <span><img src="<?php echo URL_VIEW.'bootstrap-default/img/btn-emergencia-2.png'; ?>"></span></a></li>
	  <li><a href="#" target="_self"><i><img src="<?php echo URL_VIEW.'bootstrap-default/img/icon-cuadrante-2.png'; ?>"></i> <span><img src="<?php echo URL_VIEW.'bootstrap-default/img/btn-cuadrante-2.png'; ?>"></span></a></li>
	  <li><a href="#" target="_self"><i><img src="<?php echo URL_VIEW.'bootstrap-default/img/icon-reportes-2.png'; ?>"></i> <span><img src="<?php echo URL_VIEW.'bootstrap-default/img/btn-reportes-2.png'; ?>"></span></a></li>
	  <li><a href="#" target="_self"><i><img src="<?php echo URL_VIEW.'bootstrap-default/img/icon-denuncias-2.png'; ?>"></i> <span><img src="<?php echo URL_VIEW.'bootstrap-default/img/btn-denuncias-2.png'; ?>"></span></a></li>
	  
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>