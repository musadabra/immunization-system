<?php
include_once 'includes/header.php';
include_once 'includes/footer.php';
include_once 'includes/forms.php';
/* 
 * HOME PAGE WHEN A USER HAS LOGGED IN
 */

display_header();

$userid = $_SESSION['user_no'];
$query1 = 'SELECT * FROM (health_worker hw join health_worker_work_at hwa on hw.hw_no = hwa.hw_no) join health_facility hf on hf.no = hwa.no where hw.hw_no = '.$userid.'';
$lastloginquery = 'SELECT last_login from login_details where user_no = '.$userid.'';
$selectchildren = 'select c_no from give_immunization_by where hw_no = '.$userid.' and immunization_date < "'.date('Y-m-d', time()).'"';

include_once 'includes/connection.php';
$userdetails = $db->query($query1)->fetch();
$logindetails = $db->query($lastloginquery)->fetch();
$childrennumber = $db->query($selectchildren)->fetch();

//$lastlogin = date('Y-m-d', $logindetails['last_login']);

$hfchildrennumber = 'select c_name from (child c join immunize_at i on c.c_no = i.c_no) join health_facility h on i.no = h.no where h.health_facility_name = "'.$userdetails['health_facility_name'].'"';


?>
<!-- Page Content -->
     <!-- banner -->
    <div class="row banner-row">
        <div class="col-lg-12">
            <div class"banner" style="height:700px;margin-top: -34px;
    z-index: -1;background:url('assets/images/background-image.jpg');">
              <div class="container">
                <div class="col-lg-5 banner-texts">
                    <h2 class="banner-text">SOFTWARE-DEPENDENT</h1>
                    <h1 class="banner-text">IMMUNIZATION SYSTEM</h1>
                </div>

              </div>
              <div class="container">
                    <div class="info info1 col-lg-4">
                        <h3>HEALTH WORKER INFO.</h3>
                        <h6><?php echo $userdetails['hw_fname'].' '.$userdetails['hw_lname'] ?></h6>
                        <h6>Last login <?php echo $logindetails['last_login']; ?></h6>
                        <h6>You have immunize <?php echo count($childrennumber);?> children this month</h6>
                    </div>
                    <div class="info info2 col-lg-4" style="background-image: url('images/info-bg2.jpg');">
                        <h3>HEALTH FACILITY INFO.</h3>
                        <h6><?php echo $userdetails['health_facility_name'];?></h6>
                        <h6><?php echo $userdetails['health_facilit_word'].', '.$userdetails['health_facilit_lga'].', '.$userdetails['health_facilit_state'] ;?>.</h6>
                    </div>
                    <div class="info info3 col-lg-4" style="background-image: url('images/info-bg3.jpg');background-color: rgba(153,204,153,.9);">
                        <h3>IMMUNIZATION INFO.</h3>
                        <h6>Total Registered Children (<?php echo count($hfchildrennumber);?>)</h6>
                        <h6>Successful immunization (18,00)</h6>
                    </div>
              </div>       
            </div>
        </div>
    </div>

<?php
display_footer();
?>