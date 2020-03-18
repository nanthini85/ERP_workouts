<?php
include "config.php";
$pub_type = $_POST['publication']; 
//echo $pub_type;
if(isset($_POST['depart'])){
    $departid = $_POST['depart']; 
}else{
    $departid="null";
}
if($pub_type=="book_ch")
{
    // department id
    if($departid=="null"){
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')FROM books,author_details,book_chapter where books.published_type='chapter' and books.b_id=book_chapter.b_id and author_details.aid=book_chapter.b_id GROUP BY author_details.aid";
    }else{
        // department id
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,book_chapter,faculty,author_details WHERE books.published_type='chapter' and books.b_id=book_chapter.b_id and book_chapter.b_id =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$departid' GROUP BY author_details.aid";
    }
    $result = mysqli_query($con,$sql);
    $users_arr = array();
    while( $row = mysqli_fetch_array($result) )
    {
        $book_title = $row['book_title'];
        $pub_name = $row['pub_name'];
        $ch_number = $row['ch_number'];
        $ch_title = $row['ch_title'];
        $b_edition = $row['b_edition'];
        $b_year = $row['b_year'];
        $auth_name = $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"];
        $users_arr[] = array("book_title" => $book_title, "pub_name" => $pub_name, "ch_number" => $ch_number, "ch_title" => $ch_title, "b_edition" => $b_edition, "b_year" => $b_year, "auth_name" => $auth_name);
    }
}
elseif($pub_type=="book")
{
    // department id
    if($departid=="null"){
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,author_details WHERE books.published_type='book' and books.b_id =author_details.aid GROUP BY author_details.aid";
    }else{
    // department id
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,faculty,author_details WHERE books.published_type='book' and books.b_id =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$departid' GROUP BY author_details.aid";
    }
    $result = mysqli_query($con,$sql);
    $users_arr = array();
    while( $row = mysqli_fetch_array($result) ){
        $book_title = $row['book_title'];
        $pub_name = $row['pub_name'];
        $b_edition = $row['b_edition'];
        $b_year = $row['b_year'];
        $auth_name = $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"];
        $users_arr[] = array("book_title" => $book_title, "pub_name" => $pub_name,  "b_edition" => $b_edition, "b_year" => $b_year, "auth_name" => $auth_name);
    }
}
elseif($pub_type=="refer")
{   
    if($departid=="null"){
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,author_details,book_referredby WHERE book_referredby.b_id=books.b_id and book_referredby.b_id=author_details.aid GROUP BY book_referredby.ref_id";
    }else{
        // department id
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM books,book_referredby,faculty,author_details WHERE books.b_id=book_referredby.b_id AND book_referredby.b_id =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$departid' GROUP BY book_referredby.ref_id";
    }
    $result = mysqli_query($con,$sql);
    $users_arr = array();
    while( $row = mysqli_fetch_array($result) )
    {
        $book_referred = $row['book_referred'];
        $ref_from = $row['ref_from'];
        $ref_to = $row['ref_to'];
        $referred_by= $row['referred_by'];
        $b_year = $row['b_year'];
        $auth_name = $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"];
        $users_arr[] = array("book_referred" => $book_referred, "ref_from" => $ref_from, "ref_to" => $ref_to, "referred_by" => $referred_by, "b_year" => $b_year, "auth_name" => $auth_name);
    }
}
elseif($pub_type=="journal")
{
    if($departid=="null"){
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM pub_journal,journal,author_details WHERE pub_journal.journal_id=journal.journal_id AND pub_journal.aid =author_details.aid GROUP BY author_details.aid";
    }else{
    // department id
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM pub_journal,faculty,journal,author_details WHERE pub_journal.journal_id=journal.journal_id AND pub_journal.aid =author_details.aid AND author_details.auth_id=faculty.eid AND faculty.dept='$departid' GROUP BY author_details.aid";
    }
    $result = mysqli_query($con,$sql);
    $users_arr = array();
    while( $row = mysqli_fetch_array($result) ){
        $aid=$row['aid'];
        $article_title = $row['article_title'];
        $journal_name = $row['journal_name'];
        $article_type=$row['Article_type'];
        $volume_no = $row['volume_no'];
        $issue_no = $row['issue_no'];
        $pgno_from = $row['pgno_from'];
        $pgno_to = $row['pgno_to'];
        $issue_month = $row['issue_month'];
        $issue_year = $row['issue_year'];
        $auth_name = $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"];
        $users_arr[] = array("aid"=>$aid, "article_title" => $article_title, "journal_name" => $journal_name,"article_type"=>$article_type, "volume_no" => $volume_no, "issue_no" => $issue_no, "pgno_from" => $pgno_from, "pgno_to" => $pgno_to,"issue_month" => $issue_month,"issue_year" => $issue_year, "auth_name" => $auth_name);
    }
}
elseif($pub_type=="conference")
{
    if($departid=="null"){
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM conference, author_details WHERE conference.aid =author_details.aid GROUP BY author_details.aid";
    }else{
        // department id
        $sql = "SELECT * ,GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',') FROM conference, faculty,author_details WHERE faculty.eid=author_details.auth_id AND conference.aid =author_details.aid AND faculty.dept='$departid' GROUP BY author_details.aid";
    }
    $result = mysqli_query($con,$sql);
    $users_arr = array();
    while( $row = mysqli_fetch_array($result) ){
        $aid=$row['aid'];
        $article_title = $row['article_title'];
        $conference_Name = $row['Conference_Name'];
        $article_type=$row['Article_Type'];
        $volume_no = $row['volume_no'];
        $pgno_from = $row['pgno_from'];
        $pgno_to = $row['pgno_to'];
        $issue_month = $row['issue_month'];
        $issue_year = $row['issue_year'];
        $auth_name = $row["GROUP_CONCAT(author_details.auth_name ORDER BY author_details.auth_sno ASC SEPARATOR ',')"];
        $users_arr[] = array("aid"=>$aid,"article_title" => $article_title, "conference_name" => $conference_Name,"article_type"=>$article_type, "volume_no" => $volume_no,  "pgno_from" => $pgno_from, "pgno_to" => $pgno_to,"issue_month" => $issue_month,"issue_year" => $issue_year, "auth_name" => $auth_name);
    }
}
elseif($pub_type=="patent")
{
    if($departid=="null"){
        $sql = "SELECT * ,GROUP_CONCAT(patentnee_detail.patentnee_name ORDER BY patentnee_detail.Application_no ASC SEPARATOR ',') FROM patent,patentnee_detail WHERE patent.Application_no=patentnee_detail.Application_no GROUP BY patentnee_detail.Application_no";
    }else{
    // department id
        $sql = "SELECT * ,GROUP_CONCAT(patentnee_detail.patentnee_name ORDER BY patentnee_detail.Application_no ASC SEPARATOR ',') FROM patent,patentnee_detail,faculty,student WHERE patent.Application_no=patentnee_detail.Application_no and faculty.dept='$departid' and faculty.eid=patentnee_detail.patentnee_id GROUP BY patent.Application_no";
    }
    $result = mysqli_query($con,$sql);
    $users_arr = array();
    while( $row = mysqli_fetch_array($result) ){
        $Application_no = $row['Application_no'];
        $DateofFiling = $row['DateofFiling'];
        $PatentAwarded = $row['PatentAwarded'];
        $Status = $row['Status'];
        $InventionTitle = $row['InventionTitle'];
        $Commercialization = $row['Commercialization'];
        $CollaborationWith = $row['CollaborationWith'];
        $auth_name = $row["GROUP_CONCAT(patentnee_detail.patentnee_name ORDER BY patentnee_detail.Application_no ASC SEPARATOR ',')"];
        $users_arr[] = array("Application_no" => $Application_no, "DateofFiling" => $DateofFiling, "PatentAwarded" => $PatentAwarded, "Status" => $Status, "InventionTitle" => $InventionTitle, "Commercialization" => $Commercialization,"CollaborationWith" => $CollaborationWith, "auth_name" => $auth_name);
    }
}


// encoding array to json format
echo json_encode($users_arr);
?>