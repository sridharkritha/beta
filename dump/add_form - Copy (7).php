<script type="text/javascript" charset="utf-8">

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

var i=1;

$(document).ready(function() {
	$("#btnAdd").click(function(){	
	 var content = '<tr id="addr'+(i+0)+'">'
    // Note: name="txtboxAry[]" -  Array form of input
   	content += '<td>'+ (i+1) +'</td><td><input type="text" name="name[]" class="form-control" placeholder="EX : Fitzwilliam" required /></td><td><input type="text" name="rating[]"  class="form-control" placeholder="EX : 150" required></td><td><input type="text" name="speed[]"   class="form-control" placeholder="EX : 60" required></td><td><input type="text" name="age[]"     class="form-control" placeholder="EX : 7" required></td><td><input type="text" name="weight[]"  class="form-control" placeholder="EX : 10-12" required></td><td><input type="text" name="jockey[]"  class="form-control" placeholder="EX : Leighton Aspell" required></td> <td><input type="text" name="trainer[]" class="form-control" placeholder="EX : Mick Channon" required></td> <td><input type="text" name="odds[]"    class="form-control" placeholder="EX : 15/8 7/4 6/1" required></td> <td><input type="checkbox" value="12" title="Mark this video for deletion"/></td>';
	content += '</tr>'
    $(".table").append(content);
    i++; 	
	});	
});
</script>

<style type="text/css">
#dis{
	display:none;
}
</style>	

    
    <div id="dis">
    <!-- here message will be displayed -->
	</div> 
	 
	    <div class="content-loader">
		
		<form method='post' id='emp-SaveForm' action="#">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
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
		 <tr>          
			
			<td colspan="2">
            <button type="submit" class="btn btn-success" id="btnAdd" name="btnAdd" >
    		<span class="glyphicon glyphicon-plus"></span> 
			Add Record </button> 
            </td>	

            <td colspan="2">
            <button type="submit" class="btn btn-danger" id="btnDelete" name="btnDelete"  title="Delete the selected Record">
    		<span class="glyphicon glyphicon-minus"></span> 
			&nbsp;Delete Record(s) </button> 
            </td>			
			
			<td colspan="2">
            <button type="submit" class="btn btn-primary" id="btnSave" name="btnSave" >
    		<span class="glyphicon glyphicon-save-file"></span> 
			Save Record </button>  
            </td>			
        </tr>
		
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
</form>
</div>
     
