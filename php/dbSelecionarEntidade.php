<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'interhack');
	$query = "SELECT * from entidades";

	$search = mysqli_query($connect, $query);

?>
