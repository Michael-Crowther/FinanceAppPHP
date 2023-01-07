<?php
    include_once 'header.php';
?>

    <body class="catalogBody">
        <div class="signupForm">
            <h2>Sign Up</h2>
            <form action="signup.inc.php" mwthod="post">
                <input type="text" name="fname" placeholder="First name...">
                <input type="text" name="lname" placeholder="Last name...">
                <input type="text" name="email" placeholder="Email address...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Re-enter password...">
                <button type="submit" name="submit">Sing Up</button>
            </form>
        </div>

        <?php
            include_once 'footer.php';
        ?>
    </body>

</html>
            
        