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
        <h2 id="headline">Admin Page</h2>
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
            echo "Login successful";
            echo "<p><a href = 'AdminPage.php' class = 'button'>Go to Admin Page</a><br></p>";
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
