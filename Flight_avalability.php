<?php

include 'checkLogin.php';

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
	
<script language="Javascript">


function hideA()


{

	 document.getElementById("B").style.visibility="visible";
    document.getElementById("A").style.visibility="visible";

       

}



function hideB()
{
    document.getElementById("B").style.visibility="hidden";
    document.getElementById("A").style.visibility="visible";

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
				<h2>Flight Avalability</h2>
				


				<form method="post" action="book.php">
				<table>
					<tr><td><input type="radio" name="r1" value="radio1" checked="true" onclick="hideB()" />One Way</td>
						<td><input type="radio" name="r1" value="radio2" onclick="hideA()"/>Round Way</td></tr>
					</table>


					 <div style="position: absolute;visibility:visible" id="A">
					 	<table>
					   <tr>
					   	   <td>Source</td>
						   <td><input list="ts" name="b1" placeholder="Source">
						   <datalist id="ts">
						   			 <option value="Delhi"></option>
									 
									 
							</datalist>
						   </td>
					   </tr>
					   <tr>
					   	   <td>Destination</td>
						   <td><input list="td" name="b2" placeholder="Destination"/>
						   <datalist id="td">
						   			 <option value="Amritsar"></option>
								
									 <option value="Varanasi"></option>
									
									 <option value="Bengaluru"></option>
									 
									 <option value="Mumbai"></option>
									
									 
									 <option value="Los Angeles"></option>
							</datalist>
						   </td>
					   </tr>
					   <tr>
					   	<td>Date</td>
					   	<td><input type="date" id="d1" name="d1"></td>
					   </tr>
					   <tr>
					   	   <td>Class</td></tr>
						   <tr><td>&nbsp</td><td><input type="radio" name="b3" />First Class</td></tr>
						   <tr><td>&nbsp</td><td><input type="radio" name="b3"/>Premiere Flex</td></tr>
						   <tr><td>&nbsp</td><td><input type="radio" name="b3"/>Premiere Classic</td></tr>
						   <tr><td>&nbsp</td><td><input type="radio" name="b3"/>Economy Flex</td></tr>
						   <tr><td>&nbsp</td><td><input type="radio" name="b3"/>Economy Classic</td></tr>
						   <tr><td>&nbsp</td><td><input type="radio" name="b3"/>Economy Saver</td></tr>
						   
					   </tr>

					   <tr style="position: absolute;visibility:hidden;margin-top:-220px;margin-left:300px;" id="B"><td>Return Date</td>
					   	<td><input type="date" id="d2" name="d2"></td>
					   </tr>


					</table>
					</div>




					 <table style="margin-top:280px"> 
					   <tr>
					   	   <td></td>
						   <td><button>Submit</button><input type="reset" /></td>
					   </tr>
				</table>				
				</form>




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
