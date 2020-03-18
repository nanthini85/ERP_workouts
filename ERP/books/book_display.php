<html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: white;
  padding: 50px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0px;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>

</head>

<body >

<?php
include('../dbcon.php');
if(isset($_GET["dept"]))
{$dept=$_GET["dept"];
}else{
  $dept="null";
}
if($dept=="null")
{
  $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,author_details WHERE  books.b_id =author_details.aid GROUP BY author_details.aid";
}else{
  $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,faculty,author_details WHERE  books.b_id =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$dept' GROUP BY author_details.aid";
}$result=$conn->query($sql);

echo "<table class='table table-striped'>
<thead >
<tr>
<th scope='col' class='table-active'>Book Name</th>
<th scope='col' class='table-primary'>Publisher</th>
<th scope='col' class='table-secondary'>Edition</th>
<th scope='col' class='table-success'>Year</th>
<th scope='col' class='table-primary'>Author</th>

</tr></thead>";

 

while($row=$result->fetch_assoc())

  {
  echo "<tbody>";
  echo "<tr>";

  echo "<td class='table-active'>" . $row['book_title'] . "</td>";

  echo "<td class='table-primary'>" . $row['pub_name'] . "</td>";
  echo "<td class='table-secondary'>" . $row['b_edition'] . "</td>";

  echo "<td class='table-success'>" . $row['b_year'] . "</td>";
  echo "<td class='table-primary'>" . $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"] . "</td>";

  echo "</tr>";
  echo "</tbody>";

  }

echo "</table>";

 
?>
</body>

</html>