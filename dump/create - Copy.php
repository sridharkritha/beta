<?php
require_once 'dbconfig.php';

$m = count($_POST['name']);
echo "<pre>";
print_r($_POST);
print $m;
echo "</pre>";

	
	if($_POST)
	{
		/*
		$i = 0;
		$name = $_POST['name'][$i];
		$rating = $_POST['rating'][$i];
		$speed = $_POST['speed'][$i];
		$age = $_POST['age'][$i];
		$weight = $_POST['weight'][$i];
		$jockey = $_POST['jockey'][$i];	
		$trainer = $_POST['trainer'][$i];
		$odds = $_POST['odds'][$i];	
        */
		
		try{
			
			$stmt = $db_con->prepare("INSERT INTO horse(name,rating,speed,age,weight,jockey,trainer,odds) 
			                                             VALUES(:hname,:hrating,:hspeed,:hage,:hweight,:hjockey,:htrainer,:hodds)");			
			
			$stmt->bindParam(":hname", $name);			
			$stmt->bindParam(":hrating", $rating);
			$stmt->bindParam(":hspeed", $speed);
			$stmt->bindParam(":hage", $age);
			$stmt->bindParam(":hweight", $weight);
			$stmt->bindParam(":hjockey", $jockey);
			$stmt->bindParam(":htrainer", $trainer);
			$stmt->bindParam(":hodds", $odds);
			
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
				$stmt->execute();
            }
			
			 // $stmt->close();	
			
			 /*
            $stmt = $db_con->prepare("INSERT INTO horse(name,rating,speed,age,weight,jockey,trainer,odds) VALUES(?, ?, ?, ?,?, ?, ?, ?)");
			$stmt->bind_param('siiissss', $name,$rating,$speed,$age,$weight,$jockey,$trainer,$odds);
			// $db_con->query("START TRANSACTION");
            for($i = 0; $i < 1; $i++) // If you have $n rows			
            {
				$name = $_POST['name'][$i];
				$rating = $_POST['rating'][$i];
				$speed = $_POST['speed'][$i];
				$age = $_POST['age'][$i];
				$weight = $_POST['weight'][$i];
				$jockey = $_POST['jockey'][$i];	
				$trainer = $_POST['trainer'][$i];
				$odds = $_POST['odds'][$i];
				
				*/
				
		
		
             //   $stmt->bind_param('siiissss', $_POST['name'][$i], $_POST['rating'][$i], $_POST['speed'][$i], $_POST['age'][$i],
			//	                  $_POST['weight'][$i], $_POST['jockey'][$i], $_POST['trainer'][$i], $_POST['odds'][$i]);
				                          
               // $stmt->execute();
           // }
			
            // $stmt->close();
			/*
			 for($i = 0; $i < 2; $i++) // If you have $n rows
            {
			
		$name = $_POST['name'][$i];
		$rating = $_POST['rating'][$i];
		$speed = $_POST['speed'][$i];
		$age = $_POST['age'][$i];
		$weight = $_POST['weight'][$i];
		$jockey = $_POST['jockey'][$i];	
		$trainer = $_POST['trainer'][$i];
		$odds = $_POST['odds'][$i];	
			
			
			$stmt = $db_con->prepare("INSERT INTO horse(name,rating,speed,age,weight,jockey,trainer,odds) 
			                                             VALUES(:hname,:hrating,:hspeed,:hage,:hweight,:hjockey,:htrainer,:hodds)");			
			
			$stmt->bindParam(":hname", $name);			
			$stmt->bindParam(":hrating", $rating);
			$stmt->bindParam(":hspeed", $speed);
			$stmt->bindParam(":hage", $age);
			$stmt->bindParam(":hweight", $weight);
			$stmt->bindParam(":hjockey", $jockey);
			$stmt->bindParam(":htrainer", $trainer);
			$stmt->bindParam(":hodds", $odds);
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}
			}
			*/
			
			/*
			$stmt = $db_con->prepare("INSERT INTO horse(name,rating,speed,age,weight,jockey,trainer,odds) 
			                                             VALUES(:hname,:hrating,:hspeed,:hage,:hweight,:hjockey,:htrainer,:hodds)");			
			
			$stmt->bindParam(":hname", $name);			
			$stmt->bindParam(":hrating", $rating);
			$stmt->bindParam(":hspeed", $speed);
			$stmt->bindParam(":hage", $age);
			$stmt->bindParam(":hweight", $weight);
			$stmt->bindParam(":hjockey", $jockey);
			$stmt->bindParam(":htrainer", $trainer);
			$stmt->bindParam(":hodds", $odds);
			 for($i = 0; $i < 1; $i++) // If you have $n rows			
            {
				$name = $_POST['name'][$i];
				$rating = $_POST['rating'][$i];
				$speed = $_POST['speed'][$i];
				$age = $_POST['age'][$i];
				$weight = $_POST['weight'][$i];
				$jockey = $_POST['jockey'][$i];	
				$trainer = $_POST['trainer'][$i];
				$odds = $_POST['odds'][$i];
				$stmt->execute();
            }
			*/
			
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>