<?php
require_once "header.php";
?>
	
<main>
	<header>
		<link rel="stylesheet" href="styles/konspekt.css">
		<link rel="stylesheet" href="styles/pilli_grupp.css">
		<a href="kuidas_op.php" class="nupp"><</a>
			<br><br>
		<h2 class="h2_pages">Löökpillide tunnikonspekt</h2>
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
				<button class="alam" onclick="toggleButton(this)">Materjalid</button>
				<button class="alam" onclick="toggleButton(this)">Õpitulemused</button>
			</div>
			<br>
			
			<div id="Autorid" class="subtabcontent">
				<h4>Autorid</h4>
				<p>Sianda Siiman, Laura Peet, Laura Olek, Helena Siipan</p>
			</div>
			
			<div id="Kestus" class="subtabcontent">
				<h4>Kestus</h4>
				<p>45 min</p>
			</div>
			
			<div id="Materjalid" class="subtabcontent">
				<h4>Vajalikud materjalid</h4>
				<p>bodhran<br>
				jauram<br>
				krooksupill<br> 
				tamburiin<br>
				pingipill<br>
				lokupill</p>
			</div>
			
			<div id="Õpitulemused" class="subtabcontent">
				<h4>Õpitulemused</h4>
				<p>Õpilane:<br>
				saab üldise ülevaate löökpillidest<br>
				teab nimetada löökpille<br>
				teab milline pill on bodhran<br>
				kasutab muusika karakteri ja meeleolu väljendamiseks loovliikumist<br> 
				tunnetab ja väljendab liikumises meloodiat, rütmi, tempot, dünaamikat ning vormi<br>
				võrdleb mõisteid valjusti ja vaikselt, kiiresti ja aeglaselt<br>
				analüüsib õpitut.</p>
			</div>
		</div>

		<div id="sissejuhatus" class="tabcontent">
			<h3>Sissejuhatus</h3>
			<h4>10 min</h4>
			<br>
			<div class="subcategories">
				<button class="alam" onclick="toggleButton(this)">Arutelu</button>
				<button class="alam" onclick="toggleButton(this)">Arvamismäng</button>
			</div>
			<br>
			
			<div id="Arutelu" class="subtabcontent">
			  <h3>Arutelu</h3>
			  <p>Arutelu ja slaidide vaatamine (pildid, mõisted),<br> 
				milliseid löökpille õpilased oskavad nimetada,<br> 
				milliseid on saanud proovida ja kas keegi mängib mõnd löökpilli?<br>
				Õpetaja nimetab ja näitab slaidilt, <br>
				milliseid löökpille Eestis varasematel aegadel kasutati<br> 
				(olid pigem märguandeks ja pigem muu tähendusega kui pill).<br> 
				Kuulatakse nende helinäiteid - pingipill, lokupill.</p><br><br>
				<div class="video-container">
					<video controls width="600" poster="pics/posterlook.png">
						<source src="pics/ajalugu.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
				</div><br><br>
			</div>
			
			<div id="Arvamismäng" class="subtabcontent">
			  <h3>Mis pilliga on tegu?</h3>
			  <p>Õpetajal on kaasas jauram, krooksupill, ja tamburiin, mida ta ükshaaval mängib.<br> 
				Slaidil on kolme pilli nimed ning õpilased saavad kaasa mõelda ja igaüks sõrmede peal näidata,<br> 
				kas vastuseks on I, II või III variant.<br>
				Nii kõigi kolme pilli puhul.</p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterlook.png">
						<source src="pics/krooksupill.mp4" type="video/mp4">
						Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
				</div><br><br>
			</div>
		</div>

		<div id="tutvustus" class="tabcontent">
			<h3>Pillide tutvustamine</h3>
			<h4>25 min</h4>
			<br>
			
			<div class="subcategories">
				<button class="alam" onclick="toggleButton(this)">Bodhran</button>
				<button class="alam" onclick="toggleButton(this)">Näited</button>
				<button class="alam" onclick="toggleButton(this)">Mängimine</button>
			</div>
			<br>
			
			<div id="Bodhran" class="subtabcontent">
				<h3>Bodhrani tutvustus</h3>
				<p>Õpetaja tutvustab Bodhranit. 
				Tegemist on raamtrummiga, mis meenutab tamburiini ja oma tüübilt on üsna levinud.<br>
				Koos häälitakse BODHRAN ("bauran"). Nimi tähendabki trummi/ tamburiini iiri keeles.<br>
				Õpetaja võtab pilli ja näitab (osutab pilli eri osadele), millest pill koosneb,<br> 
				kuidas ja millega pilli mängitakse, kuidas käes hoitakse.<br> 
				Käsitletakse mõisteid kiiresti ja aeglaselt, valjusti ja vaikselt (trummil mängides).</p><br><br>
				<div class="video-container">
					<video controls width="600" poster="pics/posterlook.png">
							<source src="pics/bodhrad.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
				</div><br><br>
			</div>
			
			<div id="Näited" class="subtabcontent">
				<h3>Näited</h3>
				<p>Kuulatakse kahte iiri trummi mängimise näidet - soolo pala ja teiste pillide saaterütmina.<br> 
				Õpetaja laseb pillid tutvumiseks ringi käima. <br>
				Lapsed saavad heli tekitada tipperiga või käega.</p><br><br>
			</div>
			
			<div id="Mängimine" class="subtabcontent">
				<h3>Mängimine</h3>
				<p>Tunnetatakse rütmi ja muusika kaasakutsuvust ja -haaravust.<br> 
				Õpetaja viib läbi ülesandeid käe liikuvuse ja rütmi tunnetuse saamiseks.<br>
				Proovitakse mängida ühine pala kasutades käesolevaid pille</p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterlook.png">
							<source src="pics/mangimine2.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
				</div>
			</div>
		</div>

		<div id="kokkuvote" class="tabcontent">
		<h3>Kokkuvõte</h3>
			<h4>10 min</h4>
			<br>
			<div class="subcategories">
				<button class="alam" onclick="toggleButton(this)">Küsimused</button>
				<button class="alam" onclick="toggleButton(this)">Tagasiside</button>
				<button class="alam" onclick="toggleButton(this)">Värvileht</button>
			</div>
			<br>
			
			<div id="Küsimused" class="subtabcontent">
			  <h3>Küsimused õpilastele:</h3>
			  <p>Mida sa täna teada said? <br> 
				Mida veel rohkem tahaksid teada?<br></p>
				<div class="video-container">
					<video controls width="600" poster="pics/posterlook.png">
							<source src="pics/kysimused.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
				</div><br><br>
			</div>
			
			<div id="Tagasiside" class="subtabcontent">
			  <h3>Tagasiside leht</h3>
			  <p>Õpilased kirjutavad tagasisidelehele:<br> 
				mis neile löökpillide ja bodhraniga seoses kõige rohkem meelde jäi.</p><br>
				<div class="video-container">
					<video controls width="600" poster="pics/posterlook.png">
							<source src="pics/toolehed.mp4" type="video/mp4">
							Vabandame! Teie brauser ei toeta HTML5 video elementi!
					</video>
				</div><br><br>
			</div>
			<div id="Värvileht" class="subtabcontent">
				<h3>Värvileht</h3>
				<p>Õpilased saavad värvilehe,<br>
				kus saavad joonistada mustri oma bodhrani membraanile<br> 
				(võib jääda kodus lõpetamiseks).</p><br><br>
			</div>
			
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