<?php
$bdd = new PDO('mysql:host=localhost;dbname=abdel', 'root','');
$error = 1;
$response = $bdd->query('SELECT pseudo, password FROM membre ');
session_start();
if (!isset($_SESSION['connect']) || $_SESSION['connect'] == false)
{
   while ($data = $response->fetch())
   {
       if ($_POST['pseudo'] == $data['pseudo']) {
           if ( $_POST['password'] == $data['password'])
           {
               $error= 0;
           }
           else
           {
            header('Location: index.php?error=2');
            exit;
           }
       }
   }
   $response->closeCursor();
   if ( $error == 1 )
   {
    header('Location: index.php?error=1');
    exit;
   }  
   $_SESSION['connect'] = true;
   $_SESSION['pseudo'] = $_POST['pseudo'];
   $_SESSION['password'] = $_POST['password'];
}
else
{
    
    while ($data = $response->fetch())
    {
        if ($_SESSION['username'] == $data['username']) {
            if ( $_SESSION['password'] == $data['password'])
            {
                $error= 0;
            }
        }
    }
    $response->closeCursor();

}
if ( $error == 1 )
{
 header('Location: welcome.php?error=1');
 exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="components/style.css">

    <meta charset="UTF-8">
    <title>Présence</title>
</head>
<body>
<?php include('components/header.php'); ?>    
<main>
     <div id="check">
         <div id="nom"> <!-- affiche le pseudo -->
         <p>Bienvenu <?php echo $_SESSION['pseudo'] ?></p>
         </div>
         <div id="actualDate"> <!-- affiche la date du jour et l'heure -->
         <p>On est le <?php echo date('Y-m-d H:i'); ?></p>
         </div>
         <div id="signature"> <!-- cases à cocher -->
         <input class="increase" type="checkbox">
         <input class="increase" type="checkbox"> 
         <input class="increase" type="checkbox">  
         </div>
     </div>
</main>
<?php include('components/footer.php'); ?>    
</body>
</html>