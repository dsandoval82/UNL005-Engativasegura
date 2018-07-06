<?php
require_once 'public/overall/header.php'; 
   if (!isset($_SESSION['sesion_id'])){
    include('public/overall/login.php');
   }
 else { 
	header('location: ./?view=index');
	}

require_once 'public/overall/footer-index.php';
require_once 'public/overall/footer.php';

?>