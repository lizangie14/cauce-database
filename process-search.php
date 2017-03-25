<html>
<center>
<table>
<table border="1">

<!--
Visit URL: ada.uprrp.edu/~bryan.pesquera/databases/process.php
Author: Bryan Pesquera Santiago
Created on: February 6th, 2017.
-->
	<?php
	$inpt = $_POST["inpt"];
	$arch = file("lista2.csv"); 
	$found = false;	

	foreach($arch as $i)
	{
	$data = explode(",", $i);

	if(($inpt == $data[0]) //found a first name lowercase
	||($inpt == $data[1])  //found a first name uppercase
	||($inpt == $data[3])  //found a lastname1
	//skipped match by second name initial $data[2]
	||($inpt == $data[4])  //found a lastname2
	){
	$found = true;
	print("</br></br><h4>Found:</h4><p>");
	print("<tr><td>");
	print("$data[1]"); //name
	print(" $data[2]"); //second name initial
	print(" $data[3]"); //lastname1
	print(" $data[4]"); //lastname2
	print("</tr></td>");
	}
	}

	if(!$found) //did not find a match
	{
		print("</br></br><tr><td>");
		print("No matches were found.");
		print("</tr></td>");
	}
	?>

</table>
</center>
</html>
