<?php
require_once "header.php";
?>
<main>
	<header>
		<link rel="stylesheet" href="styles/pilli_grupp.css">
		<link rel="stylesheet" href="styles/thumbnail.css">
		<a href="pillid.php" class="nupp"><</a>  
			<br><br><br><br><br><br>
			<h2 class="h2_pages">Puhkpillid</h2>
	</header>
	
	<section>
		<nav>     
        <div class="asjad">
			<a href="sarved.php">
				<figure>
					<img src="pics/metsasarv.jpg" alt="metsasarv" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Sarved</h1>
			</a>
			
			<a href="pasunad.php">
				<figure>
					<img src="pics/postipasun.jpg" alt="postipasun" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Pasunad</h1>
			</a>
			
			<a href="trompetid.php">
				<figure>
					<img src="pics/trompet.jpg" alt="trompet" style="width: 200px; height: 200px; border-radius: 50%; transform: rotate(90deg)" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Trompetid</h1>
			</a>
	  
			<a href="saksofon.php">
				<figure>
					<img src="pics/saksofon.jpg" alt="saksofon" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Saksofon</h1>
			</a>
	  
			<a href="tuuba.php">
				<figure>
					<img src="pics/tuuba.jpg" alt="tuuba" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Tuuba</h1>
			</a>
	 
			<a href="torupill.php">
				<figure>
					<img src="pics/eestitorupill.jpg" alt="eesti torupill" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Torupillid</h1>
			</a>
	  
			<a href="floot.php">
				<figure>
					<img src="pics/mituplokkflööti.jpg" alt="mitu plokkflööti" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Flöödid</h1>
			</a>
	  
			<a href="klarnet.php">
				<figure>
					<img src="pics/klarnet.jpg" alt="klarnet" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Klarnet</h1>
			</a>
	  
			<a href="fagott.php">
				<figure>
					<img src="pics/fagott.jpg" alt="fagott" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Fagott</h1>
			</a>
	  
			<a href="meloodika.php">
				<figure>
					<img src="pics/meloodika.jpg" alt="meloodika" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Meloodika</h1>
			</a>
	  
			<a href="suupill.php">
				<figure>
					<img src="pics/suupillid.jpg" alt="suupill" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Suupill</h1>
			</a>
	  
			<a href="kazoo.php">
				<figure>
					<img src="pics/kazoo.jpg" alt="kazoo" style="width: 200px; height: 200px; border-radius: 50%;" class="thumbnail">
				</figure>
				<h1 class="grid-pill">Kazoo</h1>
			</a>
	  
			</div>
			</nav>
		</section>
	</div>
	<style>
		.container {
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			grid-template-rows: auto;
			grid-gap: 10px;
		}

		.last-link {
			grid-column: 1 / -1;
		}
	</style>
</main>
</body>
</html>