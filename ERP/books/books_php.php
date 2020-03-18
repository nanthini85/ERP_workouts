<?php
include('..\dbcon.php');
$_POST['ch_pgno_from'];
$sql = "INSERT INTO books (book_title, published_type, pub_name, b_month, b_year, b_edition, b_isdn) VALUES ('".$_POST["book_title"]."','".$_POST["published_type"]."','".$_POST["pub_name"]."','".$_POST["b_month"]."','".$_POST["b_year"]."','".$_POST["b_edition"]."','".$_POST["b_isdn"]."')";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $aid="B$last_id";
    $sql1 = "UPDATE books set b_id='$aid' where id='$last_id'";

    if ($conn->query($sql1) === TRUE) {
       echo $aid;
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
echo "New record created successfully"; 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if (isset($_POST["published_type"]))
    {
        
        $sql = "INSERT INTO book_chapter (b_id,ch_title, ch_number, ch_pgno_from,ch_pgno_to) VALUES ('$aid','".$_POST["ch_title"]."','".$_POST["ch_number"]."','".$_POST['ch_pgno_from']."','".$_POST["ch_pgno_to"]."')";
        if ($conn->query($sql) === TRUE) {
            echo "row updated successfully";
        }
    }

$conn->close();
?>