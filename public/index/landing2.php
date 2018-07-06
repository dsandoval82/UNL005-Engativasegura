<?php
require_once 'public/overall/landing-header.php'; ?>
   
   <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Descargar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Funciones</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#registro">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
			<li class="nav-item">
              <a class="nav-link trigger" href="#">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Localidad Segura</h1>
			  <h2>Obten asistencia ante situaciones de emergencia, ponte en contacto con las autoridades locales y colabora con tu comunidad reportando eventos que afecten el orden publico.</h2>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Descargar ahora</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <img src="<?php echo URL_VIEW; ?>img/logo-landing.png" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

	
	<div class="modal">
		<div class="modal-content">
			<span class="close-button">&times;</span>
			<iframe src="?view=login"></iframe>
		</div>
	</div>
	
    <div class="modal2">
        <div class="modal-content">
			<span class="close-button">&times;</span>
			<div class="login-box">
				<div class="login-logo">
					<img class="img-fluid" src="<?php echo URL_VIEW; ?>img/logotexto1.png" alt="">
				</div>
				<!-- /.login-logo -->
				<div class="login-box-body">
					<p class="login-box-msg">Inicie sesión</p>
 
						<div onKeyPress="return runScriptLogin(event)">
							<div class="form-group has-feedback">
								<input type="email" id="email" class="form-control" placeholder="Correo">
								<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<input type="password" id="password" class="form-control" placeholder="Contraseña">
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>
							<div class="row">
								<div class="col-xs-8">
									<div class="checkbox icheck">
										<label>
											<input type="hidden" id="sesion" value="true">
										</label>
									</div>
								</div>
								<!-- /.col -->
								<div class="col-xs-4">
									<button type="submit" class="pull-right btn btn-success" onClick="goLogin()">Iniciar Sesion <i class="fa fa-arrow-circle-right"></i></button>
								</div>
								<!-- /.col -->
							</div>
						</div><!--run script-->
 
				</div>
				<!-- /.login-box-body -->
				<div id="_AJAX_LOGIN_"></div>
			</div>
        </div>
    </div>
	
    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Colabora con tu comunidad y obten asistencia ante una emergencia.</h2>
            <p>Descarga la aplicacion para los diferentes dispositivos.</p>
            <div class="badges">
              <a class="badge-link" href="#"><img src="<?php echo URL_VIEW; ?>img/google-play-badge.svg" alt=""></a>
              <a class="badge-link" href="#"><img src="<?php echo URL_VIEW; ?>img/app-store-badge.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Diferentes Funciones de Asistencia</h2>
          <p class="text-muted">Mira lo que puedes hacer con nuestra aplicacion.</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait white">
                <div class="device">
                  <div class="screen">
                    <img src="<?php echo URL_VIEW; ?>img/logo-landing.png" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i></i>
					<img src="<?php echo URL_VIEW; ?>img/emergencias.png" class="img-fluid" alt="">
                    <h3>Emergencias</h3>
                    <p class="text-muted">Solicitud de ayuda ante Emergencias</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i></i>
					<img src="<?php echo URL_VIEW; ?>img/mapa.png" class="img-fluid" alt="">
                    <h3>Cuadrantes</h3>
                    <p class="text-muted">Informacion de Cuadrantes de Policia.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i></i>
					<img src="<?php echo URL_VIEW; ?>img/denuncias.png" class="img-fluid" alt="">
                    <h3>Denuncias</h3>
                    <p class="text-muted">Denuncia de hechos de orden publico.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i></i>
					<img src="<?php echo URL_VIEW; ?>img/reportes.png" class="img-fluid" alt="">
                    <h3>Reportes</h3>
                    <p class="text-muted">Reporte de incidentes en la comunidad.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<section class="cta" id="registro">

	<div class="container">
	<div class="row">
		<div class="col-sm-7">
		
		<form action="#" method="" class="form-inline">
			
			<label class="sr-only" for="inlineFormInputRol">Rol</label>
				<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputRol" name="rol" placeholder="Rol de Usuario">
				
			<label class="sr-only" for="inlineFormInputName">Nombre</label>
				<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName" name="nombre" placeholder="Nombre">
			
			<label class="sr-only" for="inlineFormInputName2">Apellido</label>
				<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name="apellido" placeholder="Apellido">
				
			
			<div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend">
					<div class="input-group-text">@</div>
				</div>
				<input type="text" class="form-control" id="inlineFormInputCorreo" name="email" placeholder="Correo Electronico">
			</div>
			
			<div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend">
					<div class="input-group-text">#</div>
				</div>
				<input type="text" class="form-control" id="inlineFormInputTelefono" name="telefono" placeholder="Telefono">
			</div>
			
			<label class="sr-only" for="inlineFormInputDireccion">Direccion</label>
				<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputDireccion" name="direccion" placeholder="Direccion">
				
			<div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend">
					<div class="input-group-text">#</div>
				</div>
				<input type="text" class="form-control" id="inlineFormInputDocumento" name="documento" placeholder="Documento">
			</div>
			
			<label class="sr-only" for="inlineFormInputInfo">Informacion Adicional</label>
				<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputInfo" name="informacion" placeholder="Informacion">
				
			<label class="sr-only" for="inlineFormInputPass">Password</label>
				<input type="password" class="form-control mb-2 mr-sm-2" id="inlineFormInputPass" name="password" placeholder="Password">


			<button type="submit" class="btn btn-primary mb-2">Registrarse</button>
		</form>
		
		</div>
		<div class="col-sm-5"></div>
		</div>	
	</div>
	</section>
	
    <section class="contact bg-primary" id="contact">
      <div class="container">
	  <img src="<?php echo URL_VIEW; ?>img/logo-bm.png" class="img-fluid" alt=""><br><br>
        <h2>Comunidad
          <i class="fa fa-heart"></i>
          en contacto!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
		
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; 2018 Localidad Segura.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacidad</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terminos</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>
    <script src="<?php echo URL_VIEW; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL_VIEW; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo URL_VIEW; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?php echo URL_VIEW; ?>js/landing.js"></script>
	<script src="<?php echo URL_VIEW; ?>bootstrap-default/js/login.js"></script>
  </body>
  </html>