<link rel="stylesheet" href="css/tournament.css">
<?php include "functions.php";
$playerID = $_GET['id'];
?>





<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script|Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>

    <title>NCAA Tournament Bracket</title>
</head>
<body>
<header class="hero">

    <h2 id="headline">Player Stats</h2>
</header>

<section id="bracket">
    <div class="container">

        <div class="round-details"><?php

            $nameResults = $db->query('SELECT * FROM Player WHERE PlayerID=' .$playerID);
            while ($row = $nameResults->fetchArray(SQLITE3_ASSOC)) {
                echo "<h3>Player Name: {$row[FirstName]} {$row[LastName]}</h3>";
            }

            ?><br/> </div>

        
            <table id="stats">
            <tr>

                <th>Season</th>
                <th>AST</th>
                <th>BLK</th>
                <th>FOUL</th>
                <th>REB</th>
                <th>STL</th>
                <th>TO</th>
                <th>FGM</th>
                <th>FGA</th>
                <th>FTM</th>
                <th>FTA</th>
            </tr>

            <tr>
             <?php



                $results = $db->query('SELECT * FROM PlayerStats WHERE PlayerID=' . $playerID);


                while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>$row[Season]</td><td>$row[AST]</td><td>$row[BLK]</td><td>$row[FOUL]</td><td>$row[REB]</td><td>$row[STL]</td><td>$row[TOver]</td><td>$row[FGM]</td><td>$row[FGA]</td><td>$row[FTM]</td><td>$row[FTA]</td>";
                    echo "</tr>";
                }

                ?>
            </tr>
        </table>
        





    </div>
</section>
