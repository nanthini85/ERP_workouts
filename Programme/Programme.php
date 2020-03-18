<php
<html>

   
   <head>
      <title>Programme</title>
          
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:1200px; border: solid 3px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:5px;"></div>
				
            <div style = "margin:30px">
			<form method="post" action="programme_php.php" enctype="multipart/form-data">
			<table>  
			<tr><td align="center"><label>Title of the programme  </label><br /><br /></td><td colspan="5"><input type = "text" name = "pgm_title" onkeyup="this.value = this.value.toUpperCase();" required><br /><br /></td></tr>

			<tr><td align="center"><label>Type of the programme  </label><br /><br /></td><td colspan="5"><select name="pgm_type" required>
						<option value="">--SELECT--</option>
						<option value="Seminar">Seminar</option>
						<option value="Workshop">Workshop</option>
						<option value="FDP">FDP</option>
						</select><br/><br /></td></tr>
						 <tr><td align="center"><label>Durations</label></td></tr>
						 <tr><td align="center"><label>From</label><br /><br /></td><td colspan="2"><input type = "Date" name = "from" id="ref_from" required><br /><br /></td></tr>

					 <tr><td align="center"><label>To</label><br /><br /></td><td colspan="2"><input type = "Date" name = "to" id="ref_to" required><br /><br /></td></tr>
					 <tr><td align="center"><label>Programme Level</label><br /><br /></td><td colspan="2">
				  <select name="Programme_Level" required>
						<option value="National">National</option>
						<option value="International">International</option>
					</select><br /><br /></td></tr>
						<tr><td align="center"><label>Sponsored by</label><br /><br /></td><td colspan="5"><input type = "text" name = "Sponsored" onkeyup="this.value = this.value.toUpperCase();"  required><br /><br /></td></tr>
						<tr><td align="center"><label>Organised at   </label><br /><br /></td><td colspan="5"><input type = "text" name = "Organised_at" onkeyup="this.value = this.value.toUpperCase();"  required><br /><br /></td></tr>
						<tr><td align="center"><label>Organised by   </label><br /><br /></td><td colspan="5"><input type = "text" name = "Organised" onkeyup="this.value = this.value.toUpperCase();"  required><br /><br /></td></tr>
						<tr><td><label>Upload Certificate (only pdf)</td><td align="center"><input type="file" name="paper" required/><br/>
						<br/></td></tr>
							
						<tr>
									<td align="center"><label>Name of the Faculty</label><br /><br />
									</td>
									<td colspan="5">
        								<table id="dynamic_field">
       										<tr>
												
        										<td>
        											<select name="odept[]" style="height:30px;border-color:darkred" id='od1' onchange="OrgEvent(this,this.value)" required>
        											<option value="">--SELECT--</option>
													<?php
														include('../dbcon.php');
														$sql="select * from department";
														$result=$conn->query($sql);
														while($row=$result->fetch_assoc())
														{
							
															echo "<option value= '".$row['Code']."'>".$row['Description']."</option>";
														}
													?>
              										</select>
            									</td>
            									<td>
            										<select name="oname[]" style="height:30px;border-color:darkred" id='of1'required>
             										<option value="">--SELECT FACULTY--</option>
				  									</select>
            									</td>
        										<td >
													<button type="button" name="add" id="add" class="btn btn-success">Add More</button>
												</td>
												
            								</tr>
										</table>
									</td>
								</tr>

							</table>
							<br/><br/><input type = "submit" value = " Submit " id="submit"/><br />
							</form>
<!-- The Modal -->
				
					
            </div>
			</div>	
         </div>
			  
	  </script>
       <script src='../style/jquery.min.js'></script>
        <script type="text/javascript">
function OrgEvent(r,dept)
{ 

  str=r.id;
  id=str.replace("od", "of");   
  id='#'+id;
  //alert(id);
  $.ajax({
    type:'POST',
    url:'support/wrapper.php',
    data:'dept='+dept,
    success:function(html){
		
      //alert(html);
    $(id).html(html);
    }
  }); 
      
}
function showModal(event) {
	event.preventDefault();
	var modal = document.getElementById("myModal");
	modal.style.display = "block";
	return;
}

/* */

$(document).ready(function(){
	var i=1;

	$('#add').click(function(){
		i++;

    $.ajax({
    type:'POST',
    url:'support/org_co.php',
    data:'i='+i,
    success:function(html){
     	// alert(html);
    	$('#dynamic_field').append(html); 
    }
  	}); 
 

    //$('#dynamic_field').append('');
	});
	

	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
  	});

	// Modal window logic
	// Get the modal
	var modal = document.getElementById("myModal");


	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	} 

 });
             
            $("#submit").click(function(e) {

var ref_from= document.getElementById('ref_from').value;
  var ref_to= document.getElementById('ref_to').value;
  var to = new Date(ref_to);
  var from = new Date(ref_from);
  if(ref_from!= '' && ref_from!= '' && from> to)
    {
    alert("the referred from is greater than or equal to the referred to.");
    return false;
    }
});</script>
</script>

   </body>
</html>
