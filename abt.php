<html>
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
</head>
<body>
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