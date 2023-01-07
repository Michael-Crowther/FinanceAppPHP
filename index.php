<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://kit.fontawesome.com/372c14e565.js" crossorigin="anonymous"></script>
    </head>

    <body class="indexBody">

        <div class="header">
            <div class="headerContent">
                <h1 id="introMessage">Good morning, Michael</h1>
                <h6 id="quote"></h6>
            </div>
        </div>


        <div class="maindiv">
            <!--
            <a href="lessons/saving/saving1.html">
                <div id="todaysGoal">
                        <img class="greenCircle" src="greenCircle.png">
                        <img class="whiteCircle" src="whiteCircle.png">
                        <p id="buttonText">Check <br>Today's<br> Goal!</p>
                </div>
            </a>
            -->
            <a href="lessons/saving/saving1.html" id="todaysGoal">
                <img class="greenCircle" src="images/greenCircle.png">
                <img class="whiteCircle" src="images/blackCircle.png">
                <p id="buttonText">Check <br>Today's<br> Goal!</p>
            </a>
    
    
            <div class="progress">
                <div class="progressBar">
                    <h3 class="progressText">Progress: 7/365</h3>
                </div>
            </div>
        </div>

        <?php
            include_once 'footer.php';
        ?>
    </body>

</html>
            
        