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
	<h2>Contacts</h2>
	<p class="fb-p"><img class="fblogo" src="fb.png" alt="fb">
    <a href="https://www.facebook.com">Find us on Facebook.</a>
   </p>
   <p>You can contact us on email: info@tanjomatika.com</p>
</div>
<div class="opis"></div>
<div class="container">
<?php include 'footer.php' ?>
</div>
</body>
</html>
