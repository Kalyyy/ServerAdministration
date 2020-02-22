<?php
function displayDataTable()
{
  if($_POST)
  {
   //echo "user sent a POST!";
     if(isset($_POST['dataOnTable'])){
         $tableName=$_POST['dataOnTable'];
         $dbName=$_SESSION['useDB'];
         $connectionServer=mysqli_connect("localhost","root","",$_SESSION['useDB']);
         $showDataFrom="SELECT * FROM ";
         $twoComandsLinked=$showDataFrom.$tableName;
         $useDB=mysqli_query($connectionServer, $twoComandsLinked);
         if($useDB)
				{
				 while($tables = mysqli_fetch_array($useDB))
				  { 
                      echo "
                      <tr>
                        <td>$tables[0]</td>
                        <td>$tables[1]</td>
                        <td>$tables[2]</td>
                      </tr>
                     ";                      
				  }
				echo "<hr>";
			   }
     }
  }
  else
  {
   //echo "user didn't send a POST";
  }
}
?>