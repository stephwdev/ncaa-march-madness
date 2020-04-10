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


function getSeeds($season,  $db) {

	$query = "SELECT * FROM Tournament WHERE Season=" . $season;

	$results = $db->query($query);
	while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
		echo "<tr>";
		echo "<td>$row[Season]</td><td>$row[TeamID]</td><td>$row[Seed]</td><td>$row[Depth]</td><td>$row[Division]</td><br>";
		echo "</tr>";
	}
}

function insertPlayer($db)
{
		$playerid = $_POST['playerid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$teamid = $_POST['teamid'];


		$stmt = $db->prepare("INSERT OR IGNORE INTO Player (PlayerID, LastName, FirstName, TeamID) VALUES (:playerID, :lastName, :firstName,:teamID)");

		$stmt->bindValue('playerID', $playerid, SQLITE3_INTEGER);
		$stmt->bindValue('lastName', $lastname);
		$stmt->bindValue('firstName', $firstname);
		$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
		$stmt->execute();

		echo "Player Successfully Inserted";
}

function updatePlayer($db)
{
	$playerid = $_POST['playerid'];
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$teamid = $_POST['teamid'];

	$stmt = $db->prepare("UPDATE Player SET LastName = :lastName, FirstName = :firstName, TeamID = :teamID WHERE PlayerID = :playerID");

	$stmt->bindValue('playerID', $playerid, SQLITE3_INTEGER);
	$stmt->bindValue('lastName', $lastname);
	$stmt->bindValue('firstName', $firstname);
	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->execute();

	echo "Player Successfully Updated";
}

function deletePlayer($db)
{
	$playerid = $_POST['playerid'];

	$stmt = $db->prepare("DELETE FROM Player WHERE PlayerID = :playerID");

	$stmt->bindValue('playerID', $playerid, SQLITE3_INTEGER);

	$stmt->execute();

	echo "Player Successfully Removed";
}

function insertTeam($db)
{
	$teamid = $_POST['teamid'];
	$teamname = $_POST['teamname'];
	$coachname = $_POST['coachname'];
	$city = $_POST['city'];
	$state = $_POST['state'];


	$stmt = $db->prepare("INSERT OR IGNORE INTO Teams (TeamID, TeamName, CoachName, City, State) VALUES (:teamID, :teamName, :coachName, :city, :state)");

	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('teamName', $teamname);
	$stmt->bindValue('coachName', $coachname);
	$stmt->bindValue('city', $city);
	$stmt->bindValue('state', $state);
	$stmt->execute();

	echo "Team Successfully Inserted";
}

function updateTeam($db)
{
	$teamid = $_POST['teamid'];
	$teamname = $_POST['teamname'];
	$coachname = $_POST['coachname'];
	$city = $_POST['city'];
	$state = $_POST['state'];


	$stmt = $db->prepare("UPDATE Teams SET TeamName = :teamName, CoachName = :coachName, City = :city, State = :state WHERE TeamID = :teamID");

	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('teamName', $teamname);
	$stmt->bindValue('coachName', $coachname);
	$stmt->bindValue('city', $city);
	$stmt->bindValue('state', $state);
	$stmt->execute();

	echo "Team Successfully Updated";
}

function deleteTeam($db)
{
	$teamid = $_POST['teamid'];

	$stmt = $db->prepare("DELETE FROM Teams WHERE TeamID = :teamID");

	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);

	$stmt->execute();

	echo "Team Successfully Removed";
}

function insertGame($db)
{
	$gameid = $_POST['gameid'];
	$season = $_POST['season'];
	$teamid = $_POST['teamid'];
	$score = $_POST['score'];
	$result = $_POST['result'];
	$round = $_POST['round'];


	$stmt = $db->prepare("INSERT OR IGNORE INTO Games (GameID, Season, TeamID, Score, Result, Round) VALUES (:gameID, :season, :teamID, :score, :result, :round)");

	$stmt->bindValue('gameID', $gameid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('score', $score, SQLITE3_INTEGER);
	$stmt->bindValue('result', $result);
	$stmt->bindValue('round', $round);
	$stmt->execute();

	echo "Game Successfully Inserted";
}

function updateGame($db)
{
	$gameid = $_POST['gameid'];
	$season = $_POST['season'];
	$teamid = $_POST['teamid'];
	$score = $_POST['score'];
	$result = $_POST['result'];
	$round = $_POST['round'];


	$stmt = $db->prepare("UPDATE Games SET Season = :season, Score = :score, Result = :result, Round = :round WHERE GameID = :gameID AND TeamID = :teamID");

	$stmt->bindValue('gameID', $gameid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('score', $score, SQLITE3_INTEGER);
	$stmt->bindValue('result', $result);
	$stmt->bindValue('round', $round);
	$stmt->execute();

	echo "Game Successfully Updated";
}

function deleteGame($db)
{
	$gameid = $_POST['gameid'];
	$teamid = $_POST['teamid'];

	$stmt = $db->prepare("DELETE FROM Games WHERE GameID = :gameID AND TeamID = :teamID");

	$stmt->bindValue('gameID', $gameid, SQLITE3_INTEGER);
	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);

	$stmt->execute();

	echo "Game Successfully Removed";
}

function insertTournament($db)
{
	$season = $_POST['season'];
	$teamid = $_POST['teamid'];
	$seed = $_POST['seed'];
	$depth = $_POST['depth'];
	$division = $_POST['division'];


	$stmt = $db->prepare("INSERT OR IGNORE INTO Tournament (Season, TeamID, Seed, Depth, Division) VALUES (:season, :teamID, :seed, :depth, :division)");

	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('seed', $seed);
	$stmt->bindValue('depth', $depth);
	$stmt->bindValue('division', $division);
	$stmt->execute();

	echo "Tournament Successfully Inserted";
}

function updateTournament($db)
{
	$season = $_POST['season'];
	$teamid = $_POST['teamid'];
	$seed = $_POST['seed'];
	$depth = $_POST['depth'];
	$division = $_POST['division'];


	$stmt = $db->prepare("UPDATE Tournament SET Seed = :seed, Depth = :depth, Division = :division WHERE Season = :season AND TeamID = :teamID");

	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('seed', $seed);
	$stmt->bindValue('depth', $depth);
	$stmt->bindValue('division', $division);
	$stmt->execute();

	echo "Tournament Successfully Updated";
}

function deleteTournament($db)
{
	$season = $_POST['season'];
	$teamid = $_POST['teamid'];

	$stmt = $db->prepare("DELETE FROM Tournament WHERE Season = :season AND TeamID = :teamID");

	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);

	$stmt->execute();

	echo "Tournament Successfully Removed";
}

function insertPlayerStat($db)
{
	$playerid = $_POST['playerid'];
	$season = $_POST['season'];
	$ast = $_POST['ast'];
	$blk = $_POST['blk'];
	$foul = $_POST['foul'];
	$reb = $_POST['reb'];
	$stl = $_POST['stl'];
	$tover = $_POST['tover'];
	$fgm = $_POST['fgm'];
	$fga = $_POST['fga'];
	$ftm = $_POST['ftm'];
	$fta = $_POST['fta'];

	$stmt = $db->prepare("INSERT OR IGNORE INTO PlayerStats (PlayerID, Season, AST, BLK, FOUL, REB, STL, TOver, FGM, FGA, FTM, FTA) VALUES (:playerID, :season, :ast, :blk, :foul, :reb, :stl, :tover, :fgm, :fma, :ftm, :fta)");

	$stmt->bindValue('playerID', $playerid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('ast', $ast, SQLITE3_INTEGER);
	$stmt->bindValue('blk', $blk, SQLITE3_INTEGER);
	$stmt->bindValue('foul', $foul, SQLITE3_INTEGER);
	$stmt->bindValue('reb', $reb, SQLITE3_INTEGER);
	$stmt->bindValue('stl', $stl, SQLITE3_INTEGER);
	$stmt->bindValue('tover', $tover, SQLITE3_INTEGER);
	$stmt->bindValue('fgm', $fgm, SQLITE3_INTEGER);
	$stmt->bindValue('fga', $fga, SQLITE3_INTEGER);
	$stmt->bindValue('ftm', $ftm, SQLITE3_INTEGER);
	$stmt->bindValue('fta', $fta, SQLITE3_INTEGER);
	$stmt->execute();

	echo "Player Stat Successfully Inserted";
}

function updatePlayerStat($db)
{
	$playerid = $_POST['playerid'];
	$season = $_POST['season'];
	$ast = $_POST['ast'];
	$blk = $_POST['blk'];
	$foul = $_POST['foul'];
	$reb = $_POST['reb'];
	$stl = $_POST['stl'];
	$tover = $_POST['tover'];
	$fgm = $_POST['fgm'];
	$fga = $_POST['fga'];
	$ftm = $_POST['ftm'];
	$fta = $_POST['fta'];

	$stmt = $db->prepare("UPDATE PlayerStats SET AST = :ast, BLK = :blk, FOUL = :foul, REB = :reb, STL = :stl, TOver = :tover, FGM = :fgm, FGA = :fga, FTM = :ftm, FTA = :fta WHERE PlayerID = :playerID AND Season = :season");

	$stmt->bindValue('playerID', $playerid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('ast', $ast, SQLITE3_INTEGER);
	$stmt->bindValue('blk', $blk, SQLITE3_INTEGER);
	$stmt->bindValue('foul', $foul, SQLITE3_INTEGER);
	$stmt->bindValue('reb', $reb, SQLITE3_INTEGER);
	$stmt->bindValue('stl', $stl, SQLITE3_INTEGER);
	$stmt->bindValue('tover', $tover, SQLITE3_INTEGER);
	$stmt->bindValue('fgm', $fgm, SQLITE3_INTEGER);
	$stmt->bindValue('fga', $fga, SQLITE3_INTEGER);
	$stmt->bindValue('ftm', $ftm, SQLITE3_INTEGER);
	$stmt->bindValue('fta', $fta, SQLITE3_INTEGER);
	$stmt->execute();

	echo "Player Stat Successfully Updated";
}

function deletePlayerStat($db)
{
	$playerid = $_POST['playerid'];
	$season = $_POST['season'];

	$stmt = $db->prepare("DELETE FROM PlayerStats WHERE Season = :season AND PlayerID = :playerID");

	$stmt->bindValue('playerID', $playerid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);

	$stmt->execute();

	echo "Player Stat Successfully Removed";
}

?>
