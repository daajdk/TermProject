<!DOCTYPE html>
<!--First rough start to Web Programming Project-->
<!--by Kevin McCarthy-->
<html>
<head>
<title>ProProject</title>
<link rel="stylesheet" type="text/css" href="login.css">
<meta name="description" content"Web Programming and Database Systems: Theory and Programming
 Dual Semester Project">
</head>
<body>

<?php 
require_once 'connectDB.php';
require_once 'createNew.php';
require_once 'login.php';
?>
<div class="loginBanner" id="loginBanner">
	<h1>
		<div class = "logo" id="logo">Multiple Supplier Retailer</div>
		<div class = "login" id="login">
			<form id="namefields" action="login.php" method="post">
				<div class="loginput" id="loginput">
					Username: <input class="textInput" id="username" type="text" name="username"><br>
					Password: <input class="textInput" id="password" type="password" name="password"><br>
					<button type="submit" id="entervals" onclick="test()" value="Submit" title="Submit" name="submit">Submit</button>
					<button type="reset" id="clearvals" value="Clear" title="Clear">Clear</Clear>
				</div>
			</form>
		</div>
	</h1>
</div>
<div class="createaccount" id="createaccount">
	<h2>First time visitor?<br>Create a new account below<br></h2>
	<div class="newuser" id="newuser">
		<form id="accountinfo" action="createNew.php" method="post">
			<div class="newaccount" id="newaccount">
                Username: <input required class="textInput" type="text" name="username"><br>
				First name: <input required class="textInput" type="text" name="firstname"><br>
				Last name: <input required class="textInput" type="text" name="lastname"><br>
				City: <input required class="textInput" type="text" name="city"><br>
				Zip code: <input required class="textInput" type="text" name="zip"><br>
                Password: <input required class="textInput" type="password" name="password"><br>
				<button type="submit" id="entervals" value="Submit" title="Submit" name="submit" >Submit</button>
				<button type="reset" id="clearvals" value="Clear" title="Clear">Clear</Clear>
			</div>
		</form>
	</div>
</div>
<div class="output" id="output">
    <h2>Here is the output from all PHP function calls<br></h2>
    <p><?php
        //$dbh = connectDB();
        //echo mysql_ping();
        //disconnectDB();
    ?></p>
</body>
</html>
