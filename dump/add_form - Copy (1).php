<script type="text/javascript" charset="utf-8">

    


// Delete Row Dynamically
var i=1;
/*
$(document).ready(function() {
$("#deleterow").click(function(){
	 if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
});
// });
*/

 $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });
	 

/*
   $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='user"+i+"' type='text' placeholder='User' class='form-control input-md'  /></td><td><input  name='pass"+i+"' type='text' placeholder='Password'  class='form-control input-md'></td><td><input  name='ip"+i+"' type='text' placeholder='IP'  class='form-control input-md'></td><td><input  name='country"+i+"' type='text' placeholder='Country'  class='form-control input-md'></td><td><input  name='ipDisp"+i+"' type='text' placeholder='IP details'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
  */

// Add Row Dynamically
$(document).ready(function() {
	$("#btn-test").click(function(){	
	
	$('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='user"+i+"' type='text' placeholder='User' class='form-control input-md'  /></td><td><input  name='pass"+i+"' type='text' placeholder='Password'  class='form-control input-md'></td><td><input  name='ip"+i+"' type='text' placeholder='IP'  class='form-control input-md'></td><td><input  name='country"+i+"' type='text' placeholder='Country'  class='form-control input-md'></td><td><input  name='ipDisp"+i+"' type='text' placeholder='IP details'  class='form-control input-md'></td>");
	
    //$('#addr'+i).html('<td><input type="text" name="name[]"    class="form-control" placeholder="EX : Fitzwilliam" required /></td><td><input type="text" name="rating[]"  class="form-control" placeholder="EX : 150" required></td><td><input type="text" name="speed[]"   class="form-control" placeholder="EX : 60" required></td><td><input type="text" name="age[]"     class="form-control" placeholder="EX : 7" required></td><td><input type="text" name="weight[]"  class="form-control" placeholder="EX : 10-12" required></td><td><input type="text" name="jockey[]"  class="form-control" placeholder="EX : Leighton Aspell" required></td> <td><input type="text" name="trainer[]" class="form-control" placeholder="EX : Mick Channon" required></td> <td><input type="text" name="odds[]"    class="form-control" placeholder="EX : 15/8 7/4 6/1" required></td><td class="deleterow"><div class="glyphicon glyphicon-remove"></div></td>');
	$('#example').append('<tr id="addr'+(i+1)+'"></tr>');
    i++; 
	
	
	/*
	// var content = '<tr>'
	var content = '<tr id="addr'+(i+1)+'">'    
	// Note: name="txtboxAry[]" -  Array form of input	
	content += '<td><input type="text" name="name[]"    class="form-control" placeholder="EX : Fitzwilliam" required /></td><td><input type="text" name="rating[]"  class="form-control" placeholder="EX : 150" required></td><td><input type="text" name="speed[]"   class="form-control" placeholder="EX : 60" required></td><td><input type="text" name="age[]"     class="form-control" placeholder="EX : 7" required></td><td><input type="text" name="weight[]"  class="form-control" placeholder="EX : 10-12" required></td><td><input type="text" name="jockey[]"  class="form-control" placeholder="EX : Leighton Aspell" required></td> <td><input type="text" name="trainer[]" class="form-control" placeholder="EX : Mick Channon" required></td> <td><input type="text" name="odds[]"    class="form-control" placeholder="EX : 15/8 7/4 6/1" required></td><td class="deleterow"><div class="glyphicon glyphicon-remove"></div></td>';
    content += "</tr>"   
	$('#example').append(content);
    i++; 	
	});	
	*/
});
});
</script>

<style type="text/css">
#dis{
	display:none;
}

.deleterow{cursor:pointer}
</style>	

   <button class="btn btn-info" type="button" id="btn-test"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; btn-test</button>
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div> 
	 
	    <div class="content-loader">
		
		<form method='post' id='emp-SaveForm' action="#">
		 <div class="table-responsive">
        
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
       <!-- <th>Delete</th>	 -->	
        </tr>
        </thead>
        <tbody>
		 <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>
            </td>			
			<td colspan="2">
			<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
            </td>
        </tr>
		
		<tr id='addr0'>       
            <td><input type='text' name='name[]' class='form-control' placeholder='EX : Fitzwilliam' required /></td>
            <td><input type='text' name='rating[]' class='form-control' placeholder='EX : 150' required></td>
            <td><input type='text' name='speed[]' class='form-control' placeholder='EX : 60' required></td>
            <td><input type='text' name='age[]' class='form-control' placeholder='EX : 7' required></td>
            <td><input type='text' name='weight[]' class='form-control' placeholder='EX : 10-12' required></td>
            <td><input type='text' name='jockey[]' class='form-control' placeholder='EX : Leighton Aspell' required></td>
            <td><input type='text' name='trainer[]' class='form-control' placeholder='EX : Mick Channon' required></td>
            <td><input type='text' name='odds[]' class='form-control' placeholder='EX : 15/8 7/4 6/1' required></td>
		<!--	<td class='deleterow'><div class='glyphicon glyphicon-remove'></div></td>   -->
        </tr> 
      </tbody>		
    </table>
	</div>
</form>
</div>
     
