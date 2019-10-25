<?php

include("includes/header.php");
include("includes/nav.php");
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div
        class="d-flex  justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning" >
                <thead>
                    <tr>
                    <th>client code</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Location</th>
                        <th >Paid</th>
                        <th>Rate</th>
                        <th>Balance</th>
                        <th>Speed</th>
                        <th>Month</th>
                    </tr>
                </thead>
                <tbody  id="client_table">
                    <tr>
                    <td>1111</td>
                        <td>Abdifatah Mohamed</td>
                        <td>0708693534</td>
                        <td>Nyuma wa Mosque</td>
                        <td><span class="badge badge-pill badge-success">Fully Paid</span></td>
                        <td>1,000</td>
                        <td>0</td>
                        <td>1Mbp/s</td>
                        <td>November</td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include("includes/footer.php");?>
<script src="assets/js/request.js"></script>