<?php
$koneksi = mysqli_connect("localhost", "tifbmyho_angkasa", "@JTIpolije2023", "tifbmyho_angkasa");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
$id=$_GET['id'];
mysqli_query($koneksi, "DELETE FROM user  WHERE id_user='$id'") or die (mysql_error());
header("Location:./settings.php?deleteMessage=Data+User+Berhasil+Dihapus!");
?>