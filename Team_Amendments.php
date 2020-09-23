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
            <div class="round-details">Team Amendments<br/></div>

            <form action="form_process.php?form=insertTeam" method="post">

                <label for="teamid">TeamID</label>
                <input type = "text" name = "teamid"><br>
                <label for="teamname">TeamName</label>
                <input type = "text" name = "teamname"><br>
                <label for="coachname">CoachName</label>
                <input type = "text" name = "coachname"><br>
                <label for="city">City</label>
                <input type = "text" name = "city"><br>
                <label for="state">State</label>
                <input type = "text" name = "state"><br>

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