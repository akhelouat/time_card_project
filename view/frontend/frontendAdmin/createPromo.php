<?php
// Title
$titlePage = "Create promo";

//Requires
require('../../../model/dbconnect.php');
include('../menu.php');
require('../header.php');

// db Queries
$res = $db->query('SELECT * FROM promo');
 
function getPromo($promoArr)
{
    while ($row = $promoArr->fetch()) 
    {
        echo '<li class="list-group-item list-group-item-secondary"><a href="manageUser.php?promo='.$row['promo_id'].'">' . $row['name'] . '</a></li>';
    }
}
?>

<!-- Grid container -->
<div class="row col-md-12">

    <!-- Form checkPromo -->
    <form action="POST" class="form col-md-2" action="checkPromo.php">
        <h2>Add promo:</h2>
        <input class="form-control" type="text" name="promo">
        <button class=" mt-2 btn btn-primary">send</button>
    </form>

    <div class="col-md-10"></div>

    <!-- Promo list -->
    <div class="container col-md-2">
        <h2>Promo list:</h2>
        <ul class="list-group d-flex flex-column justify-content-start">
            <?php getPromo($res) ?>
        </ul>
    </div>

    <div class="col-md-10"></div>
    
</div>
<?php require('../footer.php')?>