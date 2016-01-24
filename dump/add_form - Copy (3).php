<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$("#btn-test").click(function(){	
	 var content = "<tr>"
    //for(i=0; i<11; i++)
	{
	// Note: name="txtboxAry[]" -  Array form of input
   // content += '<td><input type="text" name="txtboxAry[]" class="txtbox" value="" /></td>';
	
	content += '<td><input type="text" name="name[]"    class="form-control" placeholder="EX : Fitzwilliam" required /></td><td><input type="text" name="rating[]"  class="form-control" placeholder="EX : 150" required></td><td><input type="text" name="speed[]"   class="form-control" placeholder="EX : 60" required></td><td><input type="text" name="age[]"     class="form-control" placeholder="EX : 7" required></td><td><input type="text" name="weight[]"  class="form-control" placeholder="EX : 10-12" required></td><td><input type="text" name="jockey[]"  class="form-control" placeholder="EX : Leighton Aspell" required></td> <td><input type="text" name="trainer[]" class="form-control" placeholder="EX : Mick Channon" required></td> <td><input type="text" name="odds[]"    class="form-control" placeholder="EX : 15/8 7/4 6/1" required></td>';
	
	
	
	
	
    }
    content += "</tr>"
    $(".table").append(content);	
	});	
});
</script>

<style type="text/css">
#dis{
	display:none;
}
</style>	

   <button class="btn btn-info" type="button" id="btn-test"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; btn-test</button>
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div> 
	 
	    <div class="content-loader">
		
		<form method='post' id='emp-SaveForm' action="#">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>		
		<th>Name</th>
		<th>Rating</th>
		<th>Speed</th>
		<th>Age</th>
		<th>Weight</th>
		<th>Jockey</th>
		<th>Trainer</th>
		<th>Odds</th>       
        </tr>
        </thead>
        <tbody>
		 <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
		
		<tr>       
            <td><input type='text' name='name[]' class='form-control' placeholder='EX : Fitzwilliam' required /></td>
            <td><input type='text' name='rating[]' class='form-control' placeholder='EX : 150' required></td>
            <td><input type='text' name='speed[]' class='form-control' placeholder='EX : 60' required></td>
            <td><input type='text' name='age[]' class='form-control' placeholder='EX : 7' required></td>
            <td><input type='text' name='weight[]' class='form-control' placeholder='EX : 10-12' required></td>
            <td><input type='text' name='jockey[]' class='form-control' placeholder='EX : Leighton Aspell' required></td>
            <td><input type='text' name='trainer[]' class='form-control' placeholder='EX : Mick Channon' required></td>
            <td><input type='text' name='odds[]' class='form-control' placeholder='EX : 15/8 7/4 6/1' required></td>
        </tr>        
 
       
 
    </table>
</form>
</div>
     
