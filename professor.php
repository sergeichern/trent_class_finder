<?php
require('includes/library.php');
$pdo = connectdb();

$name = $_POST['profname'] ?? null;

//initialize empty so we cannot see it on the page
$results = array();
if (isset($_POST['sbmName'])) {
    $query = "SELECT * FROM cois3850_index WHERE Name LIKE ?";
    $stmt = $pdo -> prepare($query);
    $finalname = "%".$name."%";
    $stmt -> execute([$finalname]);
    $results = $stmt-> fetchall();
}
?>

<!DOCTYPE html>
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
            <h1>Find your Professor's Office</h1>
            <form method="POST" action="professor.php">
                <label for="profname">Search by Name:</label>
                <input type="text" id="profname" name="profname">
                <button type="submit" id="sbmName" name="sbmName">Find Faculty Member</button>
            </form>
            <?php foreach($results as $row): ?>
                <div class="prof_search">
                    <h3><?=$row['Name']?></h3>
                    <p>Role: <?=$row['Role']?></p>
                    <p>Department: <?=$row['Department']?></p>
                    <p>Location: <?=is_null($row['Location']) ? "No office" : $row['Location']?></p>
                    <p>Phone Extension: <?=$row['Phone']?></p>
                    <p><a href="mailto:<?=$row['Email']?>"><?=$row['Email']?> </a></p>
                    <img src="img/prof_offices/<?= $row['img'] ?>.jpg" alt="Location of <?= $row['Name'] ?>" width="500" <?= (is_null($row['img'])) ? "hidden" : "" ?>>
                </div>
            <?php endforeach?>
            <h2>View by Building</h2>
            <a href="sc.php"><div id="prof">Science Complex<div></a>
        </main>
    </body>
</html>
