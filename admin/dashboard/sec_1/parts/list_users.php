<?php
$query = "SELECT * FROM users ORDER BY id DESC LIMIT 7";
$result = $conn->query($query);
if (!$result) {
    die('Query Error: ' . $conn->error);
}

?>
<!-- Roles Datatables -->
<div class="col-lg-8 col-12">
    <div class="card">
        <div class="table-responsive rounded-3">
            <table class="datatables-crm table table-sm">
                <thead class="table-light">
                <tr>
                    <th class="py-3 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="User: activate to sort column ascending" style="width: 254px;">User
                    </th>
                    <th class="py-3 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Email: activate to sort column ascending" style="width: 319px;">Email
                    </th>
                    <th class="py-3 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Role: activate to sort column ascending" style="width: 141px;">Role
                    </th>
                    <th class="py-3 sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        aria-label="Status: activate to sort column ascending" style="width: 87px;">Status
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($data = $result->fetch_assoc()) {
                ?>
                <tr class="odd">
                    <td>
                        <div class="d-flex justify-content-start align-items-center user-name">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-2">
                                    <?php
                                    if ($data['user_img'] != '') {
                                        ?>
                                        <img onclick="location.href='<?=adminUrl?>users/edit_user?user_acct_id=<?= $data['id'] ?>'"  style="object-fit: contain" src="/assets/images/author/<?=$data['user_img']?>" alt="avatar" class="rounded-circle" />
                                        <?php
                                    } else {
                                        ?>
                                        <img onclick="location.href='<?=adminUrl?>users/edit_user?user_acct_id=<?= $data['id'] ?>'" src="<?=adminUrl?>assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
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
                    <td><a href="<?=adminUrl?>users/edit_user?user_acct_id=<?= $data['id'] ?>"><span class="badge rounded-pill bg-label-warning">Edit User</span></a></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
            <div style="cursor: pointer" class="py-2 px-3 bg-info text-white text-center mt-3 w-100" onclick="location.href='<?=adminUrl?>users'">view more</div>
        </div>
    </div>
</div>