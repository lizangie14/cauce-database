<head>
	<meta name="Author" content="Bryan Pesquera">
	<meta name="Description" content="Employees Information">
 	<meta charset="UTF-8">
  	<meta name="google search" content="HTML,CSS,CSV,JavaScript,PHP">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
</head>

<body>
	<div class="contain">
	<div class="contain">
	<div class="contain light-orange"></div>
	<div class="contain dark-orange">
	<span class="orange-text-bold">
	<div class="relative200" style="-webkit-filter: drop-shadow(0.5px 0.5px 0.5px #222); filter: drop-shadow(0.5px 0.5px 0.5px #222);">CAUCE DATABASE</div></div></span>
	<div class="contain light-orange"></div>
	<div class="gap gap10"></div>
	</div> <!--closing div from "header"-->

	<!-- Search bar and search button with functionality -->
		<div class="contain relative20">
		<form action="process-search.php" method="POST" size="50">
		<input type = "text" name="inpt" placeholder="Search">
		<button type="submit" class="btn btn-default" aria-label="Search"
		method="get" style="border-color:transparent;">
		<img src="search-icon-md.png" alt="Search" style="width:15px;height:15px;">
		</button>
		</form> 
		
	<!-- Option buttons -->
		<button type="button" class="btn btn-default" aria-label="Previous"
		style="border-color:transparent;">
		<span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
		</button>

		<button type="button" class="btn btn-default" aria-label="Next"
		style="border-color:transparent;">
		<span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
		</button>
		
		<button type="button" class="btn btn-default" aria-label="Download"
		style="border-color:transparent;">
		<span class="glyphicon glyphicon-cloud-download"></span>
		
		<button type="button" class="btn btn-default" aria-label="Add New"
		style="border-color:transparent;">
		<span class="glyphicon glyphicon-plus-sign"></span>
		</button>

		<button type="button" class="btn btn-default" aria-label="Edit"
		style="border-color:transparent;">
		<span class="glyphicon glyphicon-pencil"></span>
		</button>

		<button type="button" class="btn btn-default" aria-label="Delete"
		style="border-color:transparent;">
		<span class="glyphicon glyphicon-trash"></span>
		</button>
		
		<button class="bttn bttn-radial">
		Employees</button>
		
		<button class="bttn bttn-radial">
		Students</button>
		
		<button class="bttn bttn-radial">
		Courses</button>
		</div>
		</div> <!--closing div from "contain relative25"-->		

	<div class="gap gap10"></div>
	<div class="gap gap10"></div>

	<!-- PHP Table -->
	<div class="contain">
	<center><table border="1" style="color:#e0ac73;">
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Phone Number</th>
	<th>Scholarity</th>
	<th>Physical Address</th>
	<th>Mail Address</th>
	</tr>

	<?php
		
	/* CONNECT TO DATABASE */
	$servername = "localhost";
	$username = "";
	$password = "";

	// create connection
	$conn = new mysqli($servername, $username, $password);

	// check connection
	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	} else echo "Connected successfully";
		
	$arch = file("customer_contact_fake.csv");
	foreach($arch as $i)
	{
	$data = explode(",", $i);
	echo "<tr><td>";
	echo "$data[0]";
	echo " $data[1]";
	echo " $data[2]";
	echo " $data[3]</td>";
	echo "<td>$data[4]</td>";
	echo "<td>$data[5]</td>";
	echo "<td>$data[6]</td>";
	echo "<td>$data[7]</td>";
	echo "<td>$data[8]</td>";
	echo "<td>$data[9]</td>";
	echo "<td>$data[10]</td>";
	echo "</tr>";
	}
	?>

	</table></center>
	</div>

	<div class="footer">
	<div class="contain light-brown"></div>
	<div class="contain dark-brown" style="font-size:12;">
	<font color="#968881" style="position: relative; left:70%;">&#9400; Copyright 2017. All rights reserved.</font>
	<img src="uprrp-logo.png" style="width:150px;height:30px; position: relative; left:15%; -webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);">
	</div>
	<div class="contain light-brown"></div>
	</div>

<script src="http://code.jquery.com/jequery-lates.js"></script>
<script src="htpp//maxcdn.bootstrapcdn.com/nootstrap/3.3.1/js/bootstrap.min.js"></script>

</div> <!--closing div from first "contain"-->

</body>

