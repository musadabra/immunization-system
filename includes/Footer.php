<?php

/* 
 * FOOTER
 * Contain footer and some js links
 */
function display_footer(){
?>


    <div class="container">
    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="container">
                <div class="col-lg-12">
                  <div class="footer col-lg-12">
                    <p>Design and Implimentation Of Immunization System</p>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </footer>

    </div>
    <!-- /.container -->

    
    <!-- Modal -->
    <!-- forgot password -->
      <div class="modal fade" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Forgot Password form</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter Your Email Address To Get A New Password.</p>
                            <form class="pb-modalreglog-form-reg">
                                
                                <div class="form-group">
                                    <div id="pb-modalreglog-progressbar"></div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="input-group forgotpassword-form">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                            
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
        </div>
    
    

    <!-- jQuery -->
  
    
</body>

</html>


<?php
}
?>