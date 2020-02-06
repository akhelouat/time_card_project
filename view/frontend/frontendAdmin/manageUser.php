<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Promo</title>
</head>
<body>
    <div>
    
        <?php
        include '../../../model/dbconnect.php';
            $res = $db->query("SELECT nom FROM promo ORDER BY id DESC");
            
        ?>
        <select name='amis'  id='amis' onchange="recupSelected(this.value);">
            <option value='mizrahi'>$list_ami[0]</option>
		    <option value='johan'>$list_ami[1]</option>
		</select>

        <div>
        <h2> </h2>        
        </div>
    </div>
    <script type="text/javascript" src="../../../public/js/manageUser.js"></script>
</body>
</html>