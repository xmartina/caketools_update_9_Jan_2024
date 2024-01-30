<h6 class="pb-1 mb-4 text-muted">All Selected User NFT</h6>
<!--<div class="row" data-masonry='{"percentPosition": true }'>-->
<div class="row">
    <style>
        .non.blockquote {
            margin-bottom: 0;
        }
    </style>
    <?php
    while ($nft_parent = $nft_result->fetch_assoc()) {
        $get_nft_count = "SELECT COUNT(*) as total_rows FROM nft_parent WHERE id = $nft_parent[id]";
        $result = $conn->query($get_nft_count);

        // Check if the query was successful and if 'nft_img' is not empty
        if ($result) {
            ?>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?=siteUrl?>assets/images/nfts/<?=$nft_parent['nft_img']?>" alt="<?=$nft_parent['name']?>" style="height: 300px; object-fit: cover" />
                    <div class="card-body">
                        <h5 class="card-title"><?=$nft_parent['name']?></h5>
                        <p class="card-text">
                            <?=$nft_parent['description']?>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-7 col-lg-7 mb-4">
                        <div class="card p-3">
                            <figure class="py-2 px-2 pb-1 mb-0">
                                <blockquote class="non blockquote">
                                    <p>Available Quantity</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-5 col-lg-5 mb-4">
                        <div class="card bg-primary text-white text-center p-3">
                            <figure class="py-2 px-2 mb-0 pb-1">
                                <blockquote class="non blockquote">
                                    <p> <?=$nft_parent['available_quantity']?></p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-lg-7 mb-4">
                        <div class="card p-3">
                            <figure class="py-2 px-2 pb-1 mb-0">
                                <blockquote class="non blockquote">
                                    <p>NFT Price</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-5 col-lg-5 mb-4">
                        <div class="card bg-primary text-white text-center p-3">
                            <figure class="py-2 px-2 mb-0 pb-1">
                                <blockquote class="non blockquote">
                                    <p> <?=$nft_parent['price_currency'].$nft_parent['nft_price']?></p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--<div class="row ">
                    <div class="col-sm-7 col-lg-7 mb-4">
                        <div class="card p-3">
                            <figure class="py-2 px-2 pb-1 mb-0">
                                <blockquote class="non blockquote">
                                    <p>Available Quantity</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-5 col-lg-5 mb-4">
                        <div class="card bg-primary text-white text-center p-3">
                            <figure class="py-2 px-2 mb-0 pb-1">
                                <blockquote class="non blockquote">
                                    <p> <?=$nft_parent['available_quantity']?></p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-7 col-lg-7 mb-4">
                        <div class="card p-3">
                            <figure class="py-2 px-2 pb-1 mb-0">
                                <blockquote class="non blockquote">
                                    <p>Available Quantity</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-5 col-lg-5 mb-4">
                        <div class="card bg-primary text-white text-center p-3">
                            <figure class="py-2 px-2 mb-0 pb-1">
                                <blockquote class="non blockquote">
                                    <p> <?=$nft_parent['available_quantity']?></p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                </div>-->
            </div>
        <?php } else { ?>
            No NFT
        <?php } ?>
    <?php } ?>
</div>
