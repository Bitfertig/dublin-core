<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dublin Core Meta-Generator</title>
	<style>
	a:link { color: #717171; text-decoration:none; }
	a:visited { color:#717171; text-decoration:none; }
	a:hover { color: #717171; text-decoration:none;background-color:#F0F0F0; }
	a:active { color:#717171; text-decoration:none; }
	a:focus { color:#717171; text-decoration:none;background-color:#F0F0F0; }
	.bgcolor {background-color:#F0F0F0;}
	table {text-align:left;}
	img {border:0px;}
	</style>
</head>
<body>

<div style="text-align:center;">

<div style="width:800px;margin:30px 10px 30px 10px;font-weight:bolder;font-size:x-large;">Meta-Angaben nach Dublin-Core</div>

<div style="width:800px;text-align:justify;margin:0px 10px 30px 10px;font-size:larger;">
Eine Gruppe von Experten hat unter dem Namen "Dublin Core" die vom W3C begrüßt wurde ein System von Meta-Angaben entwickelt. 
In ihnen können die wichtigsten Angaben zu einem Dokument angegeben. 
Diese Angaben werden zur Zeit noch von wenigen Suchmaschinen erkannt, aber dafür von den bekanntesten Suchmaschinen. 
Sofern Sie diese Dublin Core Meta Angaben in ihrem Dokument haben, führt es zu recht guten Suchtreffern bei den entsprechenden Suchmaschinen.
(<a href="http://dublincore.org/">Dublin Core Metadata Initiative</a>)
</div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?show=true" method="post">
<table style="width:800px;border:1px solid #F0F0F0;">
	<tr class="bgcolor">
		<td style="width:100px;"><strong>Title</strong> (DC.Title)</td>
		<td><input type="text" name="dc-title" value="<?php echo htmlspecialchars($_POST['dc-title']); ?>" /></td>
		<td>Titel des Dokumentes oder der Seite. (Ähnlich wie der &lt;title&gt;-Tag.)</td>
	</tr>
	<tr>
		<td><strong>Urheber</strong> (DC.Creator)</td>
		<td><input type="text" name="dc-creator" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-creator'])); ?>" /></td>
		<td>Geben Sie hier an, wer der geistige Urheber der Seite ist.</td>
	</tr>
	<tr class="bgcolor">
		<td><strong>Thema</strong> (DC.Subject)</td>
		<td><input type="text" name="dc-subject" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-subject'])); ?>" /></td>
		<td>Das Thema das auf der Seite angesprochen wird.</td>
	</tr>
	<tr>
		<td><strong>Beschreibung</strong> (DC.Description)</td>
		<td><input type="text" name="dc-description" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-description'])); ?>" /></td>
		<td>Kurze Beschreibung des Inhaltes.</td>
	</tr>
	<tr class="bgcolor">
		<td><strong>Veröffentlicher</strong> (DC.Publisher)</td>
		<td><input type="text" name="dc-publisher" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-publisher'])); ?>" /></td>
		<td>Hier kann angegeben werden, wer für die Seite verantwortlich ist. Zum Beispiel der Autor, ein Verlag oder ein verstorbener Autor.</td>
	</tr>
	<tr>
		<td><strong>Beitragende</strong> (DC.Contribuor)</td>
		<td><input type="text" name="dc-contribuor" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-contributor'])); ?>" /></td>
		<td>Hier können Co-Autoren angegeben werden. Zum Beispiel Grafiker, Musiker oder Übersetzer. Mehrere Angaben sollten mit Kommata getrennt werden.</td>
	</tr>
	<tr class="bgcolor">
		<td><strong>Datum</strong> (DC.Date)</td>
		<td><input type="text" name="dc-date" value="<?php if(!isset($_POST['dc-date'])){echo gmdate("Y-m-d", time());}else{echo htmlspecialchars(stripslashes($_POST['dc-date']));} ?>" /></td>
		<td>Angabe des Publizierungsdatum. (Format: 2003-12-29)</td>
	</tr>
	<tr>
		<td><strong>Dokumenttyp</strong> (DC.Type)</td>
		<td>
			<select name="dc-type">
				<option value="">Textsorte auswählen...</option>
				<option value="">-----------------------------------</option>
				<option value="Collection">Verzeichnis mit Verweisen zu Unterseiten</option>
				<option value="Dataset">Datensatzartige Informationen (z.B. Tabellen)</option>
				<option value="Event">Zeitliches Ereignis (Ausstellung, Hochzeit)</option>
				<option value="Image">Primär grafische Darstellungwn (Bild, Applet)</option>
				<option value="Service">Dienstleistung</option>
				<option value="Software">Software</option>
				<option value="Sound">Primär akustischer Inhalt</option>
				<option value="Text">Primär textorientierter Inhalt</option>
			</select>
		</td>
		<td>Angabe der Textsorte dem sich der Inhalt zuordnen lässt.</td>
	</tr>
	<tr class="bgcolor">
		<td><strong>Medientyp</strong> (DC.Format)</td>
		<td><input type="text" name="dc-format" value="<?php if(isset($_POST['dc-format'])){echo htmlspecialchars(stripslashes($_POST['dc-format']));}else{echo "text/html";} ?>" /></td>
		<td>Hier wird der Medientyp bestimmen. Für HTML steht text/html. Weitere finden Sie unter <a href="http://selfhtml.teamone.de/diverses/mimetypen.htm">SelfHTML</a> </td>
	</tr>
	<tr>
		<td><strong>Eindeutiger Bezeichner</strong> (DC.Identifier)</td>
		<td><input type="text" name="dc-identifier" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-identifier'])); ?>" /></td>
		<td>Hier kann eine eindeutige Nummer oder Bezugsadresse für die Datei angegeben werden. Bei Webseiten ist das z.B. die original URI.</td>
	</tr>
	<tr class="bgcolor">
		<td><strong>Quelle</strong> (DC.Source)</td>
		<td><input type="text" name="dc-source" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-source'])); ?>" /></td>
		<td>Hier kann z.B. eine Quelle angegeben werden, aus der man vielleicht einige Textabschnitte übernommen hat.</td>
	</tr>
	<tr>
		<td><strong>Landessprache</strong> (DC.Language)</td>
		<td><input type="text" name="dc-language" value="<?php if(!isset($_POST['dc-language'])){echo "de";}else{echo htmlspecialchars(stripslashes($_POST['dc-language']));} ?>" /></td>
		<td>Hier kann die Landessprache angegeben werden, in der die Datei verfasst wurde. (<a href="http://selfhtml.teamone.de/diverses/sprachenkuerzel.htm">Sprachenkürzel</a>)</td>
	</tr>
	<tr class="bgcolor">
		<td><strong>Bezug</strong> (DC.Relation)</td>
		<td><input type="text" name="dc-relation" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-relation'])); ?>" /></td>
		<td>Hier kann eine Beziehung zwischen der aktuellen Datei und einem zugehörigen Editionsrojekt bestehen, z.B. </td>
	</tr>
	<tr>
		<td><strong>Erfassung</strong> (DC.Coverage)</td>
		<td><input type="text" name="dc-coverage" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-coverage'])); ?>" /></td>
		<td>Hier kann geografischer Bezugspunkt angegeben werden z.B. Ort, Längen-/Breitengrad, Region oder ein zeitlicher Bezugspunkt wie ein Datum oder ein Zeitalter.</td>
	</tr>
	<tr class="bgcolor">
		<td><strong>Copyright</strong> (DC.Rights)</td>
		<td><input type="text" name="dc-rights" value="<?php echo htmlspecialchars(stripslashes($_POST['dc-rights'])); ?>" /></td>
		<td>Hier kann eine Angabe zum Copyright gemacht werden z.B. '&copy; copyright <?php echo date("Y"); ?> - devone.de'</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align:right;"><input type="submit" value="DC Generieren" /></td>
	</tr>
</table>
</form>



<?php

if(isset($_GET['show']) && $_GET['show']=="true")
{
	echo "<div style=\"text-align:left;width:800px;background-color:#F0F0F0;margin:30px 10px 30px 10px;\">";
	echo "<strong><div style=\"border-bottom:1px solid black;border-top:1px solid black;\">Dublin Core Meta Tags:</div></strong><br>";


	if(!empty($_POST['dc-title'])) { echo "&lt;meta name=\"DC.Title\" content=\"". htmlspecialchars(stripslashes($_POST['dc-title'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-creator'])) { echo "&lt;meta name=\"DC.Creator\" content=\"". htmlspecialchars(stripslashes($_POST['dc-creator'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-subject'])) { echo "&lt;meta name=\"DC.Subject\" content=\"". htmlspecialchars(stripslashes($_POST['dc-subject'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-description'])) { echo "&lt;meta name=\"DC.Description\" content=\"". htmlspecialchars(stripslashes($_POST['dc-description'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-publisher'])) { echo "&lt;meta name=\"DC.Publisher\" content=\"". htmlspecialchars(stripslashes($_POST['dc-publisher'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-contributor'])) { echo "&lt;meta name=\"DC.Contibutor\" content=\"". htmlspecialchars(stripslashes($_POST['dc-contributor'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-date'])) { echo "&lt;meta name=\"DC.Date\" content=\"". htmlspecialchars(stripslashes($_POST['dc-date'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-type'])) { echo "&lt;meta name=\"DC.Type\" content=\"". htmlspecialchars(stripslashes($_POST['dc-type'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-format'])) { echo "&lt;meta name=\"DC.Format\" content=\"". htmlspecialchars(stripslashes($_POST['dc-format'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-identifier'])) { echo "&lt;meta name=\"DC.Identifier\" content=\"". htmlspecialchars(stripslashes($_POST['dc-identifier'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-source'])) { echo "&lt;meta name=\"DC.Source\" content=\"". htmlspecialchars($_POST['dc-source']) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-language'])) { echo "&lt;meta name=\"DC.Language\" content=\"". htmlspecialchars(stripslashes($_POST['dc-language'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-relation'])) { echo "&lt;meta name=\"DC.Relation\" content=\"". htmlspecialchars(stripslashes($_POST['dc-relation'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-coverage'])) { echo "&lt;meta name=\"DC.Coverage\" content=\"". htmlspecialchars(stripslashes($_POST['dc-coverage'])) ."\" /&gt;<br />\r\n"; }
	if(!empty($_POST['dc-rights'])) { echo "&lt;meta name=\"DC.Rights\" content=\"". htmlspecialchars(stripslashes(htmlspecialchars(stripslashes($_POST['dc-rights'])))) ."\" /&gt;<br />\r\n"; }

	echo "<br /></div>";
}

?>

<!-- Quelle: http://selfhtml.teamone.de/html/kopfdaten/meta.htm -->
<!-- Erstellungsdatum des Dublin Core Generators: 15.08.2004 -->


</div>

</body>
</html>