
<?php
while ($nft_data = $nft_result->fetch_assoc()) {
?>
<div class="col-xl-4 col-lg-5 col-md-5 order-1 order-sm-0 order-md-0">
    <div class="card mb-4 border-2 border-primary">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-start">
                <span class="badge bg-label-primary rounded-pill">Standard</span>
                <div class="d-flex justify-content-center">
                    <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                    <h1 class="mb-0 text-primary">99</h1>
                    <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                </div>
            </div>
            <ul class="list-unstyled g-2 my-4">
                <li class="mb-2 d-flex align-items-center">
                    <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>10 Users</span>
                </li>
                <li class="mb-2 d-flex align-items-center">
                    <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Up to 10 GB storage</span>
                </li>
                <li class="mb-2 d-flex align-items-center">
                    <i class="mdi mdi-circle-medium text-lighter mdi-24px"></i><span>Basic Support</span>
                </li>
            </ul>
            <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="h6 mb-0">Days</span>
                <span class="h6 mb-0">65% Completed</span>
            </div>
            <div class="progress mb-1 rounded" style="height: 6px">
                <div
                    class="progress-bar rounded"
                    role="progressbar"
                    style="width: 65%"
                    aria-valuenow="65"
                    aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <span>4 days remaining</span>
            <div class="d-grid w-100 mt-4">
                <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                    Upgrade Plan
                </button>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
