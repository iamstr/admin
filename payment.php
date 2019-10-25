<?php

include("includes/header.php");
include("includes/nav.php");
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div
        class="d-flex  justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <div class="row">



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
            <form method="post" action="resources/handle_user.php" class="ml-5 pl-5" id="payment">







                <div class="form-row mb-3 ml-5 pl-5">

                    <div class="form-group  col-md-6">

                        <select class="form-control select2" name="client_id" id="client_id">


                        </select>
                    </div>
                </div>
                <div class="form-row mb-3 ml-5 pl-5">
                    <div class="form-group  col-md-6">
                        <label for="location">Amount Paid</label>
                        <input type="text" class="form-control" id="amount" name="amount" required="">
                    </div>
                </div>










                <div class="register-box d-flex justify-content-end mt-half ml-5 pl-5">
                    <input type="submit" class="btn bg-black tiny-btn btn-block" name="register" id="add_shipping2"
                        value="Add Customer">
                </div>

            </form>

        </div>
    </div>
</main>
<?php include("includes/footer.php");?>
<script>
    $('.select2').select2();
    $('.toast').toast('hide');
</script>
<script src="assets/js/request.js"></script>