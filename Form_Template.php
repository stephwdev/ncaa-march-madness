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

        <h2 id="headline">Insert Form</h2>



    </div>
</header>

<section id="bracket">
    <div class="container">

        <div class="round round-two current">
            <div class="round-details">Insert Player<br/></div>

            <form action="form_process.php?form=insertPlayer" method="post">

                <label for="playerid">PlayerID</label>
                <input type = "text" name = "playerid"><br>
                <label for="lastname">LastName</label>
                <input type = "text" name = "lastname"><br>
                <label for="firstname">FirstName</label>
                <input type = "text" name = "firstname"><br>
                <label for="teamid">TeamID</label>
                <input type = "text" name = "teamid"><br>

                <input type = "submit" name="submit">

            </form>

            <div class="round-details">Insert Team<br/></div>

            <form action="form_process.php?form=insertTeam" method="post">

                <label for="playerid">TeamID</label>
                <input type = "text" name = "teamid"><br>
                <label for="lastname">TeamName</label>
                <input type = "text" name = "lastname"><br>
                <label for="firstname">FirstName</label>
                <input type = "text" name = "firstname"><br>
                <label for="teamid">TeamID</label>
                <input type = "text" name = "teamid"><br>

                <input type = "submit" name="submit">

            </form>

        </div>





        </div>


    </div>
</section>
