<html>
<body>
<?php 
include "config.php";
?>
<script src='style/jquery.min.js'></script>
<script type="text/javascript">
$(document).ready(function(){

    $("#sel_pub").change(function()
    {
        var pub = $(this).val();
        if(pub=="book_ch")
        {
            $("#dept").change(function()
            {
                var deptid = $(this).val();
                $.ajax({
                    url: 'edited.php',
                    type: 'post',
                    data: {depart:deptid,publication:pub},
                    dataType: 'json',
                    success:function(response)
                    {
                        var len = response.length;
                        $("#sample").empty();//without append the data
                        $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Book Name</th><th scope='col' class='table-primary'>Publisher</th><th scope='col' class='table-danger'>Chapter title</th><th scope='col' class='table-warning'>Chapter Number</th><th scope='col' class='table-secondary'>Edition</th><th scope='col' class='table-success'>Year</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                        for( var i = 0; i<len; i++)
                        {
                            var book_title = response[i]['book_title'];
                            var pub_name = response[i]['pub_name'];
                            var ch_title = response[i]['ch_title'];
                            var ch_number = response[i]['ch_number'];
                            var b_edition = response[i]['b_edition'];
                            var b_year = response[i]['b_year'];
                            var auth_name = response[i]['auth_name'];
                            var mask="<tr><td>"+book_title+"</td><td>"+pub_name+"</td><td>"+ch_title+"</td><td>"+ch_number+"</td><td>"+b_edition+"</td><td>"+b_year+"</td><td>"+auth_name+"</td></tr>";
                            //alert(mask);
                            $("#sample").append(mask);
                        }
                    }
                });
            });
            $.ajax({
                url: 'edited.php',
                type: 'post',
                data: {publication:pub},
                dataType: 'json',
                success:function(response)
                {
                    console.log("hiii");
                    var len = response.length;
                    $("#sample").empty();//without append the data
                    $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Book Name</th><th scope='col' class='table-primary'>Publisher</th><th scope='col' class='table-danger'>Chapter title</th><th scope='col' class='table-warning'>Chapter Number</th><th scope='col' class='table-secondary'>Edition</th><th scope='col' class='table-success'>Year</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                    for( var i = 0; i<len; i++)
                    {
                        var book_title = response[i]['book_title'];
                        var pub_name = response[i]['pub_name'];
                        var ch_title = response[i]['ch_title'];
                        var ch_number = response[i]['ch_number'];
                        var b_edition = response[i]['b_edition'];
                        var b_year = response[i]['b_year'];
                        var auth_name = response[i]['auth_name'];
                        var mask="<tr><td>"+book_title+"</td><td>"+pub_name+"</td><td>"+ch_title+"</td><td>"+ch_number+"</td><td>"+b_edition+"</td><td>"+b_year+"</td><td>"+auth_name+"</td></tr>";
                        // alert(mask);
                        $("#sample").append(mask);
                    }
                }
            });
        }
        else if(pub=="book")
        {
            $("#dept").change(function()
            {
                var deptid = $(this).val();
                $.ajax({
                    url: 'edited.php',
                    type: 'post',
                    data: {depart:deptid,publication:pub},
                    dataType: 'json',
                    success:function(response)
                    {
                        var len = response.length;
                        $("#sample").empty();//without append the data
                        $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Book Name</th><th scope='col' class='table-primary'>Publisher</th><th scope='col' <th scope='col' class='table-secondary'>Edition</th><th scope='col' class='table-success'>Year</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                        for( var i = 0; i<len; i++)
                        {
                            var book_title = response[i]['book_title'];
                            var pub_name = response[i]['pub_name'];
                            var b_edition = response[i]['b_edition'];
                            var b_year = response[i]['b_year'];
                            var auth_name = response[i]['auth_name'];
                            var mask="<tr><td>"+book_title+"</td><td>"+pub_name+"</td><td>"+b_edition+"</td><td>"+b_year+"</td><td>"+auth_name+"</td></tr>";
                            //alert(mask);
                            $("#sample").append(mask);
                        }
                    }
                });
            });
            $.ajax({
                url: 'edited.php',
                type: 'post',
                data: {publication:pub},
                dataType: 'json',
                success:function(response)
                {
                    console.log("hiii");
                    var len = response.length;
                    $("#sample").empty();//without append the data
                    $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Book Name</th><th scope='col' class='table-primary'>Publisher</th><th scope='col' <th scope='col' class='table-secondary'>Edition</th><th scope='col' class='table-success'>Year</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                    for( var i = 0; i<len; i++)
                    {
                        var book_title = response[i]['book_title'];
                        var pub_name = response[i]['pub_name'];
                        var b_edition = response[i]['b_edition'];
                        var b_year = response[i]['b_year'];
                        var auth_name = response[i]['auth_name'];
                        var mask="<tr><td>"+book_title+"</td><td>"+pub_name+"</td><td>"+b_edition+"</td><td>"+b_year+"</td><td>"+auth_name+"</td></tr>";
                        // alert(mask);
                        $("#sample").append(mask);
                    }
                }
            });
        }
        else if(pub=="journal")
        {
            $("#dept").change(function()
            {
                var deptid = $(this).val();
                $.ajax({
                    url: 'edited.php',
                    type: 'post',
                    data: {depart:deptid,publication:pub},
                    dataType: 'json',
                    success:function(response)
                    {
                        var len = response.length;
                        $("#sample").empty();//without append the data
                        $("#sample").html("<thead ><tr><th >Sl. No.</th><th >Title of the Paper</th><th >Name of the journal</th><th >International/national</th><th>Vol. No.</th><th>Issue No.</th><th>Page No. From</th><th>Page No. To</th><th>Issue Month</th><th>Issue Year</th><th>Authors</th></tr></thead>");

                        for( var i = 0; i<len; i++)
                        {
                            var aid = response[i]['aid'];
                            var article_title = response[i]['article_title'];
                            var journal_name = response[i]['journal_name'];
                            var article_type = response[i]['article_type'];
                            var volume_no = response[i]['volume_no'];
                            var issue_no = response[i]['issue_no'];
                            var pgno_from = response[i]['pgno_from'];
                            var pgno_to = response[i]['pgno_to'];
                            var issue_month = response[i]['issue_month'];
                            var issue_year = response[i]['issue_year'];
                            var auth_name = response[i]['auth_name'];
                            var mask="<tr><td>"+aid+"</td><td>"+article_title+"</td><td>"+journal_name+"</td><td>"+article_type+"</td><td>"+volume_no+"</td><td>"+issue_no+"</td><td>"+pgno_from+"</td><td>"+pgno_to+"</td><td>"+issue_month+"</td><td>"+issue_year+"</td><td>"+auth_name+"</td></tr>";
                            // alert(mask);//alert(mask);
                            $("#sample").append(mask);
                        }
                    }
                });
            });
            $.ajax({
                url: 'edited.php',
                type: 'post',
                data: {publication:pub},
                dataType: 'json',
                success:function(response)
                {
                    console.log("hiii");
                    var len = response.length;
                    $("#sample").empty();//without append the data
                    $("#sample").html("<thead ><tr><th >Sl. No.</th><th >Title of the Paper</th><th >Name of the journal</th><th >International/national</th><th>Vol. No.</th><th>Issue No.</th><th>Page No. From</th><th>Page No. To</th><th>Issue Month</th><th>Issue Year</th><th>Authors</th></tr></thead>");

                    for( var i = 0; i<len; i++)
                    {
                        var aid = response[i]['aid'];
                        var article_title = response[i]['article_title'];
                        var journal_name = response[i]['journal_name'];
                        var article_type = response[i]['article_type'];
                        var volume_no = response[i]['volume_no'];
                        var issue_no = response[i]['issue_no'];
                        var pgno_from = response[i]['pgno_from'];
                        var pgno_to = response[i]['pgno_to'];
                        var issue_month = response[i]['issue_month'];
                        var issue_year = response[i]['issue_year'];
                        var auth_name = response[i]['auth_name'];
                        var mask="<tr><td>"+aid+"</td><td>"+article_title+"</td><td>"+journal_name+"</td><td>"+article_type+"</td><td>"+volume_no+"</td><td>"+issue_no+"</td><td>"+pgno_from+"</td><td>"+pgno_to+"</td><td>"+issue_month+"</td><td>"+issue_year+"</td><td>"+auth_name+"</td></tr>";
                        // alert(mask);
                        $("#sample").append(mask);
                    }
                }
            });
        }
        else if(pub=="conference")
        {
            $("#dept").change(function()
            {
                var deptid = $(this).val();
                $.ajax({
                    url: 'edited.php',
                    type: 'post',
                    data: {depart:deptid,publication:pub},
                    dataType: 'json',
                    success:function(response)
                    {
                        var len = response.length;
                        $("#sample").empty();//without append the data
                        $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Sl. No.</th><th scope='col' class='table-primary'>Title of the Paper</th><th scope='col' class='table-secondary'>Name of the Conference</th><th scope='col' class='table-success'>International/national</th><th scope='col' class='table-danger'>Vol. No.</th><th scope='col' class='table-info'>Page No. From</th><th scope='col' class='table-light'>Page No. To</th><th scope='col' class='table-dark'>Issue Month</th><th scope='col' class='table-active'>Issue Year</th><th scope='col' class='table-primary'>Authors</th></tr></thead>");
                        for( var i = 0; i<len; i++)
                        {
                            var aid = response[i]['aid'];
                            var article_title = response[i]['article_title'];
                            var journal_name = response[i]['journal_name'];
                            var article_type = response[i]['article_type'];
                            var volume_no = response[i]['volume_no'];
                            var issue_no = response[i]['issue_no'];
                            var pgno_from = response[i]['pgno_from'];
                            var pgno_to = response[i]['pgno_to'];
                            var issue_month = response[i]['issue_month'];
                            var issue_year = response[i]['issue_year'];
                            var auth_name = response[i]['auth_name'];
                            var mask="<tr><td>"+aid+"</td><td>"+article_title+"</td><td>"+conference_Name+"</td><td>"+article_type+"</td><td>"+volume_no+"</td><td>"+issue_no+"</td><td>"+pgno_from+"</td><td>"+pgno_to+"</td><td>"+issue_month+"</td><td>"+issue_year+"</td><td>"+auth_name+"</td></tr>";
                            //alert(mask);
                            $("#sample").append(mask);
                        }
                    }
                });
            });
            $.ajax({
                url: 'edited.php',
                type: 'post',
                data: {publication:pub},
                dataType: 'json',
                success:function(response)
                {
                    console.log("hiii");
                    var len = response.length;
                    $("#sample").empty();//without append the data
                    $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Sl. No.</th><th scope='col' class='table-primary'>Title of the Paper</th><th scope='col' class='table-secondary'>Name of the Conference</th><th scope='col' class='table-success'>International/national</th><th scope='col' class='table-danger'>Vol. No.</th><th scope='col' class='table-info'>Page No. From</th><th scope='col' class='table-light'>Page No. To</th><th scope='col' class='table-dark'>Issue Month</th><th scope='col' class='table-active'>Issue Year</th><th scope='col' class='table-primary'>Authors</th></tr></thead>");

                    for( var i = 0; i<len; i++)
                    {
                        var aid = response[i]['aid'];
                        var article_title = response[i]['article_title'];
                        var conference_name = response[i]['conference_name'];
                        var article_type = response[i]['article_type'];
                        var volume_no = response[i]['volume_no'];
                        var issue_no = response[i]['issue_no'];
                        var pgno_from = response[i]['pgno_from'];
                        var pgno_to = response[i]['pgno_to'];
                        var issue_month = response[i]['issue_month'];
                        var issue_year = response[i]['issue_year'];
                        var auth_name = response[i]['auth_name'];
                        var mask="<tr><td>"+aid+"</td><td>"+article_title+"</td><td>"+conference_name+"</td><td>"+article_type+"</td><td>"+volume_no+"</td><td>"+pgno_from+"</td><td>"+pgno_to+"</td><td>"+issue_month+"</td><td>"+issue_year+"</td><td>"+auth_name+"</td></tr>";
                        // alert(mask);
                        $("#sample").append(mask);
                    }
                }
            });
        }
        else if(pub=="refer")
        {
            $("#dept").change(function()
            {
                var deptid = $(this).val();
                $.ajax({
                    url: 'edited.php',
                    type: 'post',
                    data: {depart:deptid,publication:pub},
                    dataType: 'json',
                    success:function(response)
                    {
                        var len = response.length;
                        $("#sample").empty();//without append the data
                        $("#sample").html("<thead ><tr><th scope='col' class='table-active'>book referred</th><th scope='col' class='table-primary'>refered from</th><th scope='col' <th scope='col' class='table-secondary'>refered to</th><th scope='col' class='table-success'>referred by</th><th scope='col' class='table-success'>Year</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                        for( var i = 0; i<len; i++)
                        {
                            var book_referred = response[i]['book_referred'];
                            var ref_from = response[i]['ref_from'];
                            var ref_to = response[i]['ref_to'];
                            var referred_by = response[i]['referred_by'];
                            var b_year = response[i]['b_year'];
                            var auth_name = response[i]['auth_name'];
                            var mask="<tr><td>"+book_referred+"</td><td>"+ref_from+"</td><td>"+ref_to+"</td><td>"+referred_by+"</td><td>"+b_year+"</td><td>"+auth_name+"</td></tr>";
                            //alert(mask);
                            $("#sample").append(mask);
                        }
                    }
                });
            });
            $.ajax({
                url: 'edited.php',
                type: 'post',
                data: {publication:pub},
                dataType: 'json',
                success:function(response)
                {
                    console.log("hiii");
                    var len = response.length;
                    $("#sample").empty();//without append the data
                    $("#sample").html("<thead ><tr><th scope='col' class='table-active'>book referred</th><th scope='col' class='table-primary'>refered from</th><th scope='col' <th scope='col' class='table-secondary'>refered to</th><th scope='col' class='table-success'>referred by</th><th scope='col' class='table-success'>Year</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                        for( var i = 0; i<len; i++)
                        {
                            var book_referred = response[i]['book_referred'];
                            var ref_from = response[i]['ref_from'];
                            var ref_to = response[i]['ref_to'];
                            var referred_by = response[i]['referred_by'];
                            var b_year = response[i]['b_year'];
                            var auth_name = response[i]['auth_name'];
                            var mask="<tr><td>"+book_referred+"</td><td>"+ref_from+"</td><td>"+ref_to+"</td><td>"+referred_by+"</td><td>"+b_year+"</td><td>"+auth_name+"</td></tr>";
                            //alert(mask);
                            $("#sample").append(mask);
                    }
                }
            });
        }
        else if(pub=="patent")
        {
            $("#dept").change(function()
            {
                var deptid = $(this).val();
                $.ajax({
                    url: 'edited.php',
                    type: 'post',
                    data: {depart:deptid,publication:pub},
                    dataType: 'json',
                    success:function(response)
                    {
                        var len = response.length;
                        $("#sample").empty();//without append the data
                        $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Application no</th><th scope='col' class='table-primary'>Date of Filing</th><th scope='col' <th scope='col' class='table-secondary'>PatentAwarded</th><th scope='col' class='table-success'>Status</th><th scope='col' class='table-success'>Invention Title</th><th scope='col' class='table-success'>Commercialization</th><th scope='col' class='table-success'>Collaboration With</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                        for( var i = 0; i<len; i++)
                        {
                            var Application_no = response[i]['Application_no'];
                            var DateofFiling = response[i]['DateofFiling'];
                            var PatentAwarded = response[i]['PatentAwarded'];
                            var Status = response[i]['Status'];
                            var InventionTitle = response[i]['InventionTitle'];
                            var Commercialization = response[i]['Commercialization'];
                            var CollaborationWith = response[i]['CollaborationWith'];
                            var auth_name = response[i]['auth_name'];
                            var mask="<tr><td>"+Application_no+"</td><td>"+DateofFiling+"</td><td>"+PatentAwarded+"</td><td>"+Status+"</td><td>"+InventionTitle+"</td><td>"+Commercialization+"</td><td>"+CollaborationWith+"</td><td>"+auth_name+"</td></tr>";
                            // alert(mask);
                            $("#sample").append(mask);
                        }
                    }
                });
            });
            $.ajax({
                url: 'edited.php',
                type: 'post',
                data: {publication:pub},
                dataType: 'json',
                success:function(response)
                {
                    console.log("hiii");
                    var len = response.length;
                    $("#sample").empty();//without append the data
                    $("#sample").html("<thead ><tr><th scope='col' class='table-active'>Application no</th><th scope='col' class='table-primary'>Date of Filing</th><th scope='col' <th scope='col' class='table-secondary'>PatentAwarded</th><th scope='col' class='table-success'>Status</th><th scope='col' class='table-success'>Invention Title</th><th scope='col' class='table-success'>Commercialization</th><th scope='col' class='table-success'>Collaboration With</th><th scope='col' class='table-success'>Authors</th></tr></thead>");

                    for( var i = 0; i<len; i++)
                    {
                        var Application_no = response[i]['Application_no'];
                        var DateofFiling = response[i]['DateofFiling'];
                        var PatentAwarded = response[i]['PatentAwarded'];
                        var Status = response[i]['Status'];
                        var InventionTitle = response[i]['InventionTitle'];
                        var Commercialization = response[i]['Commercialization'];
                        var CollaborationWith = response[i]['CollaborationWith'];
                        var auth_name = response[i]['auth_name'];
                        var mask="<tr><td>"+Application_no+"</td><td>"+DateofFiling+"</td><td>"+PatentAwarded+"</td><td>"+Status+"</td><td>"+InventionTitle+"</td><td>"+Commercialization+"</td><td>"+CollaborationWith+"</td><td>"+auth_name+"</td></tr>";
                        // alert(mask);
                        $("#sample").append(mask);
                    }
                }
            });
        }
    });

});

</script>
<select id="sel_pub">
      <option value="">--SELECT--</option>
      <option value="journal">journal</option>
      <option value="conference">Conference</option>
      <option value="book">Book</option>
      <option value="book_ch">Book Chapter</option>
      <option value="refer">Referred BY</option>
      <option value="patent">Patent</option>
      </select>
	  <select  id="dept">
         <option value="">--SELECT DEPARTMENT--</option>
		 <?php
             include "config.php";
             $sql = "Select * from department";
             $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
             while( $rows = mysqli_fetch_assoc($resultset) ) {
        ?>
         <option value="<?php echo $rows["Code"]; ?>"><?php echo $rows["Description"]; ?></option>
         <?php } ?>

	  </select>
    <table id="sample" border="1"></table>
    </body>
</html>