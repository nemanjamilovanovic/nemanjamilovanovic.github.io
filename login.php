<?php
include $_SERVER['DOCUMENT_ROOT']."/database/loginClass.php";
session_start();
$data = new Database;
$message = '';
if (isset($_POST['login']))
{
  $field = array(
    'username' => $_POST['username'],
    'password' => $_POST['password']
  );
  if($data->required_validation($field))
  {
    if($data->can_login('users', $field))
    {
      $_SESSION['username'] = $_POST['username'];
      if(isset($_SESSION['username'])) {
        header('location:index.php');
      }
    }
    else
    {
      $message = $data->error;
    }
  }
  else
  {
    $message = $data->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'head.php' ?>
  <body>
    <?php include 'header.php' ?>
    <div class="container center">

    	<h2> Login</h2>
      <?php
      if (isset($message))
      {
        echo "<label class='danger'>".$message."</label>";
      }
      ?>
      <form method="post">
        <label>Username</label>
        <input type="text" name="username" class="form-control"></br>
        <label>Password</label>
        <input type="password" name="password" class="form-control"></br>
        <input type="submit" name="login" value="Login" class="btn btn-info">
      </form>

    </div>
    <div class="container">
    <?php include 'footer.php' ?>
    </div>

  </body>
</html>
