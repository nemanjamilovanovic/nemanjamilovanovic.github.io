<?php
session_start();
if (!isset($_SESSION['username']))
{
	header('Location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
<?php include 'header.php'; ?>
<!--Content -->
<div class="container">
	<div class="continer center">
	<h2> Ovo je sadrzaj</h2>
	<p>A ovde cemo da pisemo sta cemo da radimo</p>
</div>
  <img class="img1" src="images/maths.jpg" alt="This is image">
  <hr>

  <div class="cont2">
    <h2> Proba </h2>

  </div>

</div>
<div class="container">
<?php include 'footer.php' ?>
</div>
</body>
</html>
