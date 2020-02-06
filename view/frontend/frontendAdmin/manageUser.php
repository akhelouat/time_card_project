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
    <select name='amis'  id='amis' onchange="recupSelected(this.value);">
        <?php
        include '../../../model/dbconnect.php';
            $res = $db->query("SELECT nom, prenom, user FROM member INNER JOIN member_info ON member.id = member_id ORDER BY id
            ASC");
            $res->data_seek(0);
            while ($row = $res->fetch_assoc()) {
             ?> <a href='userPage.php?user="<?=$row['user'];?>"'>
             <?php echo " id = " . $row['id'] . "\n";?></a> <?php
            }
        ?>
    </div>
    <script type="text/javascript" src="../../../public/js/manageUser.js"></script>
</body>
</html>