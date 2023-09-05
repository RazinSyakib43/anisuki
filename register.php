<?php
$db_user = "root";
$db_pass = "";
$db_name = "db_anisuki";
$db = new PDO('mysql:host=localhost; dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['create'])) {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $username = $_POST['usrnme'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $password = $_POST['psswd'];

    $sql = "INSERT INTO user (nama_depan, nama_belakang, username, email, no_telepon, password ) VALUES (?,?,?,?,?,?)";
    $stmtinsert = $db->prepare(($sql));
    $result = $stmtinsert->execute([$nama_depan, $nama_belakang, $username, $email, $no_telepon, $password]);
    if ($result) {
        header("location: index.php");
    } else {
        echo '<script type="text/javascript">
        alert("Terdapat error ketika menyimpan data");
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
    <title>Register - AniSuki</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
        body {
            background-color: #151D3B;
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
                                    <h1 class="login-logo"><span>Ani</span>Suki</h1>
                                </div>
                                <div class="col-12 pt-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="100">
                                    <h2 class="section-heading">REGISTER</h2>
                                </div>
                            </div>
                            <div class="row mx-5 pt-4">
                                <div class="col-6 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                    <label for="nama_depan" class="form-label">Nama Depan</label>
                                    <input type="text" class="form-control" name="nama_depan" required>
                                </div>
                                <div class="col-6 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="200">
                                    <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control" name="nama_belakang" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                    <label for="usrnme" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="usrnme" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                    <label for="no_telepon" class="form-label">Nomor Telepon</label>
                                    <input type="number" class="form-control" name="no_telepon" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                    <label for="psswd" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="psswd" required>
                                </div>
                                <div class="col-12 mb-3" data-aos="fade-up" data-aos-once="true" data-aos-delay="300">
                                    <label for="psswd" class="form-label">Upload Photo Profile</label>
                                    <input type="file" class="form-control" name="foto" required>
                                </div>
                            </div>
                            <div class="row mx-5 pb-5" data-aos="fade-up" data-aos-once="true" data-aos-delay="500">
                                <div class="col-12">
                                    <button type="submit" name="create" class="button">
                                        <p>Buat akun</p>
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