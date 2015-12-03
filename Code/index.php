<?php
    session_start ();
    require_once 'config.php';
    global $GLOBALS;
    require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Eine HTML Testseite">
		<meta name="author" content="Annika, Christopher und Jan">

		<title>Hier entsteht...</title>

		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body>
		<header>
			<table>
				<tr><td>Home</td><td>Logout</td><td>Hallo User</td></tr>
			</table>
		</header>
		<main>
			<h1>Hier ist eine Überschrift</h1>
			<table>
				<tr><td><label for=name>Name:</label></td><td>User</td></tr>
				<tr><td><label for=email>E-Mail::</label></td><td><input type=email id=email name=email></td></tr>
				<tr><td><label for=pwNeu1>Passwort ändern:</label></td><td><input type=password id=pwNeu1 name=pwNeu1></td></tr>
				<tr><td><label for=pwNeu2>Passwort wiederholen:</label></td><td><input type=password id=pwNeu2 name=pwNeu2></td></tr>
				<tr><td><label for=geb>Geburtstag:</label></td><td><input type=date id=geb name=geb></td></tr>
			</table>
			<input type=submit name=Aenderungen id=Aenderungen value="Änderungen speichern">
			<br>
			<input type=button name=loeschen id=loeschen value="Account löschen">
		</main>
		<aside>
			<ul>
				<li>Mein Profil</li>
				<li>Meine Medien</li>
				<li>Medien hinzufügen</li>
				<li>Meine Freunde</li>
			</ul>
		</aside>
		<footer>
			IMPRESSUM
		</footer>
	</body>
</html>

<!--
=== Feedback Alpers, Dez 3 ===

Bitte integrieren Sie PHP-Teile direkt in die HTML-Dokumente. Die Speicherung der Datei
index.html unter dem Namen index.php macht so nicht recht Sinn, denn dann ist beispielsweise
nicht klar, welche der beiden die Einstiegsseite in die Anwendung ist.

Und wie schon in functions.php geschrieben: Wichtig ist vor allem, dass Sie umgehend beginnen die 
Funktionalitäten der HTML-Container zu realisieren. Denn das ist die Hauptaufgabe des PHP'lers im Team.

=== Feedback Alpers, Ende ===