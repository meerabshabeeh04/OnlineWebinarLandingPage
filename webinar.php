<?php
include("db_con.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webinar Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/webinar.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base">
        </div>
    </header>

    <?php
    $web_id = $_GET["id"];

    $query2 = "SELECT * FROM `webinar` WHERE `WEBINAR_ID`='$web_id'";
    $result2 = mysqli_query($con, $query2);

    $query3 = "SELECT * FROM `webinar_topics` WHERE `WEBINAR_ID`='$web_id'";
    $result3 = mysqli_query($con, $query3);

    $row2 = mysqli_fetch_array($result2);
    ?>
    <h1 class="shadow-lg p-3 mb-5 bg-body-tertiary rounded web-heading"><?= $row2['TOPIC']?></h1>

    <div id="intro">
        <?= $row2['INTRODUCTION']?>
    </div>

    <div class="info">
    <div class="row">
    <div class="col-6 web-info">
        <p class="card-text"><b>Date : </b><?= $row2['DATE']?></p>
        <p class="card-text"><b>Time : </b><?= $row2['TIME']?></p>
        <p class="card-text"><b>Duration : </b><?= $row2['DURATION']?> hours</p>
    </div>
    <div class="col-6 web-info">
    <img src="<?= $row2['IMAGE']?>" class="img-fluid rounded-start" alt="image">
    </div>
  </div>
    </div>

    <hr/>

    <h2><i>Schedule</i></h2>
    <div class="row schedule border border-black">
        <div class="col-8 sch-head">
            <h3>Topic</h3>
        </div>
        <div class="col-4 sch-head">
            <h3>Duration</h3>
        </div>
    </div>
    <?php
    while ($row3 = mysqli_fetch_array($result3)) {
        ?>
        <div class="row">
        <div class="col-8">
            <p><?= $row3['TOPIC']?></p>
        </div>
        <div class="col-4">
            <p><?= $row3['DURATION']?></p>
        </div>
    </div>
        <?php
    }
    ?>

<hr/>

<form action="register.php" method="post">
    <input type="text" name="web_id" value="<?=$row2['WEBINAR_ID']?>"/>
<div class="d-grid gap-2 col-6 mx-auto">
<button type="submit" class="btn btn-success">Register</button>
</div>
</form>

<hr/>

<footer>
<div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base">
        </div>
</footer>
    
</body>
</html>