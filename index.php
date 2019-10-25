<?php

include("includes/header.php");
include("includes/nav.php");
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>





    <section class="details d-flex flex-row ml-5 my-5 justify-content-between ">

        <article class="details-card details__linear-red px-3 py-3 d-flex flex-row">

            <span class="details-icon pr-2"><img src="assets/icons/boss.png" alt="triangle with equal sides"
                    srcset="assets/icons/boss.png" width="72" height="72"></span>
            <div class="d-flex flex-column ">
                <h2 class="details-number cr-white">5</h2>
                <p class="details-sub cr-white">total customers</p>
            </div>
        </article>


        <article class="details-card details__linear-blue px-3 py-3 d-flex flex-row">

            <span class="details-icon pr-2"><img src="assets/icons/boss.png" alt="triangle with equal sides"
                    srcset="assets/icons/boss.png" width="72" height="72"></span>
            <div class="d-flex flex-column ">
                <h2 class="details-number cr-white">5</h2>
                <p class="details-sub cr-white">deactive customers</p>
            </div>
        </article>




        <article class="details-card details__linear-purple px-3 py-3 d-flex flex-row">

            <span class="details-icon pr-2"><img src="assets/icons/boss.png" alt="triangle with equal sides"
                    srcset="assets/icons/boss.png" width="72" height="72"></span>
            <div class="d-flex flex-column ">
                <h2 class="details-number cr-white">5</h2>
                <p class="details-sub cr-white">New customers</p>
            </div>
        </article>














    </section>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


    <canvas id="myChart2"></canvas>

    <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                </tr>
            </thead>

        </table>
    </div>
</main>
</div>
</div>
<?php include("includes/footer.php");?>
