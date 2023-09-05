<?php
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>My Anime List - AniSuki</title>
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
                            <a class="nav-link" aria-current="page" href="nime.html">ANIME</a>
                            <a class="nav-link" href="#">SCHEDULE</a>
                            <a class="nav-link" href="news.php">NEWS</a>
                            <a class="nav-link" href="contact.php">CONTACT US</a>
                            <a class="nav-link btn btn-danger px-4 text-white" href="index.php">Logout</a>
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
                    <h2 class="section-heading">My Anime List</h2>
                </div>
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Anime Title</th>
                                <th scope="col">Score</th>
                                <th scope="col">Episode Progress</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">Finish Date</th>
                                <th scope="col">Tags</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM anime_list";
                            $query_run = mysqli_query($connect, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $list) {
                            ?>
                                    <tr>
                                        <td><?= $list['anime_title']; ?></td>
                                        <td><?= $list['score']; ?></td>
                                        <td><?= $list['episode_progress']; ?></td>
                                        <td><?= $list['start_date']; ?></td>
                                        <td><?= $list['finish_date']; ?></td>
                                        <td><a href="list_update.php?id_anime=<?= $list['id_anime']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="list_delete.php?id_anime=<?= $list['id_anime']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<h5> No Record Found </h5>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-12">
                    <a href="print.php" class="btn btn-primary btn-sm">Print</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->

    <!-- Footer -->
    <section class="footer" style="margin-top: 220px;">
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