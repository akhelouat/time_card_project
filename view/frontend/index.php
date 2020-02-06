<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OHA Présence</title>
    <link rel="stylesheet" href="components/style.css">
</head>
<body>
<?php include('components/header.php'); ?>
    <main>
        <form action="presence.php" method="post">
            <label>Pseudo<input name="pseudo" type="text"></label>
            <label>Mot de passe<input name="password" type="password"></label>
            <input type="submit" value="Se connecter">
        </form>
        <?php 
        if(isset($_GET['error']))
        {
            if($_GET['error'] == 1)
            {
                 echo "<p>Pseudo introuvable</p>";
            }
            elseif($_GET['error'] == 2)
            {
                echo "<p>mot de passe incorrect</p>";
            }
        }
        ?>
    </main>
    <?php include('components/footer.php'); ?>

</body>
</html>