<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  // step:1 include the database connectivity file if the form method is post 
  require('partials/db_connectivity.php');
 
            //  inserting the info. of the form into the database using mysqli   
            $password = $_POST['password'];
            $email = $_POST['email'];
            // $sql = "SELECT * from data where email='$email' ";
            $sql1="SELECT * FROM `data` WHERE email='$email' AND pass='$password'";
            // // $sql = "SELECT * FROM `data` WHERE `email` = '$email'";
            $result = mysqli_query($conn,$sql1);
                    $num = mysqli_num_rows($result);
                if($num==1){
                    while($row=mysqli_fetch_assoc($result)){
                    header("location:main-page.php");
                    }
                }
                else{
                    echo '<script>alert("Sorry! The information is invalid.")</script>';
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
    <div class="form1">
        <form action="/votingsystem/main-page.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <p class="my-2 ">New user? <a href="signup.php">Signup</a> </p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
 
</body>

</html>