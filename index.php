<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>thinkHorseRacing</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="style/logo.css" rel="stylesheet" type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
<link href="style/overrideBoot.css" rel="stylesheet" type='text/css'>

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();	
	
	$("#btn-addrow").click(function(){		
		// $(".table").append('<tr><td><input type="text" class="txtbox" value="" /></td><td><input type="text" class="txtbox" value="" /></td><td><input type="text" class="txtbox" value="" /></td><td><input type="text" class="txtbox" value="" /></td></tr>');
	
	/* Note: that the whole content variable is just a string and missing semicolums*/
    var content = "<tr>"
    for(i=0; i<11; i++)
	{
		// Note: name="txtboxAry[]" -  Array form of input
    content += '<td><input type="text" name="txtboxAry[]" class="txtbox" value="" /></td>';
    }
    content += "</tr>"
    $(".table").append(content);	
	});
	
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();			
		});
	});
	
	$("#btn-view").click(function(){		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});
	
});
</script>



</head>

<body>
<div class='LogoContent'>
  <div class='LogoVisible'>
    <p>
      think
    </p>
    <ul>
      <li>Horse</li>
      <li>Racing</li>  
      <li>.co.uk</li>   
    </ul>
  </div>
</div>	
<br> <br> <br>


    


	<div class="container">   
        
        
		<hr />
      
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-hover table-responsive">
        <thead>
        <tr>		
		<th>Horse ID</th>
		<th>Name</th>
		<th>Rating</th>
		<th>Speed</th>
		<th>Age</th>
		<th>Weight</th>
		<th>Jockey</th>
		<th>Trainer</th>
		<th>Odds</th>
		
        <th>edit</th>
        <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'dbconfig.php';
        
        $stmt = $db_con->prepare("SELECT * FROM horse ORDER BY hor_id DESC");
        $stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<tr>				
			
			<td><?php echo $row['hor_id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['rating']; ?></td>
			<td><?php echo $row['speed']; ?></td>
			<td><?php echo $row['age']; ?></td>
			<td><?php echo $row['weight']; ?></td>
			<td><?php echo $row['jockey']; ?></td>
			<td><?php echo $row['trainer']; ?></td>
			<td><?php echo $row['odds']; ?></td>			
			
			<td align="center">
			<a id="<?php echo $row['hor_id']; ?>" class="edit-link" href="#" title="Edit">
			<img src="edit.png" width="20px" />
            </a></td>
			<td align="center"><a id="<?php echo $row['hor_id']; ?>" class="delete-link" href="#" title="Delete">
			<img src="delete.png" width="20px" />
            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
    
    <br />
   
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>