<?php
$connect = mysqli_connect("localhost", "root", "", "immunization_system");
$output = '<div class="list-group">';

//SEARCH
if(isset($_POST["message"])){
 $search = mysqli_real_escape_string($connect, $_POST["message"]);
 //SELECT * FROM (child c join taking_care_of t on c.c_no = t.c_no) join care_giver cg on cg.cg_no = t.cg_no
 //SELECT * FROM (child c join taking_care_of t on c.c_no = t.c_no) join care_giver cg on cg.cg_no = t.cg_no 
 
   $query = "SELECT * FROM (child c join taking_care_of t on c.c_no = t.c_no) JOIN care_giver cg ON cg.cg_no = t.cg_no WHERE c.c_name LIKE '%".$search."%' OR c.c_no LIKE '%".$search."%' OR cg.mother_gsm LIKE '%".$search."%'";

   $result = mysqli_query($connect, $query);
   
    if(mysqli_num_rows($result) > 0 )
    {
     $output .=' <button type="button" class="list-group-item list-group-item-action active" style="background:green;">
                 '.  count(mysqli_num_rows($result)).' Result Found
         </button>';
     while($row = mysqli_fetch_array($result))
     {
        $childno = $row['c_no'];
        $childname = $row['c_name'];
        $mothername = $row['mother_name']; 
        $phonenumber = $row['mother_gsm'];

        $output .= '<a href="view-child-record.php?c_no='.$childno.'"><button type="button" class="list-group-item list-group-item-action">NO: '.$childno.', '.$childname.', '.$phonenumber.'</button></a>' ;

     }

     echo $output.'</div>';
    }
    else
    {
     echo '<div class="list-group">
         <button type="button" class="list-group-item list-group-item-action active" style="background:green;">
                 No Result Found.
         </button>
      </div>';
    }
}
?>
