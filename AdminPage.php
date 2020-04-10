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

//        $stmt = $db->prepare("SELECT Username FROM Users WHERE Username = :username");
//
//        $stmt->bindValue(':username', $username);
//        $results = $stmt->execute();
//
//        $row = $results->fetchArray(SQLITE3_ASSOC);
//
//        echo "{$row[0]}";

<<<<<<< HEAD
        echo "<div class = 'button'><a href = Player_Amendments.php>Player Amendment Form</a></div>";

=======
>>>>>>> 7e917ab6c52d3b7ffe558b7650eff1fb4e70446a





        ?>


        <p><a href = 'Form_Template.php' class = 'button'>Add New Player Form</a><br></p>
        <p><br></p>
        <p><a href = 'Form_Template.php' class = 'button'>Add New Team Form</a><br></p>
        <p><br></p>
        <p><a href = 'Form_Template.php' class = 'button'>Add New Games</a><br></p>
        <p><br></p>
        <p><a href = 'Form_Template.php' class = 'button'>Edit Stats</a><br></p>
        <p><br></p>
        <p><a href = 'Form_Template.php' class = 'button'>Add New Tournament</a><br></p>
        <p><br></p>
        <p><a href = 'Form_Template.php' class = 'button'>Delete</a><br></p>

    </div>
</section>

</body>

<footer>
    <div class = "share-wrap share">

    </div>
</footer>
