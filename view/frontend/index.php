<?php
// Title
$titlePage = "Login";

//Requires
require('header.php');
?>

<!-- Login form container -->
<form class="container" action="frontendUser/checkPresence.php" method="POST">
    <!-- User input -->
    <div class="form-group">
        <label for="usr">Username</label>
        <input type="text" class="form-control" id="usr" name="user" required>
    </div>

    <!-- Password input -->
    <div class="form-group">
        <label for="passw">Password</label>
        <input type="password" class="form-control" id="passw" name="password" required>
    </div>

    <!-- Check input -->
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="check">
        <label class="form-check-label" for="check">Remember me</label>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary">login</button>
</form>

<?php require('footer.php')?>