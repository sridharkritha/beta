<?php
require_once 'dbconfig.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";


/*
  echo($_POST["column1"][$i]);
    echo($_POST["column2"][$i]);
    echo($_POST["column3"][$i]);
*/
/*
$sql = array(); 
foreach( $data as $row ) {
    $sql[] = '("'.mysql_real_escape_string($row['text']).'", '.$row['category_id'].')';
}
mysql_query('INSERT INTO table (text, category) VALUES '.implode(',', $sql));

*/
	
	if($_POST)
	{
		/*
		$name =    $_POST['name'];
		$rating =  $_POST['rating'];
		$speed =   $_POST['speed'];
		$age =     $_POST['age'];
		$weight =  $_POST['weight'];
		$jockey =  $_POST['jockey'];	
		$trainer = $_POST['trainer'];
		$odds =    $_POST['odds'];	
		*/
		
		try{
			
		/*				
		for($i = 0; $i < 2; $i++) // If you have $n rows
        {		
			$sql[] = '("'.mysql_real_escape_string($_POST["name"][$i]).'",'.$_POST['name'][$i].', '.$_POST['rating'][$i].', '.$_POST['speed'][$i].', '.$_POST['age'][$i].', '.$_POST['weight'][$i].', '.$_POST['jockey'][$i].', '.$_POST['trainer'][$i].', '.$_POST['odds'][$i].')';
        }
	    mysql_query('INSERT INTO table (name,rating,speed,age,weight,jockey,trainer,odds) VALUES '.implode(',', $sql));
	    
		*/
	
	        
            $stmt = $db_con->prepare("INSERT INTO horse (name,rating,speed,age,weight,jockey,trainer,odds) VALUES(?, ?, ?, ?,?, ?, ?, ?)");
			$stmt->bind_param('siiissss',$name,$rating,$speed,$age,$weight,$jockey,$trainer,$odds);
				
            for($i = 0; $i < 2; $i++) // If you have $n rows
            {
                // $stmt->bind_param('siiissss', $_POST["name"][$i], $_POST["rating"][$i], $_POST["speed"][$i], $_POST["age"][$i],$_POST["weight"][$i], $_POST["jockey"][$i], $_POST["trainer"][$i], $_POST["odds"][$i]);
				                          
                $stmt->execute();
            }
            $stmt->close();
	
		
			
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
			
			if($stmt->execute())
			{
				echo "Successfully Added";
			}
			else{
				echo "Query Problem";
			}	
			*/
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>