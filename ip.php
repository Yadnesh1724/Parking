<?php

  require_once 'config/dbconnect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAQ</title>
<link rel="stylesheet" type="text/css" href="../css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="../css/all.css" media="all" />
  <title>Enter The Details</title>
  <meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
<style>

/* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: auto;}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #555;
      height: 100%;
    }


    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
    body {
    	background-size: 100%;
    }
</style>

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
    <img src="../images/logo2.png" width="100" align="right">
    </div><!--End of header_auction-->
	</div><br />

<!DOCTYPE html>
<html lang="en"
  </body>
    <div class="col-sm-9">
	<h3><font color="maroon">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add Cars</font></h3>
      <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-md-6">
							<label class="control-label">Owner name:-</label>
							<input type="Text" class="form-control" name="oname" placeholder="Owner Name">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
							<label class="control-label">Vehicle number:-</label>
							<input type="Text" class="form-control" name="vehno" placeholder="Vehicle Number">
							</div>
						</div>

            <div class="form-group">
							<div class="col-md-6">
							<label class="control-label">Type</label>
							<input type="Text" class="form-control" name="type" placeholder="Type">
							</div>
						</div>

            <div class="form-group">
							<div class="col-md-6">
							<label class="control-label">Place:-</label>
							<textarea col="15" row="3" class="form-control" placeholder="Description" name="place"></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
							<label class="control-label">Time in:-</label>
							<input type="Text" class="form-control" name="timein" placeholder="Time In">
								</div>
						</div>
							<div class="form-group">
							<div class="col-md-6">
							<label class="control-label">Time out:-</label>
							<input type="Text" class="form-control" name="timeout" placeholder="Time Out">
							</div>
						</div>
							<div class="form-group">
							<div class="col-md-6">
							<label class="control-label">date-</label>
							<input type="Text" class="form-control" name="date" placeholder="Date">
							</div>
						</div>

            
						<center><div class="from-group">
							<div class="col-md-6">
							<font size="20"><input type="Submit" name="submit" class="btn btn-success black" value="Submit"></font>
							</div>
						</div></center>

				<br/><br/>
				<br/>
				<center><?php
	if (isset($_POST['submit']))
	{
    $oname = $_POST['oname'];
    $vehno = $_POST['vehno'];
    $type = $_POST['type'];
    $place = $_POST['place'];
    $timein= $_POST['timein'];
    $timeout= $_POST['timeout'];
    $date= $_POST['date'];
	    $pid= $_POST['pid'];


       $sqlinsert = "INSERT INTO `park`(`pid`,`oname`, `vehno`, `type`, `place`, `timein`, `timeout`, `date`) VALUES ('','$oname','$vehno','$type','$place','$timein','$timeout','$date')";
    $runinsert = mysqli_query($conn,$sqlinsert);
    if($runinsert)
    {
      echo '<div class="col-md-5"><div class="alert alert-success alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Your Parking Zone id is '.$pid.' with place. '.$place.' </strong>
				</div></div>';
    }
    else
    {
      echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Sorry Sir Something is Wrong.</strong>
				</div>';
    }
  }
				?></center>
				</form>
    </div>
  </div>
</div>



</body>
</html>
