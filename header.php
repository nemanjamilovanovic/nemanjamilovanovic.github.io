<?php
if (isset($_SESSION['username'])) {
  $logout = 'Logout';
}
else {
  $logout ='';
}
?>
<div class="container" id="cover">
</div>
<div class="container">
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-logo" href="index.php"><img class="imglogo" src="logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="o-nama.php">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Tests for exams
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakti.php">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registerform.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><?php echo $logout;?></a>
        </li>
      </ul>
    </div>
  </nav>
</div>
