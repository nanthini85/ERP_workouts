<?php
include('dbcon.php');
$journal_type=$_POST["journal_type"];
echo $journal_type;
if ($journal_type=="both") {
$sql = "INSERT INTO journal (issn_online, issn_print, journal_name, publisher,journal_type) VALUES ('".$_POST["issn_online"]."','".$_POST["issn_print"]."','".$_POST["journal_name"]."','".$_POST["publisher"]."','".$_POST["journal_type"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}if ($journal_type=="online") {
$sql = "INSERT INTO journal (issn_online, journal_name, publisher,journal_type) VALUES ('".$_POST["issn_online"]."','".$_POST["journal_name"]."','".$_POST["publisher"]."','".$_POST["journal_type"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}if ($journal_type=="print") {
$sql = "INSERT INTO journal ( issn_print, journal_name, publisher,journal_type) VALUES ('".$_POST["issn_print"]."','".$_POST["journal_name"]."','".$_POST["publisher"]."','".$_POST["journal_type"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>