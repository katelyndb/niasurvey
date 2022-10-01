<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='.//css/main.css'>
    
    <title>Nia's Survey!</title>
</head>
<body>
    <header><h1> Nia's Survey!</h1><hr></header>
    <main>
    <form method="post">
        <input type="submit" class="button" name="songsbutton" value="Show Songs"<?php if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['songsbutton'])) { ?> style="display: none" <?php } ?> />
        <input type="submit" class="button" name="colorsbutton" value="Show Colors"<?php if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['colorsbutton'])) { ?> style="display: none" <?php } ?> />
    </form>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . './niasurvey/populate.php'; ?>
    </main>
    <footer> <hr> </header>
    
</body>
</html>