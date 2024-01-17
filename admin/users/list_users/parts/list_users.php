<?php
while ($data = $result->fetch_assoc()) {
    ?>
    <tr class="odd" data-page="<?= $page ?>">
        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
        </td>
        <td class="sorting_1">
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-3">
                        <?php
                        if ($data['user_img'] != '') {
                            ?>
                            <img onclick="location.href='<?=adminUrl?>users/edit_user?<?= $data['id'] ?>'"  style="object-fit: contain" src="/assets/images/author/<?=$data['user_img']?>" alt="avatar" class="rounded-circle" />
                            <?php
                        } else {
                            ?>
                            <img onclick="location.href='<?=adminUrl?>users/edit_user?<?= $data['id'] ?>'" src="<?=adminUrl?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <a href="<?=adminUrl?>users/edit_user?<?= $data['id'] ?>" class="text-truncate">
                        <span class="fw-medium text-heading"><?= $data['first_name']. ' '.$data['last_name'] ?></span>
                    </a>
                    <small>@<?= $data['user_name'] ?></small>
                </div>
            </div>
        </td>
        <td>
            <?php if ($data['role'] == 1){ $user_role = 'Admin'; }elseif ($data['role'] == 2){ $user_role = 'User'; } ?>
            <span class="text-truncate d-flex align-items-center"><i class="mdi mdi-account-outline mdi-20px text-primary me-2"></i><?= $user_role ?></span>
        </td>
        <td><span class="text-heading">Team</span></td>
        <td class="" style=""><?= $data['email'] ?></td>
        <?php
            if ($data['user_status'] == 1){
                ?>
                <td class="" style=""><span class="badge rounded-pill bg-label-success" text-capitalized="">Active</span></td>
                <?php
            }elseif ($data['user_status'] == 0){ ?>
                <td class="" style=""><span class="badge rounded-pill bg-label-secondary" text-capitalized="">Inactive</span></td>
        <?php } ?>
        <td class="" style="">
            <div class="d-inline-block text-nowrap">
                <button
                    class="btn btn-sm btn-icon btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                    data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-20px"></i></button>
                <div class="dropdown-menu dropdown-menu-end m-0">
                    <a href="<?=adminUrl?>users/edit_user?<?= $data['id'] ?>" class="dropdown-item">
                        <i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span>
                    </a>
                    <a href="<?=adminUrl?>users/edit_user?<?= $data['id'] ?>" class="dropdown-item delete-record">
                        <i class="mdi mdi-delete-outline me-2"></i>
                        <span>Delete</span>
                    </a>
                </div>
            </div>
        </td>
    </tr>
<?php } ?>