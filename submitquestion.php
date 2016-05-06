<?php
if($_POST["button"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$pertanyaan=$_POST["pertanyaan"];
$art_id=$_POST["art_id"];
$art_url=$_POST["art_url"];
 
if(empty($nama))
$_POST["nama"]='anonymous';
}
 
//connect database
$con=mysqli_connect("localhost", "root", "","admin");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
 
//Menampilkan data
 
$sql="INSERT INTO pertanyaan (nama, email, pertanyaan, art_id, art_url,
date)
VALUES
('$_POST[nama]','$_POST[email]','$_POST[pertanyaan]',
'$_POST[art_id]', '$_POST[art_url]', NOW())";
 
if (!mysqli_query($con,$sql,1))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; url=$art_url'>";
 
//Memutuskan koneksi
mysqli_close($con);
?>