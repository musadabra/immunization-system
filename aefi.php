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
          <h1 class="page-header">Event After Immunization</h1>
        </div>
      </div> 
    </div>

     <div class="row">
      <div class="container">
        <div class="col-lg-12">
          <div class="col-lg-8 main">
            <div class="col-lg-11  main-content"  style="margin-bottom: 400px;">
               <!-- Registration from -->

               <form class="form-group form" action="aefi.php" method="post">
                    <h3>COMPLAIN</h3>
                    <textarea></textarea>
                    <input type="text" name="">
                    
                    <div class="form-fields-group">

                        
                            <div class="input-group">
                                <input id="search_text" type="text" class="form-control" placeholder="Search" name="query">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" style="background: green;"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        
                        <div id="searchresult">
                            <!--Search Result displays here -->
                            
                        </div>
                   
                    </div>
                </form>
            </div>
          </div>

        </div>
      </div> 
    </div>
    
display_footer();
?>