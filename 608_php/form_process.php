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

        <h2 id="headline">Amendment Confirmation</h2>

    </div>
</header>

<section id="bracket">
    <div class="container">

<?php

if(isset($_POST['submit'])) {

    if($_GET['form'] == 'insertPlayer') {
        if ($_POST['submit'] == 'Insert') {
            insertPlayer($db);
        } elseif ($_POST['submit'] == 'Update') {
             updatePlayer($db);
        } elseif ($_POST['submit'] == 'Delete'){
            deletePlayer($db);
        }

    }
    elseif ($_GET['form'] == 'insertTeam') {
         if ($_POST['submit'] == 'Insert'){
             insertTeam($db);
         } elseif ($_POST['submit'] == 'Update'){
             updateTeam($db);
         } elseif ($_POST['submit'] == 'Delete'){
             deleteTeam($db);
         }
    }
    elseif ($_GET['form'] == 'insertGame') {
         if ($_POST['submit'] == 'Insert') {
            insertGame($db);
         } elseif ($_POST['submit'] == 'Update') {
            updateGame($db);
         } elseif ($_POST['submit'] == 'Delete') {
            deleteGame($db);
         }
    }
    elseif ($_GET['form'] == 'insertTournament') {
         if ($_POST['submit'] == 'Insert') {
            insertTournament($db);
         } elseif ($_POST['submit'] == 'Update') {
            updateTournament($db);
         } elseif ($_POST['submit'] == 'Delete') {
            deleteTournament($db);
         }
    }
    elseif ($_GET['form'] == 'insertPlayerStat') {
         if ($_POST['submit'] == 'Insert') {
            insertPlayerStat($db);
         } elseif ($_POST['submit'] == 'Update') {
            updatePlayerStat($db);
         } elseif ($_POST['submit'] == 'Delete') {
            deletePlayerStat($db);
       }
    }
    elseif ($_GET['form'] == 'insertTeamStat') {
         if ($_POST['submit'] == 'Insert') {
            insertTeamStat($db);
         } elseif ($_POST['submit'] == 'Update') {
            updateTeamStat($db);
         } elseif ($_POST['submit'] == 'Delete') {
            deleteTeamStat($db);
       }
    }
}

?>
    </div>
</section>
<section class="share">
    <div class="share-wrap">
        <p><a href = 'AdminPage.php' class = 'button'>Admin Main Page</a><br></p>
    </div>
</section>
