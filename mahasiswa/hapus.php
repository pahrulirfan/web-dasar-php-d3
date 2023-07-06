<?php
include('koneksi.php');
$id = $_GET['id'];
$query = "DELETE FROM mahasiswa WHERE id=$id";
$result = mysqli_query($connect, $query);
header("location:tampil.php");