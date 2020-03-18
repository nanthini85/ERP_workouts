<php
<html>
<head>
	<title>Patent page</title>
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
<body bgcolor = "#FFFFFF">
    <div align = "center">
        <div style = "width:1200px; border: solid 3px #333333; " align = "left">
	        <div style = "background-color:#333333; color:#FFFFFF; padding:5px;"></div>
        	<div style = "margin:30px">
				<form method="post" action="patent_php.php" enctype="multipart/form-data" id="myform">
					<table style="width:100%"><tr><td align="center"><label>Application Number</label><br /><br /></td><td colspan="5"><input type="text" name='an' placeholder='ApplicationNo' onkeyup="this.value = this.value.toUpperCase();" required><br /><br /></td></tr>
				<tr><td align="center"><label>Invention title</label><br /><br /></td><td colspan="5"><input type="text" name='it' placeholder='Invention title' onkeyup="this.value = this.value.toUpperCase();" required><br /><br /></td></tr>
                			<tr><td align="center"><label>Date</label><br /><br /></td><td colspan="5"><input type="date" name='dof' placeholder='DateofFiling' required>
                				<br /><br /></td></tr>	
			<tr><td align="center"><label>Patent Awarded</label><br /><br /></td><td colspan="5"><select class="form-control"style="height:34px;" id="PatentAwarded" name="PatentAwarded"  required>
                   <option value="">PatentAwarded</option>
                   <option value="y">yes</option>
                   <option value="n">No</option>
                </select><br /><br /></td></tr>
			<tr><td align="center"><label>Patent Status  </label><br /><br /></td><td colspan="5">
				<select class="form-control"style="height:34px;" id="PatentStatus" name="PatentStatus" required>
                   <option value="">PatentStatus</option>
                   <option value="a">Filed</option>
                   <option value="a">Published</option>
                   <option value="g">Granted</option>
                </select><br /><br /></td></tr>
			<tr><td align="center"><label>Commercialization  </label><br /><br /></td><td colspan="5">
				<select class="form-control"style="height:34px;" id="Commercialization" name="Commercialization"required>
                   <option value="">Commercialization</option>
                   <option value="y">yes</option>
                   <option value="n">No</option>
                </select><br /><br /></td></tr>
			<tr><td align="center"><label>Collaboration With  </label><br /><br /></td><td colspan="5">                
				<select class="form-control"style="height:34px;" id="CollaborationWith" name="CollaborationWith" required>
                   <option value="">CollaborationWith</option>
                   <option value="ic">Incubation Center</option>
                   <option value="goi">Government of India</option>
                   <option value="o">others</option>
                   <option value="na">NotApplicable</option>
                </select><br /><br /></td></tr>
							
						<tr>
									<td align="center"><label>patentnee  </label><br /><br />
									</td>

							<td colspan="5">
        						<table id="dynamic_field">
       								<tr>
									   <td>
										   	<select name="ftype[]" style="height:30px;border-color:darkred" id="ft1" onchange="loadDept(this)" required>
										   		<option value="">--SELECT--</option>
										   		<option value="faculty">Faculty</option>
										   		<option value="student">Student</option>
										   		
										   	</select>
										</td>
    									<td>
    										<select name="odept[]" style="height:30px;border-color:darkred" id='od1' onchange="loadFaculty(this)" required>
    											<option value="">--SELECT DEPARTMENT--</option>
          									</select>
        								</td>
        								<td>
        									<select name="oname[]" style="height:30px;border-color:darkred" id='of1'  required>
         										<option value="">--SELECT NAME--</option>
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
					<br/><br/>
					<input type = "submit" value = " Submit "/><br />
				</form>

				<!-- The Modal -->
				<!-- <div id="myModal" class="modal">
			  	
			  		<div class="modal-content">
			    		<span class="close">&times;</span>
					    name<input type="text" name="name" id="name" value="" required/>
					    designation<input type="text" name="designation" id="designation" value="" required/>
					    department<input type="text" name="department" id="department" value="" required />
					    institution<input type="text" name="institution" id="institution"  value="" required/>
					    <input type="submit" name="Add2" onclick="external_details()">
					</div>
				</div>-->	
        	</div>       </div>
	</div>
	<script src='../style/jquery.min.js'></script>
    <script type="text/javascript">
		/*function myFunction() {
		  var checkBox = document.getElementById("wos");
		  var text = document.getElementById("additional");
		  if (checkBox.checked == true){
		    text.style.display = "block";
		  } else {
		     text.style.display = "none";
		  }
		  
		 
		}*/
		function loadDept(self) {
			
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
		/*function external_details(){
			$("[name='name']").prop("required", true);
			$.ajax({
			    type:'POST',
			    url:'support/addexternal_details.php',
			    data:'name='+jQuery("#name").val()+'&designation='+jQuery("#designation").val()+'&department='+jQuery("#department").val()+'&institution='+jQuery("#institution").val(),
			    success:function(html) {
			    	alert(html);

			    }
		  	});

		}*/
		$("#myform").validate({
  invalidHandler: function(event, validator) {
    // 'this' refers to the form
    var errors = validator.numberOfInvalids();
    if (errors) {
      var message = errors == 1
        ? 'You missed 1 field. It has been highlighted'
        : 'You missed ' + errors + ' fields. They have been highlighted';
      $("div.error span").html(message);
      $("div.error").show();
    } else {
      $("div.error").hide();
    }
  }
});

	</script>

</body>
</html>