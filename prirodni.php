<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<meta charset="UTF-8">
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">    
	/* javascript za prikaz dugmeta - povratak na vrh - u donjem desnom uglu */
	$(document).ready(function() {
		$(window).on("scroll", function() {
			var odVrha = $(window).scrollTop();
			$("#topLink").toggleClass("down", (odVrha > 300));
		});
	});
		
	</script>
</head>
<h2>PRIRODNI IZVORI</h2>
<p>Daleko najveći deo radijacije koju svetsko stanovništvo prima potiče od prirodnih izvora. Izlaganje
najvećem delu ove radijacije je neizbežno. Tokom čitave istorije naše planete radijacija dopire do njene
površine iz kosmosa i iz radioaktivnih materijala koji se nalaze u Zemljinoj kori. Ljudi bivaju ozračeni na
dva načina. Radioaktivne supstance mogu da ostanu izvan tela i da ga ozračuju spolja, »eksterno«, ili
pak mogu da se udišu sa vazduhom i gutaju sa hranom i vodom i da tako ozračuju ljude iznutra,
»interno«. Ali, mada svi stanovnici Zemlje primaju prirodnu radijaciju, neki apsorbuju mnogo veće
količine nego drugi. To može da zavisi od toga gde ko živi. Doze su na nekim mestima sa naročito
radioaktivnim stenama ili tlom, znatno više od proseka; na drugim mestima su pak znatno niže. Kolke će
doze neko primiti, može da zavisi od njegovog životnog stila. Korišćenje naročitog građevinskog
materijala za kuće, kuvanje na plinu, otvoreno ognjište na kome sagoreva ugalj, izolacija kuće, pa čak i
avionski letovi – sve to povećava prirodno ozračavanje. </p>

