<?php
while ($data = $result->fetch_assoc()) {
    ?>
    <tr class="odd">
        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
        <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input">
        </td>
    <tr class="odd">
        <td>
            <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                    <div class="avatar avatar-sm me-2">
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
                <div class="d-flex flex-column ps-1">
                    <span class="name text-truncate h6 mb-0 mt-1"><?= $data['first_name']. ' '.$data['last_name'] ?></span>
                    <small class="user_name text-truncate mb-1">@<?= $data['user_name'] ?></small>
                </div>
                <?php if ($data['role'] == 1){ $user_role = 'Admin'; }elseif ($data['role'] == 2){ $user_role = 'User'; } ?>
            </div>
        </td>
        <td><?= $data['email'] ?></td>
        <td><span class="d-flex align-items-center gap-2"><i
                    class="mdi mdi-laptop text-danger"></i><?= $user_role ?></span></td>
        <td><a href="<?=adminUrl?>users/edit_user?<?= $data['id'] ?>"><span class="badge rounded-pill bg-label-warning">Edit User</span></a></td>
    </tr>
<?php }?>