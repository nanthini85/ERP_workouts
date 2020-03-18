<?php
if(isset($_POST["dept"]) && isset($_POST["ftype"]))
{
    //Get all state data
    $dept = $_POST['dept'];
    $ftype = $_POST['ftype'];
    require_once('../../dbcon.php');
    echo '<option value="">Select Faculty</option>';
    if("internal"==$ftype) {
    	$sql="SELECT eid,ename FROM faculty WHERE  dept='$dept' ORDER BY sno";
        $result=$conn->query($sql);
        if (mysqli_num_rows($result)> 0) 
        {
            // output data of each row
    		while($row=$result->fetch_assoc())
    		{
    			
    			echo "<option value= '".$row['ename'].','.$row['eid']."'>".$row['ename']."</option>";
            }
        }	
    }
    elseif ("external" == $ftype) {
        $sql="SELECT id,name,ex_id FROM external WHERE  institution='$dept'";
        $result=$conn->query($sql);
        if (mysqli_num_rows($result)> 0) 
        {
            // output data of each row
            while($row=$result->fetch_assoc())
            {
                
                echo "<option value= '".$row['name'].','.$row['ex_id']."'>".$row['name']."</option>";
            }
        }
    }
    elseif ("research_fellow" == $ftype) {
        $sql="SELECT id,name,rf_id FROM research WHERE  department='$dept'";
        $result=$conn->query($sql);
        if (mysqli_num_rows($result)> 0) 
        {
            // output data of each row
            while($row=$result->fetch_assoc())
            {
                
                echo "<option value= '".$row['name'].','.$row['rf_id']."'>".$row['name']."</option>";
            }
        }
    }
}
elseif (isset($_POST["ftype"])) {
    require_once('../../dbcon.php');
    $ftype = $_POST["ftype"];

    if("internal" == $ftype) {
        echo '<option value="">Select Department</option>';
        $sql = "SELECT * FROM `department` WHERE `Code` IN (SELECT DISTINCT  `dept` FROM `faculty`)";
        $result=$conn->query($sql);
        if (mysqli_num_rows($result)> 0) 
        {
            // output data of each row
            while($row=$result->fetch_assoc())
            {
                
                echo "<option value= '".$row['Code']."'>".$row['Description']."</option>";
            }
        }
    }
    elseif ("external" == $ftype) {
        echo '<option value="">Select Institute</option>';
        $sql = "SELECT DISTINCT `institution` FROM `external`";
        $result=$conn->query($sql);
        if (mysqli_num_rows($result)> 0) 
        {
            // output data of each row
            while($row=$result->fetch_assoc())
            {
                
                echo "<option value= '".$row['institution']."'>".$row['institution']."</option>";
            }
        }
    }
    elseif ("research_fellow" == $ftype) {
        echo '<option value="">Select Department</option>';
        $sql = "SELECT DISTINCT `department` FROM `research`";
        $result=$conn->query($sql);
        if (mysqli_num_rows($result)> 0) 
        {
            // output data of each row
            while($row=$result->fetch_assoc())
            {
                
                echo "<option value= '".$row['department']."'>".$row['department']."</option>";
            }
        }
    }
    else
    {
        echo '<option value="">Select</option>';
    }
}
?>