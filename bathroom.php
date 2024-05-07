<!DOCTYPE html>
<?php 

// errors array
$errors = array();

$gender = $_POST["gender"] ?? null;
$location = $_POST['location'] ?? null;

//initializing as null, as these variables need to be shown on the page, and there will be an error otherwise
$corridor = null;

//instructions and images for the instructions
$instructions = [];
$images = [];
//$c1 = corridor 1 etc, there's an annotated image you can refer to
//these record which rooms correspond to each corridor
$c1 = ["SC117", "SC120", "SC115"];
$c2_1 = ["SC108", "SC108.1", "SC109"];
$c2_2 = ["SC104", "SC105", "SC106", "SC107", "SC107.1"];
$c2_3 = ["SC110", "SC111", "SC112", "SC113"];
$c3 = ["SC122", "SC124", "SC125"];
$c4_1 = ["SC126", "SC127", "SC128", "SC129"];
$c4_2 = ["SC166"];
$c5 = ["SC103", "SC151"];
$c6 = ["SC101", "SC102", "SC152"];
$c7 = ["SC136", "SC136.3", "SC136.4", "SC136.5", "SC136.6"];
$c9 = ["B105", "SC147", "SC148", "SC149", "SC150"];
$c10_1 = ["SC137", "SC137.1", "W101.4"];
$c10_2 = ["SC160", "E101"];
$c11 = ["SC139", "SC144", "SC145", "SC146", "SC146.1", "SC146.2", "SC146.3", "SC146.4"];

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

if (isset($_POST["sbmLocation"])) {
  
  //reset the instruction step counter
  $instructionstep = 1;
  if (in_array($location, $c1)) {
    $corridor = "f1c1";
    if ($gender == "mens") {
      $instructions=["The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["IMG_3220.jpg"];
    }
    else {
      $instructions=["Go up the stairs in front of you. The bathroom will be on your right."];
      $images = ["IMG_3220.jpg"];
    }
  }
  elseif (in_array($location, $c2_1)) {
    $corridor = "f1c2.1";
    if ($gender == "mens") {
      $instructions=["Go down the main hallway, towards room 113. Rooms 110 and 113 should be on your left.",
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["IMG_3217.jpg", "IMG_3220.jpg"];
    }
    else {
      $instructions=["Go down the main hallway, towards room 107. Rooms 107 and 104 should be on your right.", 
      "Go up the stairs in front of you, or take the lift. Go one floor up. The bathroom will be on your left."];
      $images = ["20221028_135426.jpg", "20221028_135241.jpg"];
    }
  }
  elseif (in_array($location, $c2_2)) {
    $corridor = "f1c2.2";
    if ($gender == "mens") {
      $instructions=["Go down the main hallway, towards room 110. Rooms 104 and 107 should be on your left.",
      "Continue past rooms 110 and 113, which should be on your left.",
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["IMG_3214.jpg", "IMG_3217.jpg",  "IMG_3220.jpg"];
    }
    else {
      $instructions=["Go down the main hallway, towards room 104. Room 104 and 107 should be on your right.", 
      "Go up the stairs in front of you, or take the lift. Go one floor up. The bathroom will be on your left."];
      $images = ["20221028_135426.jpg", "20221028_135241.jpg"];
    }
  }
  elseif (in_array($location, $c2_3)) {
    $corridor = "f1c2.3";
    if ($gender == "mens") {
      $instructions=["Go down the main hallway, towards room 113. Room 110 and 113 should be on your left.",
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["IMG_3217.jpg", "IMG_3220.jpg"];
    }
    else {
      $instructions=["Go down the main hallway, towards room 113. Room 110 and 113 should be on your left.", 
      "Go up the stairs in front of you. The bathroom will be on your right."];
      $images = ["IMG_3217.jpg", "IMG_3220.jpg"];
    }
  }
  elseif (in_array($location, $c3)) {
    $corridor = "f1c3";
    if ($gender == "mens") {
      $instructions=["The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["IMG_3220.jpg"];
    }
    else {
      $instructions=["Go up the stairs in front of you. The bathroom will be on your right."];
      $images = ["IMG_3220.jpg"];
    }
  }
  elseif (in_array($location, $c4_1)) {
    $corridor = "f1c4.1";
    if ($gender == "mens") {
      $instructions=["Head down the hallway towards rooms 126 and 125, away from 128 and 129. All of these rooms should be on your right.",
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["20221028_135111.jpg", "IMG_3220.jpg"];
    }
    else {
      $instructions=["Head down the hallway away from rooms 125, 126, 127, 128, and 129. They should be on your left.",
      "Go up the stairs in front and to the right of you, or the lift. Go one floor up. The bathroom will be on your left."];
      $images = ["IMG_3222.jpg", "20221028_135217.jpg"];
    }
  }
  elseif (in_array($location, $c4_2)) {
    $corridor = "f1c4.2";
    if ($gender == "mens") {
      $instructions=["Head down the hallway towards rooms 126, 125, 128, and 129. All of these rooms should be on your right.", 
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["20221028_135111.jpg", "IMG_3220.jpg"];
    }
    else {
      $instructions=["Go up the stairs around the corner, or the lift. Go one floor up. The bathroom will be on your left."];
      $images = ["20221028_135217.jpg"];
    }
  }
  elseif (in_array($location, $c5)) {
    $corridor = "f1c5";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 104 and 107 on your left.",
      "Continue past rooms 110 and 113, which should be on your left.",
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["IMG_3214.jpg", "IMG_3217.jpg",  "IMG_3220.jpg"];
    }
    else {
      $instructions=["Go up the stairs in front of you, or the lift. Go one floor up. The bathroom will be on your left."];
      $images = ["20221028_135241.jpg"];
    }
  }
  elseif (in_array($location, $c6)) {
    $corridor = "f1c6";
    if ($gender == "mens") {
      $instructions=["Head down the hallway with rooms 104 and 107 on your left.",
      "Continue past rooms 110 and 113, which should be on your left.",
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["IMG_3214.jpg", "IMG_3217.jpg",  "IMG_3220.jpg"];
    }
    else {
      $instructions=["Go up the stairs in front of you, or the lift. The bathroom will be on your left."];
      $images = ["20221028_135241.jpg"];
    }
  }
  elseif (in_array($location, $c7)) {
    $corridor = "f1c7";
    if ($gender == "mens") {
      $instructions=["Room 136 should be on your right. Head to the main hallway, through the door.", 
      "While facing the stairs, turn right and head down towards rooms 125 and 126. 125 and 126 should be on your right.",
      "The bathroom is behind the stairs, and the entrance is on both the left and right side of the stairs."];
      $images = ["20221028_135615.jpg", "20221028_135111.jpg", "IMG_3220.jpg"];
    }
    else {
      $instructions=["Room 136 should be on your right. Head to the main hallway, through the door.",
      "Go up the stairs in front and to the right of you, or the lift. Go one floor up. The bathroom will be on your left."];
      $images = ["20221028_135615.jpg", "20221028_135241.jpg"];
    }
  }
  elseif (in_array($location, $c9)) {
    $corridor = "f1c9";
    $gender = "both";
    $instructions = ["Head away from the environmental sciences building, with room 148 and B105 on your right.",
    "Continue down the hallway past rooms 146, 145, 144, and 139.",
    "Go through the push doors to the chemical sciences building.",
    "The bathroom is on your left."];
    $images = ["IMG_3238.jpg", "IMG_3237.jpg", "door_to_chemical_sciences.png", "chemical_sciences.png"];
  }
  elseif (in_array($location, $c10_1)) {
    $corridor = "f1c10.1";
    $gender = "both";
    $instructions = ['Go up the stairs labeled "W1, W2, W3, W4."',
    "Go down the hallway into Otonabee college. The bathroom is on your right."];
    $images = ["IMG_3229.jpg", "20221028_140426.jpg"];
  }
  elseif (in_array($location, $c10_2)) {
    $corridor = "f1c10.2";
    $gender = "both";
    $instructions = ["Go through the push doors to the chemical sciences building.",
    "The bathroom is on your left."];
    $images = ["door_to_chemical_sciences.png", "chemical_sciences.png"];
  }
  elseif (in_array($location, $c11)) {
    $corridor = "f1c11";
    $gender = "both";
    $instructions = ["Head away from the environmental sciences building, with rooms 145, 144, and 139 on your left.",
    "Go through the push doors to the chemical sciences building.",
    "The bathroom is on your left."];
    $images = ["20221028_135746.jpg", "door_to_chemical_sciences.png", "chemical_sciences.png"];
  }
  
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

  //naming format: floor, corridor, gender, .jpg
  $corridor = $corridor.$gender.".jpg";
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
        <h1>Bathroom Finder</h1>
        <h2>Find the nearest bathroom</h2>
        <p>Enter the closest room number that you see to find the nearest bathroom.</p>
        <section id="bathroom">
          <form method="POST" action="bathroom.php">
              <div>
                <label for="gender">Which gender bathroom do you prefer:</label>
                <select name="gender" id="gender">
                  <option value="womens">Female</option>
                  <option value="mens">Male</option>
                </select>
              </div>
              <div>
                <label for="location">Closest Room:</label>
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
                    <option value="SC147">SC 147</option>
                    <option value="SC148">SC 148</option>
                    <option value="SC149">SC 149</option>
                    <option value="SC149.1">SC 149.1</option>
                    <option value="SC150">SC 150</option>
                    <option value="SC151">SC 151</option>
                    <option value="SC152">SC 152</option>
                    <option value="SC160">SC 160</option>
                    <option value="SC166">SC 166</option>
                    
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
              <button type="submit" id="sbmLoaction" name="sbmLocation">Find bathroom</button>
          </form>
          <h3>
            Navigating from: <?= !isset($location) ? "" : $location?>
          </h3>
          <img class="<?= !isset($corridor) ? "hidden" : ""?>" src="img/bathroom/<?= !is_null($corridor) ? htmlentities($corridor) : ""?>" alt="Map to nearest Bathroom">
          <!-- instructions go here -->
          <?php for ($i= 0; $i< count($instructions); $i++): ?>
            <div>
              <div>
              <b><?= $instructionstep.". " ?></b><?= $instructions[$i] ?>
              </div>
              <img src="img/bathroom/photos/<?= $images[$i]?>" alt="Step <?=$instructionstep?>" height="500">
              <?php $instructionstep++; ?>
            </div>  
          <?php endfor ?>
        </section>
      </main>
    </body>
</html>