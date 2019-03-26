<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    <div id="id01" class="login-form">
      <form class="modal-login animate" action="login.php">
        <div class="img-container">
          <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>
          <img src="fb.png" alt="Avatar" class="avatar">
        </div>

        <div class="container1">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>

          <button type="submit" name="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember">Remember me
          </label>
        </div>
        <div class="container1" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancel</button>
          <span class="psw">Forgot<a href="#">password?</a></span>
        </div>
      </form>
    </div>
  <script>
  // get the Modal
  var modal = document.getElementById('id01');

   // when user click outside of modal close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

  </body>
</html>
