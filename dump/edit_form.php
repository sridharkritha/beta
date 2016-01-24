<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM horse WHERE hor_id=:id");
	$stmt->execute(array(':id'=>$id));	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>
	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $row['hor_id']; ?>' />
		
		 <tr>
            <td>Horse</td>
            <td><input type='text' name='name' class='form-control' value='<?php echo $row['name']; ?>' required /></td>
        </tr>
		
		<tr>
            <td>Rating</td>
            <td><input type='text' name='rating' class='form-control' value='<?php echo $row['rating']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Speed</td>
            <td><input type='text' name='speed' class='form-control' value='<?php echo $row['speed']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Age</td>
            <td><input type='text' name='age' class='form-control' value='<?php echo $row['age']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Weight</td>
            <td><input type='text' name='weight' class='form-control' value='<?php echo $row['weight']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Jockey</td>
            <td><input type='text' name='jockey' class='form-control' value='<?php echo $row['jockey']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Trainer</td>
            <td><input type='text' name='trainer' class='form-control' value='<?php echo $row['trainer']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Odds</td>
            <td><input type='text' name='odds' class='form-control' value='<?php echo $row['odds']; ?>' required></td>
        </tr>		
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
