<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" media="all" type="text/css">
    <title>PHP Workout</title>
</head>
<body>

    <header>
        <?php include("nav.php"); ?>
    </header>

    <main>

        <div class="first-container">
            <h1 class="welcome text-secondary">Welcome</h1>
            <h2 class="choose-to-play text-secondary">Do you want to play a mini-game?</h2>
            <form action="journey.php" method="post">
                <div class="yes-or-no">
                    <button type="text" class="btn btn-info yes-button" name="quiz" label="yes" value="yes">Yes</button>
                    <button type="text" class="btn btn-info no-button" name="quiz" label="no" value="no">No</button>
                </div>
            </form>
        </div>


        <div class="trying-stuff">
            <?php
            /*

                <?php

                    $user1 = array (
                        'username' => 'Parsath',
                        'password' => 'papychullo',
                        'adress' => 'borj louzir',
                        'age' => 14
                    );

                    $player1 = "Bilel";
                    $player2 = "Karim";

                    echo $player1 . " and " . $player2;

                    function Baguette($name){
                        echo "Hello " . $name;
                    }
                ?>

                <h1>User: <?php echo $user1['username']; ?></h1>
                
                <ul>
                    <?php
                        foreach( $user1 as $characteristic => $data )
                        {
                            ?>
                            <li>
                                <?php echo $characteristic . " : " . $data; ?>
                            </li>
                            <?php 
                        }
                    ?>
                </ul>
                <ul>
                    <h1>Salut <?php echo $player1; ?></h1>
                    <h1>Wesh <?php echo $player2; ?></h1>
                    <h1><?php Baguette($player1); ?></h1>
                    <h1><?php Baguette($player2); ?></h1>
                    
                </ul>

                
                <h2>Affichage de texte avec PHP</h2>
                
                <p>
                    Cette ligne a été écrite entièrement en HTML.<br />
                    <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>
                </p>

            */
            ?>
        </div>

    </main>
</body>
</html>