
<html>
    <head>
         <title>Grants</title>
         <style type = "text/css">
        body {
	        font-family:Arial, Helvetica, sans-serif;
	        font-size:14px;
	     }
	    label {
	        font-weight:bold;
	        width:100px;
	        font-size:14px;
	    }
	    .box {
	        border:#666666 solid 1px;
	    }

         /* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 15% auto; /* 15% from the top and centered */
			padding: 20px;
			border: 1px solid #888;
			width: 80%; /* Could be more or less, depending on screen size */
		}

		/* The Close Button */
		.close {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		} 

    </style>
    </head>
   
    <body>
	
     	<form method="post" action="grants_php.php" enctype="multipart/form-data">
			 <table>  
			 	<tr><td align="center"><label>Type of the Proposal</label><br /><br /></td><td colspan="5">
			    	<select name="pro_type" required>
						<option value="">--SELECT--</option>
						<option value="seminar">Seminar</option>
						<option value="workshop">Workshop</option>
						<option value="STTP">Short Term Training Programme</option>
						<option value="FDP">Faculty Development Programme</option>
						<option value="rps">Research Promotion Scheme</option>
						<option value="modrobs">MODROBS</option>
						<option value="major">Major Research Project</option>
						<option value="minor">Minor Research Project</option>
					</select><br/><br /></td>
				</tr>
			    <tr><td align="center"><label>Title of the Programme  </label><br /><br /></td><td colspan="5">
			    	<input type = "text" name = "project_title" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required><br /><br /></td>
			    </tr>

				<tr><td align="center"><label>Fund Applied for</label><br /><br /></td><td colspan="2">
				     <select name="funded" required>
						<option value="dst">DST</option>
						<option value="drdo">DRDO</option>
						<option value="icmr">ICMR</option>
						<option value="ugc">UGC</option>
						<option value="ugc">CSIR</option>
						<option value="ugc">AICTE</option>
					</select><br /><br /></td>
				</tr>
				 <tr><td align="center"><label>Name of the Scheme  </label><br /><br /></td>
				 	<td colspan="5">
			    	<input type = "text" name = "scheme" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();"><br /><br /></td>
			    </tr>
			    <tr><td align="center"><label>Applied Date</label></td>
					<td><input type="Date" name ="applied" required/></td>
				</tr>
				<tr><td align="center"><label>Duration</label></td>
					<td><input type="text" name ="duration" placeholder="Include Days/Weeks/Years" required/></td>
				</tr>
				<tr><td align="center"><label>Proposal Amount</label></td>
					<td><input type="number" name ="pro_amount" required/></td>
				</tr>						
				
				<tr><td><label>Upload Complete Proposal Copy (only pdf)</td>
					<td align="center"><input type="file" name="pc" required/><br/><br/></td>
				</tr>
				<tr><td><label>Broucher and Supporting Doc. (only pdf)</td>
					<td align="center"><input type="file" name="bs" required/><br/><br/></td>
				</tr>
				<tr>
					<td align="center"><label>Proposed By  </label><br /><br /></td>
					<td colspan="5">
        						<table id="dynamic_field">
       								<tr>
									   <td>
										   	<select name="ftype[]" style="height:30px;border-color:darkred" id="ft1" onchange="loadDept(this)" required>
										   		<option value="">--SELECT--</option>
												<option value="major">Convener</option>
												<option value="minor">Co-ordinator</option>
												<option value="major">Principal Investigator</option>
												<option value="minor">Co.PI.</option>
										   		<option value="external">External</option>
										   	</select>
										</td>
    									<td>
    										<select name="odept[]" style="height:30px;border-color:darkred" id='od1' onchange="loadFaculty(this)" required>
    											<option value="">--SELECT--</option>
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
										<td id="externaladd" style="display:none">
											<button type="button" name="add1" id="add1" class="btn btn-success" onclick="showModal(event)">Add</button>
										</td>
    								</tr>
								</table>
							
			</td>
		    </tr>
		   </table>

		<br/><input type = "submit" value = " Submit " id="submit"/><br />
		</form>
		<div id="myModal" class="modal">
			  	<!-- Modal content -->
			  		<div class="modal-content">
			    		<span class="close">&times;</span>
					    <table>
					    	<tr><td>name</td><td><input type="text" name="name" id="name" value="" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();"  required/><br/></td></tr>
					    <tr><td>designation</td><td><input type="text" name="designation" id="designation" value="" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required/><br/></td></tr>
					    <tr><td>department</td><td><input type="text" name="department" id="department" value="" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required /><br/></td></tr>
					    <tr><td>institution</td><td><input type="text" name="institution" id="institution"  value="" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required/><br/></td></tr>
					</table>
					    
					    <input type="submit" name="Add2" onclick="external_details()">
					</div>
				</div>	
<!-- The Modal -->				
    <script src='../style/jquery.min.js'></script>
    <script type="text/javascript">
        	
		function loadDept(self) {
			if("external" == self.value){
				
				//if("Add" != jQuery(self).parent().siblings().last().html())
				document.getElementById("externaladd").style.display = "block"; 
				//	jQuery(self).parents("tr").first().append('<button class="addExternal" onclick="showModal(event)">Add</button>');
			}else{
				document.getElementById("externaladd").style.display = "none";
			}
			id="#"+self.id.replace("ft", "od")
			$.ajax({
			    type:'POST',
			    url:'support/wrapper.php',
			    data:'ftype='+self.value,
			    success:function(html) {
			    	$(id).html(html);
			    }
		  	});
		}

		function loadFaculty(self) {
			id="#"+self.id.replace("od", "of")
			$.ajax({
			    type:'POST',
			    url:'support/wrapper.php',
			    data:'dept='+self.value+'&ftype='+jQuery("#"+self.id.replace("od","ft")).val(),
			    success:function(html) {
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
		/*$('#name').on('input', function() {
			var input=$(this);
			var is_name=input.val();
			if(is_name){input.removeClass("invalid").addClass("valid");}
			else{input.removeClass("valid").addClass("invalid");}
		});*/
		function external_details(){
			$("[name='name']").prop("required", true);
			$.ajax({
			    type:'POST',
			    url:'support/addexternal_details.php',
			    data:'name='+jQuery("#name").val()+'&designation='+jQuery("#designation").val()+'&department='+jQuery("#department").val()+'&institution='+jQuery("#institution").val(),
			    success:function(html) {
			    	alert(html);

			    }
		  	});

		}
	</script>

</body>
</html>
