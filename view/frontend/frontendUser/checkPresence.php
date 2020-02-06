<?php
// Title
$titlePage = "Présence";

//Requires
require('../header.php');
?>

<!-- Table container -->
<div class="container p-3">
     <table class="table table-dark">
          <thead>
               <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Is Present</th>
               </tr>
          </thead>
          <tbody>
               <tr>
                    <th scope="row">1</th>
                    <td>Abdel</td>
                    <td>Talk</td>
                    <td>Yes, but late (9:30AM)</td>
                    <td><?= date("j F Y, g:i a")?></td>
               </tr>
          </tbody>
     </table>
</div>

<!-- send Presence form container -->
<form class="container border border-dark bg-dark text-light p-3" action="success.php" method="POST">
     <!-- Check input -->
     <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="check">
          <label class="form-check-label" for="check">I'm present</label>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary">Send</button>
</form>

<?php require('../footer.php')?>