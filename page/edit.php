<?php
	//edit.php
	require("../functions.php");
	
	//kas kasutaja uuendab andmeid
	if(isset($_POST["update"])){
		
		$Car->updateCar($Helper->cleanInput($_POST["id"]), $Helper->cleanInput($_POST["plate"]), $Helper->cleanInput($_POST["color"]));
		
		header("Location: edit.php?id=".$_POST["id"]."&success=true");
        exit();	
	}
	
	if(isset($_POST["delete"])){
		
		$Car->deleteCar($Helper->cleanInput($_POST["id"]));
		
		header("Location: edit.php?id=".$_POST["id"]."&success=true");
        exit();	
	}
	
	//Kui ei ole id'd aadressireal, siis suunan
	
	if(!isset($_GET["id"])) {
		header("Location: data.php");
		exit();
	}
	
	//saadan kaasa id
	$c = $Car->getSingleCarData($_GET["id"]);
	//var_dump($c);

	if(isset($_GET["success"])) {
		echo "Salvestamine õnnestus";
	}
	
	
	
	
	
?>

<?php require("../header.php");?>

<br><br>
<a href="data.php"> tagasi </a>

<h2>Muuda kirjet</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<input type="hidden" name="id" value="<?=$_GET["id"];?>" > 
  	
	<label for="number_plate" >auto nr</label><br>
	<input id="number_plate" name="plate" type="text" value="<?php echo $c->plate;?>" ><br><br>
  	
	<label for="color" >värv</label><br>
	<input id="color" name="color" type="color" value="<?=$c->color;?>"><br><br>
  	
	<input type="submit" name="update" value="Salvesta">
	<input type="submit" name="delete" value="Kustuta">
  </form>
  
<?php require("../footer.php");?> 