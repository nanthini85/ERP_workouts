<html>
<body>
<head>
<table>
    <thead >
        <br/>
    <tr>
      <td>
        <select name="type" style="height:30px;border-color:darkred" id="ft1" onchange="loadDept(this)" required>
      <option value="">--SELECT--</option>
      <option value="book">Book</option>
      <option value="book_ch">Book Chapter</option>
      <option value="refer">Referred BY</option>

      </select>
      </td>
    </tr>
</thead>
</table>
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
<div id="bookch" style="display:none">
<section>
  <nav>
    <ul>
      <li><a href="try.php?dept=CIVIL">►Civil</a></li>
      <li><a href="try.php?dept=MECH">►Mechanical</a></li>
      <li><a href="try.php?dept=MTS">►Mechatronics</a></li>
      <li><a href="try.php?dept=AUTO">►Automobile</a></li>
      <li><a href="try.php?dept=EEE">►EEE</a></li>
      <li><a href="try.php?dept=EIE">►EIE</a></li>
      <li><a href="try.php?dept=ECE">►ECE</a></li>
      <li><a href="try.php?dept=CSE">►CSE</a></li>
      <li><a href="try.php?dept=IT">►IT</a></li>
      <li><a href="try.php?dept=CHEM">►Chemical</a></li>
      <li><a href="try.php?dept=FT">►Food_Technology</a></li>
      <li><a href="try.php?dept=MBA">►MBA</a></li>
      <li><a href="try.php?dept=CA">►MCA</a></li>
      <li><a href="try.php?dept=MATHS">►Mathematics</a></li>
      <li><a href="try.php?dept=PHY">►Physics</a></li>
      <li><a href="try.php?dept=CHY">►Chemistry</a></li>
      <li><a href="try.php?dept=ENG">►English</a></li>
    </ul>
  </nav>
<?php
include('../dbcon.php');
if(isset($_GET["dept"]))
$dept=$_GET["dept"];
else
  $dept="null";
if($dept=="null")
{
  $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')FROM books,author_details,book_chapter where books.published_type='chapter' and books.b_id=book_chapter.b_id and author_details.aid=book_chapter.b_id GROUP BY author_details.aid";
}
else{
        $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,book_chapter,faculty,author_details WHERE books.b_id=book_chapter.b_id and book_chapter.b_id =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$dept' GROUP BY author_details.aid";
}
$result=$conn->query($sql);
echo "<table class='table table-striped'>
<thead >
<tr>
<th scope='col' class='table-active'>Book Name</th>
<th scope='col' class='table-primary'>Publisher</th>
<th scope='col' class='table-danger'>Chapter title</th>
<th scope='col' class='table-warning'>Chapter Number</th>
<th scope='col' class='table-secondary'>Edition</th>
<th scope='col' class='table-success'>Year</th>
<th scope='col' class='table-success'>Authors</th>
</tr></thead>";
while($row=$result->fetch_array())
  {
  echo "<tbody>";
  echo "<tr>";
  echo "<td class='table-active'>" . $row['book_title'] . "</td>";
  echo "<td class='table-primary'>" . $row['pub_name'] . "</td>";
  echo "<td class='table-danger'>" . $row['ch_title'] . "</td>";
  echo "<td class='table-warning'>" . $row['ch_number'] . "</td>";
  echo "<td class='table-secondary'>" . $row['b_edition'] . "</td>";
  echo "<td class='table-success'>" . $row['b_year'] . "</td>";
  echo "<td class='table-primary'>" . $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"] . "</td>";
    echo "</tr>";
  echo "</tbody>";
  }
echo "</table>";
?>
</section>
</div>
<div id="book" style="display:none"><section>
  <nav>
    <ul>
      <li><a href="try.php?dept=CIVIL">►Civil</a></li>
      <li><a href="try.php?dept=MECH">►Mechanical</a></li>
      <li><a href="try.php?dept=MTS">►Mechatronics</a></li>
      <li><a href="try.php?dept=AUTO">►Automobile</a></li>
      <li><a href="try.php?dept=EEE">►EEE</a></li>
      <li><a href="try.php?dept=EIE">►EIE</a></li>
      <li><a href="try.php?dept=ECE">►ECE</a></li>
      <li><a href="try.php?dept=CSE">►CSE</a></li>
      <li><a href="try.php?dept=IT">►IT</a></li>
      <li><a href="try.php?dept=CHEM">►Chemical</a></li>
      <li><a href="try.php?dept=FT">►Food_Technology</a></li>
      <li><a href="try.php?dept=MBA">►MBA</a></li>
      <li><a href="try.php?dept=CA">►MCA</a></li>
      <li><a href="try.php?dept=MATHS">►Mathematics</a></li>
      <li><a href="try.php?dept=PHY">►Physics</a></li>
      <li><a href="try.php?dept=CHY">►Chemistry</a></li>
      <li><a href="try.php?dept=ENG">►English</a></li>
    </ul>
  </nav>
<?php
include('../dbcon.php');
if(isset($_GET["dept"]))
$dept=$_GET["dept"];
else
$dept="null";

if($dept=="null")
{
  $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,author_details WHERE books.published_type='book' and books.b_id =author_details.aid GROUP BY author_details.aid";
}else{
     $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,faculty,author_details WHERE  books.b_id =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$dept' GROUP BY author_details.aid";
}
$result=$conn->query($sql);
echo "<table class='table table-striped'>
<thead >
<tr>
<th scope='col' class='table-active'>Book Name</th>
<th scope='col' class='table-primary'>Publisher</th>
<th scope='col' class='table-secondary'>Edition</th>
<th scope='col' class='table-success'>Year</th>
<th scope='col' class='table-success'>Authors</th>
</tr></thead>";
while($row=$result->fetch_array())
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
</section></div>
<div id="referbook" style="display:none"><section>
  <nav>
    <ul>
      <li><a href="try.php?dept=CIVIL">►Civil</a></li>
      <li><a href="try.php?dept=MECH">►Mechanical</a></li>
      <li><a href="try.php?dept=MTS">►Mechatronics</a></li>
      <li><a href="try.php?dept=AUTO">►Automobile</a></li>
      <li><a href="try.php?dept=EEE">►EEE</a></li>
      <li><a href="try.php?dept=EIE">►EIE</a></li>
      <li><a href="try.php?dept=ECE">►ECE</a></li>
      <li><a href="try.php?dept=CSE">►CSE</a></li>
      <li><a href="try.php?dept=IT">►IT</a></li>
      <li><a href="try.php?dept=CHEM">►Chemical</a></li>
      <li><a href="try.php?dept=FT">►Food_Technology</a></li>
      <li><a href="try.php?dept=MBA">►MBA</a></li>
      <li><a href="try.php?dept=CA">►MCA</a></li>
      <li><a href="try.php?dept=MATHS">►Mathematics</a></li>
      <li><a href="try.php?dept=PHY">►Physics</a></li>
      <li><a href="try.php?dept=CHY">►Chemistry</a></li>
      <li><a href="try.php?dept=ENG">►English</a></li>
    </ul>
  </nav>

<?php
include('../dbcon.php');
if(isset($_GET["dept"]))
$dept=$_GET["dept"];
else
$dept="null";

if($dept=="null")
{
  $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,author_details,book_referredby WHERE book_referredby.b_id=books.b_id and book_referredby.b_id=author_details.aid GROUP BY author_details.aid";
}else{
     $sql="SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,book_referredby,faculty,author_details WHERE books.b_id=book_referredby.b_id AND book_referredby.b_id =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$dept' GROUP BY author_details.aid";
}
$result=$conn->query($sql);
echo "<table class='table table-striped'>
<thead >
<tr>
<th scope='col'>Book Name</th>
<th scope='col'>Publisher</th>
<th scope='col'>PublishedType</th>
<th scope='col'>ReferredBy</th>
<th scope='col'>ReferredFrom</th>
<th scope='col'>ReferredTo</th>
<th scope='col'>Edition</th>
<th scope='col'>Year</th>
<th scope='col'>Authors</th>
</tr></thead>";
while($row=$result->fetch_array())
  {
  echo "<tbody>";
  echo "<tr>";
  echo "<td>" . $row['book_title'] . "</td>";
  echo "<td>" . $row['pub_name'] . "</td>";
  echo "<td>" . $row['published_type'] . "</td>";
  echo "<td>" . $row['referred_by'] . "</td>";
  echo "<td>" . $row['ref_from'] . "</td>";
  echo "<td>" . $row['ref_to'] . "</td>";
  echo "<td>" . $row['b_edition'] . "</td>";
  echo "<td>" . $row['b_year'] . "</td>";
  echo "<td class='table-primary'>" . $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"] . "</td>"; 

  echo "</tr>";
  echo "</tbody>";
  }
echo "</table>";
?>
</section></div>
</body>
</html>
<script>
    function loadDept(self) {
      if("book" == self.value){
        
        document.getElementById("book").style.display = "block"; 
              }
              else{
        document.getElementById("book").style.display = "none";
      }
      if ("book_ch" == self.value) {
        document.getElementById("bookch").style.display = "block";
      }else{
        document.getElementById("bookch").style.display = "none";
      }
      if ("refer" == self.value) {
        document.getElementById("referbook").style.display = "block";
      }else{
        document.getElementById("referbook").style.display = "none";
      }

          }
        </script>