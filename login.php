<?php
include 'header.inc';
?>

<h1>Login Form</h1>

<?php
if (isset($_GET['error'])) 
{
    echo '<p>Invalid username or password.</p>';
}
?>

<form action="process.php" method="post">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <br><br>

    <input type="hidden" name="token" value="J106729071">

    <input type="submit" value="Login">

</form>

<?php
include 'footer.inc';
?>
