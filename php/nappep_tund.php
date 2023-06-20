<?php
require_once "header.php";
?>

<main>
	<header>
		<link rel="stylesheet" href="styles/konspekt.css">
		<link rel="stylesheet" href="styles/pilli_grupp.css">
		<a href="kuidas_op.php" class="nupp"><</a>
		<br><br>
		<h2 class="h2_pages">Näppepillide tunnikonspekt</h2>
		<br>
	</header>
	
		<div class="tab">
			<button class="tablinks" onclick="openTab(event, 'ettevalmistus')" id="defaultOpen">Ettevalmistus</button>
			<button class="tablinks" onclick="openTab(event, 'sissejuhatus')">Sissejuhatus</button>
			<button class="tablinks" onclick="openTab(event, 'helid')">Helide tekitamine</button>
			<button class="tablinks" onclick="openTab(event, 'grupid')">Gruppideks jagunemine</button>
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
			  <p>45 min</p>
			</div>
			
			<div id="Eesmärk" class="subtabcontent">
			  <h4>Tunni eesmärk</h4>
			  <p>Õpilased on kogenud näppekeelpillist heli kättesaamist, õpilane teab, kuidas kõlavad erinevad näppekeelpillid</p>
			</div>
			
			<div id="Materjalid" class="subtabcontent">
			  <h4>Vajalikud materjalid</h4>
			  <p>mandoliin<br>
				oktavmandoliin<br>
				bandzo<br>
				ukuleele<br>
				väikekannel<br>
				kitarr<br>
				kummipaelad<br>
				nöör<br>
				tamiil</p>
				Õpetaja annab eelnevalt lastele lugemiseks üliõpilaste koostatud materjalid keelpillide kohta.</p>
			</div>
			
			<div id="Õpitulemused" class="subtabcontent">
			  <h4>Õpitulemused</h4>
			  <p><b>Kultuuri- ja väärtuspädevus</b> -  Läbi meie poolt kavandatava tunni saab õpilane teadmisi rahvakultuuri pillidest, mida vanasti kasutasid meie esivanemad muusika tegemisel.<br> 
				<b>Õpipädevus</b> - Õpilased tutvuvad kõige levinumate ja kättesaadavamate näppepillidega. Pillide paremaks mõistmiseks on õpilane eelnevalt tutvunud pillide lühiajalooga ja saanud teada huvitavaid fakte pillide kohta. Õpilased saavad katsetada erinevaid pille, pilli vastu huvi tekitamine.<br> 
				<b>Suhtluspädevus</b> - Õpilane oskab meelde jäänud infot jagada oma grupikaaslastega, kuulata ja arvesse võtta teiste arvamust, oodata oma järge pillidega tutvumisel ja nende mängimisel.<br>  
				<b>Ettevõtlikkuspädevus</b> - Õpilane proovib pillist saada kätte heli, proovib end väljendada läbi selle.</p>
			</div>
		</div>

		<div id="sissejuhatus" class="tabcontent">
			<h3>Sissejuhatus</h3>
			<h4>10 min</h4>
				<p>Tunni algul tutvustame ennast ja näitame mis pillid meil kaasas on. <br>
				Iga grupi liige nimetab oma pilli ja näitab, kuidas selle pilli keeled kõlavad. <br>
				Seejärel vaatame/kuulame lühikest videoklippi, kuidas iga pill kõlab meloodiat mängides.</p>
			<div class="video-container">
				<video controls width="600" poster="pics/posternapp.png">
						<source src="pics/algus.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
				</video>
			</div><br><br>
		</div>

		<div id="helid" class="tabcontent">
			<h3>Pilli meisterdamine</h3>
			<h4>10 min</h4>
				<p>Anname igale lapsele nööri/tamiili/kummipaela.<br> 
				Selgitame, et kahe punkti vahele asetatud nöör tekitab seda pingutades ja näpuga tõmmates heli - näitame ette.<br> 
				Laps asetab ühe nööri otsa hammaste vahele ja teise käega hoiab nöörist kinni, seda pingutades.<br>
				Nööri pikkusele vastavalt tekib kas madalam või kõrgem heli.<br>
				Lapsed võivad hoida ka üks ühest otsast ja teine teisest otsast nööril.<br> 
				Selgitame ja proovime läbi, kas nööride erinevad pikkused tekitavad erinevat heli.<br> 
				Uurime, kas lapsed kuulsid heli, milline heli oli - lapsed saavad proovida erineva heli kätte saamist.<br> 
				Kõiki materjale saab ka näppude vahel pingutada ning teine laps proovib seda näppides heli kätte saada.</p>
			<div class="video-container">
				<video controls width="600" poster="pics/posternapp.png">
						<source src="pics/pinistamine.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
				</video>
			</div><br><br>
		</div>

		<div id="grupid" class="tabcontent">
			<h3>Gruppideks jagunemine</h3>
			<h4>20 min</h4>
				<p>Laua peal on sedelid pillide nimetustega.<br> 
				Lapsed valivad etteantud sedelite pealt endale meelepärase pilli ja liiguvad valitud pilli gruppi. <br> 
				Grupid asuvad klassi erinevates nurkades - ühe pilli juures on üks üliõpilane.<br>
				Iga laps on selle ühe valitud pilli juures umbes 20 min (kuni lõpuni),<br>
				grupis on 4-5 last olenevalt palju lapsi kohal on.</p><br>  
				Juhendaja näitab pillihoidu, tutvustab pilli omadusi ning, kuidas on õige keelte näppimise võte.<br>  
				Grupis saavad lapsed kordamööda pillikeeltest ise heli tekitada.<br>  
				Samal ajal vestleme lastega, kes parasjagu pilli ei käsitle,<br>
				mis neil kodus loetust meelde jäi, mis tundus huvitav<br>
				ja uurime, mida nad soovivad veel teada.</p><br><br>
			<div class="video-container">
				<video controls width="600" poster="pics/posternapp.png">
						<source src="pics/grupid2.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
				</video>
			</div><br><br>
		</div>

		<div id="kokkuvote" class="tabcontent">
			<h3>Kokkuvõte</h3>
			<h4>5 min</h4>
			<p>Saame tagasiside lastelt, kuidas neile tund meeldis.<br> 
			Küsime lastelt, miks nad antud pilli valisid - miks tundus see pill huvitav.<br> 
			Küsime, millist pilli nad huvi korral õppida sooviksid.</p>
			<div class="video-container">
				<video controls width="600" poster="pics/posternapp.png">
						<source src="pics/lopp.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
				</video>
			</div><br><br>
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