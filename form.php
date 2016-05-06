<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rumah Sains - Login Admin</title>
	
	<link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.gif" />
</head>
<body>
	<div id="login">
        <table>
        <tr>
            <td colspan="3"><h1>Rumah Sains</h1></td>
        </tr>
        <tr>    
            <td colspan="3"><h3>Login Admin</h3></td>
        </tr>
			<form name="form-login" method="POST" action="login.php">
				<tr><td><input type="text" name="user" placeholder="Username"></td></tr>
				<tr><td><input type="password" name="password" placeholder="Password"></td></tr>
				<tr><td><input type="submit" name="submit" value="Login"></td></tr>
			</form>
        </table>
	</div>
</body>
</html>