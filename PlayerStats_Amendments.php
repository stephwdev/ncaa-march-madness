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

        <h2 id="headline">Table Amendment Form</h2>

    </div>
</header>

<section id="bracket">
    <div class="container">

        <div class="round round-two current">
            <div class="round-details">Player Stats Amendments<br/></div>

            <form action="form_process.php?form=insertPlayerStat" method="post">

                <label for="playerid">PlayerID</label>
                <input type = "text" name = "playerid"><br>
                <label for="season">Season</label>
                <input type = "text" name = "season"><br>
                <label for="ast">AST</label>
                <input type = "text" name = "ast"><br>
                <label for="blk">BLK</label>
                <input type = "text" name = "blk"><br>
                <label for="foul">FOUL</label>
                <input type = "text" name = "foul"><br>
                <label for="reb">REB</label>
                <input type = "text" name = "reb"><br>
                <label for="stl">STL</label>
                <input type = "text" name = "stl"><br>
                <label for="tover">TOver</label>
                <input type = "text" name = "tover"><br>
                <label for="fgm">FGM</label>
                <input type = "text" name = "fgm"><br>
                <label for="fga">FGA</label>
                <input type = "text" name = "fga"><br>
                <label for="ftm">FTM</label>
                <input type = "text" name = "ftm"><br>
                <label for="fta">FTA</label>
                <input type = "text" name = "fta"><br>

                <input type="submit" name="submit" value="Insert">
                <input type="submit" name="submit" value="Delete">
                <input type="submit" name="submit" value="Update">

            </form>

        </div>

        </div>

    </div>
</section>
<section class="share">
    <div class="share-wrap">
        <p><a href = 'AdminPage.php' class = 'button'>Admin Main Page</a><br></p>
    </div>
</section>