<!DOCTYPE html>
<html lang="en">
<head>
    <title>23753117</title>
</head>
<body>
    <form method="GET">
        <table border="0">
            <tr>
                <th colspan="2">FORM INPUTAN NILAI</th>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td><input type="text" name="uts"></td>
            </tr>
            <tr>
                <td>TUGAS</td>
                <td><input type="text" name="tugas"></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td><input type="text" name="uas"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Kirim"></td>
                <td><input type="submit" name="reset" value="Batal"></td>
            </tr>
        </table>
    </form>
<?php
echo "--------------------------------------------<br>";
if (isset($_GET['submit'])) {
    $nim = $_GET['nim'];
    $uts = $_GET['uts'];
    $tugas = $_GET['tugas'];
    $uas = $_GET['uas'];
    $nilaiAkhir =($uts*0.35)+($tugas*0.2)+($uas*0.45);
    
    if (($nilaiAkhir >= 0)&&($nilaiAkhir <= 10)) {
        $index = "E";
    } elseif (($nilaiAkhir >= 10)&&($nilaiAkhir <= 30)) {
        $index = "D";
    } elseif (($nilaiAkhir >= 30)&&($nilaiAkhir <= 60)) {
        $index = "C";
    } elseif (($nilaiAkhir >= 60)&&($nilaiAkhir <= 80)) {
        $index = "B";
    } elseif (($nilaiAkhir >= 80)&&($nilaiAkhir <= 100)) {
        $index = "A";
    } else {
        $index = "Nilai tidak valid";
    }

echo"<font face=courier new><table>";
echo "<tr>
<td>Nilai UTS</td>
<td>:</td>
<td> $uts</td>";
echo "<tr>
<td>Nilai TUGAS</td>
<td>:</td>
<td> $tugas</td>";
echo "<tr>
<td>Nilai UAS</td>
<td>:</td>
<td> $uas</td>";
echo "<tr>
<td>Nilai Akhir</td>
<td>:</td>
<td> $nilaiAkhir</td>";
echo "<tr>
<td>Index</td>
<td>:</td>
<td> $index</td>";
echo"</table>";
echo "<br>";
echo "Nim <b>$nim</b> Mempunyai Nilai Akhir  <b>$nilaiAkhir</b> Dan Index <b>$index</b>";
}
?>
</body>
</html>