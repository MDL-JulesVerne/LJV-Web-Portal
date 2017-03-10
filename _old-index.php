<?php
$countdown = 3; // seconds
$location = 'http://jules-verne.paysdelaloire.e-lyco.fr/';
// header('Refresh: ' . $countdown . '; Url=' . $location);
?>

<html>
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Matiboux" />
<meta name="description" content="Portail web non officiel du Lycée Jules Verne" />
<meta name="keywords" content="portail,portal,web,internet,lycée,high,school,jules,verne,Matiboux" />

<link rel="stylesheet" type="text/css" href="http://cdn.matiboux.com/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="_old-style.css" />

<title>Portail web du Lycée Jules Verne</title>

</head>
<body>

<div id="main">
	<div class="container">
		<ul class="nav-info">
			<li><a href="_old-index.php"><i class="fa fa-home fa-fw"></i> Portail ljv.fr</a></li>
		</ul>
		<h1><i class="fa fa-globe fa-fw"></i> Portail web non officiel du Lycée Jules Verne</h1>
		
		<div class="col-sm-12">
			<div class="box box-primary">
				<h2 id="redirect-message"><i class="fa fa-refresh fa-spin fa-fw"></i> Redirection vers E-lyco.fr dans <span id="countdown"><?=$countdown?></span> secondes.</h2>
				<p>
					Cette page devrait bientôt vous rediriger vers le site internet officiel du Lycée Jules Verne. <br />
					Attendez la fin du compte à rebours ou <a href="<?=$location?>">rendez-vous imédiatement sur <?=$location?></a>.
				</p>
				<p>
					Si vous ne souhaitez aller sur ce lien, cliquer ici : 
					<a href="#" class="btn btn-danger" id="cancel"><i class="fa fa-times fa-fw"></i> Annuler la redirection</a>
				</p>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="box">
				<h2><a href="http://nautilus.ljv.fr/"><i class="fa fa-newspaper-o fa-fw"></i> Le Nautilus</a></h2>
				<p>Accéder au blog du Nautilus, le journal du lycée Jules Verne</p>
			</div>
		</div>
	</div>
</div>

<div id="footer">
	<div class="container">
		<ul class="menu">
			<li><a href="_old-about.php" id="next"><i class="fa fa-info fa-fw"></i> En savoir plus sur ljv.fr</a></li>
			<li><a href="mailto:matiboux@gmail.com" id="next"><i class="fa fa-envelope fa-fw"></i> Contacter le webmaster</a></li>
			<li><i class="fa fa-copyright fa-fw"></i> Matiboux 2017</li>
		</ul>
	</div>
</div>

<script type="text/javascript" src="https://use.fontawesome.com/8ab94ac7f0.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery.countdown.min.js"></script>
<?php /*<script type="text/javascript" src="script.js"></script>*/ ?>

<script>
(function($) {
	var ongoing = true;
	var countdown = $('#countdown').html();
	
	$('#countdown').countdown((new Date).getTime() + (countdown * 1000), function(e) {
		if(ongoing) {
			$(this).text(e.strftime('%S'));
			if(e.type == 'finish') window.location = '<?=$location?>';
		}
	});
	
	$('a').click(function(e) {
		if($(this).attr('id') == 'cancel' || $(this).attr('href') != '#') {
			if($(this).attr('href') == '#') e.preventDefault();
			
			ongoing = false;
			$('#redirect-message').empty().append($('<i>').addClass('fa fa-times fa-fw'), ' Redirection vers E-lyco.fr annulée');
			$('#redirect-message').parent().removeClass('box-primary');
			$('#cancel').parent().remove();
		}
	});
})(jQuery);
</script>

</body>
</html>