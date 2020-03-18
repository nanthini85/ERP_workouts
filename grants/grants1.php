<!-- fetch required detils submitted from grants.php--> 
<html>
<body>
<form method="post" action="grants1_php.php" enctype="multipart/form-data">
	<input type = "hidden" name = "app_id"  value="<?php  $text =explode(',', $_POST["grants"]);echo ($text[0]);?>"readonly><br /><br />
<table>



               <tr><td align="center"><label>Sanctioned Number</label></td>
					<td><input type="number" name ="san_id"></td>
				</tr>
				<tr><td align="center"><label>Sanctioned Date</label></td>
					<td><input type="Date" name ="san_date"></td>
				</tr>
				<tr><td align="center"><label>Duration From</label><br /><br /></td>
					<td colspan="2"><input type = "Date" name = "from" id="san_from" required><br /><br /></td>
				</tr>
				<tr><td align="center"><label>Duration To</label><br /><br /></td>
					<td colspan="2"><input type = "Date" name = "to" id="san_to" required><br /><br /></td>
				</tr>
				<tr><td align="center"><label>Sanctioned Amount</label></td>
					<td><input type="number" name ="san_amount"></td>
				</tr>
				<tr><td><label>Sanctioned order copy</label></td>
					<td align="center"><input type="file" name="soc" required/><br/><br/></td>
				</tr>
			</table>
			<input type = "submit" id="submit" value = "Submit"  /><br />
				</form>

            <script src='../books/style/jquery.min.js'></script>
        <script type="text/javascript">
            
            $("#submit").click(function(e) {

var san_from= document.getElementById('san_from').value;
  var san_to= document.getElementById('san_to').value;
  var to = new Date(san_to);
  var from = new Date(san_from);
  if(san_from!= '' && san_to!= '' && from> to)
    {
    alert("the from Date is greater than or equal to the to Date.");
    return false;
    }
});</script>
</body>
</html>