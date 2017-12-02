
<?php
  require_once 'config/dbconnect.php';
  
  }
  else
  {
    if (isset($_POST['login']))
    {
      $username = $_POST['username'];
      $password  = base64_encode($_POST['password']);

      $query = "SELECT `username` FROM `userlogin`  WHERE `username`='$username' AND `passwd`='$passwd'";
      if ($result = mysqli_query($conn,$query))
      {
        if (mysqli_num_rows($result) == 1)
        {
          $row =  mysqli_fetch_assoc($result);
          }
      }
      $query = "SELECT `username` FROM `userlogin`  WHERE `username`='$username' AND `passwd`='$passwd'";
      if ($result = mysqli_query($conn,$query))
      {
        if (mysqli_num_rows($result) == 1)
        {
          $row =  mysqli_fetch_assoc($result);
          $_SESSION['username'] = $row['username'];
          header('Location:user/change_branch.php');
        }
        else
        {
          echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Sorry Sir,</strong> Your Username or Password is wrong Pls Try Again.
				</div>';
        }
      }


    
  }
?>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link href="../css/ninja-slider.css" rel="stylesheet" type="text/css" />
<script src="../js/ninja-slider.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="../css/all.css" media="all" />
</head>
<body background="../images/log.jpg">
<header>
<div style=" background-color:#000;">
	<div class="header_auction">
	<ul>
	  <li><a href="../index.php">HOME</a></li>
      <li><a href="login.php">LOGIN</a></li>
    </ul>
    </div><!--End of header_auction-->
</div>
<br/><br/><br/>
<center><h2><font color="purple">AutoMobi Login Panel</font></h2></center>
<div style="float:left; width:60%">
<br/><br/><br/>
<img src="../images/login.jpg" height="400px" width="600px" align ="left">
</div>

<div style="float:right; width:40%;">
	<br/><br/><br/>
<h1><font color='White' size="30">LOGIN</font></h1>
</h4><font color='White'>Sign-up takes less than 30 seconds. </font></h4>
<div class="container">
  <form class="form-inline" method="POST" action="">
    <div class="form-group">
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username"><br/>
    </div><br/>
    <div class="form-group">
       <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div><br/>
    <button type="submit" class="btn btn-info btn-lg" name="login">Login</button><br />
    <a href="new.php"><h3 align="left" >Create New Account?</h3></a>
  </form>
</div>
</div>
</body>
</html>
