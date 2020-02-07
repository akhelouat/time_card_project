<?php
// Title
$titlePage = "Manage User";

//Requires & includes
include('../../../model/dbconnect.php');
require('../menu.php');
require('../header.php');
//db queries
$res = $bdd->query('SELECT * FROM members WHERE promo_id=' . $_GET['promo'] . '');
while ($row = $res->fetch()) {
    echo '<p>' . $row['username'] . '</p>';
}

?>
<div>

<?php


?>
</div>
<script type="text/javascript" src="../../public/js/manageUser.js"></script>

<?php require('../footer.php')?>
