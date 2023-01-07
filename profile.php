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
            </div>
        </div>

        <div class="maindiv">
            <div class="profilePic">
                <form action="get_info.php" method="POST" class="form">

                    <label class="header">
                        <img id="defaultPic" src="images/defaultProfile.png">
                        <img id="addPic" src="images/addPic.png">
                    </label>
                    <input id="image" type="file" name="profilePic" src="images/whiteCircle.png" placeholder="Photo" required="" accept="image/*;capture=camera">
                    <!--<input type="submit" class="submit" value="Submit">-->
                </form>
            </div>

            <div class="profileInformation">
                <button type="button" class="signup" onclick="location.href='signup.php'">Sign Up</button>
                <button type="button" class="login">Login</button>
            </div>
        </div>


        <?php
            include_once 'footer.php';
        ?>

    </body>
</html>