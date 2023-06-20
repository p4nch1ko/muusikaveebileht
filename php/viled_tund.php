<?php
require_once "header.php";
?>
<main>
	<header>
		<link rel="stylesheet" href="styles/konspekt.css">
		<link rel="stylesheet" href="styles/pilli_grupp.css">
		<a href="kuidas_op.php" class="nupp"><</a>
		<br><br>
		<h2 class="h2_pages">Vilede tunnikonspekt</h2>
		<br>
	</header>
	
		<div class="tab">
			<button class="tablinks" onclick="openTab(event, 'ettevalmistus')" id="defaultOpen">Ettevalmistus</button>
			<button class="tablinks" onclick="openTab(event, 'sissejuhatus')">Sissejuhatus</button>
			<button class="tablinks" onclick="openTab(event, 'tutvustus')">Pillide tutvustamine</button>
			<button class="tablinks" onclick="openTab(event, 'kokkuvote')">Kokkuvõte</button>
		</div>
		
		<div id="ettevalmistus" class="tabcontent">
			<h3>Ettevalmistus</h3>
			<br>
			<div class="subcategories">
				<button class="alam" onclick="toggleButton(this)">Autorid</button>
				<button class="alam" onclick="toggleButton(this)">Kestus</button>
				<button class="alam" onclick="toggleButton(this)">Eesmärk</button>
				<button class="alam" onclick="toggleButton(this)">Materjalid</button>
				<button class="alam" onclick="toggleButton(this)">Õpitulemused</button>
			</div>
			<br>
			
			<div id="Autorid" class="subtabcontent">
			  <h4>Autorid</h4>
			  <p>Heili Heinaste, Pirgit Paalo-Padjus, Maarika Laht, Liis Lehtsaar, Irina Brusko</p>
			</div>
			
			<div id="Kestus" class="subtabcontent">
			  <h4>Kestus</h4>
			  <p>50 min</p>
			</div>
			
			<div id="Eesmärk" class="subtabcontent">
			  <h4>Tunni eesmärk</h4>
			  <p>Õpilased on tutvunud Eesti traditsiooniliste vilede ja  vilepillidega, <br>
				oskavad neid nimetada ja on saanud lühiülevaate nende omadustest ja ajaloost.<br>
				Õpilased teavad, kuidas nimetatud instrumendid kõlavad ning on proovinud ise nendega heli tekitada. </p>
			</div>
			
			<div id="Materjalid" class="subtabcontent">
			  <h4>Vajalikud materjalid</h4>
			  <p>viled ja vilepillid<br>
			  pillimaterjal: (pilliroog, kuivanud putked)<br>
			  tikksaed<br>
			  lauakatted<br>
			  liivapaber<br>
			  tahvel ja tahvlimarker<br>
			  mõõdulint (min. 3 m)<br>
			  desinfitseerimislapid</p>
			</div>
			
			<div id="Õpitulemused" class="subtabcontent">
			  <h4>Õpitulemused</h4>
			  <p>Õpilane teab nimetada Eesti traditsioonilisi vilesid ja vilepille.<br>
				Õpilane on vilesid ja vilepille näinud, teab kuidas need kõlavad ja on tekitanud nendest ise heli.<br>
				Õpilane on tutvunud Eesti vilede ja vilepillide omaduste ja lühiajalooga.</p>
			</div>
		</div>

		<div id="sissejuhatus" class="tabcontent">
			<h3>Sissejuhatus</h3>
			<h4>5 min</h4>
			<p>Õpetaja kirjutab tahvlile vilede ja vilepillide nimetused, mida tunnis tutvustatakse.<br>
			Õpetaja küsib õpilastelt vilede ja vilepillide erinevuse kohta.<br>
			Õpilased arvavad, mis materjalidest vilesid ja vilepille meisterdatakse ja õpetaja kirjutab pakutud vastused tahvlile
			<br></p>
		   <div class="video-container">
				<video controls width="700" poster="pics/posterviled.png">
						<source src="pics/tutvustus.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
				</video>
		  </div>
		</div>

		<div id="tutvustus" class="tabcontent">
			<h3>Pillide tutvustamine</h3>
			<br>
			<div class="subcategories">
				<button class="alam" onclick="toggleButton(this)">Plokkflööt</button>
				<button class="alam" onclick="toggleButton(this)">Roopill</button>
				<button class="alam" onclick="toggleButton(this)">Putkevile</button>
				<button class="alam" onclick="toggleButton(this)">Grupid</button>
			</div>
			
			<br>
			<div id="Plokkflööt" class="subtabcontent">
			  <h3>Plokkflööt</h3>
			  <h4>10 min</h4>
			  <p>Õpilaste tähelepanu juhitakse sellele, et on olemas erineva suurusega plokkflööte.<br>
			  	Õpilastele räägitakse pilli suuruse ja helikõrguse vahelisest seosest.<br><br>
				<b>Arvamismäng:</b><br> 
				Õpilased proovivad arvata, kui pikk on kõige pikem plokkflööt (3 meetrit).<br> 
				Üks õpilane hoiab kinni mõõdulindi otsast ja õpetaja taganeb aeglaselt mõõdulinti lahti tõmmates.<br> 
				Õpilased arvavad plokkflöödi pikkust, öeldes iga kord “STOP”,<br>
				kui nende meelest on mõõdulindiga õige pikkus saavutatud.<br></p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterviled.png">
							<source src="pics/plokkfloodid.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
		  		</div>
			</div>
			
			<div id="Roopill" class="subtabcontent">
			  <h3>Roopill</h3>
			  <h4>5 min</h4>
			  <p>Roopilli teoreetiline lühitutvustus.<br>
				Õpilastele näidatakse, milline on pilliroog, millest roopilli meisterdatakse.<br>
				Õpilased saavad roopillid ja õpivad seda õpetaja juhendamisel puhuma.<br>
				Roopilli mängimine.</p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterviled.png">
							<source src="pics/roopill.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
		  		</div>
			</div>

			<div id="Putkevile" class="subtabcontent">
			  <h3>Putkevile</h3>
			  <h4>5 min</h4>
			  <p>Putkevile teoreetiline lühitutvustus.<br> 
				Õpilastele näidatakse, milline on putk, millest pilli meisterdatakse.</p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterviled.png">
							<source src="pics/putkevile_tutvustus.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
		  		</div>
			</div>
			
			<div id="Grupid" class="subtabcontent">
			  <h3>Viled</h3>
			  <h4>20 min</h4>
			  <p><b>Õpilased jagunevad 4 gruppi</b><br><br>  
				<b>1. grupp</b> meisterdab putkevile<br><br>
				Iga õpilane saeb pillimaterjalist endale vilepilli.<br>
				Õpilased puhuvad enda putkevilet ja kuulavad selle helikõrgust <br>
				ning järjestavad ennast seisma putkevilede helikõrguste järgi - madalamast kõrgemale.<br><br>
				<div class="video-container">
					<video controls width="600" poster="pics/posterviled.png">
							<source src="pics/putkevile.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
		  		</div><br><br>
				<b>2. grupp</b> tutvub saviviledega<br><br> 
				<div class="video-container">
					<video controls width="600" poster="pics/posterviled.png">
							<source src="pics/savivile.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
		  		</div><br><br>
				<b>3. grupp</b> tutvub pikkvilega<br><br>
				<div class="video-container">
					<video controls width="600" poster="pics/posterviled.png">
							<source src="pics/pikkvile.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
		  		</div><br><br> 
				<b>4. grupp</b> puhub plokkflööti.<br><br>
				<div class="video-container">
					<video controls width="600" poster="pics/posterviled.png">
							<source src="pics/plokkfloot.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
		  		</div><br>
				*Erinevad pilligrupid võiksid soovitavalt klassis asuda üksteisest võimalikult kaugel.<br>
				Õpilased liiguvad grupina ühe tegevuse juurest teise.</p>	
			</div>
		</div>

		<div id="kokkuvote" class="tabcontent">
			<h3>Kokkuvõte</h3>
			<h4>5 min</h4>
			<p>Suuline tagasiside.<br><br>
				<b>Küsimused:</b><br>
				Mis sul õnnestus tänases tunnis eriti hästi?<br>
				Mis sulle tänasest tunnist kõige enam meelde jäi?<br>
				Millisest pillist oli keeruline häält kätte saada?</p>
		</div>
	<script>
		function openTab(evt, tabName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		
		function openSubcategory(evt, subcategoryName) {
			var i, subtabcontent, subtablinks;
			subtabcontent = document.getElementsByClassName("subtabcontent");
			for (i = 0; i < subtabcontent.length; i++) {
			subtabcontent[i].style.display = "none";
			}
			subtablinks = document.getElementsByClassName("subtablinks");
			for (i = 0; i < subtablinks.length; i++) {
			subtablinks[i].className = subtablinks[i].className.replace(" active", "");
			}
			document.getElementById(subcategoryName).style.display = "block";
			evt.currentTarget.className += " active";
		}
		
		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		
		
		// alam
		
		function toggleButton(button) {
		var subtabcontent = document.getElementsByClassName("subtabcontent");
		for (var i = 0; i < subtabcontent.length; i++) {
			subtabcontent[i].style.display = "none";
		}

		var buttons = document.getElementsByClassName("alam");
		for (var i = 0; i < buttons.length; i++) {
			buttons[i].classList.remove("active");
		}

		var subtabName = button.textContent.replace(/\s/g, ""); // Remove whitespace from button text

		var subtab = document.getElementById(subtabName);
		subtab.style.display = subtab.style.display === "block" ? "none" : "block";

		button.classList.toggle("active");
	}	
	</script>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	<br><br><br><br><br><br>
	</main>
</body>
</html>