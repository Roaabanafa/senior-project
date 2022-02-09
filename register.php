<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   
    <!-- <link rel="stylesheet" href="stylesheet CSS.css"> -->
   
    <title>Sign Up</title>
    <style>
        h1 {
            color: brown;
        }
    </style>
</head>

<body>

    
<?php include('header.php')?>


    <form method="post" action="register.php" style="border:1px solid #ccc">
        <?php include('errors.php'); ?>
        <div class="center">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
        </div>
    
    </br></br></br></br></br></br>
    <div align="center">
        <div>
            <label for="fname" ><b>First name:</b></label>
            <input type="text" name="fname" value="<?php echo $fname;?>" required>

        </div>
        </br>
        <div>
            <label for="lname"><b>Last name:</b></label>
            <input type="text" name="lname" value="<?php echo $lname;?>" required>
        </div>
        </br>

        <div>

            <label for="user_sex"><b>You Are:</b></label>
            <input type="radio" name="user_sex" <?php if (isset($user_sex) && $user_sex=="female" ) echo "checked" ;?>
            value="female">Female
            <input type="radio" name="user_sex" <?php if (isset($user_sex) && $user_sex=="male" ) echo "checked" ;?> 
            value="male"> Male

        </div>
        </br>

        <div>
            <label for="email"><b>Email:</b></label>
            <input type="email" placeholder="name@email.com" name="email" value="<?php echo $email; ?>" required>
        </div>
        </br>
        <div>
            <label for="password"><b>Password:</b></label>
            <input type="password" placeholder="******" name="password_1" required>
        </div>
        </br>

        <div>
            <label for="password"><b>Confirm Password:</b></label>
            <input type="password" placeholder="******" name="password_2" required>
        </div>
        </br>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

    </br>
        <div class="clearfix">
            <button type="submit" class="button" name="reg_user" >Sign Up</button>
        </div>

        

        </div>
    </div>
    </form>

</body>

</html>