<?php
/* $bdd = new PDO('mysql:host=localhost;dbname=abdel', 'root','');
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
}*/

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>OHA Presence</title>
  </head>
  <body>
    <h1>Hello, user!</h1>

<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
  <label class="custom-control-label" for="defaultChecked2">I'am in OHA</label>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>