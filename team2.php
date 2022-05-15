<?php
require_once 'engine/funciones.php';
$totix->banned();

$id_r = $totix->filtro($_GET['id']);

if(!empty($id_r) && isset($id_r))
{
	$sql_rank = $db->query("SELECT * FROM ranks WHERE id = '". $id_r ."' LIMIT 1");
	if($sql_rank->num_rows > 0)
	{
		unset($rank);
		$rank = $sql_rank->fetch_assoc();
	}
	else
	{
		unset($rank);
		$sql_last_rank = $db->query("SELECT * FROM ranks ORDER BY id DESC LIMIT 1");
		$rank = $sql_last_rank->fetch_assoc();
	}
}
else
{
	unset($rank);
	$sql_last_rank = $db->query("SELECT * FROM ranks WHERE id = '15' ORDER BY id DESC LIMIT 1");
	$rank = $sql_last_rank->fetch_assoc();
}

if($rank['id'] < minrank)
{
	header("Location: ".www."/team");
	exit;
}

$page = "comunidad";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo www; ?>/favicon.ico" type="image/vnd.microsoft.icon" />
        <link rel="stylesheet" type="text/css" href="<?php echo www; ?>/bootstrap/css/bootstrap.min.css?<?php echo rand(0, 999999); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo www; ?>/styles/style.css?<?php echo rand(0, 999999); ?>" />

        <title><?php echo name; ?> &raquo; Equipo</title>

    </head>
<body>

<?php include 'includes/nav.php'; ?>
<center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HLatino -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4007230734972462"
     data-ad-slot="7574784035"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<br>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
			Decidimos no mostrar a nuestro Equipo (Los identificaras mediante sus placas, su tipico enable sobre la cabeza o tambien mediante las insignias de "cuenta verificada" cada vez que comentan o hacen una noticia) , Si quieres ser uno postula en nuestros centros de ayuda.
		</div>	
		
		<div class="col-xs-12 col-sm-4">
		    
<center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- HLatino -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4007230734972462"
     data-ad-slot="7574784035"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
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
<?php unset($page); ?>