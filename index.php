<?php
require_once 'engine/funciones.php';
$totix->checklogged('yes');	
$totix->banned();	
?>
<!DOCTYPE HTML>
<html>
    <head>
         <title>Tu Hotel</title>
        <meta name="description" content="Tu Descripccion">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="tus tags">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo www; ?>/favicon.ico" type="image/vnd.microsoft.icon" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="<?php echo www; ?>/styles/js/loader.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo www; ?>/bootstrap/css/bootstrap.min.css?<?php echo rand(0, 9999); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo www; ?>/styles/index.css?<?php echo rand(0, 9999); ?>" />

        <title><?php echo name; ?></title>


    </head>
<body>
<div id="fondo-imag">
    <img src="http://i54.tinypic.com/24g105f.png" alt="HLatino.net" /></div>
<div class="container largo">
    <img class="logo" src="<?php echo logo; ?>" />
  </div>


            	
	
</div>


<div class="container">
<?php if(isset($_SESSION['login_error'])) { echo '<div class="alert alert-danger">'. $_SESSION['login_error'] .'</div>'; } ?>
	<div class="row">
        <div class="col-xs-6">
			<div class="panel panel-primary">
			    <div class="panel-heading">Ingresa a <?php echo name; ?></div>
                <div class="panel-body">
					<form action="<?php echo www; ?>/app/submits/login_submit.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Nombre de usuario...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contrase&ntilde;a...">
                        </div>
						<input type="submit" class="btn btn-primary btn-block" value="ENTRAR"><br><center><a href="https://www.facebook.com/HLatinoOficial/inbox/">&iquest;Contrase&ntilde;a olvidada&#63;</a>
<br><center><a href="http://habbo.hlatino.net/">> INGRESA A NUESTRO FORO <</a>

					</form>
                </div>

		    </div>

		</div>	
				<div class="col-xs-6">
<center>
<iframe width="422" height="238"
src="https://www.youtube.com/embed/OZo8itiJ4aM?playlist=m_54hUbkHoU&loop=1&autoplay=0&controls=0&showinfo=0">
</iframe>
<br>
<br>
<a href="/register" class="btn-registrar" role="button">REGISTRATE GRATIS</a>
<p style="color: #FFFFFF">
	</center>
<br>
</div>										
<br>
<center><?php include 'includes/imagenes.php'; ?>
</center><!-- Start Cookie Assisstant (http://cookieassistant.com) -->
<script src="http://app.cookieassistant.com/widget.js?token=rqqP44b6ed_qGOYG4nxm2A" type="text/javascript"></script>
<div id="cookie_assistant_container"></div>
<!-- End Cookie Assistant -->
<a href="http://ranktrackr.net">ranktrackr.net</a>
<!-- wrap -->

	
<script src="<?php echo www; ?>/bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>
<?php if(isset($_SESSION['login_error'])) { unset($_SESSION['login_error']); } ?>