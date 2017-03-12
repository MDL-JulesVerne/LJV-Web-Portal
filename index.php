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
<meta name="keywords" content="portail,portal,web,internet,lycée,high,school,jules,verne,Nautilus,Matiboux" />

<link rel="stylesheet" type="text/css" href="http://cdn.matiboux.com/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="http://cdn.matiboux.com/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="http://cdn.matiboux.com/css/dark-navbar.css" />
<link rel="stylesheet" type="text/css" href="style.css" />

<title>Portail web - Lycée Jules Verne</title>

</head>
<body>

<?php include 'header.php'; ?>
<div id="items">
	<div class="container">
		<div class="list">
			<div id="redirect" class="item" style="margin-top: -80px">
				<div class="content">
					<p>Redirection automatique dans <span id="countdown"><?=$countdown?></span> secondes...</p>
					<p><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-times fa-fw"></i> Désactiver la redirection</a></p>
				</div>
			</div>
			
			<?php $url = 'http://jules-verne.paysdelaloire.e-lyco.fr/'; ?>
			<div class="item selected" href="<?=$url?>" style="background-image: url('blurred-ljv.jpg')">
				<div id="redirect-status" class="popup ongoing" style="display: none"></div>
				<div class="content">
					<h1>Lycée Jules Verne</h1>
					<p>Le site internet officiel du lycée Jules Verne de Nantes</p>
				</div>
			</div>
			
			<?php $url = 'http://nautilus.ljv.fr/'; ?>
			<div class="item" href="<?=$url?>" style="background-image: url('blurred-nautilus.jpg')">
				<div class="content">
					<h1>Le Nautilus</h1>
					<p>Le journal lycéen du lycée Jules Verne</p>
				</div>
			</div>
		</div>
	</div>
</div> <hr />

<div id="main">
	<div class="container">
		<p class="text-muted">Interface v3 encore en dévelopement – Questions, Bugs, Signalements ? <a href="mailto:matiboux@gmail.com">Contactez moi</a></p>
		<p><a href="v2.php">Retour à l'ancienne interface (v2)</a></p>
	</div>
</div>

<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery.cookie.js"></script>
<script type="text/javascript" src="http://cdn.matiboux.com/js/jquery.countdown.min.js"></script>

<script>
(function($) {
	var cookieName = '<?=$cookieName?>';
	var ongoing = false;
	var countdown = $('#countdown').html();
	
	var toggleRedirect = function(activate) {
		if(activate) {
			ongoing = true;
			$('#redirect').css({'margin-top': 0});
			$('#redirect-status').removeClass('canceled ongoing').addClass('ongoing').empty().text('Redirection en cours...').show();
			$('#countdown').countdown((new Date).getTime() + (countdown * 1000), function(e) {
				if(ongoing) {
					$(this).text(e.strftime('%S'));
					if(e.type == 'finish') {
						ongoing = false;
						window.location = '<?=$location?>';
					}
				}
			});
		}
		else {
			$('#redirect').css({'margin-top': '-80px'});
			$('#redirect-status').removeClass('canceled ongoing').empty().text('Redirection désactivée').show();
		}
	};
	var disableRedirect = function() {
		ongoing = false;
		$('#redirect .content').empty().append($('<p>').append($('<i>').addClass('fa fa-times fa-fw'), ' Redirection automatique désactivée'));
		$('#redirect').animate({'margin-top': '-80px'});
		if($('#redirect-status').hasClass('ongoing')) $('#redirect-status').removeClass('canceled ongoing').addClass('canceled').empty().text('Redirection annulée');
	};
	
	toggleRedirect(!$.cookie(cookieName));
	
	$('a').click(function(e) {
		if($(this).attr('href') == '#' && $(this).parents('#redirect').length) {
			e.preventDefault();
			
			if(ongoing && $(this).parents('#redirect').find('#countdown').length) {
				disableRedirect();
				$.cookie(cookieName, true);
			}
		}
	});
	
	$('.item').click(function(e) {
		if($(this).attr('href') != '' && $(this).attr('href') != '#' && $(this).attr('id') != 'redirect') {
			e.preventDefault();
			disableRedirect();
			window.location = $(this).attr('href');
		}
	});
})(jQuery);
</script>

</body>
</html>