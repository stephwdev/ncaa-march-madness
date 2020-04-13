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

        <h2 id="headline">Admin Page</h2>



    </div>
</header>

<section id="bracket">
    <div class="index">


        <?php

        $username = $_POST['username'];
        $password = $_POST['password'];
        $loginSuccessful = false;

        $stmt = $db->prepare("SELECT Username FROM Users");

        $stmt->bindValue(':username', $username);
        $results = $stmt->execute();

        while($row = $results->fetchArray(SQLITE3_ASSOC)) {
            if($row['username'] == $username) {
                $loginSuccessful = true;
            }
        }

        if ($loginSuccessful == true) {
            echo "<p><a href = 'Player_Amendments.php' class = 'button'>Player Amendment Form</a><br></p>";
            echo "<p><br></p>";
            echo "<p><a href = 'Team_Amendments.php' class = 'button'>Team Amendment Form</a><br></p>";
            echo "<p><br></p>";
            echo "<p><a href = 'Game_Amendments.php' class = 'button'>Game Amendment Form</a><br></p>";
            echo "<p><br></p>";
            echo "<p><a href = 'Tournament_Amendments.php' class = 'button'>Tournament Amendment Form</a><br></p>";
            echo "<p><br></p>";
            echo "<p><a href = 'PlayerStats_Amendments.php' class = 'button'>Player Stat Amendment Form</a><br></p>";
            echo "<p><br></p>";
            echo "<p><a href = 'TeamStats_Amendments.php' class = 'button'>Team Stat Amendment Form</a><br></p>";
            echo "<p><br></p>";
        } else {
            echo "This user does not exist. Please try again.";
            echo "<p><a href = 'LoginPage.php' class = 'button'>Return to Login Page</a><br></p>";
        }


        ?>

    </div>
</section>

</body>

<footer>
    <div class = "share-wrap share">

    </div>
</footer>
