<?php
 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  // step:1 include the database connectivity file if the form method is post 
 require('partials/db_connectivity.php');
//  inserting the info. of the form into the database using mysqli   
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $confirmpass = $_POST['cpassword'];
// step : 3   checking wgere the gmail enterd in the form is already exists or not 
    $existsql = "SELECT * FROM `data` WHERE email = '$email'";
    $result = mysqli_query($conn,$existsql);
    $numexistrows = mysqli_num_rows($result);
    if($numexistrows > 0)
    {
      echo '<script>alert("Sorry! This E-mail is already been used")</script>';
    }
    else
    {
// step :2 checking wether the password and the confirmpassword both are same or not 
    if(($pass == $confirmpass))
    {
      $imgname = $_FILES["uploading"]["name"];
        $sql = "INSERT INTO `data` (`email`, `pass`, `cpass`, `img_url`, `tstamp`) VALUES ('$email', ' $pass', '$confirmpass', '$imgname ', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploading"]["name"]);
$uploadOK = 1;
if($uploadOK == 0){
    echo "Sorry,Your file was not  uploaded";
}
else {
  if (move_uploaded_file($_FILES["uploading"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["uploading"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
          if($result)
          {
            echo '<script>alert("Your Account has been created");location="login.php";</script>';
          }
    }
      else
      {
        echo '<script>alert("Sorry! Password do not match")</script>';
      }
    }

      
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Voting System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body id="body">
  <h1 class="text-center my-5">
    Online voting System
  </h1>

 
  <div class="form1 container">
    <form action="/votingsystem/siGnup.php" method="post" enctype="multipart/form-data">
    <!-- <form action="echo $_SERVER['PHP_SELF']" method="post" enctype="multipart/form-data"> -->
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword">
      </div>
      <div class="mb-3">
        <label for="uploading" class="form-label">Upload Your Photo</label>
        <input type="file" class="form-control" id="uploading" name="uploading">
        <!-- <input type="submit" class="my-2" value="Upload Image" name="submit"> -->
      </div>

      <button type="submit" class="btn btn-primary" onclick="myFunction()">Signup</button>
      <p class="my-2 ">Already have Account <a href="login.php">Login</a> </p>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>