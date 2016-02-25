<!DOCTYPE html>
<html>
    <head>
        <title>Rock Paper Scissors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        
        <!--Custom css-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq<!--5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <header class="container text-center">
            <h1>Rock Paper Scissors</h1>
            <h3><?php echo inRound();?></h3>
            <h4>Player <?php echo $_SESSION['playerturn']; ?> Pick your weapon!</h4>
        </header>
        <section class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h2>Player 1</h2>
                    <ul class="list-unstyled">
                        <li><a <?php choice(1, 'rock'); ?>><img class="<?php hoverEffect(1); ?>" src="img/rock-links.png" alt="rock-player-1"></a></li>
                        <li><a <?php choice(1, 'paper'); ?>><img class="<?php hoverEffect(1); ?>" src="img/paper-links.png" alt="paper-player-1"></a></li>
                        <li><a <?php choice(1, 'scissors'); ?>><img class="<?php hoverEffect(1); ?>" src="img/scissors-links.png" alt="scissors-player-1"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>vs</h3>
                    <h3><?php echo $_SESSION['player1points']; ?> - <?php echo $_SESSION['player2points']; ?></h3>
                </div>
                <div class="col-md-4">
                    <h2><?php player2(); ?></h2>
                    <ul class="list-unstyled">
                        <li><a <?php choice(2, 'rock'); ?>><img class="<?php hoverEffect(2); ?>" src="img/rock-rechts.png" alt="rock-player-2"></a></li>
                        <li><a <?php choice(2, 'paper'); ?>><img class="<?php hoverEffect(2); ?>" src="img/paper-rechts.png" alt="paper-player-2"></a></li>
                        <li><a <?php choice(2, 'scissors'); ?>><img class="<?php hoverEffect(2); ?>" src="img/scissors-rechts.png" alt="scissors-player-2"></a></li>
                    </ul>
                </div>
            </div>
        </section>       
    </body>
</html>

