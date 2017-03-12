<?php
$countdown = 3; // seconds
$location = 'http://jules-verne.paysdelaloire.e-lyco.fr/';
// header('Refresh: ' . $countdown . '; Url=' . $location);
$cookieName = 'disableRedirect';
?>

<html>
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Matiboux" />
<meta name="description" content="Portail web non officiel du Lycée Jules Verne" />
<meta name="keywords" content="portail,portal,web,internet,lycée,high,school,jules,verne,Matiboux" />

<link rel="stylesheet" type="text/css" href="http://cdn.matiboux.com/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="http://cdn.matiboux.com/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="http://cdn.matiboux.com/css/dark-navbar.css" />
<link rel="stylesheet" type="text/css" href="v2.css" />

<title>Portail web - Lycée Jules Verne</title>

</head>
<body>

<?php include 'header.php'; ?>
<div id="main">
	<div class="container">
		<h1>Portail web</h1>
		
		<?php $url = 'http://jules-verne.paysdelaloire.e-lyco.fr/'; ?>
		<div class="media primary" href="<?=$url?>">
			<div class="media-left">
				<a href="<?=$url?>">
					<img class="media-object" src="lycee-jules-verne.jpg" alt="Lycée Jules Verne" />
				</a>
			</div>
			<div class="media-body">
				<h4 class="media-heading"><a href="<?=$url?>">Aller vers le site du Lycée Jules Verne de Nantes</a></h4>
				<p class="small"><i class="fa fa-angle-right fa-fw"></i> <?=$url?></p>
				<p>Le site internet officiel du lycée Jules Verne</p>
				<p id="redirect-message">
					<i class="fa fa-refresh fa-spin fa-fw"></i> Redirection automatique dans <span id="countdown"><?=$countdown?></span> secondes. <br />
					<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times fa-fw"></i> Désactiver la redirection</a>
				</p>
			</div>
		</div>
		
		<?php $url = 'http://nautilus.ljv.fr/'; ?>
		<div class="media" href="<?=$url?>">
			<div class="media-left">
				<a href="<?=$url?>">
					<img class="media-object" src="nautilus.jpg" alt="Le Nautilus" />
				</a>
			</div>
			<div class="media-body">
				<h4 class="media-heading"><a href="<?=$url?>">Aller vers le Nautilus</a></h4>
				<p class="small"><i class="fa fa-angle-right fa-fw"></i> <?=$url?></p>
				<p>Le journal du lycée Jules Verne</p>
			</div>
		</div>
		
		<hr />
		<p><a href="index.php">Retour à la nouvelle interface</a></p>
	</div>
</div>

<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery.cookie.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery.countdown.min.js"></script>

<script>
(function($) {
	var cookieName = '<?=$cookieName?>';
	var disableRedirect = function() {
		$('#redirect-message').empty().append($('<i>').addClass('fa fa-times fa-fw'), ' Redirection automatique désactivée');
	};
	var ongoing = false;
	var countdown = $('#countdown').html();
	
	if(!$.cookie(cookieName)) ongoing = true;
	else {
		disableRedirect();
		// $('#redirect-message').attr('id', '');
	}
	
	$('#countdown').countdown((new Date).getTime() + (countdown * 1000), function(e) {
		if(ongoing) {
			$(this).text(e.strftime('%S'));
			if(e.type == 'finish') {
				ongoing = false;
				window.location = '<?=$location?>';
			}
		}
	});
	
	$('a').click(function(e) {
		if($(this).attr('href') != '#' || $(this).parents('#redirect-message').length) {
			if($(this).attr('href') == '#') e.preventDefault();
			
			if(ongoing && !$(this).find('#countdown').length) {
				ongoing = false;
				disableRedirect();
				$.cookie(cookieName, true);
			}
		}
	});
	
	/*$('a, .media').click(function(e) {
		if($(this).attr('href') != '#' || $(this).parent().attr('id') == 'redirect-message') {
			if($(this).attr('href') == '#') e.preventDefault();
			
			if($(this).is('a')) console.log('type: a');
			else console.log('type: media');
			
			if(ongoing && !$(this).find('#countdown').length) {
				ongoing = false;
				disableRedirect();
				console.log('stop_countdown');
			}
			
			if($(this).parents('#redirect-message').length) console.log('cookie');//$.cookie(cookieName, true);
			// if($(this).parent().attr('id') == 'redirect-message') $.cookie(cookieName, true, { expire: new Date((new Date).getTime() + 10 *60 *1000) });
			else {
				if($(this).is('.media') && ongoing) {console.log('ongoing=false');ongoing = false;}
				
				if($(this).children('#redirect-message').length) {console.log('not_countdown:remove_id');$('#redirect-message').attr('id', '');}
				else if($(this).attr('href') != '#') console.log('not_message:redirect');//window.location = $(this).attr('href');
			}
			console.log('end-----');
		}
	});*/
})(jQuery);
</script>

</body>
</html>