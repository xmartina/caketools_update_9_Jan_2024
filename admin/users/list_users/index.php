<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $userToDelete = intval($_POST['delete_user']);

    // Add appropriate validation and error handling here if needed

    $deleteQuery = "DELETE FROM users WHERE id = $userToDelete";
    $deleteResult = $conn->query($deleteQuery);

    if ($deleteResult) {
        header("Location: " . adminUrl . "users?user_delete_success");
        exit();
    } else {
        die('Error deleting user: ' . $conn->error);
    }
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_new_user'])) {
    // Retrieve form data
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['userEmail'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the data into the database
    $insertQuery = "INSERT INTO users (user_name, password, first_name, last_name, email, gender, address, role)
                    VALUES ('$username', '$hashedPassword', '$firstName', '$lastName', '$email', '$gender', '$address', '$role')";

    $insertResult = $conn->query($insertQuery);

    if ($insertResult) {
        // Redirect or perform other actions after successful insertion
        header("Location: " . adminUrl . "users?user_create_success");
        exit();
    } else {
        die('Error creating new user: ' . $conn->error);
    }
}

$query = "SELECT * FROM users ORDER BY id DESC ";
$result = $conn->query($query);

if (!$result) {
    die('Query Error: ' . $conn->error);
}
?>
<?php
    if (isset($_GET['user_delete_success'])) { ?>
        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="mdi mdi-alert-circle text-danger me-2"></i>
                <div class="me-auto fw-medium">User Deleted</div>
                <small class="text-muted">1 sec ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">User was deleted successfully</div>
        </div>
        <script>
            setTimeout(function() {
                window.location.replace = "<?php echo adminUrl; ?>users/";
            }, 4000); // 3000 milliseconds = 3 seconds
        </script>
    <?php }elseif (isset($_GET['user_create_success'])) { ?>
        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="mdi mdi-check-circle text-success me-2"></i>
                <div class="me-auto fw-medium">User Created Successfully</div>
                <small class="text-muted">1 sec ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">User was Created Successfully</div>
        </div>
        <script>
            setTimeout(function() {
                window.location.replace = "<?php echo adminUrl; ?>users/";
            }, 4000); // 3000 milliseconds = 3 seconds
        </script>

<?php } ?>
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
            <!--<div class="row mx-2">
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
            </div>-->
        </div>
    </div>
    <!-- Offcanvas to add new user -->
    <?php include_once (adminRootDir.'users/add_user/main.php') ?>
</div>

<!--<script>
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
            const url = `<?// =adminUrl ?>users/index.php?page=${page}`;
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    tableBody.innerHTML = data;
                })
                .catch(error => console.error('Error:', error));
        }
    });
</script> -->
