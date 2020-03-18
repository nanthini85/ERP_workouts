<?php
include('../../dbcon.php');

 if(isset($_POST["book_referred"]))
{
 
$bookref=explode((','), $_POST["book_referred"]);

$sql="INSERT INTO book_referredby (book_referred,b_id,referred_by, ref_from,ref_to,referredlevel,referredby) VALUES ('$bookref[0]','$bookref[1]','".$_POST["referred_by"]."','".$_POST["ref_from"]."','".$_POST["ref_to"]."','".$_POST["referredlevel"]."','".$_POST["referredby"]."')"; 
if ($conn->query($sql) === TRUE) {
    echo "row updated successfully";}
}

$conn->close();
?>