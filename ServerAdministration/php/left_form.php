<?php
//show databases on server
function showDB(){
	$comandShowDB="SHOW DATABASES";
	$connectionServer=mysqli_connect("localhost","root","","");
	$showDB=mysqli_query($connectionServer, $comandShowDB);
	while($dataBases=mysqli_fetch_array($showDB)){
		echo" <div class='dropForm'><input type='submit' value=",$dataBases[0]," class='btnDrop' name='dropDB' onclick=",dropDB(),"></div>";
		//echo"<div class='dropForm'><input onclick=",dropDB(),"  type='submit' value=",$dataBases[0]," class='btnDrop' name='dropDB'></div>";
	}
}
//create a database
function createDB(){
	if($_POST)
	{
	  if(isset($_POST['createDB'])){
		  //echo "crear bd";
		  $connectionServer=mysqli_connect("localhost","root","","");
		  $comandCreateDB="CREATE DATABASE ";
		  $dbName=$_POST['createDB'];
		  $twoComandsLinked=$comandCreateDB.$dbName;
		  $createDB=mysqli_query($connectionServer, $twoComandsLinked);
	  }
	  else{
		  //echo "do not create db";
	  }
	}
}
function dropDB(){
	if($_POST)
	{
	  if(isset($_POST['dropDB']))
	  {
		  echo "drop BD";
		  $connectionServer=mysqli_connect("localhost","root","","");
		  $comandDropDB="DROP DATABASE ";
		  $dbName=$_POST['dropDB'];
		  $twoComandsLinked=$comandDropDB.$dbName;
	      $dropDB=mysqli_query($connectionServer, $twoComandsLinked);
	  }
	  else{
		  //echo "do not drop BD";
	  }
	}
	else
	{
	}
}
?>