<!doctype html>
<html>
<head>
<style>
	body {
	text-align: left;
// center;
	background-color: #FCE0D1;
	}	
body h1 {
	background-color: #69023A;
	color: #FFFFFF;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
}
	textarea {
	background-color: white;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	}
	
body h3 {
	background-color: #630134;
	color: #FFFFFF;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
body a {
	color: #69023A;
	background-color: #FFFFFF;
}
body {
	color: #620137;
}	
</style>
<meta charset="ISO-8859-1">
</head>

<?php

$r1 = ($_POST['r1']);
$r05 = ($_POST['r05']);
$r2 = ($_POST['r2']);
$r3 = date("Y/m/d");
$r4 = date("h:i:s");
$r5 = ($_POST['r5']);
$r6 = ($_POST['r6']);
$r7 = ($_POST['r7']);
$r8 = ($_POST['r8']);
$r9 = ($_POST['r9']);
$r10 = ($_POST['r10']);
$r11 = ($_POST['r11']);
$r12 = ($_POST['r12']);
$r13 = ($_POST['r13']);
$r14 = ($_POST['r14']);
$r15 = ($_POST['r15']);
$r16 = ($_POST['r16']);
$r17 = ($_POST['r17']);
$r18 = ($_POST['r18']);
$r19 = ($_POST['r19']);
$r20 = ($_POST['r20']);
$r21 = ($_POST['r21']);
$r22 = ($_POST['r22']);
$r23 = ($_POST['r23']);
$r24 = ($_POST['r24']);
$r25 = ($_POST['r25']);
$r26 = ($_POST['r26']);
$r27 = ($_POST['r27']);
$chr = chr(011);

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 		
	$file = 'kooprapo_1.txt'; 
	if (is_writable($file)) 
		{
		$nimi = "xls/".$r05.".xls";
		$data = $r1.$chr.$r05.$chr.$r2.$chr.$r3.$chr.$r4.$chr.$r5.$chr.$r6.$chr.$r7.$chr.$r8.$chr.$r9.$chr.$r10
		.$chr.$r11.$chr.$r12.$chr.$r13.$chr.$r14.$chr.$r15.$chr.$r16.$chr.$r17.$chr.$r18.$chr.$r19.$chr.$r20
		.$chr.$r21.$chr.$r22.$chr.$r23.$chr.$r24.$chr.$r25.$chr.$r26.$chr.$r27;
		echo $data;
		header("Pragma: no-cache");
		header("Expires: 0");
		file_put_contents($nimi, $data);
		
		// Ensin tyhj�t��n tiedot...
		file_put_contents( $file, "xls" . PHP_EOL); 
		
		// Laitetaan uudet TIEDOT xls:n j�lkeen alapuolelle
		$KirjausPVM = date("Y/m/d"). " kello:" . date("h:i:s") ;
		file_put_contents( $file, $KirjausPVM .  " KOULUTUS/OPPISOPIMUSAIHIO" . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, "KER�TYT TIEDOT:" .    " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r1'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r05'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r2'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $r3 . " " . PHP_EOL, FILE_APPEND); //Exceli� varten 
		file_put_contents( $file, $r4 . " " . PHP_EOL, FILE_APPEND); //Exceli� varten		
		file_put_contents( $file, $_POST['r5'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r6'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r7'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r8'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r9'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r10'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r11'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r12'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r13'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r14'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r15'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r16'] . " " . PHP_EOL, FILE_APPEND);
		file_put_contents( $file, $_POST['r17'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r18'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r19'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r20'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r21'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r22'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r23'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r24'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r25'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r26'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, $_POST['r27'] . " " . PHP_EOL, FILE_APPEND); 
		file_put_contents( $file, "*LOPPU* Voit vied� tiedot esim. Exceliin t�st�" . " " . PHP_EOL, FILE_APPEND);
		
		}
	else { print 'Suojausongelmia?';} 	
		print '****************************** <br>' ;
		print '...Tiedot ovat nyt tallessa...  <br>' ;
		print '****************************** <br><br>' ;

		print '<form action="" id="form1">';
		print '<h1> Voit tarkastaa tiedot ... </h1>' ;
		print '<br> Paina t�st� tarkastaaksesi tiedot  <button formtarget="_blank" type="submit" formaction="kooprapo_1.txt" > Tiedot n�kyviin! </button>';
		print '<br> (Voit palata takasin ja l�hett�� tiedot sen j�lkeen eteenp�in) ' ;
		print '<h1> Voit siirty� takaisin ja tallentaa uudet tiedot...</h1>' ;
		print '<br> Paina t�st� siirty�ksesi takaisin  <button formtarget="_parent" type="submit"  > Takaisin! </button>';
		print '</form>';
		print '<h1> Lopuksi voit l�hett�� tiedot haluamaasi s-postiin...</h1>' ;		
		print '<form action="SEND2018.php" method="post" id="sendme" >';
		print '<br> <br> <input name="spostia" type="email" maxlength="55" placeholder="esimerkiksi burot@bc.fi" size="25" > ';
		print '<input type="submit" name="submit" value="L�het� s-posti t�st�!" form="sendme" >';
		print '</form>';
		
		print '<br> *-*';
} 
?>
<h1> KOOP -perustietojen keruu <br> Koulutussopimusta/ oppisopimusta varten </h1>
<h3> DATANOMI: Ohjelmistotuotannon osaamisala </h3>
<br>
<form method="post" accept-charset="ISO-8859-1">
<h3> Opiskelijan tiedot </h3>
Opiskelijan sukunimi<br><textarea   maxlength="50" placeholder="Sukunimi" name="r05" rows="2" cols="85" ></textarea> <br>
Opiskelijan etunimi<br><textarea   maxlength="50" placeholder="Etunimi" name="r1" rows="2" cols="85" ></textarea> <br>
Ryhm�n tunnus<br><textarea maxlength="50" placeholder="Opiskelijaryhm�n tunnus" name="r2" rows="2" cols="85" ></textarea> <br>
<!-- 1PVM <br><textarea maxlength="6" placeholder="PVM" name="r3" rows="1" cols="85" ></textarea> <br> -->
<!-- 2PVM <br><textarea maxlength="6" placeholder="PVM" name="r4" rows="1" cols="85" ></textarea> <br> -->
<h3> Opiskelijan osaamisen kehitt�minen tutkinnon osittain</h3>
T�h�n voidaan merkit� alustavia ty�teht�vi� joissa opiskelija harjaantuu...<br>
Kenttiin voidaan laittaa my�s lyhyesti merkint� esimerkiksi Kyll�/Ei/Suoritettu. <br>
<a href="https://eperusteet.opintopolku.fi/#/fi/esitys/3328283/reformi/tutkinnonosat" target="_blank" >Lis�tietoja: OPH-2699-2017</a> 
<br><br>
Palveluteht�viss� toimiminen - N�ytt�, 25 osp
<br><textarea maxlength="250" placeholder="Kyll�/Ei" name="r5" rows="2" cols="85" ></textarea> <br>
J�rjestelm�n hankinta ja k�ytt��notto - N�ytt�, 20 osp
 <br><textarea maxlength="250" placeholder="Kyll�/Ei" name="r6" rows="2" cols="85" ></textarea> <br>
Ohjelmiston prototyypin toteuttaminen - N�ytt�, 30 osp
<br><textarea maxlength="250" placeholder="Kyll�/Ei" name="r7" rows="2" cols="85" ></textarea> <br>
Ohjelmiston tuotantoversion toteuttaminen - N�ytt�, 30 osp
<br><textarea maxlength="250" placeholder="Kyll�/Ei" name="r8" rows="2" cols="85" ></textarea> <br>
1. valinnainen tutkinnon osa N�ytt�, 15 osp
<br><textarea maxlength="250" placeholder="Mik�? esim. Multimediatuotanto" name="r9" rows="2" cols="85" ></textarea> <br>
2. valinnainen tutkinnon osa N�ytt�, 15 osp
<br><textarea maxlength="250" placeholder="Mik�? esim. Testaus" name="r10" rows="2" cols="85" ></textarea> <br>
MUUTIETO <br><textarea maxlength="250" placeholder="Lis�tietoja: esimerkiksi osallistuminen opetukseen ty�skentelyjakson aikana" name="r11" rows="2" cols="85" ></textarea> <br>
<h3> Opiskelijan ty�skentelyn aloitus- ja lopetusp�iv�m��r�t </h3>
SOPIMUS ALKAA <br><textarea maxlength="50" placeholder="Aloitus pvm xx.xx.xxxx" name="r12" rows="2" cols="85" ></textarea> <br>
SOPIMUS P��TTYY <br><textarea maxlength="50" placeholder="Lopetus pvm xx.xx.xxxx" name="r13" rows="2" cols="85" ></textarea> <br>
SOPIMUKSEN TYYPPI KO=koulutussopimus (palkaton) / OP=oppisopimus (palkallinen) <br><textarea maxlength="50" placeholder="KO=koulutus / OP=oppisopimus " name="r14" rows="2" cols="85" ></textarea> <br>
Mahdollisia etuja <br><textarea maxlength="50" placeholder="Esim. tarjotaanko lounas? Kyll�/Ei" name="r15" rows="2" cols="85" ></textarea> <br>
Ty�tunnit / vko <br><textarea maxlength="50" placeholder="Ty�tunnit min-max 30-40 h/vko" name="r16" rows="2" cols="85" ></textarea> <br>
<h3> Ty�paikan tiedot </h3>
Ty�paikan nimi   
<br><textarea    maxlength="50" placeholder="Ty�paikan nimi" name="r17" rows="2" cols="85" ></textarea> <br>
Y-tunnus
<br><textarea    maxlength="50" placeholder="Y-tunnus" name="r18" rows="2" cols="85" ></textarea> <br>
Ty�paikan osoite  
<br><textarea maxlength="50" placeholder="Osoite" name="r19" rows="2" cols="85" ></textarea> <br>
Ty�paikan edustaja(ja sopimuksen allekirjoittaja)  
<br><textarea   maxlength="50" placeholder="Ty�paikan edustajan etunimi sukunimi" name="r20" rows="2" cols="85" ></textarea> <br>
Puhelin   
<br><textarea   maxlength="50" placeholder="puhelin" name="r21" rows="2" cols="85" ></textarea> <br>
S�hk�posti    
<br><input   type="email" maxlength="150" placeholder="s�hk�posti" name="r22" size="84" rows="2" cols="84" ><br>
K�yntiosoite  
<br><textarea maxlength="50" placeholder="k�yntiosoite jos eri kuin yll�" name="r23" rows="2" cols="85" ></textarea> <br>
Ty�paikkaohjaaja 
<br><textarea maxlength="50" placeholder="Ty�paikkaohjaaja jos eri kuin edell�" name="r24" rows="2" cols="85" ></textarea> <br>
Puhelin 
<br><textarea maxlength="50" placeholder="puhelin" name="r25" rows="2" cols="85" ></textarea> <br>
S�hk�posti  
<br><input type="email" maxlength="50" placeholder="s�hk�posti" name="r26" size="84"  ><br>
MUUTA    
<br><textarea maxlength="50" placeholder="...lis�tietoja..." name="r27" rows="2" cols="85" ></textarea> <br>
<br>
JATKA PAINAMALLA T�ST�! <input type="submit" name="submit" value="PAINA" />


</html>

