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
            $res = $db->query("SELECT id FROM test ORDER BY id
            ASC");
            $res->data_seek(0);
            while ($row = $res->fetch_assoc()) {
             echo " id = " . $row['id'] . "\n";
            }
        ?>
    </div>
</body>
</html>