<?php
include("db_con.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/registered.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $gender = $_GET["gender"];
    $phno = $_GET["number"];
    $qual = $_GET["qualification"];
    $web_id = $_GET["web_id"];
    $query5 = "INSERT INTO `user_`(`EMAIL`, `GENDER`, `NAME`, `PH_NO`, `QUALIFICATION`) VALUES ('$email','$gender','$name','$phno','$qual')";
    $result5 = mysqli_query($con, $query5);
    $query6 = "SELECT `USER_ID` FROM `user_` WHERE `EMAIL`='$email' AND `GENDER`='$gender' AND `NAME`='$name' AND `PH_NO`='$phno' AND `QUALIFICATION`='$qual'";
    $result6 = mysqli_query($con, $query6);
    $row6 = mysqli_fetch_array($result6);
    $user_id = $row6["USER_ID"];
    $query7 = "INSERT INTO `webinar_user`(`USER_ID`, `WEBINAR_ID`) VALUES ('$user_id','$web_id')";
    $result7 = mysqli_query($con, $query7);
    ?>
    <header>
        <div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base">
        </div>
    </header>

    <div class="text-center image-div">
  <img src="images/tick.webp" class="rounded img-thumbnail" alt="image">
    </div>

    <hr/>

    <h2>Thank You!</h2>
    <hr/>
    <h3>You have Successfully Registered for this Webinar!</h3>

    <hr/>
    <hr/>
    <hr/>
    <hr/>
    <hr/>
    <hr/>
    <hr/>
    <hr/>
    <hr/>
    <hr/>
    <hr/>
    
    <footer>
        <div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base">
        </div>
    </footer>
</body>
</html>