
 <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!--index.html-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Maths Game</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="styling.css">
    </head>
    
    <body>
         <div>
        <h1>You are logged in as, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    </div>
        <div id="container">
            <div id="score">
                Score: <span id="scorevalue">0</span>
            </div>
            <div id="correct">
                Correct
            </div>
            <div id="wrong">
                Try again
            </div>
            <div id="question">
                
            </div>
            <div id="instruction">
                Click on the correct answer
            </div>
            <div id="choices">
                <div id="box1" class="box"></div>
                <div id="box2" class="box"></div>
                <div id="box3" class="box"></div>
                <div id="box4" class="box"></div>
            </div>
            <div id="startreset">
                Start Game
            </div>
            <div id="timeremaining">
                Time remaining: <span id="timeremainingvalue">60</span> sec
            </div>
            <div id="gameOver">
                
            </div>
        </div>
        <script src="javascript.js"></script>
         <p>
        
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    </body>
</html>