<?php
include('../dbcon.php');

$sql = "INSERT INTO conference (article_title, issue_month, issue_year, doi, volume_no,issue_Type,Article_Type,pgno_from,pgno_to, scopus, Sponsored,Organised,Conference_Name,Conference_Abbrevation) VALUES ('".$_POST["article_title"]."','".$_POST["issue_month"]."','".$_POST["issue_year"]."','".$_POST["doi"]."','".$_POST["volume_no"]."','".$_POST["issue_type"]."','".$_POST["Article_type"]."','".$_POST["pgno_from"]."','".$_POST["pgno_to"]."','".$_POST["scopus"]."','".$_POST["Sponsored"]."','".$_POST["Organised"]."','".$_POST["Conference_Name"]."','".$_POST["Conference_Abbrevation"]."')";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $aid="C$last_id";
    $sql1 = "UPDATE conference set aid='$aid' where id='$last_id'";

    if ($conn->query($sql1) === TRUE) {
       echo $aid;
    }
    echo "New record created successfully"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
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

            $sql="INSERT INTO author_details(auth_sno,aid,auth_id,auth_name) VALUES('$sno','$aid','$org_name_split[1]','$org_name_split[0]')";
              if(!mysqli_query($conn,$sql))
                echo mysqli_error($conn);
        }
    }
    $s1=1;
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
         move_uploaded_file($file_tmp,"uploads/".$aid.".pdf");
         echo "Success";
      }else{
         print_r($errors);
      }
   }
$conn->close();
?>