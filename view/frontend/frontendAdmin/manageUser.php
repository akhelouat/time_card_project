<?php
// Title
$titlePage = "Manage User";

//Requires & includes

include('../../model/dbconnect.php');
require('../menu.php');
require('../header.php');

//db queries
$res = $db->query("SELECT nom FROM promo ORDER BY id DESC");
?>
<div>

<select name='amis'  id='amis' onchange="recupSelected(this.value);">
    <option value='mizrahi'>$list_ami[0]</option>
    <option value='johan'>$list_ami[1]</option>
</select>

<div>
<h2> </h2>        
</div>
</div>
<script type="text/javascript" src="../../../public/js/manageUser.js"></script>

<?php require('../footer.php')?>
