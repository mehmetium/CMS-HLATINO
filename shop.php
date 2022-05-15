<?php
require_once 'engine/funciones.php';
$totix->checklogged('no');
$totix->banned();

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo www; ?>/favicon.ico" type="image/vnd.microsoft.icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo www; ?>/bootstrap/css/bootstrap.min.css?<?php echo rand(0, 99); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo www; ?>/styles/style.css?<?php echo rand(0, 99); ?>" />

        <title><?php echo name; ?> &raquo; Tienda</title>

    </head>
<body>

<?php include 'includes/nav.php'; ?>
<br>

<div class="container">
<?php 
if(isset($_SESSION['voucher_error'])) { echo '<div class="alert alert-danger">'.$_SESSION['voucher_error'].'</div>'; 
} elseif(isset($_SESSION['resultado_b_voucher'])) { echo '<div class="alert alert-success">'.$_SESSION['resultado_b_voucher'].'</div>'; } 
?>
    <div class="row">
        <div class="col-xs-8">
			<?php include_once 'includes/add-tienda-placas.php'; ?>
		</div>	
		
		<div class="col-xs-4">
			<?php include_once 'includes/add-money.php'; ?>
<br>

		</div>
	</div>
</div>	

<?php include 'includes/footer.php'; ?>		

<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js?asd"></script> 
<script type="text/javascript" src="<?php echo www; ?>/styles/js/buscador.js"></script>
<script src="<?php echo www; ?>/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
<?php if(isset($_SESSION['resultado_b_voucher']) || isset($_SESSION['voucher_error'])) { 
unset($_SESSION['voucher_error']); 
unset($_SESSION['resultado_b_voucher']); 
unset($_SESSION['vip_points']); 
unset($_SESSION['vip']); 
unset($_SESSION['voucher']); 
} ?>