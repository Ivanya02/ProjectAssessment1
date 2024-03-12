<?php
if (isset($_POST["submit"])) {
    $name = $_POST["Kode Transaksi"];
    $email = $_POST["Tanggal Transaksi"];
    $password = $_POST["Customer"];
    $tgllahir = $_POST["Barang 1"];
    $prodi = $_POST["Barang 2"];
    $alamat = $_POST["Barang 3"];
    $phone = $_POST["Punya Kartu Member"];
    $kelamin = $_POST["kelamin"];
} else {
    header("location: index.php");
}
?>

