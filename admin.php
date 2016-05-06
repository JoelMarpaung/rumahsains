<?php
session_start();
if(!isset($_SESSION['login'])) {
?>
	<script language="JavaScript">
	alert('Anda Harus Login terlebih dahulu !');
	document.location='form.php';
	</script>
	<?php
}
else {
?>
<!DOCTYPE html>
<html>
<head>
<style>
#comment {
margin:20px 0 0 20px;
border: 2px solid #848484;
border-radius:20px;
-moz-border-radius:20px;
max-height: 90%;
font-weight: bold;
color: #606060;
padding: 10px;
width: 440px;
background-color: #dcdcdc;
}
#publishcomment {
border: 2px solid #848484;
box-shadow: 12px 12px 7px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: 550px;
font-size: 12px;
line-height: 15px;
}
#publishcomment hr {
color: #ccc;
}
#publishcomment a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#publishcomment a:link {
font-weight: bold;
}
#publishcomment a:hover {
text-decoration: underline;
}
    
</style>
	<meta charset="UTF-8">
	<title>Rumah Sains - Halaman Admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/admin.css" type="text/css" media="all">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.gif" />
</head>
<body>
    <div id="container">
        <table>
            <tr>
                <td width="50%"><a href="index.html" target="_blank"><h1 style="font-size:60px">Rumah Sains</h1></a></td>
                <td><a href="logout.php"><p style="text-align:right;font-size:30px;font-weight:bolder">Logout</p></a></td>
            </tr>
            <tr>
                <td>
                    <h1>Pertanyaan</h1> 
                </td>
                <td>
                   <h1>Komentar</h1>
                </td>
            </tr>
            <tr height="400px">
                <td>
                        <div id="publishcomment">
                        <?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "admin";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
 	
                        $sql = "SELECT * FROM pertanyaan WHERE art_id='1' order BY id DESC";
                        $questionquery = mysqli_query($conn, $sql);
                        $questionNum = mysqli_num_rows($questionquery);
                        echo "<h4>" . "Current question(s)..." . "</h4>";
                        echo "<b>" . $questionNum . " question(s) so far.".
                        "</b>" . "<br />" . "<br />";
                        echo "<hr>";
                        while($row = mysqli_fetch_array($questionquery))
                        {
                            echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
                            $row['date'] . "</i>" . "<br />".$row['email']."<br />" ."<br />". $row['pertanyaan'] ."<br/>";
                            echo "<hr>";
                        }
                        ?>
                    </div>
                </td>
                <td>
                    <div id="publishcomment">
                        <?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "admin";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
 	
                        $sql = "SELECT * FROM komentar WHERE art_id='1' order BY id DESC";
                        $commentquery = mysqli_query($conn, $sql);
                        $commentNum = mysqli_num_rows($commentquery);
                        echo "<h4>" . "Current feedback(s)..." . "</h4>";
                        echo "<b>" . $commentNum . " feedback(s) so far.".
                        "</b>" . "<br />" . "<br />";
                        echo "<hr>";
                        while($row = mysqli_fetch_array($commentquery))
                        {
                            echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
                            $row['date'] . "</i>" . "<br />".$row['email']."<br />" ."<br />". $row['komentar'] ."<br/>";
                            echo "<hr>";
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
	<div class="clear"></div>
    <div class="footer">
    <div class="copy">
    	<h1>&copy; 2016 All rights Reserved | Design by Joel Marpaung</h1>
    </div>
</div>
</body>
</html>
<?php
}
?>