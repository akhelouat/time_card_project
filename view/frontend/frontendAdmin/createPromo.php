<?php
// Title
$titlePage = "New User";

//Requires

include('../menu.php');
require('../header.php');
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=timecard', 'root','');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
require('../footer.php')?>
<div>
    <form action="POST" action="checkPromo.php">
        <label for="promo"> promo:</label>
        <input type="text" name="promo">
        <button>send</button>
    </form>
    <h2>promo list:</h2>
    <?php
     $res = $bdd->query('SELECT * FROM promo ');
       while ($row = $res->fetch()) 
        {
            echo '<p><a href="#">' . $row['name'] . '</a></p>';
        }
    ?>
</div>
<?php require('../footer.php')?>