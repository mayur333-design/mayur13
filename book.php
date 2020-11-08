<?php

include 'checkLogin.php';
include 'connect.php';
?>



<html>
<head>
	<meta charset="utf-8">
    <meta name="Description" content="PhP ProJect">
	<title>Airline RS | Avalability</title>
	<style type="text/css" media="screen">
		html, body, div, header, footer, aside, nav, article, section	{ margin: 0; padding: 0; }
		header, footer, aside, nav, article, section	{ display: block; }
		body 			{ color: #333; font: 12px Helvetica, Arial, sans-serif; line-height: 18px; background:url("ss.jpg");}
		h2				{ color: #333; }
		a				{ color: #337810; }
		p				{ margin: 0 0 18px; }
		#container		{ width: 760px; margin: 0 auto; }
		
		/* Header */
		header			{ background: #333; border-bottom: 2px solid #aaa; }
		header h1  	{ color: #fff; margin: 0 0 3px; padding: 24px 18px 0; }
		header p		{ color: #ccc; font-size: 11px; font-weight: bold; padding: 0 18px; }
		
		/* Content Style */
		nav		{ margin-left: 18px; }
		nav ul	{ padding: 0 18px 9px; }
		#extra			{ margin: 0 18px; }
		#extra small	{ font-size: 11px; line-height: 18px; }
		#content		{ border-bottom: 1px solid #ccc; margin: 0 18px; }
		#content p, #extra p { padding-right: 18px; }
		
		/* Content Positioning and Size */
		nav		{ float: right; width: 350px; }
		#content		{  }
		#extra			{ float: left; width: 350px; }		/* Footer */
		footer			{ background: #666; border-bottom: 2px solid #aaa; clear: both; }
		footer a		{ color: #fff; }
		footer	p		{ color: #ccc; margin: 0; padding: 0 18px 10px; }
		footer ul		{ border-bottom: 1px solid #999; list-style: none; margin: 0 18px 6px; padding: 10px 0 6px; }
		footer li		{ display: inline; font-size: 11px; font-weight: bold; padding-right: 5px; }

		
	</style>
	<!--[if IE]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	

</head>
<body>
	<div id="container">  
		<header>
			<h1>Airline Reservation System</h1>
			<p class="description">Simple and Clear</p>
		</header>
		<div id="wrapper">
			<section id="content">
				<center><table border="2" style="margin-left:-70px;margin-top:50px;margin-bottom:100px;color:white">
					<th>Source</th><th>Destination</th><th>Date</th><th>Return_Date</th><th>Time</th><th>Return_Time</th><th>Flight Name</th><th>Return Flight</th><th>Book</th>
					
					<?php

					$source=$_POST['b1'];
					$destination=$_POST['b2'];
					$update=$_POST['d1'];
					$downdate=$_POST['d2'];
					
                	$xx= date('Y-m-d',strtotime($update));
                	$yy= date('Y-m-d',strtotime($downdate));


                	if($downdate==null)
                	{

			                $query="select * from flight where Source='{$source}' and Destination='{$destination}' and Date='{$xx}'";
			                $select_query=mysqli_query($connection,$query);
			                while ($row=mysqli_fetch_assoc($select_query)) 
			                {
			                

							echo'<tr>
							<td>'.$row['Source'].'</td>
							<td>'.$row['Destination'].'</td>
							<td>'.$row['Date'].'</td>
							<td></td>
							<td>'.$row['Time'].'</td>
							<td></td>
							<td>'.$row['Flight_Name'].'</td>
							<td></td>
							<td><a href="flight_reservation.php">click_to_book</td>
							</tr>';

							}
					}
					else
					{

							$query="select * from flight where Source='{$source}' and Destination='{$destination}' and Date='{$xx}' and Return_Date='{$yy}'";
			                $select_query=mysqli_query($connection,$query);
			                while ($row=mysqli_fetch_assoc($select_query)) 
			                {
			                

							echo'<tr>
							<td>'.$row['Source'].'</td>
							<td>'.$row['Destination'].'</td>
							<td>'.$row['Date'].'</td>
							<td>'.$row['Return_Date'].'</td>
							<td>'.$row['Time'].'</td>
							<td>'.$row['Return_Time'].'</td>
							<td>'.$row['Flight_Name'].'</td>
							<td>'.$row['Return_Flight'].'</td>
							<td><a href="flight_reservation.php">click_to_book</td>
							</tr>';

							}	
					}


					?>



				</table></center>
			</section> 
		</div>
		<footer >

			<ul>
				<li><a onclick="myFunction()">Click to Contact Us</a></li>
			</ul>
			<p>&copy;Shubham Srivastava</p>
		</footer>
	</div>

</body>
</html>
