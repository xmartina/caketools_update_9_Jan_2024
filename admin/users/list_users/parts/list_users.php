<?php
while ($data = $result->fetch_assoc()) {
    ?>
    <tr class="odd">
        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
        </td>
        <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3">
                        <img src="<?= adminUrl ?>assets/img/avatars/4.png" alt="Avatar" class="rounded-circle">
                    </div>
                </div>
                <div class="d-flex flex-column"><a href="app-user-view-account.html"
                                                   class="text-truncate"><span
                            class="fw-medium text-heading">Jonah
                                            Wharlton</span></a><small>jwharltona@oakley.com</small>
                </div>
            </div>
        </td>
        <td><span class="text-truncate d-flex align-items-center"><i
                    class="mdi mdi-account-outline mdi-20px text-primary me-2"></i>Subscriber</span>
        </td>
        <td><span class="text-heading">Team</span></td>
        <td class="" style="">Manual - Paypal</td>
        <td class="" style=""><span class="badge rounded-pill bg-label-secondary"
                                    text-capitalized="">Inactive</span>
        </td>
        <td class="" style="">
            <div class="d-inline-block text-nowrap">
                <button
                    class="btn btn-sm btn-icon btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-20px"></i></button>
                <div class="dropdown-menu dropdown-menu-end m-0"><a href="app-user-view-account.html"
                                                                    class="dropdown-item"><i
                            class="mdi mdi-eye-outline me-2"></i><span>View</span></a><a
                        href="javascript:;" class="dropdown-item"><i
                            class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a
                        href="javascript:;" class="dropdown-item delete-record"><i
                            class="mdi mdi-delete-outline me-2"></i><span>Delete</span></a></div>
            </div>
        </td>
    </tr>
<?php } ?>