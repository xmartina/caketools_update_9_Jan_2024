<!--user_edit_modal-->
<div class="col-12 col-md-6">
    <div class="input-group input-group-merge">
        <!--                            <span class="input-group-text">US (+1)</span>-->
        <div class="form-floating form-floating-outline">
            <input
                type="text"
                id="modalEditUserPhone"
                name="address"
                class="form-control phone-number-mask"
                value="<?= $user_data['address'] ?>"
                placeholder="<?= $user_data['address'] ?>" />
            <label for="modalEditUserPhone">Address</label>
        </div>
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