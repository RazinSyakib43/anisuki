<?php
echo '<script type="text/javascript">
        alert("Silahkan melakukan login untuk memasuki website ini");
        </script>';

if (isset($_POST['submit'])) {
    include 'koneksi.php';

    $username = $_POST['usrnme'];
    $passsword = $_POST['psswd'];
    $kodevalidasi = $_POST['kdevalid'];

    $user = mysqli_query($connect, "SELECT * from user where username='$username' AND password='$passsword'");
    $chek = mysqli_num_rows($user);

    if ($chek > 0) {
        if ($kodevalidasi == '4') {
            header("location:nime.html");
        } else {
            echo '<script type="text/javascript">
            alert("Jawab pertanyaan dengan benar");
            </script>';
        }
    } else {
        echo '<script type="text/javascript">
        alert("Username atau password anda salah");
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan ke 3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
        body {
            background-color: #D61C4E;
        }
    </style>
</head>

<body>
    <section class="contact mt-4">
        <div class="container">
            <div class="form mt-5">
                <form method="post">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 form-login">
                            <div class="row pt-2" data-aos="fade-up" data-aos-once="true">
                                <div class="logo-in-login pt-3">
                                    <h1 class="login-logo"><span>Portal</span>nime</h1>
                                </div>
                                <div class="col-12 pt-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                                    <h2 class="section-heading">LOGIN</h2>
                                </div>
                            </div>
                            <div class="row mx-5">
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="usrnme" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="psswd" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="400">
                                    <div class="col-12"><label for="" class="form-label">Jawab ini:
                                        </label></div>
                                    <div class="col-12"><label for="" class="form-label">2 plus 2 =
                                        </label></div>
                                    <div class="col-12">
                                        <input class="form-check-input" type="radio" name="kdevalid" value="3" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            3
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-check-input" type="radio" name="kdevalid" value="6" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            6
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-check-input" type="radio" name="kdevalid" value="4" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            4
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <input class="form-check-input" type="radio" name="kdevalid" value="8" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            8
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-5 pb-5" data-aos="fade-up" data-aos-once="true" data-aos-delay="500">
                                <div class="col-12">
                                    <button type="submit" name="submit" class="button">
                                        <p>Login</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script>
    AOS.init();
</script>

</html>