<?php
if (isset($_GET['user_acct_id'])) {
    $user_acct_id = $_GET['user_acct_id'];

    // Check if the database connection is established
    if ($conn) {
        $query = "SELECT * FROM users WHERE id = $user_acct_id ";
        $result = $conn->query($query);

        // Check if the query was successful
        if ($result) {
            $user_data = $result->fetch_assoc();

            // Your existing code for the modal goes here...

        } else {
            // Handle query error
            die('Query Error: ' . $conn->error);
        }
    } else {
        // Handle database connection error
        die('Database Connection Error: ' . mysqli_connect_error());
    }
}
?>
<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body py-3 py-md-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Edit User Information</h3>
                    <p class="pt-1">Updating user details will receive a privacy audit.</p>
                </div>
                <form class="row g-4" method="post">
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserFirstName"
                                name="first_name"
                                class="form-control"
                                value="<?= $user_data['first_name'] ?>"
                                placeholder="John" />
                            <label for="modalEditUserFirstName">First Name</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserLastName"
                                name="last_name"
                                value="<?= $user_data['last_name'] ?>"
                                class="form-control"
                                placeholder="Doe" />
                            <label for="modalEditUserLastName">Last Name</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserName"
                                name="user_name"
                                class="form-control"
                                value="<?= $user_data['user_name'] ?>"
                                placeholder="john.doe.007" />
                            <label for="modalEditUserName">Username</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserEmail"
                                name="email"
                                class="form-control"
                                value="<?= $user_data['email'] ?>"
                                placeholder="example@domain.com" />
                            <label for="modalEditUserEmail">Email</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select
                                id="modalEditUserStatus"
                                name="user_status"
                                class="form-select"
                                aria-label="Default select example">
                                <option selected value="<?= $user_data['user_status'] ?>"><?= $user_data['user_status'] ?></option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                            <label for="modalEditUserStatus">Status</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select
                                id="modalEditUserStatus"
                                name="role"
                                class="form-select"
                                aria-label="Default select example">
                                <option selected value="<?= $user_data['role'] ?>"><?= $user_data['role'] ?></option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                            <label for="modalEditUserStatus">Role</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <select
                                    id="modalEditUserStatus"
                                    name="gender"
                                    class="form-select"
                                    aria-label="Default select example">
                                    <option selected value="<?= $user_data['gender'] ?>"><?= $user_data['gender'] ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">User</option>
                                </select>
                                <label for="modalEditUserStatus">Gender</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserEmail"
                                name="DOB"
                                class="form-control"
                                value="<?= $user_data['dob'] ?>"
                                placeholder="example@domain.com" />
                            <label for="modalEditUserEmail">DOB</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1" name="update_user">Submit</button>
                        <button
                            type="reset"
                            class="btn btn-outline-secondary"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->

<!-- Upgrade Plan -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body pt-md-0 px-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2 pb-1">Upgrade Plan</h3>
                    <p>Choose the best plan for user.</p>
                </div>
                <form id="upgradePlanForm" class="row g-3 d-flex align-items-center" onsubmit="return false">
                    <div class="col-sm-9">
                        <div class="form-floating form-floating-outline">
                            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
                                <option selected>Choose Plan</option>
                                <option value="standard">Standard - $99/month</option>
                                <option value="exclusive">Exclusive - $249/month</option>
                                <option value="Enterprise">Enterprise - $499/month</option>
                            </select>
                            <label for="choosePlan">Choose Plan</label>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary h-px-50">Upgrade</button>
                    </div>
                </form>
            </div>
            <hr class="mx-md-n5 mx-n3" />
            <div class="modal-body pb-md-0 px-0">
                <h6 class="mb-0">User current plan is standard plan</h6>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex justify-content-center me-2 mt-3">
                        <sup class="h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
                        <h1 class="display-3 mb-0 text-primary">99</h1>
                        <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                    </div>
                    <button class="btn btn-outline-danger cancel-subscription mt-3">Cancel Subscription</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Upgrade Plan -->
<?php } ?>