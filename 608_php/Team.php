<link rel="stylesheet" href="css/tournament.css">
<?php include "functions.php"; ?>



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
    <div class="hero-wrap">

        <h2 id="headline">Team Stats</h2>



    </div>
</header>

<section id="bracket">
    <div class="container">
        <div class="split split-one">

            <table id="stats">
                <tr>


                    <th>Team Name</th>
                    <th>Coach Name</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Season</th>
                    <th>FGM</th>
                    <th>FGA</th>
                    <th>FTM</th>
                    <th>FTA</th>
                    <th>AST</th>
                    <th>TOver</th>
                    <th>STL</th>
                    <th>BLK</th>
                    <th>REB</th>
                </tr>

                <tr>
                    <?php
                    //                $name = $_GET('name');
                    $id = $_GET['id'];
                    $season = $_GET['season'];

                    getTeamStats($season, $id, $db);

                    ?>
                </tr>
            </table>


        </div>


    </div>
</section>


<section id="bracket">
    <div class="container">
        <div class="split split-one">
                    <div class = "split split-two">

                        <table id="stats">
                            <tr>

                                <th>Roster</th>
                                <th>Player Name</th>
                                <th>Season</th>
                                <th>FGM</th>
                                <th>FGA</th>
                                <th>FTM</th>
                                <th>FTA</th>
                                <th>AST</th>
                                <th>TOver</th>
                                <th>STL</th>
                                <th>BLK</th>
                                <th>REB</th>
                                <th>FOUL</th>

                            </tr>

                            <tr>
                                <?php

                                getPlayerStats($season, $id, $db);



                                ?>
                            </tr>
                        </table>

                    </div>

        </div>
    </div>
</section>

