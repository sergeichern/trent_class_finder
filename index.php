<!DOCTYPE html>

<?php 

// errors array
$errors = array();


$location = $_POST['location'] ?? null;

//initializing as null, as these variables need to be shown on the page, and there will be an error otherwise
$corridor = null;

//instructions and images for the instructions
$instructions = [];
$images = [];

//$c1 = corridor 1 etc, there's an annotated image you can refer to
//these record which rooms correspond to each corridor
$c1 = ["SC101", "SC102", "SC152"];
$c2_1 = ["SC104", "SC105", "SC106", "SC107", "SC107.1"];
$c2_2 = ["SC108", "SC108.1", "SC115"];
$c2_3 = ["SC110", "SC111", "SC112", "SC113"];
$c2_4 = ["SC117", "SC120", "SC122", "SC124", "SC125"];
$c2_5 = ["SC103"];
//$c3_1 = ["SC166"];
//166 is a store room
$c3_2 = ["SC136", "SC136.3", "SC136.4", "SC136.5", "SC136.6", "W101.4"];
$c3_3 = ["SC126", "SC127", "SC128", "SC129"];
$c4 = ["SC151"];
$c5 = ["SC137", "SC137.1"];
$c6 = ["WQC Lab 2 E101", "SC160"];
$c7_1 = ["SC139, SC144"];
$c7_2 = ["SC145", "SC146.1", "SC146.2", "SC146.3", "SC146.4"];
$c7_3 = ["SC148", "B105","SC147", "SC149", "SC149.1"];
/*

$f2c1 = ["SCW1", "SCW2", "SCW3", "SCW4", "SCW6", "SCW9", "2SC137"];
$f2c2 = ["SC217", "SC218", "SC219", "SC220", "SC221", "SC222"];
$f2c3 = ["SC215"];
$f2c4 = ["SC211", "SC212", "SC212.1", "SC212.2", "SC213", "SC214", "SC214.1", "SC214.2"];
$f2c5 = ["SC208", "SC209"];
$f2c6 = ["SC204", "SC204.1", "SC205", "SC206", "SC206.1", "SC207"];
$f2c7 = ["SC201", "SC201.1"];

$f3c2 = ["SC318", "SC319", "SC320", "SC321", "SC322", "SC323", "SC324", "SC325", "SC326", "SC326.1", "SC327", "SC327.1"];
$f3c3 = ["SC317"];
$f3c4 = ["SC313", "SC313.1", "SC314", "SC315", "SC316", "SC316.1"];
$f3c5 = ["SC305", "SC305.1", "SC310", "SC310.1", "SC311", "SC312", "SC312.1", "SC312.2", "SC312.3", "SC312.4", "SC312.5"];
$f3c6 = ["SC306", "SC307", "SC308", "SC309"];
$f3c7 = ["SC301", "SC303", "SC303.1", "SC304"];
*/
if (isset($_POST["sbmLocation"])) {
  
  //reset the instruction step counter
  $instructionstep = 1;
  if (in_array($location, $c1)) {
    $corridor = "f1_1";
    
    $instructions=["Enter from the environmental science building and turn left."];
    $images = ["f1_1.png"];
    $photos = ["20221122_105609.jpg"];
    }
  
  
  elseif (in_array($location, $c2_1)) {
    $corridor = "f1_2_1";
   
    $instructions=["Enter from the environmental science building and go straight. The classromm will be on your
    left."];
    $images = ["f1_2_1.png"];
    $photos = ["20221122_105609.jpg"];
    
  }
  elseif (in_array($location, $c2_2)) {
    $corridor = "f1_2_2";
    
      
    $instructions=["Enter from the environmental science building and go straight.", 
    "Go past classroom 107, your destination will be on your right."];
    $images = ["f1_2_1.png", "f1_2_2.png"];
    $photos = ["20221122_105609.jpg", "20221122_105650.jpg"];
  }
  elseif (in_array($location, $c2_3)) {
    $corridor = "f1_2_3";
   
      $instructions=["Enter from the environmental science building and go straight.",
      "Keep going straight and pass room 107.","The classroom will be on your left"];
      $images = ["f1_2_1.png", "f1_2_2.png", "f1_2_3.png"];
      $photos = ["20221122_105609.jpg", "20221122_105650.jpg", "IMG_3214.jpg"];
  }
  elseif (in_array($location, $c2_4)) {
    $corridor = "f1_2_4";
    
    $instructions=["Enter from the environmental science building and go straight.",
    "Keep going straight and pass room 107.","Pass room 113.", "Make a right turn and walk forward, the classroom will be in front of you."];
    $images = ["f1_2_1.png", "f1_2_2.png", "f1_2_3.png","f1_2_4.png"];
    $photos = ["20221122_105609.jpg", "20221122_105650.jpg", "IMG_3214.jpg", "20221122_180031.jpg"];
  }
  elseif (in_array($location, $c2_5)) {
    //this is for room 103 only, because it's on the right and not the left
    $corridor = "f1_2_1";
    $instructions=["Enter from the environmental science building and go straight. The classromm will be in front of you, on your
    right."];
    $images = ["f1_2_1.png"];
    $photos = ["20221122_105609.jpg"];
  }
  /* elseif (in_array($location, $c3_1)) {
    $corridor = "f1_3";
   
    $instructions=["Enter from the environmental science building and go straight.",
    "Make a right turn at 103, the destination will be on your left."];
    $images = ["f1_2_1.png", "f1_3.png"];
    $photos = ["20221122_105609.jpg"];
    
  }

  SC 166 is a storeroom, there is no need to navigate to it.
  */
  elseif (in_array($location, $c3_2)) {
    $corridor = "f1_3_2";
   
    $instructions=["Enter from the environmental science building and go straight.", 
    "Make a right turn at 103, and head throught the door in front of you.", 
    "Head straight, the classroom will be on your left."];
    $images = ["f1_2_1.png", "f1_3.png", "f1_3_2_2.png"];
    $photos = ["20221122_105609.jpg", "20221122_105919.jpg", "20221122_180138.jpg"];
  }
  elseif (in_array($location, $c3_3)) {
    $corridor = "f1_3_3";
   
      $instructions=["Enter from the environmental science building and go straight.", 
      "Make a right turn at 103.", 
      "Follow the corridor once you reach the wall", 
      "The classroom will be on your right"];
      $images = ["f1_2_1.png", "f1_3.png", "f1_3_2.png", "f1_3_3.png"];
      $photos = ["20221122_105609.jpg", "20221122_105919.jpg", "20221122_110007.jpg", "20221028_135111.jpg"];
  }
  elseif (in_array($location, $c4)) {
    $corridor = "f1_4";
   
      $instructions=["Enter from the environmental science building and go straight.",
      "Go around the stairs, the classrom will be on your left"];
      $images = ["f1_2_1.png", "f1_4.png"];
      $photos = ["20221122_105609.jpg", "20221028_135241.jpg"];
    
  }
  elseif (in_array($location, $c5)) {
    $corridor = "f1_5";
   
      $instructions=["Enter from the OC and turn left.",
      "Go down the stairs.", 
      "The classroom will be on your right."];
      $images = ["rArrow.png", "rArrow.png", "f1_5.png"];
      $photos = ["20221122_110311.jpg", "20221122_110328.jpg", "20221122_110404.jpg"];
  }
  elseif (in_array($location, $c6)) {
    $corridor = "f1_6";
   
    $instructions = ["Enter from the OC and turn left.",
    "Go down the stairs.",
    "Go straight, the classroom will be on your left"];
    $images = ["rArrow.png", "rArrow.png", "f1_5.png", "f1_6.png"];
    $photos = ["20221122_110311.jpg", "20221122_110328.jpg", "20221122_110425.jpg"];
  }
  elseif (in_array($location, $c7_1)) {
    $corridor = "f1_7_1";

    $instructions = ["Enter from the OC and turn left.",
    "Go down the stairs.",
    "Go straight until you reach the classroom"];
    $images = ["rArrow.png", "rArrow.png", "f1_7_1.png"];
    $photos = ["20221122_110311.jpg", "20221122_110328.jpg", "20221122_110425.jpg"];

  }
  elseif (in_array($location, $c7_2)) {
    $corridor = "f1_7_2";
  
    $instructions = ["Enter from the OC and turn left.",
    "Go down the stairs.", 
    "Go straight until you reach 139.",
    "Turn right, the classroom will be on your left."];
    $images = ["rArrow.png", "rArrow.png", "f1_7_1.png", "f1_7_2.png"];
    $photos = ["20221122_110311.jpg", "20221122_110328.jpg", "20221122_110425.jpg", "20221122_110508.jpg"];
  }
  elseif (in_array($location, $c7_3)) {
    $corridor = "f1_7_3";
   
    $instructions = ["Enter from the OC and turn left.",
    "Go down the stairs.", 
    "Go straight until you reach 139.",
    "Turn right, then walk around 146.",
    "Walk straight until you reach the classroom."];
    $photos = ["20221122_110311.jpg", "20221122_110328.jpg", "20221122_110425.jpg", "20221122_110508.jpg", "20221122_110545.jpg"];
    $images = ["rArrow.png", "rArrow.png", "f1_7_1.png", "f1_7_2.png", "f1_7_3.png"];
  }
  /*
  elseif (in_array($location, $f2c1)) {
    $corridor = "f2c1";
    $gender = "both";
    $instructions = ["Head towards Otonabee College. The bathrooms will be on your right."];
    $images = ["20221028_140426.jpg"];
  }
  elseif (in_array($location, $f2c2)) {
    $corridor = "f2c2";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 217, 218, 219, and 220 on your right.",
      "Turn left and go through the doors in front of you",
      "Head either up or down the stairs. The bathroom will be behind the staircase."];
      $images = ["20221108_100431.jpg", "20221108_100504.jpg", "IMG_3266.jpg"];
    }
    else {
      $instructions=["Head down the hallway with rooms 217, 218, 219, and 220 on your right.",
      "Turn left and go through the doors in front of you",
      "The bathroom is behind the staircase."];
      $images = ["20221108_100431.jpg", "20221108_100504.jpg", "IMG_3265.jpg"];
    }
  }
  elseif (in_array($location, $f2c3)) {
    $corridor = "f2c3";
    if ($gender == "mens") {
      $instructions=["Head either up or down the stairs. The bathroom will be behind the staircase."];
      $images = ["IMG_3266.jpg"];
    }
    else {
      $instructions=["The bathroom is behind the staircase."];
      $images = ["IMG_3265.jpg"];
    }
  }
  
  elseif (in_array($location, $f2c4)) {
    $corridor = "f2c4";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 211 and 214 on your left.",
      "Head either up or down the stairs. The bathroom will be behind the staircase."];
      $images = ["IMG_3262.jpg", "IMG_3266.jpg"];
    }
    else {
      $instructions=["Head down the hallway with rooms 211 and 214 on your left.",
      "The bathroom is behind the staircase."];
      $images = ["IMG_3262.jpg", "IMG_3265.jpg"];
    }
  }
  elseif (in_array($location, $f2c5)) {
    $corridor = "f2c5";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 211 and 214 on your left.",
      "Head either up or down the stairs. The bathroom will be behind the staircase."];
      $images = ["IMG_3260.jpg", "IMG_3266.jpg"];
    }
    else {
      $instructions=["Head down the hallway with rooms 211 and 214 on your left.",
      "The bathroom is behind the staircase."];
      $images = ["IMG_3260.jpg", "IMG_3265.jpg"];
    }
  }

  elseif (in_array($location, $f2c6)) {
    $corridor = "f2c6";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 204 and 207 on your right.",
      "Head either up or down the stairs, or take the lift. The bathroom will be behind the staircase."];
      $images = ["20221110_125500.jpg", "20221108_100644.jpg"];
    }
    else {
      $instructions=["Head down the hallway with rooms 204 and 207 on your right.",
      "The bathroom is in front of you, on the right, and opposite the lift."];
      $images = ["20221110_125500.jpg", "IMG_3257.jpg"];
    }
  }
  elseif (in_array($location, $f2c7)) {
    $corridor = "f2c7";
    if ($gender == "mens") {
      $instructions=["Head either up or down the stairs, or take the lift. The bathroom will be behind the staircase."];
      $images = ["20221110_124629.jpg"];
    }
    else {
      $instructions=["The bathroom is in front of you, on the right, and opposite the lift."];
      $images = ["IMG_3257.jpg"];
    }
  }
  elseif (in_array($location, $f3c2)) {
    $corridor = "f3c2";
    $gender = "both";
    $instructions=["Head down the hallway with rooms 323, 324, 325, 326, and 327 on your right.",
    "Turn right, the bathroom will be on your right"];
    $images = ["20221108_101019.jpg", "20221110_123550.jpg"];
   
  }
  elseif (in_array($location, $f3c3)) {
    $corridor = "f3c3";
    if ($gender == "mens") {
      $instructions=["The bathroom is behind the staircase."];
      $images = ["IMG_3269.jpg"];
    }
    else {
      $instructions=["Go through the door towards the physics building.",
    "The bathroom is in front of you, on the right."];
      $images = ["20221108_100953.jpg", "20221110_123550.jpg"];
    }
  }

  elseif (in_array($location, $f3c4)) {
    $corridor = "f3c4";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 313 and 316 on your left.",
      "The bathroom is behind the staircase."];
      $images = ["20221108_100815.jpg", "IMG_3269.jpg"];
    }
    else {
      $instructions=["Head down the hallway with rooms 313 and 316 on your left.",
      "Go down the stairs. The bathroom is behind the staircase."];
      $images = ["20221108_100815.jpg", "IMG_3268.jpg"];
    }
  }

  elseif (in_array($location, $f3c5)) {
    $corridor = "f3c5";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 313 and 316 on your left.",
      "The bathroom is behind the staircase."];
      $images = ["20221108_100815.jpg", "IMG_3269.jpg"];
    }
    else {
      $instructions=["Head down the hallway with rooms 313 and 316 on your left.",
      "Go down the stairs. The bathroom is behind the staircase."];
      $images = ["20221108_100815.jpg", "IMG_3268.jpg"];
    }
  }

  elseif (in_array($location, $f3c6)) {
    $corridor = "f3c6";
    $gender = "both";

    $instructions=["Head down the hallway with rooms 306 and 309 on your right.",
    "Go into the Environmental Sciences building. The bathroom will be on the right."];
    $images = ["20221108_100712.jpg", "IMG_3276.jpg"];
    
    
  }

  elseif (in_array($location, $f3c7)) {
    $corridor = "f3c7";
    $gender = "both";
    $instructions=["Head down the hallway with rooms 301 and 304 on your right.",
    "Go into the Environmental Sciences building. The bathroom will be on the right."];
    $images = ["20221108_100712.jpg", "IMG_3276.jpg"];
    
    
  }

 */
  //naming format: floor, corridor, gender, .jpg
  $corridor = $corridor.".jpg";
  
}
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
    <main>
      <h1>Welcome to Trent Class Finder</h1>
      <img src ="img/map_wip_1.png" alt="WIP 2D Trent Map" width ="100%"> 
      <form method="POST" action="index.php">
      <div>
                <label for="location">Enter your destination:</label>
                <select name="location" id="location">
                  <optgroup label="First Floor">
                    <option value="B105">B105</option>
                    <option value="E101">WQC Lab 2 E101</option>
                    <option value="W101.4">W101.4</option>
                    <option value="SC101">SC 101</option>
                    <option value="SC102">SC 102</option>
                    <option value="SC103">SC 103</option>
                    <option value="SC104">SC 104</option>
                    <option value="SC105">SC 105</option>
                    <option value="SC106">SC 106</option>
                    <option value="SC107.1">SC 107.1</option>
                    <option value="SC108">SC 108</option>
                    <option value="SC108.1">SC 108.1</option>
                    <option value="SC109">SC 109</option>
                    <option value="SC110">SC 110</option>
                    <option value="SC111">SC 111</option>
                    <option value="SC112">SC 112</option>
                    <option value="SC113">SC 113</option>
                    <option value="SC115">SC 115</option>
                    <option value="SC117">SC 117</option>
                    <option value="SC120">SC 120</option>
                    <option value="SC122">SC 122</option>
                    <option value="SC124">SC 124</option>
                    <option value="SC125">SC 125</option>
                    <option value="SC126">SC 126</option>
                    <option value="SC127">SC 127</option>
                    <option value="SC128">SC 128</option>
                    <option value="SC129">SC 129</option>
                    <option value="SC136">SC 136</option>
                    <option value="SC136.3">SC 136.3</option>
                    <option value="SC136.4">SC 136.4</option>
                    <option value="SC136.5">SC 136.5</option>
                    <option value="SC136.6">SC 136.6</option>
                    <option value="SC137">SC 137</option>
                    <option value="SC137.1">SC 137.1</option>
                    <option value="SC139">SC 139</option>
                    <option value="SC144">SC 144</option>
                    <option value="SC145">SC 145</option>
                    <option value="SC146">SC 146</option>
                    <option value="SC146.1">SC 146.1</option>
                    <option value="SC146.2">SC 146.2</option>
                    <option value="SC146.3">SC 146.3</option>
                    <option value="SC148">SC 148</option>
                    <option value="SC149">SC 149</option>
                    <option value="SC149.1">SC 149.1</option>
                    <option value="SC150">SC 150</option>
                    <option value="SC151">SC 151</option>
                    <option value="SC152">SC 152</option>
                    <option value="SC160">SC 160</option>
                    <!-- <option value="SC166">SC 166</option> -->
                    
                  </optgroup>
                  <optgroup label="Second Floor">
                    <option value="SCW1">SC W1</option>
                    <option value="SCW2">SC W2</option>
                    <option value="SCW3">SC W3</option>
                    <option value="SCW4">SC W4</option>
                    <option value="SCW6">SC W6</option>
                    <option value="SCW9">SC W9</option>
                    <option value="2SC137">SC 137</option>
                    <option value="SC201">SC 201</option>
                    <option value="SC201.1">SC 201.1</option>
                    <option value="SC204">SC 204</option>
                    <option value="SC204.1">SC 204.1</option>
                    <option value="SC205">SC 205</option>
                    <option value="SC206">SC 206</option>
                    <option value="SC206.1">SC 206.1</option>
                    <option value="SC207">SC 207</option>
                    <option value="SC208">SC 208</option>
                    <option value="SC209">SC 209</option>
                    <option value="SC211">SC 211</option>
                    <option value="SC212">SC 212</option>
                    <option value="SC212.1">SC 212.1</option>
                    <option value="SC212.2">SC 212.2</option>
                    <option value="SC213">SC 213</option>
                    <option value="SC214">SC 214</option>
                    <option value="SC214.1">SC 214.1</option>
                    <option value="SC214.2">SC 214.2</option>
                    <option value="SC215">SC 215</option>
                    <option value="SC217">SC 217</option>
                    <option value="SC218">SC 218</option>
                    <option value="SC219">SC 219</option>
                    <option value="SC220">SC 220</option>
                    <option value="SC221">SC 221</option>
                    <option value="SC222">SC 222</option>
                    
                  </optgroup>
                  <optgroup label="Third Floor">
                    <option value="SC301">SC 301</option>
                    <option value="SC303">SC 303</option>
                    <option value="SC303.1">SC 303.1</option>
                    <option value="SC304">SC 304</option>
                    <option value="SC305">SC 305</option>
                    <option value="SC305.1">SC 305.1</option>
                    <option value="SC306">SC 306</option>
                    <option value="SC307">SC 307</option>
                    <option value="SC308">SC 308</option>
                    <option value="SC309">SC 309</option>
                    <option value="SC310">SC 310</option>
                    <option value="SC310.1">SC 310.1</option>
                    <option value="SC311">SC 311</option>
                    <option value="SC312">SC 312</option>
                    <option value="SC312.1">SC 312.1</option>
                    <option value="SC312.2">SC 312.2</option>
                    <option value="SC312.3">SC 312.3</option>
                    <option value="SC312.4">SC 312.4</option>
                    <option value="SC312.5">SC 312.5</option>
                    <option value="SC313">SC 313</option>
                    <option value="SC313.1">SC 313.1</option>
                    <option value="SC314">SC 314</option>
                    <option value="SC315">SC 315</option>
                    <option value="SC316">SC 316</option>
                    <option value="SC316.1">SC 316.1</option>
                    <option value="SC317">SC 317</option>
                    <option value="SC318">SC 318</option>
                    <option value="SC319">SC 319</option>
                    <option value="SC320">SC 320</option>
                    <option value="SC321">SC 321</option>
                    <option value="SC322">SC 322</option>
                    <option value="SC323">SC 323</option>
                    <option value="SC324">SC 324</option>
                    <option value="SC325">SC 325</option>
                    <option value="SC326">SC 326</option>
                    <option value="SC326.1">SC 326.1</option>
                    <option value="SC327">SC 327</option>
                    <option value="SC327.1">SC 327.1</option>
                  </optgroup>
                </select>
          </div>
          <button type="submit" id="sbmLocation" name="sbmLocation">Find classroom</button>

      </form>
      <h3>
            Navigating to: <?= !isset($location) ? "" : $location?>
          </h3>
          <!-- instructions go here -->
          <?php for ($i= 0; $i< count($instructions); $i++): ?>
            <div>
              <div>
              <b><?= $instructionstep.". " ?></b><?= $instructions[$i] ?>
              </div>
              <img src="img/classroom/<?= (is_null($images[$i])) ? "" : $images[$i]?>" alt="Step <?=$instructionstep?>" height="500">
              <img src="img/classroom/photos/<?= (is_null($photos[$i])) ? "" : $photos[$i]?>" alt="Step <?=$instructionstep?>" height="500">
              <?php $instructionstep++; ?>
            </div>  
          <?php endfor ?>
        </section>
      </main>
    </body>
    
  </main>
    </body>
</html>
