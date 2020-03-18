<?php
include('../dbcon.php');
echo $_POST["from"];
echo $_POST["to"];
$sql = "INSERT INTO programme (pgm_title,pgm_type,pgm_from,pgm_to,pgm_level,pgm_sponsoredby,pgm_organisedat,pgm_organisedby) VALUES ('".$_POST["pgm_title"]."','".$_POST["pgm_type"]."','".$_POST["from"]."','".$_POST["to"]."','".$_POST["Programme_Level"]."','".$_POST["Sponsored"]."','".$_POST["Organised_at"]."','".$_POST["Organised"]."')";
if ($conn->query($sql) === TRUE) {
        echo "New record created successfully"; 
        $pgm_id= $conn->insert_id;
$number = count($_POST["oname"]);

if($number>= 1)
{   
    for($i=0; $i<$number; $i++)
    {
        $sno=$i+1;
        if(strlen(trim($_POST["oname"][$i]))>=0)   
        {
                 
    $faculty_eid=$_POST['oname'][$i];
                $sql="INSERT INTO attend_info(pgm_id,faculty_eid) VALUES('$pgm_id','$faculty_eid')";
                if(!mysqli_query($conn,$sql))
                    echo mysqli_error($conn);
            }
        }
        $s1=1;
    }
echo "New record created successfully"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if(isset($_FILES['paper'])){
      $errors= array();
      $file_name = $_FILES['paper']['name']; //to take name
      $file_size =$_FILES['paper']['size'];// size
      $file_tmp =$_FILES['paper']['tmp_name'];
      $file_type=$_FILES['paper']['type'];
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
         move_uploaded_file($file_tmp,"uploads/".$pgm_id.".pdf");
         echo "Success";
      }else{
         print_r($errors);
      }
   }
$conn->close();
?>