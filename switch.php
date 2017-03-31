<?php
$fruit = isset($_POST['fruit']) ? $_POST['fruit'] : null;
switch ($fruit) {

	case 'melon':
		echo "fruit is melon <img src='meloen.jpg' alt='fruit'>";
		break;

	case 'apple':
		echo "fruit is apple <img src='appel.jpg' alt='fruit'>";
		break;

	case 'grape':
		echo "fruit is grape <img src='druif.jpg' alt='fruit'>";
		break;

	default:
		echo "Try to search the fruit.";
		break;
}
?>
<style>
body {
	background-image: url(fruit.jpg);
	padding: 80;
	font-size: 55px;
	text-align: center;
	color: darkred;

}

</style>

<div id="button">
<form action="" method="post">
	<br>
<input type="text" name="fruit" style="height:30px;padding:10px;">
<input type="submit" value="Zoek het fruit" style="height:35px;padding:15px;">
</form>
</div>
