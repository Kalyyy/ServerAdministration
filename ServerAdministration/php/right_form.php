<?php
	function showTablesFromDB(){
		if($_POST){
			//echo "User sent a POST";
			if(isset($_POST['useDB'])){
				$_SESSION['useDB']=$_POST['useDB'];
				$dbName= $_SESSION['useDB'];
				$connectionServer=mysqli_connect("localhost","root","","");
				$ShowTablesFrom="SHOW TABLES FROM ";
				$twoComandsLinked=$ShowTablesFrom.$dbName;
				$useDB=mysqli_query($connectionServer, $twoComandsLinked);
				if($useDB)
				{
				 while($tables = mysqli_fetch_array($useDB))
				  { 
				   echo"<div class='dropForm'><input onclick='' type='submit' value=",$tables[0]," class='btnDrop' name='dropDB'></div>";
				  }
				echo "<hr>";
			   }
			}
			else{
				//echo " but not here";
				if(isset($_SESSION['useDB'])){
					echo "<p>* Data base using [ ",$_SESSION['useDB']," ]</p>";
					$dbName= $_SESSION['useDB'];
					$connectionServer=mysqli_connect("localhost","root","","");
					$ShowTablesFrom="SHOW TABLES FROM ";
					$twoComandsLinked=$ShowTablesFrom.$dbName;
					$useDB=mysqli_query($connectionServer, $twoComandsLinked);
					if($useDB)
					{
					  while($tables = mysqli_fetch_array($useDB))
					   { 
						echo"<div class='dropForm'><input onclick='' type='submit' value=",$tables[0]," class='btnDrop' name='dropDB'></div>";
					   }
					echo "<hr>";
					}
				}
				else{
				}
			}
		}
		else{
			//echo "User didn't send a POST<br>";
			if(isset($_SESSION['useDB'])){
				echo "<p>* Data base using [ ",$_SESSION['useDB']," ]</p>";
				$dbName= $_SESSION['useDB'];
		        $connectionServer=mysqli_connect("localhost","root","","");
		        $ShowTablesFrom="SHOW TABLES FROM ";
		        $twoComandsLinked=$ShowTablesFrom.$dbName;
		        $useDB=mysqli_query($connectionServer, $twoComandsLinked);
		        if($useDB)
		        {
	              while($tables = mysqli_fetch_array($useDB))
		           { 
			        echo"<div class='dropForm'><input onclick='' type='submit' value=",$tables[0]," class='btnDrop' name='dropDB'></div>";
	               }
	            echo "<hr>";
		        }
			}
			else{
			}
		}
	}
?>