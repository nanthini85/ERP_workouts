<html>
<body>
<form action = "grants1.php" method = "post">
				  <select name="grants" required>
						<option value="">--Select--</option>
						<?php
						include('../dbcon.php');
						$sql="select * from grants_details";
						$result=$conn->query($sql);
						while($row=$result->fetch_assoc())
						{

							$MSG=$row['app_id'].",".$row['project_title'].",".$row['pro_type'];
							echo "<option value='".$MSG."'>".$row['project_title']."</option>";
						}
						?>
						</select>
						<input type="submit" value="submit">
</form>
</body>
						</html>