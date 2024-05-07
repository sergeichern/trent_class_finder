
<?php 


$errors = array();
$location = $_POST['location'] ?? null;
$locationarray["Champlain College"] = array(42,28);
$locationarray["Bata Library"] = array(45, 45);
$locationarray["Book Store"]=array(43,37);
$locationarray["Lady Eaton College"]=array(31, 33);
$locationarray["Trent Athletics Centre"]=array(29, 63);
$locationarray["Environmental Science Centre"]=array(58, 27);
$locationarray["Science Complex"]=array(64, 27);
$locationarray["Gzowski College"]=array(65, 41);
$locationarray["Otonabee College"]=array(72, 32);
$locationarray["DNA Building"]=array(85, 30);
$locationarray["Student Centre"]=array(41, 50);

$restaurantarray["Lady Eaton Dining Hall"]=[31,33];
$restaurantarray["Champlain Dining Hall"]=[42,28];
$restaurantarray["76 Sips Cafe"]=[29,63];
$restaurantarray["Starbucks"]=[41,50];
$restaurantarray["Celie"]=[43, 34];
$restaurantarray["Bata Bean"]=[45, 45];
$restaurantarray["Otonabee Dining Hall"]=[70, 29];
$restaurantarray["Seasoned Spoon"]=[40, 34];
$restaurantarray["Gzowski Dining Hall"]=[68, 40];

if (isset($_POST["sbmLocation"])) {
	$currentvalue = array_search($location, $locationarray);
	$closestcoords = $currentvalue;
	$currentlowestdif = 200;
	
	foreach($restaurantarray as $x => $x_value){

		$absdiff = abs($currentvalue[0] - $x_value[0]) + abs($currentvalue[1] - $x_value[1]);
		if ($absdiff < $currentlowestdif) {
			$closestcoords = $x_value;
			$currentlowestdif = $absdiff;
		}
	$closestrestaurant = $restaurantarray[$closestcoords];
	}
}
echo(strval($closestrestaurant));

?>

<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Trent Class Finder</title>
      <link rel="stylesheet" href="styles/main.css">
    </head>
    <body>
      <header>
        <?php require "includes/nav.php" ?>
      </header>
      <h1>Restaurant Finder</h1>
      <p>Enter the nearest location to you to find the nearest restaurant.</p>
	  
	  <form method ="POST" action="restaurant.php">
		<div> 
			<label for="location">Enter your location:</label>
			<select name="location" id="location">
				<option value = "Champlain College">Champlain College</option>
				<option value = "Bata Library">Bata Library</option>
				<option value = "Book Store">Book Store</option>
				<option value = "Lady Eaton College">Lady Eaton College</option>
				<option value = "Trent Athletics Centre">Trent Athletics Centre</option>
				<option value = "Environmental Science Centre">Environmental Science Centre</option>
				<option value = "Science Complex">Science Complex</option>
				<option value = "Gzowski College">Gzowski College</option>
				<option value = "Otonabee College">Otonabee College</option>
				<option value = "DNA Building">DNA Building</option>
				<option value = "Student Centre">Student Centre</option>
			</select>
		</div>
		<button type="submit" id="sbmLocation" name="sbmLocation">Find</button>
	</form>
	<h2> Nearest restaurant: <?= !isset($closestrestaurant) ? "" : $closestrestaurant?> </h2>
	<h2> Currentlowestdif : <?= isset($currentlowestdif) ? "" : $currentlowestdif?> </h2> 
	</body>
</html>

	
				
				
