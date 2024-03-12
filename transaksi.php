<!DOCTYPE html>
<html lang="en">
<header>
    <nav>
        <a id="Login" href="index.php">Login</a>
        <a id="Input" href="Transaksi.php">Transaksi</a>
        <a id="History" href="History.php">History Transaksi</a>
    </nav>
</header>
<?php
if(isset($_POST['btnSubmit'])){
    $userName = $_POST["userName"];
    $userName = $_POST["Password"];
} else {
?>

<div>
            <div class="mb-3 flex items-center justify-between">
            <label for="tgllahir" class="font-semibold">Tanggal Transaksi </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="date" name="tgllahir" id="tgllahir">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="Customer" class="font-semibold">Customer </label>
            <select name="Customer" id="Customer"
                class="border-4 border-blue-500   focus:outline-none focus:border-black rounded-xl px-2 py-1 cursor-pointer w-3/4">
                <option value="" selected>Pilih Customerr</option>
                <option value="tara">tara</option>
                <option value="ivanya">ivanya</option>
                <option value="Pia">pia</option>
                <option value="tata">tata</option>
                <option value="kinan">kinan</option>
                <option value="suryandari">suryandari</option>
                <option value="nilla">nilla</option>
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
                <label for="Ya" class="radio-label cursor-pointer mr-3"><input type="radio" name="Punya Kartu member" id="Ya"
                        value="Ya" checked>Ya</label>
                <label for="Tidak" class="radio-label cursor-pointer"><input type="radio" name="Punya Kartu Member" id="Tidak"
                        value="Tidak"> Tidak</label>

            </div>
  <div class="mt-5 flex items-center justify-end gap-3">
            <input type="BATAL" value="BATAL" name="BATAL"
                class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 rounded-xl px-8 py-2 text-white cursor-pointer font-semibold">
        </div>

        <div class="mt-5 flex items-center justify-end gap-3">
            <input type="SIMPAN" value="SIMPAN" name="SIMPAN"
                class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 rounded-xl px-8 py-2 text-white cursor-pointer font-semibold">
        </div>
        

</body>
</html>
<?php
}
?>


