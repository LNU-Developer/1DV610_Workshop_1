<?php
//session_start();
//if(isset($_SESSION['gameBoard'])) {
//    $_SESSION['gameBoard'] = array();
//}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Luffarschack</title>
	<link rel="stylesheet" href="styles/style.css">

</head>
    <body>
        <?php

            require_once("assets/PlayerBoard.php");
            $PlayerBoard = new \board\PlayerBoard(81);
            $PlayerBoard->createBoard();
            $PlayerBoard->echoHTML();

            if(isset($_GET["tile"]))
            {
                echo "The id is ".$_GET["tile"];
                //array_push($_SESSION['gameBoard'], $_GET['tile']);
            }
        ?>
    </body>
</html>
