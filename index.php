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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-widtg,initial-scale=1.0">
        <title> TOKO SUMBER BERKAH</title>
    </head>

<body class="p-5">
    <form action="data.php" method="post" class="container mx-auto w-3/4">
        <h2 class="font-bold mb-3 text-2xl">Login</h2>
        <div class="mb-3 flex items-center justify-between">
            <label for="username" class="font-semibold">username</label>
            <input class="border-4 border-blue-500 focus:outline-none focus:border-black rounded-xl px-2 py-1 w-3/4"
                type="text" name="name" id="name">
        </div>
        <div class="mb-3 flex items-center justify-between">
            <label for="password" class="font-semibold">Password </label>
            <input class="border-4 border-blue-500  focus:outline-none focus:border-black  rounded-xl px-2 py-1 w-3/4"
                type="password" id="password" name="password">
        </div>
        
</div>
        <div class="mt-5 flex items-center justify-end gap-3">
            <input type="submit" value="Submmit" name="submit"
                class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 rounded-xl px-8 py-2 text-white cursor-pointer font-semibold">
        </div>
    </form>
</body>
</html>
<?php
}
?>

