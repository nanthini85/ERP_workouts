 <html>
  <head>
      <title>Referred by page</title>
     
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
         </style>
     
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="../../style/style.css" rel="stylesheet" type="text/css">
    
</head>
<body bgcolor = "#FFFFFF">
        <center><p >REFERRED BY BOOK</p></center>
      <div align = "center">
         <div style = "width:1200px; border: solid 3px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:5px;"></div>

            <div style = "margin:30px">
           
<form method="post" action="referredby_php.php" enctype="multipart/form-data">
<table> 
<tr><td align="center"><label>Book title  </label><br /><br /></td>
<td colspan="5"><select name="book_referred"required>
<option value="">--SELECT--</option>

<?php
include('../../dbcon.php');
$sql="SELECT b_id,book_title FROM books";
        $result=$conn->query($sql);
        if (mysqli_num_rows($result)> 0)
        {
            // output data of each row
    while($row=$result->fetch_assoc())
    {
   
    echo "<option value= '".$row['book_title'].','.$row['b_id']."'>".$row['book_title']."</option>";
            }
        }
?>

               </select><br/><br /></td></tr></table>
               <table>
			   <tr><td align="center"><label>Book Referred Information:  </label><br /><br /></td>
<tr><td align="center"><select name="referredlevel" required>
						<option value="National">National</option>
						<option value="International">International</option>
					</select></td>
					<td align="center"><select name="referredby" required>
						<option value="University">University</option>
						<option value="College">College</option>
					</select></td></tr><br/>
					<tr><td align="center"><label>Referred By  </label><br/><br/></td><td colspan="5">
<input type = "text" name = "referred_by" placeholder="Name of the University/College" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required><br /><br /></td></tr>
<tr><td align="center"><label>Referred from  </label><br /><br /></td><td colspan="5">
<input type = "date" name = "ref_from" id="ref_from" required><br /><br /></td></tr>
<tr><td align="center"><label>Referred to  </label><br /><br /></td><td colspan="5">
<input type = "date" name = "ref_to" id="ref_to" required><br /><br /></td></tr>
</table>
<br/><br/><input type = "submit" id="submit" value = " Submit " name="submit" /><br />
</form>
</div>

         </div>

      </div>
  </div>
    <script src='../style/jquery.min.js'></script>
        <script type="text/javascript">
            
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
</body>
</html>