<?php

require_once '../include/votingdash.php';

if(isset($_SESSION['vid'])){

 $id=$_SESSION['vid'];

}

?>


  

      <div class="mt-3">

        <div id="comments">

        </div>
        <section class="vh-100" id="reg">

          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                  <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                      <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <h2 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admission of candidates</h2>

                        <form class="mx-1 mx-md-4" method="post" action="confirm.php">

                          <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                              <label class="form-label" for="id4">Candidate's Registration Number</label>
                              <input type="text" name="id" id='user' class="form-control" />
                            </div>
                          </div>


                          <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-primary btn-lg">continue</button>
                          </div>

                        </form>

                      </div>
                      <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="registration.jpg" class="img-fluid" alt="Sample image">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--display here-->
        <!-- </div>
      
        <!-- Sidebar End -->

    <?php
require_once '../include/footer.php';
    ?>