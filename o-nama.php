<?php
session_start();
if (!isset($_SESSION['username']))
{
	header('Location: login.php');
}

?>

<!DOCTYPE html>
<htm lang="en">
  <?php include 'head.php'; ?>

<body>
<?php include 'header.php'; ?>
<!--Content -->
<div class="container center">
	<h2 class="h2-center">About us</h2>
	<p>Here is text about us</p>
  <div class="tv">


</div>
<div class="opis"></div>
<div class="container">
<?php include 'footer.php' ?>
</div>
</body>
</html>
