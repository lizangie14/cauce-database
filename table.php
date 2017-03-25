<html>

<!--
Visit URL: ada.uprrp.edu/~bpesquera/databases/asig1.php
Author: Bryan Pesquera Santiago
Created on: January 25, 2017.
-->

<style>
table {
	font-family: arial;
	border-collapse: collapse;
	width: 40%;
}

td, th {
	//border: 1px solid #dddddd;
	text-align: left;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #dddddd;
}

p {
	font-family: Arial, Helvetica, sans-serif;
//	border-style: ridge;
}

div.container {
	width: 50%;
}

header, footer {
	padding: 1em;
	background-color: #dddddd;
	clear: left;
}

</style>

<body>
	<center>
 	<div class="container">
	<header>
	<p>Designed by: Bryan Pesquera, 2017
	<br/>
	University of Puerto Rico, R&iacute;o Piedras</p>
	</div>

	<table>
	<tr>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	</tr>

	<?php
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
	echo "</tr>";
	}
	?>

	</table>
	</center>
</body>
</html>
