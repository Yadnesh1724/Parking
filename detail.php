<?php

  require_once 'config/dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>AutoMobi</title>
    <meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/formating.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/all.css" media="all" />
</head>
<body background="" style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">

<div style=" background-color:#000;">
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
</div>
<br/><br/>

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
<body background="images/download3.jpg">


<div class="col-sm-1 sidenev"> </div>
  <div class="col-sm-9">
	<h3><font color="black">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Public Service List For Parking Vehicles</font></h3>
      <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
						<div class="form-group">
							<div class="col-md-6">
							<label class="control-label">Owner name:-</label>
							<input type="Text" class="form-control" name="oname" placeholder="Car Name">
							</div>
				

							<div class="col-md-6">
							<font size="20"><input type="Submit" name="submit" class="btn btn-success black" value="Submit"></font>
							</div>
						</div>
				<br/><br/>
				<br/>
				<center>
	<?php
	
	 if (isset($_POST['submit']))
 		{
		$onname = $_POST['oname'];
		
		$query = "SELECT `oname` FROM `park`  WHERE `oname`='$onname' ";
	      	if ($result = mysqli_query($conn,$query)) 
      		{
			if (mysqli_num_rows($result) >=1) 
        		{
          			$row =  mysqli_fetch_assoc($result);

	?>

	<br/><br/><br/><br/>
	<table class="table-responsive table">
			<tr bgcolor="#728FCE">
				<td>Owner Name</td>
				<td>Vehno</td>
				<td>type</td>
				<td>place</td>
				<td>timein</td>
				<td>timeout</td>
				<td>date</td>
				<td>pid</td>
			</tr>
			<?php
			   $query="SELECT * FROM park";
				$result = mysqli_query($conn,$query);
				if(mysqli_num_rows($result)==0)
				{
					echo '<div class="alert alert-danger alert-dismissable fade in">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>NO DATA TO DISPLAY.</strong>
				</div>';
				}
				while($row=mysqli_fetch_assoc($result))
				{
					echo "
					<tr bgcolor=#ffffff>
						<td>".$row['oname']."</td>
						<td>".$row['vehno']."</td>
						<td>".$row['type']."</td>
						<td>".$row['place']."</td>
						<td>".$row['timein']."</td>
						<td>".$row['timeout']."</td>
						<td>".$row['date']."</td>
						<td>".$row['pid']."</td>
												
						
					</tr>";
				}

		}
	}
}
			?>
	</table>

</div>
</div>
</body>
</html>
		