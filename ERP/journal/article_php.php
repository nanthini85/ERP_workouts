<?php
include('../dbcon.php');

$sql = "INSERT INTO pub_journal (journal_id, article_title, issue_month, issue_year, doi, volume_no,issue_no,pgno_from,pgno_to,issue_type, scopus, wos,Article_type,ssci,sci,scie,ahci,esci,ICI,PubMed) VALUES ('".$_POST["journal_id"]."','".$_POST["article_title"]."','".$_POST["issue_month"]."','".$_POST["issue_year"]."','".$_POST["doi"]."','".$_POST["volume_no"]."','".$_POST["issue_no"]."','".$_POST["pgno_from"]."','".$_POST["pgno_to"]."','".$_POST["issue_type"]."','".$_POST["scopus"]."','".$_POST["wos"]."','".$_POST["Article_type"]."','".$_POST["ssci"]."','".$_POST["sci"]."','".$_POST["scie"]."','".$_POST["ahci"]."','".$_POST["esci"]."','".$_POST["ici"]."','".$_POST["pubmed"]."')";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $aid="J$last_id";
    $sql1 = "UPDATE pub_journal set aid='$aid' where id='$last_id'";

    if ($conn->query($sql1) === TRUE) {
       echo $aid;
    }
    echo "New record created successfully"; 
    
     /* if($_POST["wos"]=="y")
      {
         $sql1 = "INSERT INTO pub_journal (ssci,sci,scie,a4hi,esci) VALUES ('".$_POST["ssci"]."','".$_POST["sci"]."','".$_POST["scie"]."','".$_POST["a4hi"]."','".$_POST["esci"]."')";
   if ($conn->query($sql1) === TRUE) {
       echo "hiii!!! created successfully"; 
   }
  }*/
      
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
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>