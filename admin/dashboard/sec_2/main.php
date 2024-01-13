<!-- Social Network Visits -->
<div class="col-xl-4 col-md-6">
    <div class="card h-100">
        <div class="pt-3 px-3 d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Deposit Request</h5>
            <div class="dropdown">
                <button
                    class="btn p-0"
                    type="button"
                    id="socialNetworkList"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-dots-vertical mdi-24px"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="socialNetworkList">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div>
            </div>
        </div>
        <div class="card-body mt-1 pt-1" >
            <div class="mb-3">
                <small style="cursor: pointer" onclick="location.href='/admin/deposit';">view all request</small>
            </div>
            <div class="my-3"></div>
            <ul class="p-0 m-0">
                <li class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <img
                            src="<?=adminUrl?>assets/img/icons/brands/facebook-rounded.png"
                            alt="facebook"
                            class="me-3"
                            height="34" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Facebook</h6>
                            <small>Social Media</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="h6 mb-0">12,348</span>
                            <div class="ms-3 badge bg-label-success rounded-pill">+12%</div>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <img
                            src="<?=adminUrl?>assets/img/icons/brands/dribbble-rounded.png"
                            alt="dribbble"
                            class="me-3"
                            height="34" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Dribbble</h6>
                            <small>Community</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="h6 mb-0">8,450</span>
                            <div class="ms-3 badge bg-label-success rounded-pill">+32%</div>
                        </div>
                    </div>
                </li>
                <li class="d-flex mb-3">
                    <div class="flex-shrink-0">
                        <img
                            src="<?=adminUrl?>assets/img/icons/brands/twitter-rounded.png"
                            alt="facebook"
                            class="me-3"
                            height="34" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Twitter</h6>
                            <small>Social Media</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="h6 mb-0">350</span>
                            <div class="ms-3 badge bg-label-danger rounded-pill">-18%</div>
                        </div>
                    </div>
                </li>
                <li class="d-flex">
                    <div class="flex-shrink-0">
                        <img
                            src="<?=adminUrl?>assets/img/icons/brands/instagram-rounded.png"
                            alt="instagram"
                            class="me-3"
                            height="34" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <h6 class="mb-0">Instagram</h6>
                            <small>Social Media</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="h6 mb-0">25,566</span>
                            <div class="ms-3 badge bg-label-success rounded-pill">+42%</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/ Social Network Visits -->