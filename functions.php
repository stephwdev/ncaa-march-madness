<?php

include "includes/db.php";


function Navigation(){

	$activePage = basename($_SERVER['PHP_SELF']);
	$rows = file('includes/navigation.txt');

	echo "<ul class='nav'>";

	foreach ($rows as $row) {
		$nav = explode(":", $row);
		$page = trim($nav[0]);
		$link = trim($nav[1]);

		if($link  == $activePage) {
			echo "<li class='activeLink'><a href='{$link}'>" . $page . "</a></li>";
		} else {
			echo  "<li><a href='" . $link . "'>" . $page . "</a></li>";
		}
	}
	echo "</ul>";
}

function getTitle(){

	$activePage = basename($_SERVER['PHP_SELF']);
	$rows = file('includes/navigation.txt');

	foreach ($rows as $row) {
		$nav = explode(":", $row);
		$page = trim($nav[0]);
		$link = trim($nav[1]);

		if($link  == $activePage) {
			echo $page;
		} else {
		}
	}
}

function insertIntoTable() {

}

function getSeeds($season,  $db) {

	$query = "SELECT * FROM Tournament WHERE Season=" . $season;

	$results = $db->query($query);
	while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
		echo "<tr>";
		echo "<td>$row[Season]</td><td>$row[TeamID]</td><td>$row[Seed]</td><td>$row[Depth]</td><td>$row[Division]</td><br>";
		echo "</tr>";
	}
}

?>



