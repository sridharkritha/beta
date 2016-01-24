<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$hor_id = $_POST['hor_id'];
		$name = $_POST['name'];
		$rating = $_POST['rating'];
		$speed = $_POST['speed'];
		$age = $_POST['age'];
		$weight = $_POST['weight'];
		$jockey = $_POST['jockey'];	
		$trainer = $_POST['trainer'];
		$odds = $_POST['odds'];			
		
		$stmt = $db_con->prepare("UPDATE horse SET name=:hname,rating=:hrating,speed=:hspeed,age=:hage,weight=:hweight,jockey=:hjockey,trainer=:htrainer,odds=:hodds WHERE hor_id=:hor_id");
		
		$stmt->bindParam(":hname", $name);			
		$stmt->bindParam(":hrating", $rating);
		$stmt->bindParam(":hspeed", $speed);
		$stmt->bindParam(":hage", $age);
		$stmt->bindParam(":hweight", $weight);
		$stmt->bindParam(":hjockey", $jockey);
		$stmt->bindParam(":htrainer", $trainer);
		$stmt->bindParam(":hodds", $odds);
		$stmt->bindParam(":hor_id", $hor_id);		
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>