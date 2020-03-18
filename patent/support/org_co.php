<?php
    $i=$_POST['i'];
    $txt="<tr id='row".$i."'>";
    $txt.= '<td>
       <select name="ftype[]" style="height:30px;border-color:darkred" id="ft'.$i.'" onchange="loadDept(this)" require>
       <option value="">--SELECT--</option>
       <option value="faculty">Faculty</option>
       <option value="student">Student</option>
        </select>
   
    
    <td>';
    $txt.="<div id='input_container' class='col-sm-7'>";
    $txt.="<select name='odept[]' style='height:30px;border-color:darkred' id='od".$i."' onchange='loadFaculty(this,this.value)' required>";
    $txt.="<option value=''>--SELECT DEPARTMENT--</option>";            
    $txt.="</select> </div> </td>  <td> <div id='input_container' class='col-sm-7'>";
    $txt.="<select name='oname[]' style='height:30px;border-color:darkred' id='of".$i."'required>";
    $txt.="<option value=''>--SELECT NAME--</option></select> </div></td><td>";
    $txt.="<button type='button' name='remove' id='".$i."'class='btn btn-danger btn_remove'>X</button></td> 
    </tr>";
    echo $txt;
?>