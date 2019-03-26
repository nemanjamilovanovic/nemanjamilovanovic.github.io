<?php

/**
 *
 */
class Register
{
  public $con;
  public $error;
  public function __construct()
  {
    $this->con = new mysqli('localhost','root','','users');
    if ($this->con->connect_error) {
      die ('Unable to connect: '.$this->con->connect_error);
    }
  }
  public function insertData($username, $password)
  {
      $query = "SELECT * FROM users WHERE username='$username'";
      $result = $this->con->query($query);
      if ($result->num_rows > 0)
       {
          $this->error .= "<p>Username " .$username." already exists</p>";
       }
       else {
         $query = "INSERT INTO users (username, password) VALUES ('$username', '$password') ";
         $result = $this->con->query($query);
         header('Location: login.php');
       }
  }
  public function checkField($field)
  {
     $count = 0;
     foreach ($field as $key => $value)
     {
       if(empty($value))
       {
         $count++;
         $this->error .= "<p>". $key . " is required</p>";
       }
     }
     if ($count == 0)
     {
       return true;
     }
  }

 }
