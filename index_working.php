<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pi Horse</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
////////////////////////////// View Horse from DB //////////////////////////////////
	$(document).ready(function() {
	$('#showHorseTable').DataTable();

	$('#showHorseTable')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
	
	$("#btn-view").hide();	
		
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
	
///////////////////////////// Add Horse ///////////////////////////////////////////////
// Delete Records
 $("#checkAll").click(function () {	 
     $('input:checkbox').not(this).prop('checked', this.checked);
 });
 
$("#btnDelete").on('click', function() {
	$("#checkAll").prop('checked', false); //  Uncheck the checkall checkbox
  var checked = jQuery('input:checkbox:checked').map(function () {
    return this.value;
}).get();
jQuery('input:checkbox:checked').parents("tr").remove();

});

// Add Records
var i=1;
$(document).ready(function() {
	$("#btnAdd").click(function(){	
	 var content = '<tr id="addr'+(i+0)+'">'
    // Note: name="txtboxAry[]" -  Array form of input
   	content += '<td>'+ (i+1) +'</td><td><input type="text" name="name[]" class="form-control" placeholder="EX : Fitzwilliam" required /></td><td><input type="text" name="rating[]"  class="form-control" placeholder="EX : 150" required></td><td><input type="text" name="speed[]"   class="form-control" placeholder="EX : 60" required></td><td><input type="text" name="age[]"     class="form-control" placeholder="EX : 7" required></td><td><input type="text" name="weight[]"  class="form-control" placeholder="EX : 10-12" required></td><td><input type="text" name="jockey[]"  class="form-control" placeholder="EX : Leighton Aspell" required></td> <td><input type="text" name="trainer[]" class="form-control" placeholder="EX : Mick Channon" required></td> <td><input type="text" name="odds[]"    class="form-control" placeholder="EX : 15/8 7/4 6/1" required></td> <td><input type="checkbox" value="12" title="Mark this video for deletion"/></td>';
	content += '</tr>'
    $("#addHorse").append(content);
    i++; 	
	});	
});	
	
});
</script>

</head>

<body>
    


	<div class="container">
      
        <h2 class="form-signin-heading">Horse Records.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Horse</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Horse</button>
		<hr />
		
	<!----------------------- Add Horse Input Table  ---------------------->	
		 <div id="dis">
    <!-- here message will be displayed -->
	</div> 
	 
	    <div class="content-loader">
		
		<form method='post' id='emp-SaveForm' action="#">
        
        <table cellspacing="0" width="100%" id="addHorse" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>#</th>		
		<th>Name</th>
		<th>Rating</th>
		<th>Speed</th>
		<th>Age</th>
		<th>Weight</th>
		<th>Jockey</th>
		<th>Trainer</th>
		<th>Odds</th>  
        <th><input type="checkbox" id="checkAll" name="checkboxselectall" title="Select All" /></th>		
        </tr>
        </thead>
        <tbody>
		 
		
		<tr id='addr0'>   
            <td>1</td>			
            <td><input type='text' name='name[]' class='form-control' placeholder='EX : Fitzwilliam' required /></td>
            <td><input type='text' name='rating[]' class='form-control' placeholder='EX : 150' required></td>
            <td><input type='text' name='speed[]' class='form-control' placeholder='EX : 60' required></td>
            <td><input type='text' name='age[]' class='form-control' placeholder='EX : 7' required></td>
            <td><input type='text' name='weight[]' class='form-control' placeholder='EX : 10-12' required></td>
            <td><input type='text' name='jockey[]' class='form-control' placeholder='EX : Leighton Aspell' required></td>
            <td><input type='text' name='trainer[]' class='form-control' placeholder='EX : Mick Channon' required></td>
            <td><input type='text' name='odds[]' class='form-control' placeholder='EX : 15/8 7/4 6/1' required></td>
			<td><input type="checkbox" value="12" title="Mark this row for deletion"/></td>
        </tr>  
    </table>
	        <!----------------------- Add Horse Buttons ---------------------->
	        <div align="right">
            <button type="submit" class="btn btn-success" id="btnAdd" name="btnAdd" >
    		<span class="glyphicon glyphicon-plus"></span> 
			Add Record </button> 
           
            <button type="submit" class="btn btn-danger" id="btnDelete" name="btnDelete"  title="Delete the selected Record">
    		<span class="glyphicon glyphicon-minus"></span> 
			&nbsp;Delete Record(s) </button> 
           
            <button type="submit" class="btn btn-primary" id="btnSave" name="btnSave" >
    		<span class="glyphicon glyphicon-save-file"></span> 
			Save Record </button>
            </div>			
</form>
</div>
 <!----------------------- View Horse from DB ---------------------->
<hr />


        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="showHorseTable" class="table table-striped table-hover table-responsive">
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
			<!--
			<tr class="success">	
			-->
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
    
   
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>
</body>
</html>