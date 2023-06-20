<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Muusikaveeb</title>
	<link rel="stylesheet" href="styles/header.css">
	<style>
		.search-form {
			display: inline-block;
			margin-left: 20px;
		}

		.search-input {
			padding: 5px;
			width: 200px;
		}

		.search-button {
			padding: 5px 10px;
			background-color: #555;
			color: #fff;
			border: none;
			cursor: pointer;
		}
	</style>
<body>
	<header class="main_header">
		<nav>
			<ul class="grid-container">
				<li><a href="main.php"><h1>Muusikaveeb</h1></a><li>
				<li><a href="pillid.php" class="grid-item">Pillid</a></li>
				<li><a href="kuidas_op.php" class="grid-item">Kuidas<br>õpetada?</a></li>
				<li><a href="kuidas_teh.php" class="grid-item">Kuidas see<br>tehtud on?</a></li>
				<li>
					<form class="search-form" action="otsing.php" method="get">
						<input class="search-input" type="text" name="query" placeholder="Otsi...">
						<button class="search-button" type="submit">otsi</button>
					</form>
				</li>
			</ul>	
			
		</nav>
	</header>
</head>
