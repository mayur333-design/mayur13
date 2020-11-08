<?php
include 'checkLogin.php';
?>


<html>
<head>
	<meta charset="utf-8">
    <meta name="Description" content="PhP ProJect">
	<title>Airline RS | Reservation</title>
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
	<script>
function myFunction() {
    var x;
    if (confirm("subham2mallick@gmail.com") == true) {
        x = "";
    } else {
        x = "";
    }
    
}
</script>
</head>
<body>
	<div id="container">
		<header>
			<h1>Airline Reservation System</h1>
			<p class="description">Simple and Clear</p>
		</header>
		<div id="wrapper">
			<section id="content">
				<h2>Final Booking</h2>
				<form method="POST" action="ThankYou.php">
				<table>
					   <tr>
					   	   <td>Name</td>
						   <td><input type="text" placeholder="Name"/></td>
					   	   <td>Age</td>
						   <td><input type="number" placeholder="Age"/></td>
					       <td>Food</td>
						   <td><select><option>Veg</option><option>Non Veg</option></select> </td>
					   	   <td>Sex</td>
						   <td><select><option>Female</option><option>Male</option><option>Others</option></select></td>
					   	   
					   </tr>
					   <tr>
					   	   <td>Name</td>
						   <td><input type="text" placeholder="Name"/></td>
					   	   <td>Age</td>
						   <td><input type="number" placeholder="Age"/></td>
					       <td>Food</td>
						   <td><select><option>Veg</option><option>Non Veg</option></select> </td>
					   	   <td>Sex</td>
						   <td><select><option>Female</option><option>Male</option><option>Others</option></select></td>
					   	   
						   
					   </tr>
					   <tr>
					   	   <td>Name</td>
						   <td><input type="text" placeholder="Name"/></td>
					   	   <td>Age</td>
						   <td><input type="number" placeholder="Age"/></td>
					       <td>Food</td>
						   <td><select><option>Veg</option><option>Non Veg</option></select> </td>
					   	   <td>Sex</td>
						   <td><select><option>Female</option><option>Male</option><option>Others</option></select></td>
					   	   
					   </tr>
					   <tr>
					   	   <td>Name</td>
						   <td><input type="text" placeholder="Name"/></td>
					   	   <td>Age</td>
						   <td><input type="number" placeholder="Age"/></td>
					       <td>Food</td>
						   <td><select><option>Veg</option><option>Non Veg</option></select> </td>
					   	   <td>Sex</td>
						   <td><select><option>Female</option><option>Male</option><option>Others</option></select></td>
					   	  
					   </tr>
					   <tr>
					   <td></td>
					   <td><button>Submit</button><input type="reset" /></td>
					   </tr>
					   
					   
					   
				</table>
				
				</form>
			</section>
		</div>
		<footer>
			<ul>
				<li><a onclick="myFunction()">Click for Contact Us</a></li>
			</ul>
			<p>&copy;Shubham Srivastava</p>
		</footer>
	</div>
</body>
</html>
