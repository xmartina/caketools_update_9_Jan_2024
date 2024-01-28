<section class="tf-add-nft">
    <div class="tf-container">
        <form method="post" enctype="multipart/form-data">
            <div class="col-xl-9 col-lg-8 ">
                <div class="add-nft-inner">
                    <div class="tf-tab">
                        <div class="content-tab">
                            <div class="content-inner active">
                                <div class="tab-create-item">
                                    <style>
                                        /* Add your styling here */
                                        fieldset {
                                            display: none;
                                            transition: opacity 0.5s;
                                        }

                                        fieldset.active {
                                            display: block;
                                            opacity: 1;
                                        }
                                    </style>

                                    <h6 class="title">Deposit Form</h6>
                                    <p class="sub mb22">Use the form below to make your deposit.</p>

                                    <div class="form-wrapper" id="form1">
                                        <fieldset class="activTab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label>Deposit Amount</label>
                                                    <div class="form-wrapper mb-0 pb-0 d-flex align-items-center">
                                                        <select name="deposit_currency" class="mr-3"
                                                                style="border-radius: 4px; background-color: #191820; color: #d7d7d7; width:110px; height: 33px; border: .7px solid #d7d7d7; text-align:center; font-weight: bold;">
                                                            <?php
                                                                while ($currency_row = $get_currency_result->fetch_assoc()) { ?>
                                                            <option value="<?= $currency_row['cur_name'] ?>"
                                                                    style="background-color: #191820; color: #888; border-radius: 10px;">
                                                                <?= $currency_row['cur_name'] ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                        <input type="number" name="deposit_amount" placeholder="E.G. 100">
                                                    </div>
                                                    <div class="mt-1 pt-0" style="font-size: 12px; font-style: italic;">
                                                        service fee 0.0025%
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button type="button" class="tf-button active" onclick="showNextForm()">Next</button>
                                    </div>

                                    <fieldset id="form2" >
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="py-2 px-3 bg-dark text-white rounded-3">
                                                    Bitcoin Wallet Address (BTC)
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="py-2 px-3 bg-outline-success text-success rounded-3">
                                                    BTDDhsdksdllsdsdsdsdsderef
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="py-2 px-3 bg-dark text-white rounded-3">
                                                Ethereum Wallet Address (ETH)
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="py-2 px-3 bg-outline-success text-success rounded-3">
                                                BTDDhsdksdllsdsdsdsdsderef
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="py-2 px-3 bg-dark text-white rounded-3">
                                                Tether Wallet Address (USDT)
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="py-2 px-3 bg-outline-success text-success rounded-3">
                                                BTDDhsdksdllsdsdsdsdsderef
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="bottom-button d-flex align-items-center">
                                        <button type="button" class="tf-button" onclick="showPrevForm()">Prev</button>
                                        <button type="submit" name="create_new_deposit" class="tf-button active">Deposit</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('form1').classList.add('active');
        document.getElementsByClassName('activTab').classList.add('active');
    });

    function showNextForm() {
        document.getElementById('form1').classList.remove('active');
        document.getElementById('form2').classList.add('active');
    }

    function showPrevForm() {
        document.getElementById('form2').classList.remove('active');
        document.getElementById('form1').classList.add('active');
    }
</script>