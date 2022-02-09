<?php




require_once "config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="StyleSheet.css">
    <title>Sign Up</title>
    <style>
        h1{
            color: brown;
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="#default" class="logo">My Wellbeing</a>
        <div class="header-right">
            <a href="homePage.html">Home</a>
            <a href="signup.html">Sign up</a>
            <a href="signin.html">Sign in</a>
        </div>
    </div>

    <form action="/action_page.php" style="border:1px solid #ccc">
        <div class="center">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <div class="clearfix">
                <button type="submit" class="button">Sign Up</button>
                <button type="button" class="button">Cancel</button>
            </div>
            <p></p>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

        </div>
    </form>

</body>
</html>
