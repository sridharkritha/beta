
<style type="text/css">
#dis{
	display:none;
}
</style>	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>	
 
        <tr>
            <td>Horse</td>
            <td><input type='text' name='name' class='form-control' placeholder='EX : Fitzwilliam' required /></td>
        </tr>
		
		<tr>
            <td>Rating</td>
            <td><input type='text' name='rating' class='form-control' placeholder='EX : 150' required></td>
        </tr>
		
		<tr>
            <td>Speed</td>
            <td><input type='text' name='speed' class='form-control' placeholder='EX : 60' required></td>
        </tr>
		
		<tr>
            <td>Age</td>
            <td><input type='text' name='age' class='form-control' placeholder='EX : 7' required></td>
        </tr>
		
		<tr>
            <td>Weight</td>
            <td><input type='text' name='weight' class='form-control' placeholder='EX : 10-12' required></td>
        </tr>
 
        <tr>
            <td>Jockey</td>
            <td><input type='text' name='jockey' class='form-control' placeholder='EX : Leighton Aspell' required></td>
        </tr>
		
		<tr>
            <td>Trainer</td>
            <td><input type='text' name='trainer' class='form-control' placeholder='EX : Mick Channon' required></td>
        </tr>
		
		<tr>
            <td>Odds</td>
            <td><input type='text' name='odds' class='form-control' placeholder='EX : 15/8 7/4 6/1' required></td>
        </tr>
        
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
