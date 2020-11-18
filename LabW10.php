<?php
$con = mysqli_connect("localhost","my_user","mypassword","Lab10")
or die (mysqli_connect_error());
echo "Connected to MYQOL<br/>";
mysqli_query($con,"CREATE TABLE products (
id = INT NOT NULL AUTO_INCEARMENT,
PRIMARY KEY(id),
P_Name VARCHAR(30),
P_Price INT )"
)
or die (mysqli_connect_error());
echo "Table Created";
$insertQ="INSERT INTO products ( P_Name,P_Price) VALUES ('Blackberry','1900')";
 mysqli_query($con,$insertQ);
