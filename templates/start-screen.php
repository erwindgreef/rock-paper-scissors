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
        </header>
        <section class="container text-center">
            <form action="settings.php" method="post">
                <label>Select Players</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="players" value="1" checked>
                        1 Player
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="players" value="2">
                        2 Players
                    </label>
                </div>
                <label>Select Rounds</label>
                <select name="rounds" class="form-control" id="rounds">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>            
                <button type="submit" class="btn btn-success btn-lg">Start Game</button>
            </form>
        </section>       
    </body>
</html>