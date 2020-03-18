<html>
<body>
<form action = "article.php" method = "post">
				  <select name="journal" required>
						<option value="">--Select--</option>
						<?php
						include('../dbcon.php');
						$sql="select * from journal";
						$result=$conn->query($sql);
						while($row=$result->fetch_assoc())
						{

							$MSG=$row['journal_id'].",".$row['journal_name'].",".$row['issn_print'].",".$row['issn_online'];
							echo "<option value= '".$MSG."'>".$row['journal_name']."</option>";
						}
						?>
						</select>
						<input type="submit" value="submit">
</form>
</body>
						</html>