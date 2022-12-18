<?php
 require('partials/db_connectivity.php');
//  $password = $_POST['password'];
$email = $_POST['email'];
    $sql = "SELECT img_url FROM data WHERE email='$email'";
    $res = mysqli_query($conn,$sql);
    if(!$res){
     die("Failed to display");   
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
    <link rel="stylesheet" href="style-second.css">
    <script language="javascript"></script>
    <script>
    // let z=x;
    //    let x=0;
    //         function firstpartyvote() {

    //     document.getElementById("demo").innerHTML = 
    //         x++;
    //         let z=x;
    // }
    </script>
</head>

<body id="main-body">
    <h1 class="text-center my-5">
        Online voting System
    </h1>
    <div class="align-row">
        <!-- first section  -->
        <div class="first-sec">
            <div class="firstsec container card-center">
                <div class="card container bg-light card1" style="width: 18rem;">
                    <?php 
            while($row = mysqli_fetch_array($res)){
            echo "<img src='uploads/$row[0] ' class='card-img-top' alt='...' height='300px' width='200px'>";
            }?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "$email";?></h5>
                        <p class="card-text">
                            other info. of the user
                        </p>
                        <!-- <a href="#" class="btn btn-primary">vote</a> -->
                        <!-- <</p> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- first section  finished-->
        <!-- second section  -->
        <div class="secondsec container ">
            <div class="party-div">
                <div class="box ">
                    <div class="image-btn ">
                        <img src="uploads/conngress-party.jpg" alt="" width="100px" height="100px" class="party-img" >
                    </div>
                    <div class="content">
                        <p>Congress</p>
                        <p>Party tag line</p>
                    </div>
                </div>
                <!-- <hr> -->
                <div class="vote-btns mx-5 ">
                    <!-- <p class="voting-number">S</p> -->
                    <!-- <input type="number"> -->

                    <p id="demo" class="first-party-input mx-1 input-comming text-center"></p>
                    <script>
                    let x = 1;

                    function firstpartyvote() {

                        document.getElementById("demo").innerHTML =
                            x++;
                        let z = x;
                    }
                    </script>
                    <!-- <p id="first-party">
                    
                </p> -->
                    <button class="vote-btn mx-5" onclick="firstpartyvote()">Vote</button>
                </div>
            </div>


            <div class="party-div">
                <div class="box ">
                    <div class="image-btn ">
                        <img src="uploads/bjp-party.png" alt="" width="100px" height="100px" class="party-img">
                    </div>
                    <div class="content">
                        <p>BJP</p>
                        <p>Party tag line</p>
                    </div>
                </div>
                <!-- <hr> -->
                <div class="vote-btns mx-5 ">
                    <!-- <p class="voting-number">S</p> -->
                    <p id="demo1" class="first-party-input mx-1 input-comming text-center"></p>
                    <script>
                    let y = 1;

                    function secondpartyvote() {
                        document.getElementById("demo1").innerHTML =
                            y++;
                        let z = y;
                    }
                    </script>
                    <button class="vote-btn mx-5" onclick="secondpartyvote()">Vote</button>
                </div>
            </div>


            <div class="party-div">
                <div class="box ">
                    <div class="image-btn ">
                        <img src="uploads/aapki-party.jpg" alt="" width="100px" height="100px" class="party-img">
                    </div>
                    <div class="content">
                        <p>Apni Party</p>
                        <p>Party tag line</p>
                    </div>
                </div>
                <!-- <hr> -->
                <div class="vote-btns mx-5 ">
                    <!-- <p class="voting-number">S</p> -->

                    <p id="demo2" class="first-party-input mx-1 input-comming text-center"></p>
                    <script>
                    k = 1;

                    function thirdpartyvote() {
                        document.getElementById("demo2").innerHTML =
                            k++;
                        let z = k;
                    }
                    </script>
                    <button class="vote-btn mx-5" onclick="thirdpartyvote()">Vote</button>
                </div>
            </div>
        </div>
        <!-- second section  -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    < /body>

    <
    /html>