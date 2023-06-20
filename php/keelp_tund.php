<?php
require_once "header.php";
?>
	
<main>
	<link rel="stylesheet" href="styles/konspekt.css">
	<link rel="stylesheet" href="styles/pilli_grupp.css">
	<a href="kuidas_op.php" class="nupp"><</a>
	
	<header>
		<br><br>
		<h2 class="h2_pages">Keelpillide tunnikonspekt</h2>
		<br>
	</header>
	
		<div class="tab">
			<button class="tablinks" onclick="openTab(event, 'ettevalmistus')" id="defaultOpen">Ettevalmistus</button>
			<button class="tablinks" onclick="openTab(event, 'sissejuhatus')">Sissejuhatus</button>
			<button class="tablinks" onclick="openTab(event, 'helid')">Helide uurimine</button>
			<button class="tablinks" onclick="openTab(event, 'pillid')">Pillide katsumine</button>
			<button class="tablinks" onclick="openTab(event, 'kokkuvote')">Kokkuvõte</button>
		</div>
		
		<div id="ettevalmistus" class="tabcontent">
			<h2>Ettevalmistus</h2>
			<br>
			<div class="subcategories">
				<button class="alam" onclick="toggleButton(this)">Autorid</button>
				<button class="alam" onclick="toggleButton(this)">Kestus</button>
				<button class="alam" onclick="toggleButton(this)">Eesmärk</button>
				<button class="alam" onclick="toggleButton(this)">Materjalid</button>
			</div>
			<br>
			
			<div id="Autorid" class="subtabcontent">
				<h4>Autorid</h4>
				<p>Katariina Mägi, Gertrud Martin, Anette Põlder, Katariina Viik, Agnes Värk</p>
			</div>
			
			<div id="Kestus" class="subtabcontent">
				<h4>Kestus</h4>
				<p>50 min</p>
			</div>
			
			<div id="Eesmärk" class="subtabcontent">
				<h4>Tunni eesmärk</h4>
				<p>Anda õpilastele nelja erineva instrumendi pillikogemus ning uurida õpilastega koos nende ainulaadseid helisid ja omadusi.</p>
			</div>
			
			<div id="Materjalid" class="subtabcontent">
				<h4>Vajalikud materjalid</h4>
				<p>väikekannel
				<br>viiul
				<br>harf
				<br>hiiu kannel
				<br>tahvel ja markerid (koolis kohapeal)
				<br>õpilaste tagasiside tööleht</p>
			</div>
		</div>

		<div id="sissejuhatus" class="tabcontent">
			<h3>Sissejuhatus</h3>
			<h4>5 min</h4>
			<p>Tutvustamine, mis tunnis toimuma hakkab
			<br>Õpilastelt küsitakse kas nad on varem mõnda muusikainstrumenti mänginud.</p>
		</div>

		<div id="helid" class="tabcontent">
			<h3>Helide uurimine</h3>
			<h4>5 min</h4>
			<p> Näitame klassile visuaalset igat instrumenti.<br>
			Esitame igal instrumendil lühikese meloodia “Kus on minu koduke”.<br>
			Palume õpilastel kuulata tähelepanelikult erinevaid helisid, mida nad iga pilli kohta kuulevad.<br>
			Kirjutame tahvlile pillide nimed<br>
			Palume õpilastel kirjeldada kuuldavaid helisid,<br> 
			kasutades selliseid kirjeldavaid sõnu nagu "pehme", "karm", "kõrge heli" või "madal".</p><br><br>
			<div class="video-container">
				<video controls width="600" poster="pics/posterkeel.png">
						<source src="pics/ettemang.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
				</video>
			</div><br><br>
		</div>

		<div id="pillid" class="tabcontent">
			<h3>Pillide katsumine</h3>
			<h4>36 min (9 min pilli kohta)</h4>
			<br>
			<div class="subcategories">
				<button class="alam" onclick="toggleButton(this)">Tööleht</button>
				<button class="alam" onclick="toggleButton(this)">Grupid</button>
				<button class="alam" onclick="toggleButton(this)">Küsimused</button>
			</div>
			
			<br>
			<div id="Tööleht" class="subtabcontent">
				<h3>Tööleht</h3>
				<p>Anname igale õpilasele töölehe.<br>
				Töölehele on vaja kirjutada midagi(huvitav fakt vms),<br> 
				mis jäi meelde iga pilli kohta.<br>
				Tööleht täidetakse samal ajal kui ollakse pilli juures.<br>
				Kui õpilane ei soovi pillidega tutvuda saab ta värvida pilte rahvapillidest.</p>
			</div>
			
			<div id="Grupid" class="subtabcontent">
				<h3>Grupid</h3>
				<p>Jagame õpilased nelja erinevasse gruppi pilli piltide alusel (viiulid, hiiu kannel, väikekannel, harf).<br>
			  	Iga õpilane saab oma grupiga käia läbi kõik pillid.<br>
				Ühe pilli juures on tervel grupil aega umbes 9 minutit.<br> 
				Pillide juures saavad nad kuulata lühidalt pilli ajaloo kohta, huvitavaid fakte ning mängida/katsuda pilli.<br>
				Laps saab pilli keeli tõmmata nii poognaga kui ka ilma, pilli hoida ja heli tekitada.<br>
				Eesmärgiks ei ole kindla meloodia saavutamine vaid, et õpilane näeks/kuuleks, kuidas erinevatest pillidest heli välja tuleb ja saaks tunnetada pilli.<br>
				Korrigeerime õpilast, kui ta tõmbab keeli valesti, sest eesmärgiks on, et ta ka ise tekitab korrektse kõla.<br>
				Kui üks hoiab-tutvub-proovib-mängib pilli, siis teised kuulavad samal ajal huvitavaid fakte selle rahvapilli ajaloost.</p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterkeel.png">
							<source src="pics/grupid.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
				</div><br><br>
			</div>
			
			<div id="Küsimused" class="subtabcontent">
				<h3>Suunavad küsimused</h3>
				<p>Kuidas seda pilli mängitakse? <br>
				Milline heli tekib? <br>
				Kas seda saaks ka teistmoodi mängida?<br>
				Kuidas see pill/mängustiil erineb teistest pillidest, mida sa täna näinud/mänginud oled?</p>
			</div>
		</div>

		<div id="kokkuvote" class="tabcontent">
			<h3>Kokkuvõte</h3>
			<h4>5 min</h4>
				<p>Õpilastele anname tagasiside lehed, kus uurime,<br>
				kuidas neile läbiviidud tund meeldis ja kas nad olid varem neid pille mänginud.<br>
				Julgustame õpilasi jätkuvalt tutvuma muusika ja muusikariistadega.<br>
				Edasijõudnutele või täiendus tegevusena palume õpilastel uurida iga pilli ajalugu ja kultuurilist tähtsust.</p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterkeel.png">
							<source src="pics/lopetus.mp4" type="video/mp4">
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
	<br><br><br><br><br><br><br><br><br><br>
</main>
</body>
</html>