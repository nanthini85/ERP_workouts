<html>
<body>
<?php 
include "config.php";
?><script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){

    $("#sel_book_pub").change(function(){
       var bookch = $(this).val();
        $.ajax({
            url: 'dis_book_ch.php',
            type: 'post',
            //data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                var len = response.length;
                //$("#sel_book_pub").empty();
                for( var i = 0; i<len; i++){
                    
					var book_title = response[i]['book_title'];
                    var pub_name = response[i]['pub_name'];
					var ch_title = response[i]['ch_title'];
					var ch_number = response[i]['ch_number'];
					var b_edition = response[i]['b_edition'];
					var b_year = response[i]['b_year'];
					var auth_name = response[i]['GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')'];
					$("#bookcht").html("<tr><td>"+book_title+"</td><td>"+pub_name+"</td><td>"+ch_title+"</td><td>"+ch_number+"</td><td>"+b_edition+"</td><td>"+b_year+"</td><td>"+auth_name+"</td></tr>");
				

                      }
                    }
                   });
               });

                });
</script>
<select id="sel_book_pub">
      <option value="">--SELECT--</option>
      <option value="book">Book</option>
      <option value="book_ch">Book Chapter</option>
      <option value="refer">Referred BY</option>
      </select>
	  <select  id="dept">
         <option value="">--SELECT DEPARTMENT--</option>
		 <?php
             include "config.php";
             $sql = "Select * from department";
             $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
             while( $rows = mysqli_fetch_assoc($resultset) ) {
        ?>
         <option value=<?php echo $rows["Code"]; ?>><?php echo $rows["Description"]; ?></option>
         <?php } ?>
		 
	  </select>
</body>
</html>
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
	         