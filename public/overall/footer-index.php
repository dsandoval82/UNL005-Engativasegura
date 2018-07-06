<?php if(isset($_SESSION['sesion_id']))
{
?>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Visitanos en nuestras redes sociales.
    </div>
    <!-- Default to the left -->
    <strong>Copyright © <?php echo date("Y");?> <a target="_blank" href="3">Localidad Segura</a>.</strong> derechos reservados.
  </footer>
</div>
<?php } 
else{
    echo'
    <div class="container">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <a class="navbar-brand"><strong>Usuario: admin@local.host</strong>  | <strong>Password:</strong> 4dm1n</a>
         </div>
         </nav>
    </div>';
}
?>