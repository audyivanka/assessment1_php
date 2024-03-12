<?php
include "transaksi.php";

$sqlPlace = "SELECT * FROM tbl_place";
$result = mysqli_query($transaksi, $sqlPlace);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUMBER BERKAH</title>
    <style>
        body {
            height: 100vh;
            overflow: hidden;
            color: white;
            background: url("Ivanka.jpg") no-repeat fixed center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <h1>SUMBER BERKAH</h1>
    <form action="invoice.php" method="post">
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label for="telp">Telp</label></td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="place">Place</label></td>
                <td>
                    <select name="place" id="place">
                        <option value="" selected disabled>Select Place</option>
                        <?php if (mysqli_num_rows($result) > 0) { ?>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <option value="<?= $row['place_id'] ?>">
                                    <?= $row['place_name'] ?>
                                </option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="date">Check In Date</label></td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td><label for="time">Time</label></td>
                <td><input type="time" name="time"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
