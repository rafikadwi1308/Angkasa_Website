<?php
$koneksi = mysqli_connect("localhost", "tifbmyho_angkasa", "@JTIpolije2023", "tifbmyho_angkasa");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$idunlimited=$_GET['id'];
mysqli_query($koneksi, "DELETE FROM unlimited WHERE id_unlimited='$idunlimited'") or die (mysql_error());
header("Location:Paket_layout.php?deleteMessage=Data+Unlimited+Berhasil+Dihapus!");
?>