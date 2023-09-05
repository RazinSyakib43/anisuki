<?php
include 'koneksi.php';
$id_anime = $_GET['id_anime'];
$query = "DELETE FROM anime_list WHERE id_anime='$id_anime'";
mysqli_query($connect, $query);
header("location: list.php");
