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
                <form id="editUserForm" class="row g-4" onsubmit="return false">
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserFirstName"
                                name="modalEditUserFirstName"
                                class="form-control"
                                placeholder="John" />
                            <label for="modalEditUserFirstName">First Name</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserLastName"
                                name="modalEditUserLastName"
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
                                name="modalEditUserName"
                                class="form-control"
                                placeholder="john.doe.007" />
                            <label for="modalEditUserName">Username</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditUserEmail"
                                name="modalEditUserEmail"
                                class="form-control"
                                placeholder="example@domain.com" />
                            <label for="modalEditUserEmail">Email</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select
                                id="modalEditUserStatus"
                                name="modalEditUserStatus"
                                class="form-select"
                                aria-label="Default select example">
                                <option selected>Status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                            </select>
                            <label for="modalEditUserStatus">Status</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input
                                type="text"
                                id="modalEditTaxID"
                                name="modalEditTaxID"
                                class="form-control modal-edit-tax-id"
                                placeholder="123 456 7890" />
                            <label for="modalEditTaxID">Tax ID</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">US (+1)</span>
                            <div class="form-floating form-floating-outline">
                                <input
                                    type="text"
                                    id="modalEditUserPhone"
                                    name="modalEditUserPhone"
                                    class="form-control phone-number-mask"
                                    placeholder="202 555 0111" />
                                <label for="modalEditUserPhone">Phone Number</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select
                                id="modalEditUserLanguage"
                                name="modalEditUserLanguage"
                                class="select2 form-select"
                                multiple>
                                <option value="">Select</option>
                                <option value="english" selected>English</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="dutch">Dutch</option>
                                <option value="hebrew">Hebrew</option>
                                <option value="sanskrit">Sanskrit</option>
                                <option value="hindi">Hindi</option>
                            </select>
                            <label for="modalEditUserLanguage">Language</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select
                                id="modalEditUserCountry"
                                name="modalEditUserCountry"
                                class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">Select</option>
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
                            </select>
                            <label for="modalEditUserCountry">Country</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="switch">
                            <input type="checkbox" class="switch-input" />
                            <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
                            <span class="switch-label">Use as a billing address?</span>
                        </label>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
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