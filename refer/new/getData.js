<script>
$(document).ready(function(){
// code to get all records from table via select box

alert("hi");
$("#employee").change(function() {
        var employee_id = $(this).val();

        $.ajax({
            url: 'getEmployee.php',
            type: 'post',
            data: {employee:employee_id},
            dataType: "json",

success: function(response) {
var len = response.length;
alert("s");
                $("#sel_user").empty();
                alert(response);
                /*
                for( var i = 0; i<len; i++){
                    var employee_id = response[i]['employee_id'];
                    var emp_first_name = response[i]['emp_first_namename'];
                    var employee_salary = response[i]['employee_salary'];
                     var employee_age = response[i]['employee_age'];
                    $("#sel_user").append("<option value='"+employee_id+"'>"+emp_first_name+","+employee_salary+","+employee_age+"</option>");


*/}});
});
});

</script>