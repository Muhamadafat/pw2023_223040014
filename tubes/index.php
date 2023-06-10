<?php
session_start();

if (!isset($_SESSION["submit"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$conn = koneksi();

$artis = query("SELECT * FROM artis");

?>
<!DOCTYPE html>
<html data-bs-theme="dark">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Entertainment Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <style>
        .artist {
            transform: scale(.8);
        }

        @media screen and (max-width: 500px) {
            .artist {
                transform: scale(1) !important;
            }

            .geser {
                margin: auto !important;
            }

            .bi-x-circle-fill {
                display: flex;
            }
        }

        @media screen and (max-width: 700px) {
            .bi-x-circle-fill {
                display: flex !important;
                margin-top: 10px !important;
            }
        }
    </style>
</head>

<body>
    <section class="header">
        <nav>
            <a class="text-decoration-none" href="index.php"><i class="bi bi-cloud-fill text-light" style="font-size: 50px;">GVE</i></a>
            <div class="nav-links" id="navLinks">
                <i class="bi bi-x-circle-fill text-dark d-none" style="font-size: 20px; margin-left: 10px;" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#course" onclick="hideMenu()">HOME</a></li>
                    <li><a href="#contact" onclick="hideMenu()">ABOUT</a></li>
                </ul>
            </div>

            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Good Views Entertainment</h1>
            <p>Find out your artist and actor just for a second!<br>Enjoy this website. If you interested this website:</p>
            <a href="logout.php" class="hero-btn">Logout</a>
        </div>

    </section>

    <!-- Course -->
    <section class="course" id="course">
        <h1>The Options I Show</h1>
        <p>Some options you can find in this website</p>

        <div class="row">
            <div class="course-col me-2">
                <h3>Picture</h3>
                <p>You can see images if you see databases.</p>
            </div>
            <div class="course-col ms-2">
                <h3>Biodata</h3>
                <p>You can also know biodata in databases.</p>
            </div>
        </div>
    </section>



    <!-- Campus -->
    <section class="campus" id="campus">
        <h1>The Spoiler That I Can Show You</h1>
        <p>This famous artist and actor will make you more interested in this website</p>



        <div class="geser row justify-content-md-center">
            <?php foreach ($artis as $a) : ?>
                <a class="artist col col-lg-4 col-md-6 col-sm-12" href="detail-artis.php?id=<?= $a["id"] ?>">
                    <!-- <div class="artist col col-lg-4 col-md-6 col-sm-12"> -->
                    <div class="card campus-col">
                        <img src="img/<?= $a['gambar'] ?>" class="card-img-top" alt="Gambar">
                        <div class="card-body layer">
                            <h3 class="card-title"><?= $a['nama'] ?></h3>
                        </div>
                    </div>
                    <!-- </div> -->
                </a>
            <?php endforeach; ?>
        </div>


    </section>

    <!-- Contact -->
    <section class="contact" id="contact">
        <h1>if you are interested this website, <br> You can contact me:</h1>
        <a href="https://www.instagram.com/_muhamadafat" class="hero-btn">Contact Me!</a>
    </section>

    <!-- Footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Thankyou for visiting my website, i hope this website doesn't disappoint you, and i hope that you'll like my website.
            <br>Dont forget to visit this website again, i'll keep waiting!
        </p>
        <p>Copyright @2022 | Muhamad Afat</p>
    </section>


    <!-- JavaScript for Toggle Menu -->
    <script src="https://kit.fontawesome.com/49181759c3.js" crossorigin="anonymous"></script>
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>

</html>