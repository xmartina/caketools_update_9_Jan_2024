<?php
    $get_user_info = "SELECT * FROM users WHERE user_acct_id = $user_acct_id";
    $result = $mysqli->query($get_user_info);
    $user_data = $result->fetch_assoc();
    if ($user_data['user_status'] == 1){
        $user_status = 'Active';
    }elseif ($user_data['user_status'] == 0){
        $user_status = 'Inactive';
    }
?>
<!-- User Sidebar -->
<div class="col-xl-4 col-lg-5 col-md-5 order-1 order-sm-0 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="user-avatar-section">
                <div class="d-flex align-items-center flex-column">
                    <img
                        class="img-fluid rounded mb-3 mt-4"
                        <?php if ($user_data['user_img'] == '')  { ?>
                        src="/assets/images/author/author-db.jpg" height="120" width="120" alt="User avatar" />
                    <?php } else { ?>
                        src="/assets/images/author/<?=$user_data['user_img']?>" height="120" width="120" alt="User avatar" />
                    <?php }?>
                    <div class="user-info text-center">
                        <h4>Violet Mendoza</h4>
                        <span class="badge bg-label-danger rounded-pill">Author</span>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between flex-wrap my-2 py-3">
                <div class="d-flex align-items-center me-4 mt-3 gap-3">
                    <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded">
                            <i class="mdi mdi-check mdi-24px"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-0">1.23k</h4>
                        <span>Tasks Done</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3 gap-3">
                    <div class="avatar">
                        <div class="avatar-initial bg-label-primary rounded">
                            <i class="mdi mdi-star-outline mdi-24px"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-0">568</h4>
                        <span>Projects Done</span>
                    </div>
                </div>
            </div>
            <h5 class="pb-3 border-bottom mb-3">Details</h5>
            <div class="info-container">
                <ul class="list-unstyled mb-4">
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Username:</span>
                        <span>violet.dev</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Email:</span>
                        <span>vafgot@vultukir.org</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Status:</span>
                        <span class="badge bg-label-success rounded-pill">Active</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Role:</span>
                        <span>Author</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Tax id:</span>
                        <span>Tax-8965</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Contact:</span>
                        <span>(123) 456-7890</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Languages:</span>
                        <span>French</span>
                    </li>
                    <li class="mb-3">
                        <span class="fw-medium text-heading me-2">Country:</span>
                        <span>England</span>
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
                    <a
                        href="javascript:;"
                        class="btn btn-primary me-3"
                        data-bs-target="#editUser"
                        data-bs-toggle="modal"
                    >Edit</a
                    >
                    <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspended</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /User Card -->
    <!-- Plan Card -->
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
    <!-- /Plan Card -->
</div>
<!--/ User Sidebar -->