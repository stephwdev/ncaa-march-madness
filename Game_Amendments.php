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
            <div class="round-details">Game Amendments<br/></div>

            <form action="form_process.php?form=insertGame" method="post">

                <label for="gameid">GameID</label>
                <input type = "text" name = "gameid"><br>
                <label for="season">Season</label>
                <input type = "text" name = "season"><br>
                <label for="teamid">TeamID</label>
                <input type = "text" name = "teamid"><br>
                <label for="score">Score</label>
                <input type = "text" name = "score"><br>
                <label for="result">Result</label>
                <input type = "text" name = "result"><br>
                <label for="round">Round</label>
                <input type = "text" name = "round"><br>

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