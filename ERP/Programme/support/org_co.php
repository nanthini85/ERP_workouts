<?php
$i=$_POST['i'];
    $txt="<tr id='row".$i."'>  <td>     <div id='input_container' class='col-sm-7'>";
    $txt.="<select name='odept[]' style='height:30px;border-color:darkred' id='od".$i."' onchange='OrgEvent(this,this.value)' required>";
    $txt.="<option value=''>--SELECT--</option>";
    require_once('../../dbcon.php');  
    $sql="select * from department";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc())
    {
        $txt.="<option value=".$row['Code'].">".$row['Description']."</option>";
    } 
            
    $txt.="</select> </div> </td>  <td> <div id='input_container' class='col-sm-7'>";
    $txt.="<select name='oname[]' style='height:30px;border-color:darkred' id='of".$i."'required>";
    $txt.="<option value=''>--SELECT FACULTY--</option></select> </div></td><td>";
    $txt.="<button type='button' name='remove' id='".$i."'class='btn btn-danger btn_remove'>X</button></td></tr>";
    echo $txt;

?>