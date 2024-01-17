<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body mx-0 flex-grow-0 h-100">
        <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
              onsubmit="return false" novalidate="novalidate">
            <div class="form-floating form-floating-outline mb-4 fv-plugins-icon-container">
                <input type="text" class="form-control" id="add-user-fullname" placeholder="Username"
                       name="user_name" aria-label="Username">
                <label for="add-user-fullname">Username</label>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                </div>
            </div>
            <div class="form-floating form-floating-outline mb-4 fv-plugins-icon-container">
                <input type="text" class="form-control" id="add-user-password" placeholder="Password"
                       name="password" aria-label="password">
                <label for="add-user-fullname">Password</label>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                </div>
            </div>
            <div class="form-floating form-floating-outline mb-4 fv-plugins-icon-container">
                <input type="text" class="form-control" id="add-user-fullname" placeholder="John"
                       name="first_name" aria-label="John Doe">
                <label for="add-user-fullname">First Name</label>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                </div>
            </div>
            <div class="form-floating form-floating-outline mb-4 fv-plugins-icon-container">
                <input type="text" class="form-control" id="add-user-fullname" placeholder="John"
                       name="last_name" aria-label="Doe">
                <label for="add-user-fullname">Last Name</label>
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
                <select name="gender" id="user-role" class="form-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="user-role">Gender</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <input type="text" id="add-user-company" class="form-control" placeholder="#2335 Seattle Street 5, 98123"
                       aria-label="jdoe1" name="address">
                <label for="add-user-company">Address</label>
            </div>
            <div class="form-floating form-floating-outline mb-4">
                <select name="role" id="user-role" class="form-select">
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
                <label for="user-role">User Role</label>
            </div>
            <button type="submit" name="create_new_user" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Submit
            </button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel
            </button>
            <input type="hidden">
        </form>
    </div>
</div>