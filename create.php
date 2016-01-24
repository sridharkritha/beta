<?php
require_once 'dbconfig.php';

$m = count($_POST['name']);
echo "<pre>";
print_r($_POST);
print $m;
echo "</pre>";

	
	if($_POST)
	{
		try{
			
			$stmt = $db_con->prepare("INSERT INTO horse(name,rating,speed,age,weight,jockey,trainer,odds,colour) 
			                                             VALUES(:hname,:hrating,:hspeed,:hage,:hweight,:hjockey,:htrainer,:hodds,:hcolour)");			
			
			$stmt->bindParam(":hname", $name);			
			$stmt->bindParam(":hrating", $rating);
			$stmt->bindParam(":hspeed", $speed);
			$stmt->bindParam(":hage", $age);
			$stmt->bindParam(":hweight", $weight);
			$stmt->bindParam(":hjockey", $jockey);
			$stmt->bindParam(":htrainer", $trainer);
			$stmt->bindParam(":hodds", $odds);
			$stmt->bindParam(":hcolour", $colour);
			
			$n = count($_POST['name']); // No of rows
			 for($i = 0; $i < $n; $i++) 		
            {
				$name = $_POST['name'][$i];
				$rating = $_POST['rating'][$i];
				$speed = $_POST['speed'][$i];
				$age = $_POST['age'][$i];
				$weight = $_POST['weight'][$i];
				$jockey = $_POST['jockey'][$i];	
				$trainer = $_POST['trainer'][$i];
				$odds = $_POST['odds'][$i];
				$colour = $_POST['colour'][$i];
				$stmt->execute();
            }			
			 // $stmt->close();				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>