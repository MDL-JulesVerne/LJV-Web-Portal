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

<?php include 'header.php'; ?>
<div id="main">
	<div class="container text-justify">
		<h2>La raison d'être de <a href="https://ljv.fr/">ljv.fr</a></h2>
		<p>Ce site internet a été créé d'après une initiative non-officielle de quelques étudiants du lycée Jules Verne. La plateforme derrière le site a pour objectif de <b>permettre l'hébergement de certains projets plus ou moins liés au lycée</b>, et ainsi de faciliter leur réalisation et leur promotion.</p>
		<p>L'organisation du domaine a été pensée afin d'offir une certaine visibilité aux différents projets proposés, mais aussi de faciliter l'accès au <a href="jules-verne.paysdelaloire.e-lyco.fr">site internet officiel du lycée Jules Verne</a> (jules-verne.paysdelaloire.e-lyco.fr), via <a href="https://ljv.fr/">le portail web de la plateforme</a> (ljv.fr).</p>
		
		<h2>Les projets mis en avant</h2>
		<p>La plateforme ne met en avant qu'un seul projet pour le moment :</p>
		<ul>
			<li><a href="https://nautilus.ljv.fr/"><b>Le Nautilus</b></a> (nautilus.ljv.fr), le journal du lycée Jules Verne – un projet réalisé par un groupe de lycéens.</li>
		</ul>
		<p>Cependant, celle-ci devrait se doter d'un tout nouveau projet dans les prochains mois :</p>
		<ul>
			<li><b>FileDrop</b>, un cloud pour le partage rapide de documents, hébergés temporairement en ligne.</li>
		</ul>
		<p>Pour le moment, la plateforme est en construction. À terme, la plateforme devrait pouvoir permettre l'hébergement et la création de nouveaux projets, scolaires ou plus personnels.</p>
		<?php /*<p>Le responsable de la plateforme est en train de réfléchir au développement d'un cloud ouvert, où les documents hébergés pourrait être visionnés directement depuis un navigateur (pour les images, les pages web, les pdf..)</p>*/ // THIS IS JUST AN IDEA. Although, I already have some scrap code of a cloud project I've made */ ?> <hr />
		
		<h2>L'équipe de la plateforme</h2>
			<h3>Responsable de la plateforme</h3>
			<p>La plateforme et l'hébergement de ce site internet sont gérés par <b>Mathieu Guérin</b> (alias Matiboux), lycéen en classe de 1<sup>ère</sup> S2 au lycée Jules Verne.</p>
			<p>Ce dernier est aussi..</p>
			<ul>
				<li>Responsable du nom de domaine <a href="https://ljv.fr/">ljv.fr</a>.</li>
				<li>Propriétaire du serveur d’hébergement web (hébergé chez <a href="https://www.pulseheberg.com/">PulseHeberg</a> et partagé avec la plateforme personnelle de l'élève – indépendante de celle de <a href="https://ljv.fr/">ljv.fr</a>).</li>
				<li>Modérateur des projets hébergés sur la plateforme</li>
				<li>Webmaster du site internet <a href="https://ljv.fr/">ljv.fr</a> – ainsi que celui du <a href="https://nautilus.ljv.fr/">Nautilus</a> (nautilus.ljv.fr)</li>
			</ul>
			<p>Informations de contact :</p>
			<ul>
				<li>Email : <a href="mailto:matiboux@gmail.com">matiboux@gmail.com</a></li>
				<li>Telegram : <a href="https://t.me/Matiboux">@Matiboux</a></li>
			</ul>
			
			<h3>Le Nautilus</h3>
			<p>Le Nautilus est géré par Adrien Granjon, rédacteur en chef et responsable de la publication. Ce projet étant étroitement lié à la plateforme <a href="https://ljv.fr/">ljv.fr</a>, ce dernier obtient alors un rôle important dans l'organisation de celle-ci.</p>
			<p>Informations de contact :</p>
			<ul>
				<li>Email : <a href="adrien.granjon@free.fr">adrien.granjon@free.fr</a></li>
			</ul> <hr />
		
		<h2>Un projet libre</h2>
		<p><b>Le projet est désormais un projet ouvert et open-source!</b></p>
		<p>Le code source du site internet est entièrement disponible sur <a href="https://github.com/matiboux/LJV-Web-Portal">sa page Github</a> sous la <a href="https://fr.wikipedia.org/wiki/Licence_MIT">license MIT</a>. Depuis cet endroit, vous pourrez suivre l'avancée du développement du site et peut être y contribuer, si vous avez des compétences en développement web.
	</div>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="https://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://cdn.matiboux.com/js/bootstrap.min.js"></script>

</body>
</html>