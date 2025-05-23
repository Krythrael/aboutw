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
    <a href="http://localhost/cs295/abt.php">Meet the Characters</a>
    <a href="http://localhost/cs195/video">New User</a>
	<a href="http://localhost/cs195/pictures">Message Board</a> 
  </div>
  
    <h1>What Is Jujutsu Kaisen?</h1>
	<p>The story follows Yuji Itadori, a high school student with extraordinary physical abilities. After encountering a cursed object—a rotting finger belonging to the powerful Curse Ryomen Sukuna—Yuji’s life changes forever. To save his friends from a Curse attack, he swallows the finger and becomes the host of Sukuna, a malevolent spirit known as the King of Curses.

Rather than being executed immediately, Yuji is recruited by Satoru Gojo, a powerful jujutsu sorcerer, to join the Tokyo Jujutsu High School. There, he learns to fight Curses—malevolent spiritual beings born from human negative emotions—alongside classmates Megumi Fushiguro and Nobara Kugisaki.

</p>
<img id="jjksum" src = "pics/Jujutsu.jpg" alt = "photo of itadori and sukuna" width="300px">
    </div>
</body>
</html>