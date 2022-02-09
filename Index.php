<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }

?>



<!DOCTYPE html>
<html>
<head>
    <title>My Wellbeing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include('header.php')?>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<!-- <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>  -->
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

    <div style="padding-left:20px">
        <div class="container">
            <div class="center">
                <button type="button" class="button">Come talk to me!</button>
                <button type="button" class="button" onclick="">The psychological effects of COVID-19</button>
                <button type="button" class="button" onclick="">Professionals profiles</button>
                <button type="button" class="button" onclick="">Book appointments</button>
            </div>
        </div>
    </div>
  

</body>
</html>
