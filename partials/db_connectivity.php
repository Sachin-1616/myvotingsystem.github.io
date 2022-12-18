<?php
// connecting the database 
$servername="localhost";
$username="root";
$password="";
$database="votingsystem";

// creating the connection 
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("<div class='alert alert-danger alert-dismissible  fade show' role='alert'>
    <strong>Failed!</strong> Your have enter a wrong information.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>");
}


?>