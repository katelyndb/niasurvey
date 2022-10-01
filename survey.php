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
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . './niasurvey/populate.php'; ?>
        <p>Hi </p>
        
        <form method="post">
        <input type="submit" class="button" name="popbutton" value="Populate Data" />
        </form>
        <!-- <php include 'CONTENTNAME'; ?></header> -->
    </main>
    <footer> <hr> </header>
    
</body>
</html>