<?php
 //dont delete this folder its database connection without uwont be able to run anything
$dbServername ="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="medicos";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
	die("connection failed:".mysqli_connect_error());
}