<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert, Update, Delete using jQuery, PHP and MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

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
	
	$("#btn-saverows").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			//$(".content-loader").load('addMultipleRows.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
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

	<div class="container">
      
        <h2 class="form-signin-heading">Horse Records.</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Horse</button>		
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; View Horse</button>
		
		<button class="btn btn-info" type="button" id="btn-addrow"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Add Record</button>
		<!--
		<button class="btn btn-info" type="button" id="btn-saverows"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Save</button>
		-->
	    <hr />
        
        <div class="content-loader">
		
		<form method='post' id='SaveFormRecord' action="#">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
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
		
		<tr>
		    <td><input type="text" class="txtbox" value="" /></td>
		    <td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
		    <td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
			<td><input type="text" class="txtbox" value="" /></td>
		</tr>
	
       
		<!--	<tr> </tr> -->
			
        </tbody>
        </table>
		
		<button type="submit" class="btn btn-primary" name="btn-saverows" id="btn-saverows"> <span class="glyphicon glyphicon-plus"></span>Save this Record	</button>  
     
		
		</form>
        
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