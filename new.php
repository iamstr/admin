<?php

include("includes/header.php");
include("includes/nav.php");
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex  justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

<div class="row">

        <form method="post"  class="ml-5 pl-5" id="new_customer">



        <div class="toast" data-autohide="false">
    <div class="toast-header">
      <strong class="mr-auto text-primary">Toast Header</strong>
      <small class="text-muted">5 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" id="toast-body">
      Some text inside the toast body
    </div>
  </div>


            <div class="form-row mb-3 ml-5 pl-5">

                <div class="form-group col-12 col-sm-12 col-md-6">
                   <label for="name">Names</label>
                    <input type="text" class="form-control" id="name" name="name" required="">
                </div>


                <div class="form-group col-12 col-sm-12 col-md-6">
                   <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" name="location" required="">
                </div>
            </div>
            <div class="form-row mb-3 ml-5 pl-5">

                <div class="form-group col-12 col-sm-12 col-md-6">
                   <label for="rate">Agreed Rate</label>
                    <input type="text" class="form-control" id="rate" name="rate" required="">
                </div>


                <div class="form-group col-12 col-sm-12 col-md-6 ">
                   <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required="">
                </div>
            </div>



            <div class="form-row mb-3 ml-5 pl-5">

<div class="form-group col-12 col-sm-12 col-md-6">
   <label for="speed">Speed Mb/ps</label>
    <input type="text" class="form-control" id="speed" name="speed" required="">
</div>


</div>






             <div class="register-box d-flex justify-content-end mt-half ml-5 pl-5">
                <input type="submit" class="btn bg-black tiny-btn btn-block" name="register" id="add_shipping2" value="Add Customer">
            </div>

        </form>

    </div>
</div>
</main>
    <?php include("includes/footer.php");?>
<script src="assets/js/request.js"></script>
    <script>
    $(document).ready(function(){
  $('.toast').toast('hide');
});

    </script>