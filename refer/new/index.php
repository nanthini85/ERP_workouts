<html>
<head>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript"></script>
	<script>
$(document).ready(function(){
// code to get all records from table via select box

alert("hi");
$("#employee").change(function() {
        var employee_id = $(this).val();

        $.ajax({
            url: 'getEmployee.php',
            type: 'post',
            //data: {employee:employee_id},
             data:'employee_id='+employee_id,
             //dataType: "json",

success: function(response) {
//var len = response.length;
//alert(len);
              //  $("#sel_user").empty();
                alert(response);
                var myObj=JSON.parse(response); 
                alert( myObj.emp_first_name);

  $("#user").html("<tr><td>"+myObj.employee_id+"</td><td>"+myObj.emp_first_name+"</td><td>"+myObj.employee_salary+"</td><td>"+myObj.employee_age+"</td></tr>");

               /* for( var i = 0; i<len; i++)
                {
               
                     //alert(myObj.emp_first_name);
                    $("#user").append("<tr><td>"+myObj.employee_id+"</td><td>"+myObj.emp_first_name+"</td><td>"+myObj.employee_salary+"</td><td>"+myObj.employee_age+"</td></tr>");
                }*/
}
});
});
});

</script>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
</head>
<body>
<div class="page-header">
<h3>
<select id="employee">
<option value="" selected="selected">Select Employee Name</option>
<?php
include('../dbcon.php');
$sql = "SELECT employee_id, emp_first_name, employee_salary, employee_age FROM employee LIMIT 10";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $rows = mysqli_fetch_assoc($resultset) ) {
?>
<option value="<?php echo $rows["employee_id"]; ?>"><?php echo $rows["emp_first_name"]; ?></option>
<?php } ?>
</select>

<table id="user">
	</table>
</h3>
</div>
</body>
</html>
