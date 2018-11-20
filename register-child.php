<?php
include_once 'includes/header.php';
include_once 'includes/footer.php';
/*
 */
display_header();
?>

<!-- Page Content -->
   
    <div class="row">
      <div class="container">
        <div class="col-lg-12">
          <h1 class="page-header">REGISTER CHILD</h1>
        </div>
      </div> 
    </div>

     <div class="row">
      <div class="container">
        <div class="col-lg-12">
          <div class="col-lg-8 main">
            <div class="col-lg-11  main-content">
               <!-- Registration from -->

               <form class="form-group form" action="register-child.php" method="post">
                <h3>INFORMATION ABOUT CHILD</h3>

                <div class="form-fields-group">
                  <p>
                    <label for="Cname">CHILD'S NAME</label>
                    <input type="text" id="Cname" class="input-field" name="cname">
                  </p>
                  <p>
                    <label for="position">POSITION IN FAMILI</label>
                    <input type="text" id="position" class="input-field" name="pinfamily">
                  </p>
                  <p>
                    <label for="dob">DATE OF BIRTH(Day/Month/Year)</label>
                    <input type="text" id="dob" class="input-field" name="dob">
                  </p>
                  <p>
                    <label for="weight">WEIGHT AT BIRTH(in KG)</label>
                    <input type="text" id="weight" class="input-field" name="weight">
                  </p>
                 
                </div>
                <h3>CHILD RESIDENTIAL ADDRESS</h3>
                <div class="form-fields-group">
                  <p>
                     <label for="houseno">HOUSE NUMBER</label>
                     <input type="text" id="houseno" class="input-field" name="houseno">
                  </p>
                  <p>
                    <label for="village">VILLAGE/SETTLEMENT</label>
                    <input type="text" id="village" class="input-field" name="village">
                  </p>
                  <p>
                    <label for="town">TOWN/CITY</label>
                    <input type="text" id="town" class="input-field" name="town">
                 
                    <label for="state">STATE</label>
                    <select id="state" name="state">
                      <option selected>JIGAWA</option>
                      <option value="kano">KANO</option>
                      <option value="bauchi">BAUCHI</option>
                      <option value="yobe">YOBE</option>
                    </select>
                    </p>
                    <p>
                      <label for="lga">LGA</label>
                      <select id="lga" name="lga">
                          <option value="hadeja" selected>HADEJA</option>
                        <option value="ringim">RINGIM</option>
                        <option value="dutse">DUTSE</option>
                        <option value="kyawa">KYAWA</option>
                      </select>

                      <label for="word">WORD</label>
                      <input type="text" id="word" class="input-field" name="word">
                    </p>
                 
              
                </div>
                
                <h3>INFORMATION ABOUT CARE-GIVERS</h3>

                <div class="form-fields-group">
                  <p>
                    <label for="mothersname">MORTHER'S NAME</label>
                    <input type="text" id="mothersname" class="input-field" name="mother">
                  </p>
                  <p>
                    <label for="mothersgsm">MOTHER'S GSM NO</label>
                    <input type="text" id="mothersgsm" class="input-field" name="mothersgsm">
                  </p>
                  <p>
                    <label for="fathersname">FATHER'S NAME</label>
                    <input type="text" id="fathersname" class="input-field" name="fathersname">
                  </p>
                  <p>
                    <label for="fathersgsm">FATHER'S GSM NO</label>
                    <input type="text" id="fathersgsm" class="input-field" name="fathersgsm">
                  </p>
                   <p>
                    <label for="caregiver">CARE-GIVER NAME</label>
                    <input type="text" id="caregiver" class="input-field" name="caregiver">
                  </p>
                   <p>
                    <label for="caregivergsm">CARE-GIVER GSM</label>
                    <input type="text" id="caregivergsm" class="input-field" name="caregivergsm">
                  </p>
                 
                </div>

                <h3>INFORMATION ABOUT CARE-GIVERS</h3>

                <div class="form-fields-group">
                  <table>
                  <thead>
                    <th>YEAR OF BIRTH</th>
                    <th>SEX</th>
                    <th>STATE OF HEALTH</th>
                  </thead>
                  <tr>
                    <td>
                      <input type="text" name="yeartr1">
                    </td>
                    <td>
                      <input type="text" name="sextr1">
                    </td>
                    <td>
                      <input type="text" name="statetr1">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="yeartr2">
                    </td>
                    <td>
                      <input type="text" name="sextr2">
                    </td>
                    <td>
                      <input type="text" name="statetr2">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="yeartr3">
                    </td>
                    <td>
                      <input type="text" name="sextr3">
                    </td>
                    <td>
                      <input type="text" name="statetr3">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="yeartr4">
                    </td>
                    <td>
                      <input type="text" name="sextr4">
                    </td>
                    <td>
                      <input type="text" name="statetr4">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" name="yeartr5">
                    </td>
                    <td>
                      <input type="text" name="sextr5">
                    </td>
                    <td>
                      <input type="text" name="statetr5">
                    </td>
                  </tr>
                </table>
                
                <p>
                    <input type="submit" class="submit-button" value="Register">
                  </p>
                </div>
                

            </form>
            </div>
          </div>

        </div>
      </div> 
    </div>
    <!-- Modal -->
    <!-- Incomplete form input -->
    
     <div class="modal fade" id="incompleteforminput" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

    if (isset($_POST["cname"]) && !empty($_POST["cname"])) {
        
        $regerro = array();
        $index = 0;
       
        // process the form contents...
        if (empty($_POST["cname"])) {
            $regerro[$index] = 'Child Name';
            $index++;
        }  else {
            $cname = $_POST["cname"];
        }
        
        if (empty($_POST["pinfamily"])) {
            $regerro[$index] = 'Position In Family';
            $index++;
        }  else {
            $pinfamily = $_POST["pinfamily"];
        }
        
        if (empty($_POST["dob"])) {
            $regerro[$index] = 'Date Of Birth';
            $index++;
        }  else {
            $dob = $_POST["dob"];
        }
        
        if (empty($_POST["dob"])) {
            $regerro[$index] = 'Date Of Birth';
            $index++;
        }  else {
            $dob = $_POST["dob"];
        }
        
        if (empty($_POST["weight"])) {
            $regerro[$index] = 'Child Weight';
            $index++;
        }  else {
            $weight = $_POST["weight"];
        }
        
        if (empty($_POST["houseno"])) {
            $regerro[$index] = 'House NO';
            $index++;
        }  else {
            $houseno = $_POST["houseno"];
        }
        
        if (empty($_POST["village"])) {
            $regerro[$index] = 'Village';
            $index++;
        }  else {
            $village = $_POST["village"];
        }
        
        if (empty($_POST["town"])) {
            $regerro[$index] = 'Town';
            $index++;
        }  else {
            $town = $_POST["town"];
        }
        
        if (empty($_POST["state"])) {
            $regerro[$index] = 'State';
            $index++;
        }  else {
            $state = $_POST["state"];
        }
        
        if (empty($_POST["lga"])) {
            $regerro[$index] = 'LGA';
            $index++;
        }  else {
            $lga = $_POST["lga"];
        }
        
        if (empty($_POST["word"])) {
            $regerro[$index] = 'Word';
            $index++;
        }  else {
            $word = $_POST["word"];
        }
        
        if (empty($_POST["mother"])) {
            $regerro[$index] = 'Mother';
            $index++;
        }  else {
            $mother = $_POST["mother"];
        }
        
        if (empty($_POST["mothersgsm"])) {
            $regerro[$index] = "Mother's GSM";
            $index++;
        }  else {
            $mothersgsm = $_POST["mothersgsm"];
        }
        
        if (empty($_POST["fathersname"])) {
            $regerro[$index] = "Father's Name";
            $index++;
        }  else {
            $fathersname = $_POST["fathersname"];
        }
        
        if (empty($_POST["fathersgsm"])) {
            $regerro[$index] = "Father's GSM";
            $index++;
        }  else {
            $fathersgsm = $_POST["fathersgsm"];
        }
        
        if (empty($_POST["caregivergsm"])) {
            $regerro[$index] = "Care-Giver GSM";
            $index++;
        }  else {
            $caregivergsm = $_POST["caregivergsm"];
        }
        
        
        
            
        if(count($regerro) > 0){
            $incomplete = '<p>You Have Not Fill In The Following.</p><br><ul>';
            foreach ($regerro as $value) {
                $incomplete .= '<li>'.$value.'</li>';
            }
            $incomplete .= '</ul>';//,"'.$incomplete.'"
            echo '<script> modalDisplay("'.$incomplete.'"); </script>';
        }  else {
            
           include_once 'includes/connection.php';
           //CREATE AN SQL STATEMENT
           $sql = "INSERT INTO `child`(`c_name`, `c_dob`, `c_p_family`, `c_house_no`, `c_village`, `c_town`, `c_lga`, 'c_word', `c_state`) VALUES (?,?,?,?,?,?,?,?,?)";
           $stmt =  $db->prepare($sql)->execute([$cname,$dob,$pinfamily,$houseno,$village,$town,$lga,$word,$state]);
           
           
           if($stmt){
               $sql2 = "INSERT INTO `care_giver`(`mother_name`, `father_name`, `mother_gsm`, `father_gsm`, `care_giver_name`, `care_giver_gsm`) VALUES (?,?,?,?,?,?)";
               $stmt2 = $db->prepare($sql2)->execute([$mother,$fathersname,$mothersgsm,$fathersgsm,$caregiver,$caregivergsm]);                         
               if($stmt2) 
                   echo '<script> modalDisplay("Form has been submitted."); </script>';
           }else{
               echo '<script>  modalDisplay("An error occured, please try again or contact the web master");</script>'; 
           }
           
           
        }    
      
}       

display_footer();
?>