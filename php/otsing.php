<?php 
require_once "header.php";
?>

<main>
	<link rel="stylesheet" href="styles/pillid.css">
	<section class="otsing">
	
<?php 
$vastus=array();

function kysiPealkiri($fnimi){
	$fsisu=explode("\n", file_get_contents($fnimi));
	$pealkiri=substr($fnimi, 0, strlen($fnimi)-4);
    foreach($fsisu as $rida){
	  if(str_starts_with(trim($rida), '<h2 class="h2_pages">')){
		  $algus=strpos($rida, '<h2 class="h2_pages">');
		  $ots=strpos($rida, '</h2>', $algus+1);
		  $pealkiri=substr($rida, $algus+21, $ots-$algus);
	  }
	}
	return $pealkiri;
}

if(isset($_REQUEST["query"])){
	$_REQUEST["query"]=strtolower($_REQUEST["query"]);
	$fnimed=scandir(".");
	foreach($fnimed as $fnimi){
		if(str_contains($fnimi, $_REQUEST["query"])){
			array_push($vastus, $fnimi);
		} else {
			if(str_ends_with($fnimi, ".php")){
//                if(str_contains(strtolower(file_get_contents($fnimi)), $_REQUEST["query"])){
                if(str_contains(strtolower(kysiPealkiri($fnimi)), $_REQUEST["query"])){
					array_push($vastus, $fnimi);
				}
			}
			
		}
	}
	if(str_starts_with($_REQUEST["query"], "keelp")){array_push($vastus, "keelpill.php");}
	if(str_contains($_REQUEST["query"], "õpet")){array_push($vastus, "kuidas_op.php");}
	if(str_contains($_REQUEST["query"], "teht")){array_push($vastus, "kuidas_teh.php");}
	if(str_contains($_REQUEST["query"], "muus")){array_push($vastus, "main.php");}
}
#echo json_encode($vastus);

if($vastus){
	if(count($vastus)==1){
		header("Location: $vastus[0]");
		exit();
	}
	echo "<ul>";
	foreach($vastus as $fnimi){
		echo "<li><a href='$fnimi'>".kysiPealkiri($fnimi)."</a></li>";
	}
	echo "</ul>";
} else {
	echo "ei leitud";
}
?>
	</section>
</main>
</body>
</html>