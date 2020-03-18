<?php
if(isset($_POST["dept"]))
{
    //Get all state data
    $dept= $_POST['dept'];
    require_once('../../dbcon.php');
                        $sql="SELECT eid,ename FROM faculty WHERE  dept='$dept' ORDER BY sno";
                        $result=$conn->query($sql);
                        if (mysqli_num_rows($result)> 0) 
    {
    // output data of each row
    echo '<option value="">Select Faculty</option>';
                        while($row=$result->fetch_assoc())
                        {
                            
                            echo "<option value= '".$row['eid']."'>".$row['ename']."</option>";
                        }
                    }
                    else
                    {
                        echo '<option value="">Select Department</option>';
                    }
                        
    
}
?>