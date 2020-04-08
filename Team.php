<link rel="stylesheet" href="css/tournament.css">
<?php include "functions.php"; ?>
<?php include "includes/db.php"; ?>
<?php
    print_r($_GET);

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
    <div class="hero-wrap">

        <h2 id="headline">Team Stats</h2>



    </div>
</header>

<section id="bracket">
    <div class="container">



        <table id="stats">
            <tr>

                <th>Team ID</th>
                <th>Team Stats</th>
                <th>City</th>
            </tr>

            <tr>
             <?php
//                $name = $_GET('name');
                $id = $_GET['id'];


                $results = $db->query('SELECT * FROM Teams WHERE TeamID = {$id}');

                while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>$row[TeamID]</td><td>$row[TeamName]</td><td>$row[City]</td><br>";
                    echo "</tr>";
                }

                ?>
            </tr>
        </table>





    </div>
</section>
