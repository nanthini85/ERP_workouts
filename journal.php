<html>
<head>
<title>journal</title>
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
    <link href="style/style.css" rel="stylesheet" type="text/css">
    
</head>
<body bgcolor = "#FFFFFF">
	<div id="HEADER">
          <h1 class="style4"> <span class="style4">Kongu Engineering College</span><BR/> <span class="style5">ERP MANAGEMENT SYSTEM</span></h1> <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="">ADD JOURNAL</a></li>
        <li><a href="journal/select_journal.php">SELECT JOURNAL</a></li
        <li><a href="journal/article.php">ADD ARTICLE</a></li>
        <li><a href="books/books.php">ADD BOOKS</a></li>
         <li><a href="books/referedby/referredby.php">ADD REFERRED BY BOOK</a></li>
        <li><a href="conference/conference.php">ADD CONFERENCE</a></li>
        <li><a href="patent/patent.php">ADD PATENT</a></li>
       
        
            </ul>		
                    
           
        </div> 
        		<center><h1>JOURNAL TABLE</h1></center>
              <div align = "center">
         <div style = "width:1200px; border: solid 3px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:5px;"></div>

            <div style = "margin:30px">
	<form method="post" action="journal_php.php">

		<!--journal_id<input type="number" name="journal_id"><br><br>-->
      <table>
      	<tr><td align="center"><label>journal_type:</label><br/><br/></td>
<td colspan="5"><input type="radio" name="journal_type" value="online">online<br><br>
			<input type="radio" name="journal_type" value="print">print<br><br>
		<input type="radio" name="journal_type" value="both">both<br><br></td></tr></td></tr>
		<tr id="online" style="display: none"><td align="center"><label>  ISSN_online:</label><br/><br/></td>
<td colspan="5"><input type="text" name="issn_online" pattern="^[0-9]{4}[-][0-9]{4}" title="type like this format 7897-7898" required></td></tr>
        <tr id="print" style="display: none;"><td align="center"><label>ISSN_print:</label><br/><br/></td>
<td colspan="5"><input type="text" name="issn_print" pattern="^[0-9]{4}[-][0-9]{4}" title="type like this format 7897-7898" required></td></tr>
       <tr><td align="center"><label>journal_name:</label><br/><br/></td>
<td colspan="5"><input type="text" name="journal_name" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required></td></tr>
	<tr><td align="center"><label>publisher:</label><br/><br/></td>
<td colspan="5"><input type="text" name="publisher" onkeyup="this.value=this.value.replace(/[^A-z ]/g,'');this.value = this.value.toUpperCase();" required></td></tr>

	</table>
        <input type="submit" name="submit" value="submit">
	</form>
</div>
</div>
</div>
<script src='style/jquery.min.js'></script>
    <script type="text/javascript">
		$(function() {
    $('input[name="journal_type"]').on('click', function() {
        if ($(this).val() == 'online') {
           $('#online').show();
$('input[name="issn_print"]').removeAttr('required');

        }
        else {
            $('#online').hide();
                       
        }if ($(this).val() == 'print') {
           $('#print').show();
                      $('input[name="issn_online"]').removeAttr('required');
        }
        else {
            $('#print').hide();
        }if ($(this).val() == 'both') {
           $('#online').show();
           $('#print').show();
        }
       
    });
});
</script>
</body>
</html>