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
			require_once $_SERVER['DOCUMENT_ROOT'].'/topkattov.php';
			?>
		</div>
    </div>
<p><img src="prefy.png"></p>
        <div class="content2">
<h3>Выберите интересующие Вас товары:</h3>
<form action="kattov.php" method="post">
<label for="nike">Nike</label>
<input type="radio" id="nike" name="nike"><br><br>
<label for="adi">Adidas</label>
<input type="radio" id="adi" name="adi"><br><br>
<label for="dior">Dior</label>
<input type="radio" id="dior" name="dior"><br><br>
<label for="lv">Luis Vuitton</label>
<input type="radio" id="lv" name="lv"><br><br>
<input type="submit" value="Показать">
</form>
<?php
if(isset($_POST['nike'])){
    $sql = "SELECT * FROM tov WHERE name = 'nike'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' . $row["nazv"] . '<br>' . $row["izo"] . '<br>' . "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>' . '<br>';
}
}
}
if(isset($_POST['adi'])){
    $sql = "SELECT * FROM tov WHERE name = 'adi'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' .$row["nazv"] . '<br>' . $row["izo"] . '<br>' .  "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>' . '<br>';
}
}
}
if(isset($_POST['dior'])){
    $sql = "SELECT * FROM tov WHERE name = 'dior'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' .$row["nazv"] . '<br>' . $row["izo"] . '<br>' .  "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>' . '<br>';
}
}
}
if(isset($_POST['lv'])){
    $sql = "SELECT * FROM tov WHERE name = 'lv'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' .$row["nazv"] . '<br>' . $row["izo"] . '<br>' . "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>' . '<br>';
}
}
}
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