<html>
<body>
<?php 
include "config.php";
?><script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){

    $("#sel_depart").change(function(){
        var deptid = $(this).val();
        $.ajax({
            url: 'getUsers.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                var len = response.length;
                $("#sel_user").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

});
</script>
<div>Departments </div>
       
<select id="sel_depart" name="depart">
   <option value="0">- Select -</option>
   <?php 
   // Fetch Department
   include('../dbcon.php');

   $sql_department = "SELECT * FROM department1";
   $department_data = mysqli_query($con,$sql_department);
   while($row = mysqli_fetch_assoc($department_data) ){
      $departid = $row['id'];
      $depart_name = $row['depart_name'];
           
      // Option
echo "<option value= '".$row['id']."'>".$row['depart_name']."</option>";   }
   ?>
</select>
<div class="clear"></div>

<div>Users </div>
<select id="sel_user" name="Users">
   <option value="0">- Select -</option>
</select>
</body>
</html>