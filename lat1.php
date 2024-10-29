<?php
class Bunga {
    var $nama;
    var $warna;

    function set_nama($nama) {
        $this->nama = $nama;
    }
    function get_nama() {
        return $this->nama;
    }
    function set_warna($warna) {
        $this->warna = $warna;
    }
    function get_warna() {
        return $this->warna;
    }
}

$tulip = new Bunga();
$tulip->set_nama('Tulip');
$tulip->set_warna('Pink');

echo "nama: " . $tulip->get_nama();
echo "<br>";
echo "warna: " . $tulip->get_warna();
?>
