<form>
<div class="col-xl-9 col-lg-8 ">
    <div class="add-nft-inner">
        <h6 class="title">Choose Category</h6>
        <p class="sub">Connect With One Of Our Available Wallet Providers Or Create A New One.</p>
        <select class="blockchain-button p-3" style="border-radius: 10px; background-color: #191820; color: #d7d7d7; width:250px; height: 43px; border: 1.3px solid #d7d7d7; text-align:center; font-weight: bold;">
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
                        <h6 class="title">Upload An Item</h6>
                        <p class="sub">But Each One Takes A Different Approach And Makes Different Tradeoffs.</p>

                        <div class="drag-upload">
                            <input type="file">
                            <img src="/assets/images/svg/drap-upload.svg" alt="Image">
                            <h6 class="title">Drag your item to upload</h6>
                            <p class="sub-title">PNG, GIF, WebP, MP4 Or MP3. Maximum File Size 100 Mb.</p>
                        </div>

                        <h6 class="title">Upload An Item</h6>
                        <p class="sub mb22">But Each One Takes A Different Approach And Makes Different Tradeoffs.</p>

                        <fieldset>
                            <label >Name your  item</label>
                            <input type="text"  placeholder="E.G. Redeemable  T-Shirt With Logo ">
                        </fieldset>

                        <fieldset>
                            <label >Enter short description</label>
                            <input type="text"  placeholder="E.G. After Purchase You Will Get A  T-Shirt">
                        </fieldset>

                        <fieldset class="propertise">
                            <label class="mb8">Add properties</label>
                            <ul class="propertise-list">
                                <li><a href="#">Art<i class="fal fa-times"></i></a></li>
                                <li><a href="#">Body type<i class="fal fa-times"></i></a></li>
                                <li><a href="#">Face color<i class="fal fa-times"></i></a></li>
                            </ul>
                        </fieldset>

                        <div class="set-item">
                            <fieldset>
                                <label class="mb8">Set item price or starting bid</label>
                                <input type="text"  placeholder="E.G. 0,01 Eth">
                            </fieldset>
                            <fieldset>
                                <label class="mb8">Select royalties amount, %</label>
                                <input type="text"  placeholder="E.G. 0,01 Eth">
                            </fieldset>
                        </div>

                        <h6 class="title ">Choose Collection</h6>
                        <p class="sub">They All Serve The Same Purpose.</p>

                        <ul class="create-collection">
                            <li class="active">
                                <div class="create-item">
                                    <div class="img"><i class="fal fa-plus"></i></div>
                                    <div class="content">
                                        <h6>Create new collection</h6>
                                        <p>Type to create</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="create-item">
                                    <div class="img"><img src="/assets/images/collection/add-collection.jpg" alt="Image"></div>
                                    <div class="content">
                                        <h6>Battle for Digital</h6>
                                        <p>56 items</p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <h6 class="title mb0">Choose collection</h6>
                        <p class="sub mb20">They all serve the same purpose.</p>

                        <ul class="collection-list">
                            <li>
                                <div class="list">
                                    <div class="infor">
                                        <p>Product updates</p>
                                        <h6>Receive messages from our platform</h6>
                                    </div>

                                    <div  class="button-toggle">
                                        <input type="checkbox" id="switch" checked >
                                        <label for="switch"></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="infor">
                                        <p>Reminders</p>
                                        <h6>Receive booking reminders, pricing notices</h6>
                                    </div>
                                    <div class="button-toggle mt0">
                                        <input  type="checkbox" id="switch1">
                                        <label for="switch1"></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="infor">
                                        <p>Promotions and tips</p>
                                        <h6>Receive coupons, promotions, surveys</h6>
                                    </div>
                                    <div class="button-toggle">
                                        <input  type="checkbox" id="switch2" checked>
                                        <label for="switch2"></label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list">
                                    <div class="infor">
                                        <p>Account support</p>
                                        <h6>Receive messages about your account, your trips, legal alerts</h6>
                                    </div>
                                    <div class="button-toggle">
                                        <input  type="checkbox" id="switch3">
                                        <label for="switch3"></label>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="bottom-button">
                            <a href="#" class="tf-button active">Publish</a>
                            <a href="#" class="tf-button">Discard all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
