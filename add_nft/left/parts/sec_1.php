<form>
<div class="col-xl-9 col-lg-8 ">
    <div class="add-nft-inner">
        <h6 class="title">Choose Category</h6>
        <p class="sub">Connect With One Of Our Available Wallet Providers Or Create A New One.</p>
        <select class="blockchain-button p-1" style="border-radius: 3px; background-color: #191820; color: #d7d7d7; width:250px; height: 39px; border: .7px solid #d7d7d7; text-align:center; font-weight: bold;">
            <?php
            while ($g_c_row = $g_category_result->fetch_assoc()) {
                ?>
                <option name="<?=$g_c_row['c_id']?>" style="background-color: #191820; color: #888; border-radius: 10px;">
                    <?=$g_c_row['c_name']?>
                </option>
                <?php
            }
            ?>
        </select>


        <h6 class="title">Select Item Type</h6>
        <p class="sub">They All Serve The Same Purpose, But Each One Takes.</p>

        <div class="tf-tab">
            <div class="content-tab">
                <div class="content-inner active" >
                    <div class="tab-create-item">

                        <h6 class="title">NFT Details</h6>
                        <p class="sub mb22">But Each One Takes A Different Approach And Makes Different Tradeoffs.</p>

                        <fieldset>
                            <label >Name your  item</label>
                            <input type="text" name="name" placeholder="E.G. Redeemable  Monkey Mango ">
                        </fieldset>

                        <fieldset>
                            <label >Enter short description</label>
                            <input type="text" name="description" placeholder="E.G. After Purchase You Will Get A  T-Shirt">
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label >Available Quantity</label>
                                    <input type="number" name="available_quantity" placeholder="E.G. 1000">
                                </div>
                                <div class="col-lg-6">
                                    <label >Nft Image</label>
                                    <input type="file" name="nft_img" placeholder="E.G. After Purchase You Will Get A  T-Shirt">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label >Nft Price</label>
                                    <div class="form-wrapper mb-0 pb-0 d-flex align-items-center">
                                        <select name="nft_currency" class="mr-3" style="border-radius: 4px; background-color: #191820; color: #d7d7d7; width:110px; height: 33px; border: .7px solid #d7d7d7; text-align:center; font-weight: bold;">
                                            <?php
                                            while ($currency_row = $g_currency_result->fetch_assoc()) { ?>
                                                <option value="<?= $currency_row['cur_id'] ?>" style="background-color: #191820; color: #888; border-radius: 10px;">
                                                    <?= $currency_row['cur_abbreviation'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                        <input type="number" name="available_quantity" placeholder="E.G. 100">
                                    </div>
                                    <div class="mt-1 pt-0" style="font-size: 12px; font-style: italic;">service fee 0.0025%</div>
                                </div>
                            </div>
                        </fieldset>

