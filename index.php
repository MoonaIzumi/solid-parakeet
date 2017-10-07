<?session_start();?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
if (isset($_POST['numbers'])) {
$_SESSION['flippers'] = $_POST['numbers'];
}

else {
}
$flipCount = 0;
$h = 0;
$t = 0;

function coin() {
	echo '<p>';
	do {
    $flip = rand(0,1);
    $flipCount++;
    if ($flip){
        echo "H ";
		$h++;
    }
    else {
        echo "T ";
		$t++;
    }
} while ($flipCount < $_SESSION['flippers']);
echo "</p> <p>There is {$h} Heads & {$t} Tails</p>"; }
	if(isset($_POST['numbers'])) {
		coin();
		echo '<button onclick="location.reload()" type="button">Re-flip!</button>';
	}
	else {
		echo '<form action="#" method="post">
		Numbers: <input type="number" name="numbers" value="'. $_SESSION["flippers"] . '"><br>
		</form>';

	}
?>
</body>
</html>
