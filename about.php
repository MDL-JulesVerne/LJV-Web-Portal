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

<link rel="stylesheet" type="text/css" href="https://cdn.matiboux.com/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.matiboux.com/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.matiboux.com/css/dark-navbar.css" />
<link rel="stylesheet" type="text/css" href="https://ljv.fr/style.css" />

<title>Portail web - Lycée Jules Verne</title>

</head>
<body>

<?php if(file_exists('analytics.php')) include_once 'analytics.php'; ?>

<?php include 'header.php'; ?>
<div id="main">
	<div class="container text-justify">
		<h3>La raison d'être de <a href="https://ljv.fr/">ljv.fr</a></h3>
		<p>Ce site internet a été créé d'après une initiative non-officielle de quelques étudiants du lycée Jules Verne. La plateforme derrière le site a pour objectif de <b>permettre l'hébergement de certains projets plus ou moins liés au lycée</b>, et ainsi de faciliter leur réalisation et leur promotion.</p>
		<p>L'organisation du domaine a été pensée afin d'offir une certaine visibilité aux différents projets proposés, mais aussi de faciliter l'accès au <a href="jules-verne.paysdelaloire.e-lyco.fr">site internet officiel du lycée Jules Verne</a> (jules-verne.paysdelaloire.e-lyco.fr), via <a href="https://ljv.fr/">le portail web de la plateforme</a> (ljv.fr).</p>
		
		<h3>Les projets mis en avant</h3>
		<p>La plateforme ne met en avant qu'un seul projet pour le moment :</p>
		<ul>
			<li><a href="https://nautilus.ljv.fr/"><b>Le Nautilus</b></a> (nautilus.ljv.fr), le journal du lycée Jules Verne – un projet réalisé par un groupe de lycéens.</li>
		</ul>
		<?php /*<p>Cependant, celle-ci devrait se doter d'un tout nouveau projet dans les prochains mois :</p>
		<ul>
			<li><b>FileDrop</b>, un cloud pour le partage rapide de documents, hébergés temporairement en ligne.</li>
		</ul>*/ ?>
		<p>Pour le moment, la plateforme est en construction. À terme, la plateforme devrait pouvoir permettre l'hébergement et la création de nouveaux projets, scolaires ou plus personnels.</p> <hr />
		
		<h3>Responsable de la plateforme</h3>
		<p>La plateforme de ce site internet est gérées par <b>Matiboux</b> (Mathieu Guérin).</p>
		<p>Ce dernier se charge également..</p>
		<ul>
			<li>Du nom de domaine <a href="https://ljv.fr/">ljv.fr</a>.</li>
			<li>De modérer les projets hébergés sur la plateforme.</li>
			<li>De maintenir ce site internet, ainsi que celui du <a href="https://nautilus.ljv.fr/">Nautilus</a> (nautilus.ljv.fr).</li>
		</ul>
		<p>Informations de contact :</p>
		<ul>
			<li>Email : <a href="mailto:matiboux@gmail.com">matiboux@gmail.com</a></li>
			<li>Telegram : <a href="https://t.me/Matiboux">@Matiboux</a></li>
		</ul>
		
		<h3>Responsable du la publication</h3>
		<p>La publication est modérée par <b>Adrien Granjon</b>, redacteur en chef du <a href="https://nautilus.ljv.fr/">Nautilus</a>.</p>
		<p>Informations de contact :</p>
		<ul>
			<li>Email : <a href="adrien.granjon@free.fr">adrien.granjon@free.fr</a></li>
		</ul>
		
		<h3>Hébergement</h3>
		<p>La plateforme est hébergée chez <a href="https://www.pulseheberg.com/">PulseHeberg</a>.</p>
		<p>Informations pratiques :</p>
		<ul>
			<li>Adresse : 16-18 avenue de L'Europe, 78140 Vélizy-Villacoublay</li>
		</ul> <hr />
		
		<h3>Un projet libre</h3>
		<p><b>Le projet est désormais un projet ouvert et open-source!</b></p>
		<p>Le code source du site internet est entièrement disponible sur <a href="https://github.com/matiboux/LJV-Web-Portal">sa page Github</a> sous la <a href="https://fr.wikipedia.org/wiki/Licence_MIT">license MIT</a>. Depuis cet endroit, vous pourrez suivre l'avancée du développement du site et peut être y contribuer, si vous avez des compétences en développement web.</p>
	</div>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="https://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://cdn.matiboux.com/js/bootstrap.min.js"></script>

</body>
</html>