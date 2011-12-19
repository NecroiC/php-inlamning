<?php
echo "<pre>";
var_dump($_POST);
if (empty($_POST)) {
	echo "You must fill in the boxes";
}

if (!empty($_POST)) {

	$name = trim($_POST['name']);
	$username = trim($_POST['username']);
	
	if (mb_strlen($name, 'UTF-8') < 5 || mb_strlen($name, 'UTF-8') > 40) {
		echo "Your full name must be between 5 and 40 letters";
	}
	if (mb_strlen($username, 'utf-8') < 6 || mb_strlen($username, 'utf-8') > 25) {
		echo "Your username must be between 6 and 25 letters or numbers";
	}
}


	//$an=trim($_POST['username'])
	//empty($an)
	// mb_strlen($an , "utf-8")
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="sv" charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="kolla.css" />
</head>
<body>
<div class="allt">
<form action="" method="post">
	<h2>Loggin</h2>
	<p>
      <label for="name">Full name:</label>
      <input type="text" placeholder="Type your full name here." id="name" name="name" />
   	</p>
   	<p>
      <label for="username">Username:</label>
      <input type="text" placeholder="Type your username here." id="username" name="username" />
   	</p>
   	<p>
      <label for="pass">Password:</label>
      <input type="password" placeholder="Type your password here." id="pass" name="pass" />
   	</p>
	<p>
      <label for="repass">Repeat password:</label>
      <input type="password" placeholder="Repeat your password." id="repass" name="repass" />
   	</p>
	<p>
      <label for="email">Email:</label>
      <input type="email" placeholder="Your emailadress here." id="email" name="email" />
   	</p>
   	<p>
   	  <input type="submit" value="Sign up" />
    </p>
</form>
</div>
</body>
</html>
