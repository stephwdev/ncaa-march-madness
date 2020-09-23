<?php

include "includes/db.php";

function getName($season, $seed,  $db) {

	$stmt = $db->prepare("SELECT * FROM Tournament INNER JOIN Teams ON Tournament.TeamID = Teams.TeamID WHERE Seed = :seed AND Season = :season");

	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('seed', $seed);

	$results = $stmt->execute();
	$row = $results->fetchArray(SQLITE3_ASSOC);
	$url = 'Team.php?id=' .$row[TeamID] . '&season=' . $season;

	$displaySeed = substr($seed, 1);

	$name = $displaySeed . " " . $row[TeamName];

	echo "<a href=$url>$name</a>";


}

function getTeamStats($season, $teamid, $db) {

	$stmt = $db->prepare("SELECT DISTINCT Teams.*, TeamStats.Season, TeamStats.FGM, TeamStats.FGA, TeamStats.FTM, TeamStats.FTA, TeamStats.AST, TeamStats.TOver, TeamStats.STL, 
TeamStats.BLK, TeamStats.REB FROM Teams, (SELECT Tournament.Season, Tournament.Seed, Tournament.Depth, Tournament.Division, Teams.* FROM Tournament INNER JOIN Teams ON 
Tournament.TeamID = Teams.TeamID WHERE Tournament.Season = :season) AS TeamsX INNER JOIN TeamStats ON Teams.TeamID = TeamStats.TeamID WHERE TeamsX.Season = TeamStats.Season AND Teams.TeamID = :teamid");

	$stmt->bindValue('season', $season);
	$stmt->bindValue('teamid', $teamid);

	$results = $stmt->execute();
	$row = $results->fetchArray();

	echo "<tr>";
	echo "<td>$row[TeamName]</td><td>$row[CoachName]</td><td>$row[City]</td><td>$row[State]</td>";
	echo "<td>$row[Season]</td><td>$row[FGM]</td><td>$row[FGA]</td><td>$row[FTM]</td><td>$row[FTA]</td>";
	echo "<td>$row[AST]</td><td>$row[TOver]</td><td>$row[STL]</td><td>$row[BLK]</td><td>$row[REB]</td>";
	echo "</tr>";

}

function getPlayerStats($season, $teamid, $db) {
	$stmt = $db->prepare("SELECT DISTINCT Player.FirstName, Player.LastName, PlayerStats.* FROM Player,  (
	SELECT DISTINCT Teams.*, TeamStats.Season, TeamStats.FGM, TeamStats.FGA,  TeamStats.FTM, TeamStats.FTA, 
	TeamStats.AST, TeamStats.TOver, TeamStats.STL, TeamStats.BLK, TeamStats.REB FROM Teams, (SELECT Tournament.Season, Tournament.Seed,  
	Tournament.Depth, Tournament.Division, Teams.* FROM Tournament INNER JOIN Teams ON Tournament.TeamID = Teams.TeamID 
	WHERE Tournament.Season = :season ) AS TeamsX INNER JOIN TeamStats ON Teams.TeamID = TeamStats.TeamID 
	WHERE TeamsX.Season = TeamStats.Season AND Teams.TeamID = :teamid) AS TeamStatsX LEFT JOIN PlayerStats ON 
	PlayerStats.PlayerID = Player.PlayerID 
	WHERE Player.TeamID = TeamStatsX.TeamID");

	$stmt->bindValue('season', $season);
	$stmt->bindValue('teamid', $teamid);
	$results = $stmt->execute();
	$i = 1;

	while ($row = $results->fetchArray(SQLITE3_ASSOC)) {

		if($row['Season'] == NULL) {
			continue;
		} elseif ($row['Season'] == $season) {
			$name = $row['FirstName'] . " " . $row['LastName'];
			$playerid = "PlayerPage.php?id=" . $row['PlayerID'];
			echo "<tr>";
			echo "<td>$i</td><td><a href=$playerid>$name</td><td>$row[Season]</td><td>$row[FGM]</td><td>$row[FGA]</td>";
			echo "<td>$row[FTM]</td><td>$row[FTA]</td><td>$row[AST]</td><td>$row[TOver]</td><td>$row[STL]</td><td>$row[BLK]</td><td>$row[REB]</td><td>$row[FOUL]</td>";
			echo "</tr>";
			$i++;
		} else {
			continue;
		}

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

function insertTeamStat($db)
{
	$teamid = $_POST['teamid'];
	$season = $_POST['season'];
	$fgm = $_POST['fgm'];
	$fga = $_POST['fga'];
	$ftm = $_POST['ftm'];
	$fta = $_POST['fta'];
	$ast = $_POST['ast'];
	$tover = $_POST['tover'];
	$stl = $_POST['stl'];
	$blk = $_POST['blk'];
	$reb = $_POST['reb'];

	$stmt = $db->prepare("INSERT OR IGNORE INTO TeamStats (TeamID, Season, FGM, FGA, FTM, FTA, AST, TOver, STL, BLK, REB) VALUES (:teamID, :season, :fgm, :fga, :ftm, :fta, :ast, :tover, :stl, :blk, :reb)");

	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('fgm', $fgm, SQLITE3_INTEGER);
	$stmt->bindValue('fga', $fga, SQLITE3_INTEGER);
	$stmt->bindValue('ftm', $ftm, SQLITE3_INTEGER);
	$stmt->bindValue('fta', $fta, SQLITE3_INTEGER);
	$stmt->bindValue('ast', $ast, SQLITE3_INTEGER);
	$stmt->bindValue('tover', $tover, SQLITE3_INTEGER);
	$stmt->bindValue('stl', $stl, SQLITE3_INTEGER);
	$stmt->bindValue('blk', $blk, SQLITE3_INTEGER);
	$stmt->bindValue('reb', $reb, SQLITE3_INTEGER);
	$stmt->execute();

	echo "Team Stat Successfully Inserted";
}

function updateTeamStat($db)
{
	$teamid = $_POST['teamid'];
	$season = $_POST['season'];
	$fgm = $_POST['fgm'];
	$fga = $_POST['fga'];
	$ftm = $_POST['ftm'];
	$fta = $_POST['fta'];
	$ast = $_POST['ast'];
	$tover = $_POST['tover'];
	$stl = $_POST['stl'];
	$blk = $_POST['blk'];
	$reb = $_POST['reb'];

	$stmt = $db->prepare("UPDATE TeamStats SET FGM = :fgm, FGA = :fga, FTM = :ftm, FTA = :fta, AST = :ast, TOver = :tover, STL = :stl, BLK = :blk, REB = :reb WHERE TeamID = :teamID AND Season = :season");

	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);
	$stmt->bindValue('fgm', $fgm, SQLITE3_INTEGER);
	$stmt->bindValue('fga', $fga, SQLITE3_INTEGER);
	$stmt->bindValue('ftm', $ftm, SQLITE3_INTEGER);
	$stmt->bindValue('fta', $fta, SQLITE3_INTEGER);
	$stmt->bindValue('ast', $ast, SQLITE3_INTEGER);
	$stmt->bindValue('tover', $tover, SQLITE3_INTEGER);
	$stmt->bindValue('stl', $stl, SQLITE3_INTEGER);
	$stmt->bindValue('blk', $blk, SQLITE3_INTEGER);
	$stmt->bindValue('reb', $reb, SQLITE3_INTEGER);
	$stmt->execute();

	echo "Team Stat Successfully Updated";
}

function deleteTeamStat($db)
{
	$teamid = $_POST['teamid'];
	$season = $_POST['season'];

	$stmt = $db->prepare("DELETE FROM TeamStats WHERE Season = :season AND TeamID = :teamID");

	$stmt->bindValue('teamID', $teamid, SQLITE3_INTEGER);
	$stmt->bindValue('season', $season, SQLITE3_INTEGER);

	$stmt->execute();

	echo "Team Stat Successfully Removed";
}

?>
