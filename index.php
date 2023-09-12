<?php
include "db_con.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base">
            <p class="main-heading">In a search of webinar?</p>
            <p class="main-heading">We've got you!</p>
        </div>
        <hr/>
        <h1><i>Register yourself here for an upcoming Webinar!</i></h1>
        </header>
        <hr/>
        <?php
        $query1 = "SELECT * FROM `webinar`";
        $result1 = mysqli_query($con, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        ?>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="webinar.php?id=<?= $row1['WEBINAR_ID'] ?>"><img src="<?= $row1['IMAGE']?>" class="d-block w-100" alt="img"></a>
      <div class="carousel-caption d-none d-md-block">
      <a href="webinar.php?id=<?= $row1['WEBINAR_ID'] ?>"><h5 class="text-bg-secondary p-3"><i><?= $row1['TOPIC'] ?></i></h5></a>
      </div>
    </div>
        <?php
        while ($row = mysqli_fetch_assoc($result1)) {
            ?>
            
    <div class="carousel-item">
    <a href="webinar.php?id=<?= $row['WEBINAR_ID'] ?>"><img src="<?= $row['IMAGE']?>" class="d-block w-100" alt="img"></a>
      <div class="carousel-caption d-none d-md-block">
      <a href="webinar.php?id=<?= $row['WEBINAR_ID'] ?>"><h5 class="text-bg-secondary p-3"><i><?= $row['TOPIC'] ?></i></h5></a>
      </div>
    </div>
    
            <?php
        }
        ?>
        </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<hr/>

<footer>
<div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base" style="height: 100px;">
        </div>
</footer>

</body>
</html>