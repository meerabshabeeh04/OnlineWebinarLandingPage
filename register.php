<?php
include("db_con.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="css/register.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base">
        </div>
    </header>

    <?php
    $web_id = $_POST["web_id"];
    $query4 = "SELECT * FROM `webinar` WHERE `WEBINAR_ID`='$web_id'";
    $result4 = mysqli_query($con, $query4);
    $row4 = mysqli_fetch_array($result4);
    ?>

    <h1>Registeration for <?= $row4['TOPIC']?> Webinar</h1>

    <form class="border border-black" action="registered.php" method="get">
        <div class="row">
            <div class="col-6">
                <div class="inp">
                    <label><b>Full Name</b></label>
                    <input type="text" name="name" required/>
                </div>
            </div>
            <div class="col-6">
                <div class="inp">
                    <label><b>Email</b></label>
                    <input type="email" name="email" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="inp">
                    <label><b>Gender</b></label>
                    <select class="form-select" aria-label="Default select example" name="gender" required>
                            <option selected>Select Gender</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="inp">
                    <label><b>Phone Number</b></label>
                    <input type="number" name="number" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="inp">
                    <label><b>Qualification</b></label>
                    <select class="form-select" aria-label="Default select example" name="qualification" required>
                            <option selected>Select Qualification</option>
                            <option value="Matric">Matric</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Undergraduate">Undergraduate</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Masters">Masters</option>
                            <option value="PHD">PHD</option>
                    </select>
                </div>
            </div>
        </div>

        <input type="text" name="web_id" value="<?= $web_id?>" style="display:none"/>

        <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" name="submit" class="btn btn-success" >Register</button>
        </div>
    </form>

    <footer>
        <div class="bg-secondary bg-gradient opacity-75 text-center fw-bold fst-italic lh-base">
        </div>
    </footer>
</body>
</html>