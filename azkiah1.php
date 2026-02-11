<!DOCTYPE html>
<html>
<body>

<form method="post">
    Tujuan: 
    <select name="tujuan">
        <option value="Dalam Kota">Dalam Kota</option>
        <option value="Luar Kota Dalam Provinsi">Luar Kota Dalam Provinsi</option>
        <option value="Luar Kota Luar Provinsi">Luar Kota Luar Provinsi</option>
    </select>
    
    Berat (kg): 
    <input type="number" name="berat">
    
    <input type="submit" name="hitung" value="Hitung Ongkir">
</form>

<?php
if (isset($_POST['hitung'])) {
    $tujuan = $_POST['tujuan'];
    $berat = $_POST['berat'];

    if ($tujuan == "Dalam Kota") {
        if ($berat <= 5) {
            $total = 5000;
        } else {
            $total = 5000 + (($berat - 5) * 1000);
        }
    } 
    elseif ($tujuan == "Luar Kota Dalam Provinsi") {
        if ($berat <= 5) {
            $total = 10000;
        } else {
            $total = 10000 + (($berat - 5) * 1500);
        }
    } 
    elseif ($tujuan == "Luar Kota Luar Provinsi") {
        if ($berat <= 5) {
            $total = 20000;
        } else {
            $total = 20000 + (($berat - 5) * 2000);
        }
    }

    echo "Total Ongkos Kirim ke $tujuan adalah: Rp $total";
}
?>

</body>
</html>