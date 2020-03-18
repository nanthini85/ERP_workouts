
<html>
  <head>
      <title>Book page</title>
      
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
		.close 
		{
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
			       <form method="post" action="books_php.php" enctype="multipart/form-data">
			           <table>  
			                <tr><td align="center"><label>Book Title  </label><br /><br /></td>
			                	<td colspan="5"><input type = "text" name = "book_title" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required><br /><br /></td>
			                </tr>
			                 <tr><td align="center"><label>Author  </label><br /><br /></td>
								<td colspan="5">
        						 <table id="dynamic_field">
       								  <tr>
										<td>
										  <select name="ftype[]" style="height:30px;border-color:darkred" id="ft1" onchange="loadDept(this)" require>
											   	<option value="">--SELECT--</option>
											   	<option value="internal">Internal</option>
											   	<option value="external">External</option>
											   	<option value="research_fellow">Research Fellow</option>
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
			                <tr><td align="center"><label>Publication name  </label><br /><br /></td><td colspan="5"><input type = "text" name = "pub_name" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required><br /><br /></td></tr>
                            <tr><td align="center"><label> Month  </label><br /><br /></td><td colspan="5">
                             <select name="b_month" required>
						  		<option value="">--SELECT--</option>
								<option value="Jan">January</option>
								<option value="feb">February</option>
								<option value="mar">March</option>
								<option value="apr">April</option>
								<option value="may">May</option>
								<option value="jun">June</option>
								<option value="jul">July</option>
								<option value="aug">August</option>
								<option value="sept">September</option>
								<option value="oct">October</option>
								<option value="nov">November</option>
								<option value="dec">December</option>
						    </select><br/><br /></td></tr>
						    <tr><td align="center"><label> Year  </label><br /><br /></td><td colspan="5">
				              <select name="b_year" required>
				 				<option value="">--SELECT--</option>
								<?php
									for ($i=1900; $i<=2019; $i++)
									{
								?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php
								}
								?>
                     		 </select><br/><br /></td></tr>
                             <tr><td align="center"><label>Edition  </label><br /><br /></td><td colspan="5">
                             	<input type = "number" name = "b_edition" pattern="^[1-0]{1,2}$" title="Enter a valid number" required><br /><br /></td></tr>
						     <tr><td align="center"><label>ISBN  </label><br /><br /></td><td colspan="5"><input type = "number" name = "b_isdn" pattern="^[0-9]{10,13}$" title="Enter a valid number" required><br /><br /></td></tr>
			               <table>
                             <tr><td align="center" colspan="5"><label>Published Type         :</label></td>
                                <td colspan="5"> <input type="radio" onclick="javascript:yesnoCheck();" name="published_type" id="book_ch" value="Chapter" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();">Chapter 
                             <input type="radio" onclick="javascript:yesnoCheck();" name="published_type" id="book" value="book" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();">Book<br></td></tr>
                           </table>
    					<div id="ifYes" style="display:none">
						   <table>
						        <tr><td align="center"><label>Chapter title  </label><br /><br /></td><td colspan="5"><input type='text' id='title' name='ch_title'onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required><br /><br /></td></tr>
								<tr><td align="center"><label>Chapter Number  </label><br /><br /></td><td colspan="5"><input type='number' id='chnum' name='ch_number' required><br /><br /></td></tr>
								<tr><td align="center"><label>Chapter page number from  </label><br /><br /></td><td colspan="5">  <input type='number' id='pgnofrm' name='ch_pgno_from' required><br /><br /></td></tr>
								<tr><td align="center"><label>Chapter page number to  </label><br /><br /></td><td colspan="5"> <input type='number' id='pgnoto' name='ch_pgno_to' required><br /><br /></td></tr>
				           </table>
	                     </div>
						</table>
							<br/><br/><input type = "submit" id="submit" value = "submit "/><br />
					 </form>
<!-- The Modal -->
            <div id="myModal" class="modal">
			  	<!-- Modal content -->
			  		<div class="modal-content">
			    		<span class="close">&times;</span>
					    name<input type="text" name="name" id="name" value="" required/>
					    designation<input type="text" name="designation" id="designation" value="" required/>
					    department<input type="text" name="department" id="department" value="" required />
					    institution<input type="text" name="institution" id="institution"  value="" required/>
					    <input type="submit" name="Add2" onclick="external_details()">
				  </div>
				</div>
            </div>
		</div>
	</div>
	  
       <script src='../style/jquery.min.js'></script>
       <script type="text/javascript">

           function myFunction()
            {
			  var checkBox = document.getElementById("wos");
			  var text = document.getElementById("additional");
			  if (checkBox.checked == true){
			    text.style.display = "block";
			  } else {
			     text.style.display = "none";
			  }
			  			  
			}
		   function loadDept(self) 
		    {
			if("external" == self.value)
			{
				document.getElementById("externaladd").style.display = "block"; 
				
			}
			else
			{
				document.getElementById("externaladd").style.display = "none";
			}
			id="#"+self.id.replace("ft", "od")
			$.ajax
			 ({
			    type:'POST',
			    url:'support/wrapper.php',
			    data:'ftype='+self.value,
			    success:function(html) 
			    {
			    	 $(id).html(html);
			     }
		  	 });
		    }
		function loadFaculty(self)
		 {
			id="#"+self.id.replace("od", "of")
			$.ajax
			({
			    type:'POST',
			    url:'support/wrapper.php',
			    data:'dept='+self.value+'&ftype='+jQuery("#"+self.id.replace("od","ft")).val(),
			    success:function(html) 
			    {
			    	$(id).html(html);
			    }
		  	});
		  }
		function showModal(event)
		 {
			event.preventDefault();
			var modal = document.getElementById("myModal");
			modal.style.display = "block";
			return;
		 }

		$(document).ready(function(){
			var i=1;

		$('#add').click(function()
		{
			i++;
		    $.ajax
			({
				type:'POST',
				url:'support/org_co.php',
			    data:'i='+i,
		        success:function(html)
			    {									     	
				  $('#dynamic_field').append(html); 
                }
			}); 
		 	   
		 });
			

		$(document).on('click', '.btn_remove', function()
		 {
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
			window.onclick = function(event) 
			{
			  if (event.target == modal) 
			  {
			    modal.style.display = "none";
			  }
			} 

		 });
		
		function external_details()
		       {
					$("[name='name']").prop("required", true);
					$.ajax
					({
					    type:'POST',
					    url:'support/addexternal_details.php',
					    data:'name='+jQuery("#name").val()+'&designation='+jQuery("#designation").val()+'&department='+jQuery("#department").val()+'&institution='+jQuery("#institution").val(),
					    success:function(html)
					       {
					    	alert(html);
			                }
		         	});

		       }
        function yesnoCheck() 
        {
          if (document.getElementById('book_ch').checked) 
          {
             document.getElementById('ifYes').style.display = 'block';
          }
         else document.getElementById('ifYes').style.display = 'none';

        }

		$('input[name="published_type"]').on('click', function() 
		{
		 if ($(this).val() == 'Chapter') {
			$("#submit").click(function(e) {
										var pagefrom=document.getElementById("pgnofrm").value;
										var pageto=document.getElementById("pgnoto").value;
										console.log(pagefrom);
										console.log(pageto);
										if(parseInt(pagefrom) > parseInt(pageto))
											{
												e.preventDefault();
										        alert("page number to is greater than page number from");
											}
										if(parseInt(pagefrom) == parseInt(pageto))
											{
												e.preventDefault();
										alert("page.no.from and page.no.to are not equal");
											}
									});
     
    							 }
        });  

     </script>
</body>
</html>