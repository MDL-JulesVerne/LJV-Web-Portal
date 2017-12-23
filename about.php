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
<link rel="stylesheet" type="text/css" href="style.css" />

<title>Portail web - Lycée Jules Verne</title>

</head>
<body>

<?php include 'header.php'; ?>
<div id="main">
	<div class="container text-justify">
		<h3>Le site internet</h3>
		<p><a href="https://ljv.fr/">ljv.fr</a> a été créé d'après une initiative non-officielle d'un groupe de quelques étudiants du lycée Jules Verne. La plateforme abritant le site internet a pour objectif de <b>permettre l'hébergement de certains projets liés à l'établissement</b> ou à sa vie lycéenne, et ainsi de faciliter leur réalisation et développement.</p>
		<p>L'organisation du domaine a été pensée afin d'offir une certaine visibilité aux différents projets proposés, mais également de manière à faciliter l'accès au <a href="http://jules-verne.paysdelaloire.e-lyco.fr/">site internet officiel du lycée Jules Verne</a> (jules-verne.paysdelaloire.e-lyco.fr), via <a href="https://ljv.fr/">le portail web de la plateforme</a> (ljv.fr).</p>
		
		<h3>Les projets mis en avant</h3>
		<p>Pour le moment, la plateforme n'a pour rôle de mettre en avant qu'un seul projet :</p>
		<ul>
			<li><a href="https://nautilus.ljv.fr/"><b>Le Nautilus</b></a> (nautilus.ljv.fr), le journal du lycée Jules Verne – un projet réalisé par un groupe de lycéens.</li>
		</ul>
		<?php /*<p>Cependant, celle-ci devrait se doter d'un tout nouveau projet dans les prochains mois :</p>
		<ul>
			<li><b>FileDrop</b>, un cloud pour le partage rapide de documents, hébergés temporairement en ligne.</li>
		</ul>*/ ?>
		<p>La plateforme est constament en développement. La plateforme est bien sûr ouverte à permettre l'hébergement et la création de nouveaux projets, scolaires ou plus personnels. Une modération occasionnelle sera bien sûr assurée par l'équipe de <a href="https://ljv.fr/">ljv.fr</a> sur ces derniers – ils ne seront cependant pas nécéssairement sous la responsabilité de notre équipe.</p> <hr />
		
		<h3>Responsable de la plateforme</h3>
		<p>La plateforme de le site internet sont gérés par <b>Matiboux</b> (Mathieu Guérin), élève au lycée Jules Verne. Ce dernier est également..</p>
		<ul>
			<li>Responsable du nom de domaine <a href="https://ljv.fr/">ljv.fr</a>.</li>
			<li>Modérateur des projets hébergés sur la plateforme.</li>
			<li>Webmaster de ce site internet, ainsi que celui du <a href="https://nautilus.ljv.fr/">Nautilus</a> (nautilus.ljv.fr).</li>
		</ul>
		<p>Informations de contact :</p>
		<ul>
			<li>Email : <a href="mailto:matiboux@gmail.com">matiboux@gmail.com</a></li>
			<li>Telegram : <a href="https://t.me/Matiboux">@Matiboux</a></li>
		</ul>
		
		<h3>Hébergement</h3>
		<p>La plateforme est hébergée chez <a href="https://www.pulseheberg.com/">PulseHeberg</a>.</p>
		<p>Adresse : 16-18 avenue de L'Europe, 78140 Vélizy-Villacoublay</p> <hr />
		
		<h3>Un projet open-source</h3>
		<p><b>Le code source du site du portail web que vous visualisez est disponible en ligne!</b></p>
		<p>Le code est entièrement disponible sur <a href="https://github.com/matiboux/LJV-Web-Portal">sa page Github</a> et distribué sous la <a href="https://fr.wikipedia.org/wiki/Licence_MIT">license MIT</a>.</p>
		<p>Si vous le souhaitez, vous pouvez suivre l'avancée du développement du site ou y contribuer depuis Github. Si vous souhaiter vous investir d'une autre manière, merci de prendre contact avec notre équipe ou celle du projet auquel vous vous intéresser.</p>
	</div>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="https://cdn.matiboux.com/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="https://cdn.matiboux.com/js/bootstrap.min.js"></script>

</body>
</html>