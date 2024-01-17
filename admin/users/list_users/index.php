<?php
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$perPage = 7;
$offset = ($page - 1) * $perPage;

$query = "SELECT * FROM users ORDER BY id DESC LIMIT $offset, $perPage";
$result = $conn->query($query);
if (!$result) {
    die('Query Error: ' . $conn->error);
}
?>
<div class="card">
    <div class="card-datatable table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="row mx-2 my-3">
                <div class="col-md-2">

                </div>
                <div class="col-md-10">
                    <div
                        class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0 gap-3">
                        <div class="dt-buttons">
                            <button class="dt-button add-new btn btn-primary waves-effect waves-light" tabindex="0"
                                    aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasAddUser"><span><i
                                        class="mdi mdi-plus me-0 me-sm-1"></i><span
                                        class="d-none d-sm-inline-block">Add User</span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <table class="datatables-users table dataTable no-footer dtr-column" id="DataTables_Table_0"
                   aria-describedby="DataTables_Table_0_info" style="width: 1395px;">
                <thead class="table-light">
                <tr>
                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                        style="width: 0px; display: none;" aria-label=""></th>
                    <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1"
                        style="width: 18px;" data-col="1" aria-label=""><input type="checkbox"
                                                                               class="form-check-input">
                    </th>
                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                        colspan="1" style="width: 358px;" aria-label="User: activate to sort column ascending"
                        aria-sort="descending">User
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        style="width: 161px;" aria-label="Role: activate to sort column ascending">Role
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        style="width: 117px;" aria-label="Plan: activate to sort column ascending">Plan
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        style="width: 227px;" aria-label="Billing: activate to sort column ascending">Billing
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        style="width: 103px;" aria-label="Status: activate to sort column ascending">Status
                    </th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 105px;" aria-label="Actions">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php include_once (adminRootDir.'users/list_users/parts/list_users.php'); ?>
                </tbody>
            </table>
            <div class="row mx-2">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing
                        26 to 50 of 50 entries
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                                <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="previous" tabindex="0" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item ">
                                <a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item active">
                                <a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="1" tabindex="0" class="page-link">2</a>
                            </li>
                            <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                <a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offcanvas to add new user -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 h-100">
            <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
                  onsubmit="return false" novalidate="novalidate">
                <div class="form-floating form-floating-outline mb-4 fv-plugins-icon-container">
                    <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe"
                           name="userFullname" aria-label="John Doe">
                    <label for="add-user-fullname">Full Name</label>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    </div>
                </div>
                <div class="form-floating form-floating-outline mb-4 fv-plugins-icon-container">
                    <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com"
                           aria-label="john.doe@example.com" name="userEmail">
                    <label for="add-user-email">Email</label>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                    </div>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" id="add-user-contact" class="form-control phone-mask"
                           placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact">
                    <label for="add-user-contact">Contact</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer"
                           aria-label="jdoe1" name="companyName">
                    <label for="add-user-company">Company</label>
                </div>
                <div class="form-floating form-floating-outline mb-4 form-floating-select2">
                    <div class="position-relative"><select id="country"
                                                           class="select2 form-select select2-hidden-accessible"
                                                           data-select2-id="country"
                                                           tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="2">Select</option>
                            <option value="Australia">Australia</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="China">China</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                       data-select2-id="1" style="width: 360px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                    aria-labelledby="select2-country-container"><span
                                        class="select2-selection__rendered" id="select2-country-container"
                                        role="textbox" aria-readonly="true"><span
                                            class="select2-selection__placeholder">Select Country</span></span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                                                                               aria-hidden="true"></span></span>
                    </div>
                    <label for="country">Country</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <select id="user-role" class="form-select">
                        <option value="subscriber">Subscriber</option>
                        <option value="editor">Editor</option>
                        <option value="maintainer">Maintainer</option>
                        <option value="author">Author</option>
                        <option value="admin">Admin</option>
                    </select>
                    <label for="user-role">User Role</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <select id="user-plan" class="form-select">
                        <option value="basic">Basic</option>
                        <option value="enterprise">Enterprise</option>
                        <option value="company">Company</option>
                        <option value="team">Team</option>
                    </select>
                    <label for="user-plan">Select Plan</label>
                </div>
                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Submit
                </button>
                <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel
                </button>
                <input type="hidden">
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tableBody = document.querySelector('.datatables-users tbody');
        const paginationLinks = document.querySelectorAll('.pagination .page-link');

        paginationLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const page = this.getAttribute('data-page');

                // Load data for the selected page
                fetchData(page);
            });
        });

        function fetchData(page) {
            const url = `<?=adminRootDir?>users/list_users/index.php?page=${page}`;
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    tableBody.innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        }
    });
</script>
