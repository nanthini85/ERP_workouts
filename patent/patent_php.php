<?php
include('../dbcon.php');

$sql = "INSERT INTO patent (Application_no,DateofFiling,PatentAwarded,Status,InventionTitle,Commercialization, CollaborationWith) VALUES ('".$_POST["an"]."','".$_POST["dof"]."','".$_POST["PatentAwarded"]."','".$_POST["PatentStatus"]."','".$_POST["it"]."','".$_POST["Commercialization"]."','".$_POST["CollaborationWith"]."')";
if ($conn->query($sql) === TRUE) {
        echo "New record created successfully"; 
$number = count($_POST["oname"]);

if($number>= 1)
{   
    for($i=0; $i<$number; $i++)
    {
        $sno=$i+1;
        if(strlen(trim($_POST["oname"][$i]))>=0)   
        {
          //  $oname=explode(',',$_POST["oname"][$i]);

$org_name_split = explode(',',$_POST['oname'][$i]);

            $sql="INSERT INTO patentnee_detail(Application_no,patentnee_id,patentnee_name) VALUES('".$_POST["an"]."','$org_name_split[1]','$org_name_split[0]')";
            if(!mysqli_query($conn,$sql))
                echo mysqli_error($conn);
        }
    }
    $s1=1;
}

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>