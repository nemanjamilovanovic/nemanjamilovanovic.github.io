<?php include $_SERVER['DOCUMENT_ROOT']."/database/registerClass.php";
$register = new Register;
$message = '';

if(isset($_POST['register']))
{
  $field = array(
    'username' => $_POST['username'] ,
    'password' => $_POST['password']
  );
  if ($register->checkField($field))
  {
    if($register->insertData($field['username'], $field['password']))
    {
      header('Location: login.php');
    }

    else {
    $message = $register->error;
    }
  }
else
 {
  $message = $register->error;
 }
}

  ?>



<!DOCTYPE html>
<html lang="en">
  <?php include 'head.php'; ?>
  <body>
    <?php include 'header.php'; ?>
    <div class="container center">

      <h2>Register</h2>
      <?php
      if (isset($message))
      {
        echo "<label class='danger'>".$message."</label>";
      }
      ?>
     <form  method="post">
       <label>Username</label>
       <input type="text" name="username" class="form-control"></br>
       <label>Password</label>
       <input type="password" name="password" class="form-control"></br>
       <input type="submit" name="register" value="Register" class="btn btn-info">

     </form>

 </div>
     <div class="container">
     <?php include 'footer.php' ?>
     </div>
  </body>
</html>
