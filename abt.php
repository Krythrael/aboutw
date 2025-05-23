<html>
<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION['logged_in'])){
	echo 'Youre not logged in, please log in <a href="http://localhost/cs295/logmein.php"> go back </a>';
	die();
}
	?>
<head>
    <title>Character Page</title>
    <style>
		body{
			font-family: "SEGOE UI";
		}
        h1 {
            color: blue;
        }
        .container {
			text-align: center;
			  margin: 0 auto;
            width: 60%;
		}
    </style>
	<link rel="stylesheet" href="csss/styles.css">
</head>
<body>

<div class="menu-bar">
    <a href="http://localhost/cs295/summary.php">Summary</a>
    <a href="http://localhost/cs195/video">New User</a>
	<a href="http://localhost/cs195/pictures">Message Board</a> 
  </div>
  
    <h1>Character Page</h1>
    <div class="container">
        <?php
		$pdo = new PDO('sqlite:../sqlite/juju.db'); 
        $sql =  'Select * from JJK;';
		$stmt = $pdo->query($sql);
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2>" . htmlspecialchars($row['characters']) . "</h2>";
            echo "<p>" . htmlspecialchars($row['descript']) . "</p>";

            if ($row['id'] == 2) {
                echo "<p>This is the second character</p>";
            }
        }
		echo 'All Done';
        ?>
    </div>
</body>
</html>
        ?>
    </div>
</body>
</html>
