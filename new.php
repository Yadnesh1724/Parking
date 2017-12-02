<?php
  require_once 'config/dbconnect.php';
  
  if (isset($_POST['signup']))
  {
    $username = $_POST['username'];
    $passwd = md5($_POST['passwd']);
    $sqlinsert = "INSERT INTO `userlogin`(`username`, `passwd`) VALUES ('$username','$passwd')";
    $runinsert = mysqli_query($conn,$sqlinsert);
    if($runinsert)
    {
       echo "New User Added ";
    }
    else
    {
      echo "Error in Adding User"; 
    }
  }
  else
  {
    echo "error";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAQ</title>
<link rel="stylesheet" type="text/css" href="../css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="../css/all.css" media="all" />
</head>

<body style=" background: linear-gradient(lightblue, green);">
    <div class="header_auction">
	<ul>
	  <li><a href="index.php">HOME</a></li>
      <li><a href="ip.php">User Entry</a></li>
	<li><a href="about2.php">About Us</a></li>
      <li><a href="contact.php">Contact Us</Admin></li>
	<li><a href="new.php">Admin Panel</a></li>
 	<li><a href="detail.php">Details</a></li>
 	</ul>
    </div><!--End of header_auction-->
	</div><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<center><h2>Just See The Portal  and get ready to explore In Rajasthan Without Parking Overload</h2></center>
<br/><br/>
<div class="container">
  <center><form class="form-inline" method="POST" action="">
    <div class="form-group">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
   </div><br/>
    <div class="form-group">
       <input type="text" class="form-control" id="passwd" name="passwd" placeholder="password">
       </div><br/>
	<button type="submit" class="btn btn-info btn-lg" name="signup">Signup</button>
    <!--button type="submit" class="btn btn-info btn-lg" >Facebook</button-->
  </form></center>
</div>

</body>
</html>
