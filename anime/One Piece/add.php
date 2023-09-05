<?php
if (isset($_POST['submit'])) {
    include 'koneksi.php';

    $score = $_POST['score'];
    $episode_progress = $_POST['episode_progress'];
    $start_date = $_POST['start_date'];
    $finish_date = $_POST['finish_date'];
    $notes = $_POST['notes'];

    $query = "INSERT INTO anime_list VALUES ('Ani0004','One Piece','$score','$episode_progress','$start_date','$finish_date','$notes')";
    $query_run = mysqli_query($connect, $query);
    if ($query_run) {
        echo '<script type="text/javascript">
        alert("Anime berhasil disimpan");
        window.location.href="onepiece.html";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Anime tidak berhasil disimpan");
        </script>';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>One Piece - AniSuki</title>
</head>

<body>
    <header>
        <div id="nav-scroll">
            <nav class="navbar navbar-expand-lg navbar-light py-4 bgcolor" data-aos="fade-down">
                <div class="container">
                    <a class="navbar-brand" href="#"><span>Ani</span>Suki</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link" aria-current="page" href="../../nime.html">ANIME</a>
                            <a class="nav-link" href="#">SCHEDULE</a>
                            <a class="nav-link" href="../../news.php">NEWS</a>
                            <a class="nav-link" href="../../contact.php">CONTACT US</a>
                            <a class="nav-link btn btn-info px-4 text-white" href="../../list.php">My List</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <section class="body-edit">
        <div class="container">
            <div class="row pt-5" data-aos="fade-up" data-aos-once="true">
                <div class="col-12">
                    <h2 class="section-heading">Edit Anime</h2>
                </div>
                <form method="POST">
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="form-label">Anime Title</label>
                            <h5 class="tittle-anime">One Piece</h5>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                                    <label for="" class="form-label">Score</label>
                                    <input type="number" class="form-control" name="score" max="10" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                    <label for="" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" name="start_date" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                    <label for="" class="form-label">Episode Progress</label>
                                    <input type="number" class="form-control" name="episode_progress" min="1" max="1030" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                    <label for="" class="form-label">Finish Date</label>
                                    <input type="date" class="form-control" name="finish_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
                            <label for="exampleFormControlTextarea1" class="form-label">Notes</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="notes"></textarea>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="submit" name="submit" class="button">
                                    <p>Save</p>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- Content -->

    <!-- Footer -->
    <section class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="logo-footer">
                        <a class="navbar-brand" href="index.html"><span>Ani</span>Suki</a>
                    </div>
                    <div class="info mt-4">
                        <div class="footer-text mt-3">
                            <p class="text-white">Portal Japan adalah sebuah media yang membahas berita-berita
                                yang berkaitan dengan Jepang, baik itu culture maupun pop-culture, mulai dari yang unik,
                                aneh hingga yang luar biasa penting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-2">
                    <div class="info">
                        <h5 style="color: #FBFBFB;">Hubungi Kami</h5>
                        <div class="sosmed">
                            <div class="row mt-3">
                                <div class="col-12">
                                    <a href="mailto: anisuki@gmail.com" target="_blank" class=" infotxt">anisuki@gmail.com</a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="infotxt">0896-3091-5828</a>
                                </div>
                                <div class="col-12 mt-2">
                                    <a href="#"><i class="bx bxl-whatsapp pe-2"></i></a>
                                    <a href="#"><i class='bx bxl-instagram px-2'></i></a>
                                    <a href="#"><i class='bx bxl-facebook-circle ps-2'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <p class="copyright">Copyright © 2022 Razin Syakib | All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->

    <!-- <script src="navbar.js"></script> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        AOS.init();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>