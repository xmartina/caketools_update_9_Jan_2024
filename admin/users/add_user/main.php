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