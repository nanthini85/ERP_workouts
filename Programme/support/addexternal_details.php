<?php
if(($_POST["name"]!="") && ($_POST["designation"]!="")&& ($_POST["department"]!="")&& ($_POST["institution"]!=""))
{
    //Get all state data
  /*  $name = $_POST['name'];
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $institution = $_POST['institution'];*/
    require_once('../../dbcon.php');
	$sql="INSERT INTO external (name,designation,department,institution) VALUES ('".$_POST["name"]."','".$_POST["designation"]."','".$_POST["department"]."','".$_POST["institution"]."')";
    $result=$conn->query($sql);
    if($result)
    {
        $last_id = $conn->insert_id;
    $aid="EX$last_id";
    $sql1 = "UPDATE external set ex_id='$aid' where id='$last_id'";

    if ($conn->query($sql1) === TRUE) {
       echo $aid;
    }
	   echo "sucessfully inserted";
}}else{
echo "Enter All the Feilds";
 }

?>