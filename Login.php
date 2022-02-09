<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Login</title>

    <style>
        h1 {
            color: brown;
        }
    </style>

</head>
<body>
<?php include('header.php')?>


    <form action="login.php" method="post">
    <?php include('errors.php'); ?>
        <div class="center">
            <h1>Log-in</h1>
            <hr>
    </div>

    </br></br></br></br></br></br>
    
    <div align="center">
    <div>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" required>
    </div>

    </br>

    <div>
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required>
    </div>
    </br>

            <button type="submit" class="button" name="login_user">Login</button>

            <p></p>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

            <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    </div>
        </div>
    </form>

</body>
</html>


