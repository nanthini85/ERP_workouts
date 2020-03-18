<html>
<head>
	<title>Article page</title>
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
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    
</head>
<body bgcolor = "#FFFFFF">
	<div id="HEADER">
          <h1 class="style4"> <span class="style4">Kongu Engineering College</span><BR/> <span class="style5">ERP MANAGEMENT SYSTEM</span></h1> <ul>
		<li><a href="../home.php">Home</a></li>
        <li><a href="../profile/profile.php">PROFILE</a></li>
        <li><a href="../profile/experience.php">EXPERIENCE</a></li>
        <li><a href="../profile/academic.php">ACADEMIC</a></li>
        <li><a href="../journal/select_journal.php">ADD ARTICLE</a></li>
        <li><a href="../books/books.php">ADD BOOKS</a></li>
        <li><a href="../conference/conference.php">ADD CONFERENCE</a></li>
        <li><a href="../patent/patent.php">ADD PATENT</a></li>
        <li><a href="../journal.php">ADD JOURNAL</a></li>
        <li><a href="../books/referedby/referredby.php">ADD REFERRED BY BOOK</a></li>
        <li><a href="../conference/display.php">CONFERENCE</a></li>
        <li><a href="../journal/display.php">JOURNAL</a></li>
        <li><a href="../books/try.php">BOOK</a></li>
            </ul>		
                    
           
        </div> 
        <center><p >REFERRED BY BOOK</p></center>
  <?php
  $ress=$_POST["journal"];
  ?>
    <div align = "center">
        <div style = "width:1200px; border: solid 3px #333333; " align = "left">
	        <div style = "background-color:#333333; color:#FFFFFF; padding:5px;"></div>
        	<div style = "margin:30px">
				<form method="post" action="article_php.php" enctype="multipart/form-data">
					<input type = "hidden" name = "journal_id"  value=" <?php  $text =explode(',', $_POST["journal"]);echo ($text[0]);?>"readonly><br /><br />
					<table style="width:100%">
						<tr>
							<td align="center">
								<label>journal name  </label><br /><br />
							</td>
							<td colspan="5" >
								<input type = "text" name = "jornal_name"  value=" <?php  $text =explode(',', $_POST["journal"]);echo ($text[1]);?>"readonly><br /><br />
							</td>
						</tr>
						<tr id="printissn" style="display: none;">
							<td align="center">
								<label>print issn  </label><br /><br />
							</td>
							<td colspan="5">
								<input type = "text" name = "issn_print"  value=" <?php  $text =explode(',', $_POST["journal"]);echo ($text[2]);?>"readonly><br /><br />
							</td>
						</tr>
						<tr id="onlineissn" style="display: none;">
							<td align="center">
								<label>online issn  </label><br /><br />
							</td>
							<td colspan="5">
								<input type = "text" name = "issn_online"  value=" <?php  $text =explode(',', $_POST["journal"]);echo ($text[3]);?>"readonly><br /><br />
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>Article Title  </label><br /><br />
							</td>
							<td colspan="5">
								<input type = "text" name = "article_title" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required><br /><br />
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>Issue Month  </label><br /><br />
							</td>
							<td colspan="5">
								<select name="issue_month" required>
									<option value="">--SELECT--</option>
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>
								</select><br/><br />
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>Issue Year  </label><br /><br />
							</td>
							<td colspan="5">
				  				<select name="issue_year" required>
							  		<option value="">--SELECT--</option>
										<?php
										for ($i=1900; $i<=2020; $i++)
											{
												?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
											<?php
											}
											?>
		                     	</select><br/><br /></td></tr>
					 	<tr>
					 		<td align="center">
					 			<label>DOI Number </label><br /><br />
					 		</td>
					 		<td colspan="5">
				  				<input type = "text" name = "doi" required><br/><br />
				  			</td>
				  		</tr>
				  		<tr>
				  			<td align="center">
				  				<label>Volume Number  </label><br /><br />
				  			</td>
				  			<td colspan="5">
							  	<select name="volume_no" required>
								  	<option value="">--SELECT--</option>
										<?php
										for ($i=1; $i<=100; $i++)
											{
												?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
											<?php
											}
											?>
		                     	</select><br/><br />
		                    </td>
		                </tr>
					 	<tr>
					 		<td align="center">
					 			<label>Issue Number  </label><br /><br />
					 		</td>
					 		<td colspan="5">
								<select name="issue_no"required>
									<option value="">--SELECT--</option>
										<?php
										for ($i=1; $i<=24; $i++)
											{
												?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
											<?php
											}
											?>
				                </select><br/><br />
				            </td>
				        </tr>
						<tr>
							<td align="center">
								<label>Page number from  </label><br /><br />
							</td>
							<td colspan="5">
								<input type = "text" name = "pgno_from" id="pgno_from"  required><br /><br />
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>Page number to  </label><br /><br />
							</td>
							<td colspan="5">
								<input type = "text" name = "pgno_to" id="pgno_to"  required><br /><br />
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>Article Type  </label><br /><br />
							</td>
							<td colspan="5">
							  	<select name="Article_type" required>
									<option value="National">National</option>
									<option value="International">International</option>
								</select><br /><br />
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>Issue Type  </label><br /><br />
							</td>
							<td colspan="5">
							  	<select name="issue_type" required>
									<option value="reg">Regular</option>
									<option value="spe">Special</option>
								</select><br /><br />
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>Indexed  </label><br /><br />
							</td>
							<td colspan="5">
								<input type="hidden" name="scopus" value="n">
								<input type="checkbox" name="scopus" value="y"> Scopus
								<input type="hidden" name="wos" value="n">
								<input type="checkbox" name="wos" value="y" id ="wos" onclick="myFunction()"> Web of Science <input type="hidden" name="ici" value="n"> 
								<input type="checkbox" name="ici" value="y"> ICI <input type="hidden" name="pubmed" value="n"> 
								<input type="checkbox" name="pubmed" value="y"> PubMed<br/>
							</td>
						</tr>
						<tr>
							<td align="center">
								<label>       </label><br /><br />
							</td>
							<td colspan="5" id="additional" style="display:none">
								<input type="hidden" name="sci" value="n">
								<input type="checkbox" name="sci" value="y" id ="ssci" > SSCI
								<input type="hidden" name="ssci" value="n">
								<input type="checkbox" name="ssci" value="y" id ="sci" > SCI
								<input type="hidden" name="scie" value="n">
								<input type="checkbox" name="scie" value="y" id ="scie" > SCIE
								<input type="hidden" name="ahci" value="n">
								<input type="checkbox" name="ahci" value="y" id ="ahci" > AHCI
								<input type="hidden" name="esci" value="n">
								<input type="checkbox" name="esci" value="y" id ="esci" > ESCI
							</td>
						</tr>					
						<tr>
							<td>
								<label>Upload Article (only pdf)<label>
							</td>
							<td align="center">
								<input type="file" name="paper" required/><br/><br/>
							</td>
						</tr>
						<tr>
							<td align="center"><label>Author  </label><br /><br />
							</td>
							<td colspan="5">
        						<table id="dynamic_field">
       								<tr>
									   <td>
										   	<select name="ftype[]" style="height:30px;border-color:darkred" id="ft1" onchange="loadDept(this)" required>
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

					</table>
					<br/><br/>
					<input type = "submit" id="submit" value = " Submit "  /><br />
				</form>

				<!-- The Modal -->
				<div id="myModal" class="modal">
			  	<!-- Modal content -->
			  		<div class="modal-content">
			    		<span class="close">&times;</span>
					    name<input type="text" name="name" id="name" value="" required/>
					    designation<input type="text" name="designation" id="designation" value="" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required/>
					    department<input type="text" name="department" id="department" value="" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required />
					    institution<input type="text" name="institution" id="institution"  value="" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required/>
					    
					    <input type="submit" name="Add2" onclick="external_details()">
					</div>
				</div>	
        	</div>
        </div>
	</div>
	<script src='../style/jquery.min.js'></script>
	    <script type="text/javascript">
	    	var res='<?php echo $ress; ?>';
	    	var result =res.split(',');
	    	console.log(result[2]);
	    	if(result[3]=="")
	    	{
	    		$('#onlineissn').hide();
        }
        else {
            $('#onlineissn').show();
	    	}
	    	if(result[2]=="")
	    	{
	    		$('#printissn').hide();
                    
        }
        else {
            $('#printissn').show();
	    	}
	    	$("#submit").click(function(e) {

var pagefrom=document.getElementById("pgno_from").value;
var pageto=document.getElementById("pgno_to").value;
console.log(pagefrom);
console.log(pageto);
if(parseInt(pagefrom) > parseInt(pageto))
	{
		e.preventDefault();
alert("page number to is greater than page number from");
	}if(parseInt(pagefrom) == parseInt(pageto))
	{
		e.preventDefault();
alert("page.no.from and page.no.to are not equal");
	}
});
		function myFunction() {
		  var checkBox = document.getElementById("wos");
		  var text = document.getElementById("additional");
		  if (checkBox.checked == true){
		    text.style.display = "block";
		  } else {
		     text.style.display = "none";
		  }
		  
		  
		}
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