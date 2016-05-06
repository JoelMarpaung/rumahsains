<?php
ob_start();
session_start();
$user		= $_POST['user'];
$password	= $_POST['password'];
$_SESSION['user'] = $user;
$Open = mysqli_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b927f13fbfd23d","5d84d881");
if (!$Open){
die ("Koneksi ke Engine MySQL Gagal !<br>");
				}
$Koneksi = mysqli_select_db($Open,"sainsadmin");
if (!$Koneksi){
die ("Koneksi ke Database Gagal !");
}


$qry = mysqli_query($Open,"SELECT * FROM admin where user='$user'",1);
$row = mysqli_fetch_array($qry,1);

if ($password!="d4ti01") {
?>
<script language="JavaScript">
	alert('Username atau Password tidak sesuai !');
	document.location='form.php';
	</script>
	<?php
}
else {
	$_SESSION['login']=1;
	header("Location: admin.php");
	}
	mysql_close($Open); //Tutup koneksi engine MySQL
?>
