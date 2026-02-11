<!DOCTYPE html>
<html>
<body>

<form method="post">
    Kendaraan: 
    <select name="jenis">
        <option value="motor">Motor</option>
        <option value="mobil">Mobil</option>
        <option value="mini Bis">Mini Bis</option>
    </select>
    Waktu (Jam): <input type="number" name="waktu">
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php
if (isset($_POST['hitung'])) {
    $jenis = $_POST['jenis'];
    $waktu = $_POST['waktu'];

    if ($jenis == "motor") {
        if ($waktu <= 2) {
            $total = 2000;
        } else {
            $total = 2000 + (($waktu - 2) * 1000);
        }
    } 
    elseif ($jenis == "mobil") {
        if ($waktu <= 2) {
            $total = 5000;
        } else {
            $total = 5000 + (($waktu - 2) * 1500);
        }
    } 
    elseif ($jenis == "mini Bis") {
        if ($waktu <= 2) {
            $total = 10000;
        } else {
            $total = 10000 + (($waktu - 2) * 1500);
        }
    }

    echo "Total Bayar: Rp $total";
}
?>

</body>
</html>