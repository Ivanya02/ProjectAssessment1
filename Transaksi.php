<header>
    <nav>
        <a id="Login" href="index.php">Login</a>
        <a id="Input" href="Transaksi.php">Input Transaksi</a>
        <a id="History" href="History.php">History Transaksi</a>
    </nav>
</header>

<?php
if(isset($_POST['btnSimpan'])){
    $userName = $_POST["Kode Transaksi"];
    $userName = $_POST["Tanggal Transaksi"];
    $userName = $_POST["Customer"];
    $userName = $_POST["Barang 1"];
    $userName = $_POST["Barang 2"];
    $userName = $_POST["Barang 3"];
    $userName = $_POST["Punya Kartu Member"];
    $userName = $_POST["Uang Pembayaran"];
} else {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-widtg,initial-scale=1.0">
        <title> TOKO SUMBER BERKAH</title>
    </head>
    <body class="p-5">
    <form action="data.php" method="post" class="container mx-auto w-3/4">
        <h2 class="font-bold mb-3 text-2xl">Transaksi</h2>
        <div>
            <div class="mb-3 flex items-center justify-between">
            <label for="Kode Transaksi" class="font-semibold">Kode Transaksi </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="name" name="Kode Transaksi" id="Kode Transaksi">
        </div>
        <div>
            <div class="mb-3 flex items-center justify-between">
            <label for="Tanggal Transaksi" class="font-semibold">Tanggal Transaksi </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="date" name="Tanggal Transaksi" id="Tanggal Transaksi">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="Customer" class="font-semibold">Customer </label>
            <select name="Customer" id="Customer"
                class="border-4 border-blue-500   focus:outline-none focus:border-black rounded-xl px-2 py-1 cursor-pointer w-3/4">
                <option value="" selected>Pilih Customerr</option>
                <option value="Tara">Tara</option>
                <option value="Inem">Inem</option>
                <option value="Pia">pia</option>
                <option value="Mamat">mamat</option>
                <option value="Neneng">Neneng</option>
                <option value="Yanti">Yanti</option>
                <option value="Yanto">Yanto</option>
            </select>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="Barang 1" class="font-semibold">Barang 1 </label>
            <select name="Barang 1" id="Barang 1"
                class="border-4 border-blue-500   focus:outline-none focus:border-black rounded-xl px-2 py-1 cursor-pointer w-3/4">
                <option value="" selected>Pilih Barang</option>
                <option value="Mie Instan">Mie Instan</option>
                <option value="Sabun Mandi">Sabun Mandi</option>
                <option value="Shampo">Shampo</option>
                <option value="Sandal Jepit">Sandal Jepit</option>
                <option value="Roti">Roti</option>
                <option value="Buku Tulis">Buku Tulis</option>
                <option value="Susu Kotak">Susu Kotak</option>
                <option value="Minyak Goreng ">Minyak Goreng </option>
                <option value="Ice Cream">Ice Cream</option>
                <option value="Baterai">Baterai</option>
            </select>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="Barang 1" class="font-semibold">Barang 2 </label>
            <select name="Barang 1" id="Barang 1"
                class="border-4 border-blue-500   focus:outline-none focus:border-black rounded-xl px-2 py-1 cursor-pointer w-3/4">
                <option value="" selected>Pilih Barang</option>
                <option value="Mie Instan">Mie Instan</option>
                <option value="Sabun Mandi">Sabun Mandi</option>
                <option value="Shampo">Shampo</option>
                <option value="Sandal Jepit">Sandal Jepit</option>
                <option value="Roti">Roti</option>
                <option value="Buku Tulis">Buku Tulis</option>
                <option value="Susu Kotak">Susu Kotak</option>
                <option value="Minyak Goreng ">Minyak Goreng </option>
                <option value="Ice Cream">Ice Cream</option>
                <option value="Baterai">Baterai</option>
            </select>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="Barang 1" class="font-semibold">Barang 3 </label>
            <select name="Barang 1" id="Barang 1"
                class="border-4 border-blue-500   focus:outline-none focus:border-black rounded-xl px-2 py-1 cursor-pointer w-3/4">
                <option value="" selected>Pilih Barang</option>
                <option value="Mie Instan">Mie Instan</option>
                <option value="Sabun Mandi">Sabun Mandi</option>
                <option value="Shampo">Shampo</option>
                <option value="Sandal Jepit">Sandal Jepit</option>
                <option value="Roti">Roti</option>
                <option value="Buku Tulis">Buku Tulis</option>
                <option value="Susu Kotak">Susu Kotak</option>
                <option value="Minyak Goreng ">Minyak Goreng </option>
                <option value="Ice Cream">Ice Cream</option>
                <option value="Baterai">Baterai</option>
            </select>
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="" class="font-semibold">Punya Kartu Member </label>
            <div class=" w-3/4">
                <label for="Ya" class="radio-label cursor-pointer mr-3"><input type="radio" name="Kartu member" id="Ya"
                        value="Ya" checked>Ya</label>
                <label for="Tidak" class="radio-label cursor-pointer"><input type="radio" name="Kartu Member" id="Tidak"
                        value="Tidak"> Tidak</label>
            </div>
            <div>
            <div class="mb-3 flex items-center justify-between">
            <label for="Uang Pembayaran" class="font-semibold">Uang Pembayaran </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="name" name="Uang Pembayaran" id="Uang Pembayaran">
        </div>
        <input name="btnSimpan" value="Simpan" type="Simpan">
                    <input name="btnCancel" value="Batal" type="Reset">
        </div>
        </form>
    </body>
            </html>
<?php
}
?>



            