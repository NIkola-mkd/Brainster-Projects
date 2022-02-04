<?php

include 'connection.php';

//select from academies to create a dropdown option 
$academyQuery = "SELECT *
 FROM `academy`;";

$academies = mysqli_query($connect, $academyQuery);
$options = "";

while ($row = mysqli_fetch_array($academies)) {
    $options = $options . "<option name =  '" . $row['id'] . "'  >$row[1]</option>";
}

// mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="mk">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.min.css" />
    <link rel="icon" href="../images/TabLogo.png" />
    <title>BrainsterLabs</title>
    <style>
        .h-f {
            height: 100vh;
        }

        ::-webkit-input-placeholder {
            font-style: italic;
        }

        :-moz-placeholder {
            font-style: italic;
        }

        ::-moz-placeholder {
            font-style: italic;
        }

        :-ms-input-placeholder {
            font-style: italic;
        }

        @media (max-width:425px) {
            .h-f {
                height: 100%;
            }

        }
    </style>
</head>

<body>
    <!-- navbar menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning px-5 py-3">
        <a href="../index.html">
            <img class="logo mr-5" src="../images/Logo.png" alt="logo" />
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto font-weight-bold">
                <li class="nav-item ml-5">
                    <a class="nav-link navlink" href="https://marketpreneurs.brainster.co/" target="_blank">
                        Академија за маркетинг
                    </a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link navlink" href="https://codepreneurs.brainster.co/" target="_blank">
                        Академија за програмирање
                    </a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link navlink" href="https://datascience.brainster.co/" target="_blank">
                        Академија за data science
                    </a>
                </li>
                <li class="nav-item ml-5">
                    <a class="nav-link navlink" href="https://design.brainster.co/" target="_blank">
                        Академија за дизајн
                    </a>
                </li>
            </ul>
            <!-- <button class="btn btn-outline-danger bg-danger my-2 my-sm-0" type="submit"> -->
            <!-- <a href="form/clients.php" class="text-white">Вработи наш студент</a> -->
            <!-- </button> -->
        </div>
        <!-- collapse responsive  -->
        <div id="responsiveSidebar" class="mysidebar d-lg-none">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a class="nav-link navlink" href="https://marketpreneurs.brainster.co/" target="_blank">
                Академија за маркетинг
            </a>
            <a class="nav-link navlink" href="https://codepreneurs.brainster.co/" target="_blank">
                Академија за програмирање
            </a>
            <a class="nav-link navlink" href="https://datascience.brainster.co/" target="_blank">
                Академија за data science
            </a>
            <a class="nav-link navlink" href="https://design.brainster.co/" target="_blank">
                Академија за дизајн
            </a>
            <!-- <button class="btn btn-outline-danger bg-danger ml-3 my-3 px-3" type="submit"> -->
            <!-- <a href="form/clients.php" class="text-white">Вработи наш студент</a> -->
            <!-- </button> -->
        </div>
        <div id="navResponsive" class="d-lg-none">
            <button class="openbtn" onclick="openNav()">
                <img src="../images/bar-chart-fill.svg" alt="" />
            </button>
        </div>
    </nav>
    <!-- form -->
    <div class="container-fluid bg-warning h-f ">
        <div class="container py-5">
            <h1 class="font-weight-bolder text-center py-5">Вработи студенти</h1>
            <form action="data.php" method="POST">
                <div class="row py-md-5">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name"><b>Име и презиме</b></label>
                            <input name="name" type="text" class="form-control" placeholder="Внесете име и презиме" required maxlength="64">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="company"><b>Име на компанија</b></label>
                            <input name="company_nam" type="text" class="form-control" placeholder="Имe на вашата компанија" required maxlength="64">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="form-group">
                            <label for="contact"><b>Контакт имејл</b></label>
                            <input name="email" type="email" class="form-control" placeholder="Контакт имејл на вашата компанија" required maxlength="32">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tel"><b>Контакт телефон</b></label>
                            <input name="number" type="number" class="form-control" placeholder="Контакт телефон на вашата компанија" required maxlength="20">
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <label for="academyName"><b>Тип на студент</b></label><br>
                        <select class="form-control" name="academyName" required>
                            <option value="" disabled selected><b>--Изберете тип на студент--</b></option>
                            <?php echo $options;
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 ">
                        <label for="send"></label><br>
                        <input name="send" type="submit" class="btn btn-danger btn-outline-danger text-light btn-block" value="ИСПРАТИ">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
    <div class="container-fluid bg-dark text-center p-4">
        <div class="container text-white">
            <p class="h5">Изработено со &#10084; од студентите на Brainster</p>
        </div>
    </div>

    <!-- scripts -->
    <script src="../scripts/navResponsive.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>