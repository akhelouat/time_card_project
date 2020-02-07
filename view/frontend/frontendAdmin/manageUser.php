<?php
// Title
$titlePage = "Manage User";

//Requires & includes

include('../../model/dbconnect.php');
require('../menu.php');
require('../header.php');
//db queries
echo "q";
$res = $db->query("SELECT name, promo_id FROM promo ORDER BY promo_id DESC");
echo "a";
$res->data_seek(0);

?>
<div>

<select name='promo'  id='promo' onchange="recupSelected(this.value);">
<?php

 while ($row = $res->fetch_assoc()) {?>
    <option value='<?=$row['promo_id']?>'><?=$row['nom']?></option>
    <?php
}
?>
</select>

<?php
if(isset($_GET['promo']))
{
    $user = $db->query("SELECT lastname, firstname FROM member_info INNER JOIN member ON member_info.member_id = member.member_id INNER JOIN promo ON member.promo_id=promo.promo_id WHERE promo.name=". $_GET['promo']." ORDER BY member.member_id DESC");
    $user->data_seek(0);
    ?>
    <h2>user: </h2>
    <?php
    while ($row = $res->fetch_assoc()) {
        echo $row['lastname']." ".$row['lastname']."</br>";
    }
}
?>

</div>
<script type="text/javascript" src="../../public/js/manageUser.js"></script>

<?php require('../footer.php')?>
