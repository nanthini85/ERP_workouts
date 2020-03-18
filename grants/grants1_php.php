<!-- table 3: grants_sanctioned insert opreation-->
<?php
include('../dbcon.php');
$san_id=$_POST["san_id"];
$app_id=$_POST["app_id"];
$sql = "INSERT INTO grants_project (app_id,san_id, san_date, san_from, san_to, san_amount) VALUES ('".$_POST["app_id"]."','$san_id','".$_POST["san_date"]."','".$_POST["from"]."','".$_POST["to"]."','".$_POST["san_amount"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    if(isset($_FILES['soc'])){
    $errors= array();
    $file_name = $_FILES['soc']['name']; //to take name
    $file_size =$_FILES['soc']['size'];// size
    $file_tmp =$_FILES['soc']['tmp_name'];
    $file_type=$_FILES['soc']['type'];
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
       move_uploaded_file($file_tmp,"uploads/soc/".$app_id.".pdf");
       echo "Success";
    }else{
       print_r($errors);
    }
  } 
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>