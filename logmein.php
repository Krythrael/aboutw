<html>
<?php
//start the Session
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
			
?>
<head>
<link rel="stylesheet" href="csss/styles.css">
</head>
<body>
<form method= "POST">
<div id="contentl">
<h1 id= "wordUserl">Username:</h1>
<h1 id= "wordPassl">Password:</h1>
<button id="hl" type="SUBMIT"> Login</button>

<h1 id="titlel"> Login Page</h1>
<input id="usernamel" type="text" name="usernamel">
<input id="passwordl" type="password" name="passwordl">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['usernamel'];
	$password = $_POST['passwordl'];
	$pdo = new PDO('sqlite:../sqlite/users.db'); 
        $sql =  'SELECT * FROM Logon WHERE userName = :username AND password = :password;';
		$stmt = $pdo->prepare($sql);
		 $stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password); 
		$stmt -> execute();
		$request = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($request) {
			$_SESSION['logged_in'] = "True";   
			header('Location: http://localhost/cs295/abt.php'); 
		}
			else{
				echo ' You entered something wrong, try again';
			}
}
	
	
?>

</div>
</body>
</html>