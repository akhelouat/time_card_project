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
?>
<div>
    <form action="POST" action="checkPromo.php">
        <label for="promo"> promo:</label>
        <input type="text" name="promo">
        <button>send</button>
    </form>
    <h2>promo list:</h2>
    <?php
        $res = $db->query("SELECT nom, prenom, user FROM member INNER JOIN member_info ON member.id = member_id ORDER BY id
        ASC");
        while ($row = $res->fetch()) 
        {
            ?> <a href='userPage.php?user="<?=$row['user'];?>"'>
            <?php echo " id = " . $row['id'] . "\n";?></a> <?php
        }
    ?>
</div>
<?php require('../footer.php')?>
