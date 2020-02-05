<?php
include('../dbcon.php');
if(isset($_POST['employee_id']))
{ 
$sql = "SELECT employee_id, emp_first_name, employee_salary, employee_age FROM employee WHERE employee_id='".$_POST['employee_id']."'";
$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$users_arr = array();
$obj=new StdClass;

while( $row = mysqli_fetch_array($result) ){
		$obj->emp_first_name=$row['emp_first_name'];
		$obj->employee_id=$row['employee_id'];
		$obj->employee_salary=$row['employee_salary'];
		$obj->employee_age=$row['employee_age'];
	
    /*$employee_id = $row['employee_id'];
    $emp_first_name = $row['emp_first_name'];
     $employee_salary = $row['employee_salary'];
      $employee_age = $row['employee_age'];

    $users_arr[] = array("employee_id" => $employee_id, "emp_first_name" => $emp_first_name,"employee_salary"=>$employee_salary,"employee_age"=>$employee_age);
    echo json_encode($users_arr);*/
}

// encoding array to json format
//$data= json_encode($users_arr);
echo json_encode($obj)."\n";
//echo $data;
//echo json_encode($users_arr,JSON_FORCE_OBJECT);
}
else
	echo "data not found";
?>