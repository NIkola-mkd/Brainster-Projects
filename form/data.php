<?php
include 'connection.php';


if (isset($_POST['send'])) {
    //form inputs
    $name =  $_POST['name'];
    $company_nam = $_POST['company_nam'];
    $email =  $_POST['email'];
    $number = $_POST['number'];
    $academyName = $_POST['academyName'];

    //insert to database
    $toDataBase = "INSERT INTO `client_reg` (`name`,`company_nam`,`email`,`number`,`academy_student`) VALUES ('$name','$company_nam','$email','$number','$academyName')";
}
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
        p {
            font-size: 20px;
        }

        .h-f {
            height: 100vh;
        }

        .fa-check {
            color: green;
            font-size: 50px;
        }

        .fa-exclamation-circle {
            color: red;
            font-size: 50px;
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
    <!-- display message -->
    <div class="container-fluid bg-warning py-5 h-f">
        <div class="container text-center">
            <!-- display messages -->
            <?php
            // checking
            if (mysqli_query($connect, $toDataBase)) {
                // display message 
                echo ' <div class="row pt-5">
                        <div class="col">
                            <i class="fas fa-check py-5"></i>
                            <h1 class="text-success font-weight-bold">Вашето барање е успешно испратено!</h1>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col">
                            <p class="font-italic">Ви благодариме што ги користите нашите услуги</p>
                        </div>
                    </div>';
            } else {
                // display error message if cant connect
                echo ' <div class="row pt-5">
                        <div class="col">
                            <i class="fas fa-exclamation-circle py-5"></i>
                            <h1 class="text-danger font-weight-bold">Во моментов вашето барање не може да биде процесирано!</h1>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col">
                            <p class="font-italic">Ве молиме обидетесе подоцна</p>
                        </div>
                    </div>';
            }
            mysqli_close($connect);
            ?>
            <div class="row py-5">
                <div class="col-md-6">
                    <button class="btn btn-outline-danger bg-danger ml-3 my-3 px-3" type="submit">
                        <a href="../index.html" class="text-white">Почетна страница</a>
                    </button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-outline-success bg-success ml-3 my-3 px-3" type="submit">
                        <a href="form.php" class="text-white">Испратете ново барање</a>
                    </button>
                </div>
            </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew
+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/
reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I
+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>