<?php
if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$komentar=$_POST["komentar"];
$art_id=$_POST["art_id"];
$art_url=$_POST["art_url"];
 
if(empty($nama))
$_POST["nama"]='anonymous';
}
 
//connect database
$con=mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b927f13fbfd23d", "5d84d881","sainsadmin");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
//Menampilkan data
 
$sql="INSERT INTO komentar (nama, email, komentar, art_id, art_url,
date)
VALUES
('$_POST[nama]','$_POST[email]','$_POST[komentar]',
'$_POST[art_id]', '$_POST[art_url]', NOW())";
 
if (!mysqli_query($con,$sql,1))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=$art_url'>";
 
//Memutuskan koneksi
mysqli_close($con);
?>
