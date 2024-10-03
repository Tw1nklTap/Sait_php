<!DOCTYPE html>
<html lang="en">
<?php require_once("config.php"); 
ob_start();
?>
<link rel="stylesheet" href="styles.css">
<head>
<title>Страница на PHP</title>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';
    ?>
</head>

<body link="#ffcc00" vlink="#cecece" alink="#ff0000">
    <div class="page">
		<div class="shapka">
			<?php
			require_once $_SERVER['DOCUMENT_ROOT'].'/top.php';
			?>
		</div>
    </div>
<p><a href="sk.php"><img src="prefy.png"></p></a>
    <div class="page">
        <div class="content1">
        <h3>Популярные товары: </h3>
			<div class="content1">
				<p><img src="adi.png"></p>
			</div>
			<div class="content1">
				<p><img src="nike.png"></p>
			</div>
			<div class="content1">
				<p><img src="dior.png"></p>
			</div>
			<div class="content1">
				<p><img src="lv.png"></p>
			</div>
		<br>
        </div>
		<div class="sidebar_left">
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/sidebar1.php';
            ?>
        </div>

    </div>

    <div class="footer">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
        ?>
    </div>
</body>
</html>