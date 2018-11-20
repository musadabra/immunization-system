<?php
include_once 'includes/header.php';
include_once 'includes/footer.php';

/*
 */
display_header();

if (isset($_GET['c_no'])){
   
    //TO GET CONNNECTION TO DB
    include_once 'includes/fetch.php';
    
    $search = mysqli_real_escape_string($connect, $_GET["c_no"]);
 
    $query = 'SELECT * FROM (child c join taking_care_of t on c.c_no = t.c_no) JOIN care_giver cg ON cg.cg_no = t.cg_no WHERE c.c_no = "'.$search.'"';
    $queryvaccines = 'SELECT * FROM child c join vaccine_given_child vg on c.c_no = vg.c_no where c.c_no = '.$_GET['c_no'].'';
    $allvaccines = 'SELECT vaccine_name FROM vaccine ORDER BY vaccine_age';
    
    $result = mysqli_query($connect, $query);
    $vaccinesgiven =  mysqli_query($connect, $queryvaccines);
    
    $allvaccinesresult = mysqli_query($connect, $allvaccines);
    
    
    
     if(mysqli_num_rows($result) > 0 )
     {
         while ($row = mysqli_fetch_array($result)){
             $childname = $row['c_name'];
             $c_dob = $row['c_dob'];
             $c_sex = $row['c_sex'];
             $c_p_family = $row['c_p_family'];
             $c_house_no = $row['c_village'];
             $c_village = $row{'c_village'};
             $c_lga = $row['c_lga'];
             $c_state = $row['c_state'];
             $c_ward = $row['c_word'];
             $mothersname = $row['mother_name'];
             $mothersgsm = $row['mother_gsm'];
             $fathersname = $row['father_name'];
             $fathersgsm = $row['father_gsm'];
             $caregiver = $row['care_giver_name'];
             $caregiver_gsm = $row['care_giver_gsm'];
                 
         }
     }

?>

<!-- Page Content -->
   
    <div class="row">
      <div class="container">
        <div class="col-lg-12">
          <h1 class="page-header">VIEW CHILD RECORD</h1>
        </div>
      </div> 
    </div>

     <div class="row">
      <div class="container">
        <div class="col-lg-12">
          <div class="col-lg-8 main">
            <div class="col-lg-11  main-content"  style="margin-bottom: 400px;">
               <!-- Registration from -->

                <form class="form-group form" action="" method="post">
                <h3>INFORMATION ABOUT CHILD</h3>

                <div class="form-fields-group">
                  <p>
                    <label for="Cname">CHILD'S NAME</label>
                    <input type="text" id="Cname" class="input-field" value="<?php echo $childname;?>">
                  </p>
                  <p>
                    <label for="position">POSITION IN FAMILI</label>
                    <input type="text" id="position" class="input-field" value="<?php echo $c_p_family;?>">
                  </p>
                  <p>
                    <label for="dob">DATE OF BIRTH(Day/Month/Year)</label>
                    <input type="text" id="dob" class="input-field" value="<?php echo $c_dob;?>">
                  </p>
                  <p>
                    <label for="weight">WEIGHT AT BIRTH(in KG)</label>
                    <input type="text" id="weight" class="input-field" value="<?php ?>">
                  </p>
                 
                </div>
                <h3>CHILD RESIDENTIAL ADDRESS</h3>
                <div class="form-fields-group">
                  <p>
                     <label for="houseno">HOUSE NUMBER</label>
                    <input type="text" id="houseno" class="input-field" value="<?php echo $c_house_no;?>">
                  </p>
                  <p>
                    <label for="village">VILLAGE/SETTLEMENT</label>
                    <input type="text" id="village" class="input-field" value="<?php echo $c_village;?>">
                  </p>
                  <p>
                    <label for="town">TOWN/CITY</label>
                    <input type="text" id="town" class="input-field" value="<?php echo $c_village;?>">
                 
                    <label for="state">STATE</label>
                    <input type="text" id="state" class="input-field" value="<?php echo $c_state;?>">

                    </p>
                    <p>
                      <label for="lga">LGA</label>
                      <input type="text" id="lga" class="input-field" value="<?php echo $c_lga;?>">


                      <label for="word">WORD</label>
                      <input type="text" id="word" class="input-field" value="<?php echo $c_ward;?>">

                    </p>
                 
              
                </div>
                
                <h3>INFORMATION ABOUT CARE-GIVERS</h3>

                <div class="form-fields-group">
                  <p>
                    <label for="mothersname">MORTHER'S NAME</label>
                    <input type="text" id="mothersname" class="input-field" value="<?php echo $mothersname;?>">
                  </p>
                  <p>
                    <label for="mothersgsm">MOTHER'S GSM NO</label>
                    <input type="text" id="mothersgsm" class="input-field" value="<?php echo $mothersgsm;?>">
                  </p>
                  <p>
                    <label for="fathersname">FATHER'S NAME</label>
                    <input type="text" id="fathersname" class="input-field" value="<?php echo $fathersname;?>">
                  </p>
                  <p>
                    <label for="fathersgsm">FATHER'S GSM NO</label>
                    <input type="text" id="fathersgsm" class="input-field" value="<?php echo $fathersgsm;?>">
                  </p>
                   <p>
                    <label for="caregiver">CARE-GIVER NAME</label>
                    <input type="text" id="caregiver" class="input-field" value="<?php echo $caregiver;?>">
                  </p>
                   <p>
                    <label for="caregivergsm">CARE-GIVER GSM</label>
                    <input type="text" id="caregivergsm" class="input-field" value="<?php echo $caregiver_gsm;?>">
                  </p>
                 
                </div>

                

            </form>
            </div>
          </div>

          <!-- sidebar -->
          <div class="col-lg-4 sidebar sidebar bar-chart-sidebar">
               <div class="sidebar-main-content">
                  <h3>VACCINE</h3>
                  <P>
                      PREVIOUS VACCINE GIVEN TO: <?php echo $childname;?>
                  </P>
                  <P>
                    <ul>
                        <?php 
                            $list = '';
                            while($row = mysqli_fetch_array($vaccinesgiven)){
                                $list .= '<li>'.$row['vaccine_name'].'</li>';
                            } 
                            echo $list;
                        ?>
                    </ul>
                  </P>
                  <P>
                     <?php // include_once 'includes/calculations.php';?>
                      NEXT VACCINE:<?php 
                      if(mysqli_num_rows($vaccinesgiven) > 0){
                          
                            $given[] = array();
                            //LOGICAL ERROR HERE ON LINE 26 BECOUSE $COUNTGIVEN IS ASSING TO ZERO
                            //DUE TO INITIALIZATION
                            //
                            $countgiven = 0;       
                            while( $row = mysqli_fetch_array($vaccinesgiven)){ 
                                $given[$countgiven] = $row['vaccine_name'];
                                $countgiven;
                            } 
                            //return count($given);
                            $all[] = array();
                            $countall = 0;
                            while($row = mysqli_fetch_array($allvaccinesresult)){
                                $all[$countall] = $row['vaccine_name'];
                                $countall++;
                            }

                            for ($index = 0; $index < count($all); $index++) {
                                if ($all[$index] == $given[$countgiven]){
                                    echo $all[$index + 1];
                                }
                            }

                        }else{
                            $countgiven = 0;
                            while ($row = mysqli_fetch_array($vaccinesgiven) && $countgiven = 0){
                                echo $row['vaccine_name'];
                                $countgiven++;
                            }
                        }
                       
                       ?>
                  </P>
                  <p>
                      <input class="submit-button" value="Give Vaccine" type="submit"  class="pb-modalreglog-submit" data-toggle="modal" data-target="#givevaccine">
                  </p>

               </div>
          </div>  
            
        </div>
      </div> 
    </div>
    <!-- Modal -->
    <!-- Incomplete form input -->
    
     <div class="modal fade" id="givevaccine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Form Input Error</h4>
                        </div>
                        <div class="modal-body">
                            
                            <div id="incompleteformlist">
                                <!-- display the incomplete form inputs -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
     </div>
<?php
}else {
     //header("location:view-child-record.php");
      echo '<script> location.href="child-record.php" </script>';
            
}

display_footer();
?>