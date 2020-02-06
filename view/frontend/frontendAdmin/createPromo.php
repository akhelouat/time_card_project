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
        <form action="POST" action="checkPromo.php">
            <label for="promo"> promo:</label>
            <input type="text" name="promo">
            <button>send</button>
        </form>
        <h2>promo list:</h2>
        <?php
            $res = $db->query("SELECT nom, prenom, user FROM member INNER JOIN member_info ON member.id = member_id ORDER BY id
            ASC");
            $res->data_seek(0);
            while ($row = $res->fetch_assoc()) {
             ?> <a href='userPage.php?user="<?=$row['user'];?>"'>
             <?php echo " id = " . $row['id'] . "\n";?></a> <?php
            }
        ?>
    </div>
</body>
</html>