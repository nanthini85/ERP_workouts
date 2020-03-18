<!-- table 3: grants_sanctioned insert opreation-->
<?php
include('../dbcon.php');
$sql = "INSERT INTO grants_details (pro_type, project_title, funded, scheme, applied, duration, pro_amount) VALUES ('".$_POST["pro_type"]."','".$_POST["project_title"]."','".$_POST["funded"]."','".$_POST["scheme"]."','".$_POST["applied"]."','".$_POST["duration"]."','".$_POST["pro_amount"]."')";
if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
    $app_id="GA$last_id";
    $sql1 = "UPDATE grants_details set app_id='$app_id' where id='$last_id'";

    if ($conn->query($sql1) === TRUE) {
       echo $app_id;
    }
    echo "New record created successfully";
    if(isset($_FILES['pc'])){
    $errors= array();
    $file_name = $_FILES['pc']['name']; //to take name
    $file_size =$_FILES['pc']['size'];// size
    $file_tmp =$_FILES['pc']['tmp_name'];
    $file_type=$_FILES['pc']['type'];
    $text =explode('.', $file_name);
    $file_ext=end($text);
    $extensions= array("pdf");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a pdf file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"uploads/pc/".$app_id.".pdf");
       echo "Success";
    }else{
       print_r($errors);
    }
  }
	if(isset($_FILES['bs'])){
    $errors= array();
    $file_name = $_FILES['bs']['name']; //to take name
    $file_size =$_FILES['bs']['size'];// size
    $file_tmp =$_FILES['bs']['tmp_name'];
    $file_type=$_FILES['bs']['type'];
    $text =explode('.', $file_name);
    $file_ext=end($text);
    $extensions= array("pdf");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a pdf file.";
    }
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"uploads/bs/".$app_id.".pdf");
       echo "Success";
    }else{
       print_r($errors);
    }
  }


$number = count($_POST["oname"]);

if($number>= 1)
{   
    for($i=0; $i<$number; $i++)
    {
       
        if(strlen(trim($_POST["oname"][$i]))>=0)   
        {
          //  $oname=explode(',',$_POST["oname"][$i]);

           $org_name_split = explode(',',$_POST['oname'][$i]);

            $sql="INSERT INTO grant_app_fac(app_id,eid,ename)VALUES('$app_id','$org_name_split[1]','$org_name_split[0]')";
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