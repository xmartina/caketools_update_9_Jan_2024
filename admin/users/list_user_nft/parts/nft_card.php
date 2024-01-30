<h6 class="pb-1 mb-4 text-muted">All Selected User NFT</h6>
<!--<div class="row" data-masonry='{"percentPosition": true }'>-->
<div class="row">
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

                <div class="row py-3">
                    <div class="col-sm-7 col-lg-7 mb-4">
                        <div class="card p-3">
                            <figure class="py-2 px-3 mb-0">
                                <blockquote class="blockquote">
                                    <p>Available Quantity</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-5 col-lg-5 mb-4">
                        <div class="card bg-primary text-white text-center p-3">
                            <figure class=" py-2 px-3 mb-0">
                                <figcaption class=" text-white">
                                    <?=$nft_parent['available_quantity']?>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-sm-7 col-lg-7 mb-4">
                        <div class="card p-3">
                            <figure class="p-3 mb-0">
                                <blockquote class="blockquote">
                                    <p>A well-known quote, contained in a blockquote element.</p>
                                </blockquote>
<!--                                <figcaption class="blockquote-footer mb-0 text-muted">-->
<!--                                    Someone famous in <cite title="Source Title">Source Title</cite>-->
<!--                                </figcaption>-->
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-5 col-lg-5 mb-4">
                        <div class="card bg-primary text-white text-center p-3">
                            <figure class="mb-0">
                                <blockquote class="blockquote">
                                    <p>A well-known quote, contained in a blockquote element.</p>
                                </blockquote>
<!--                                <figcaption class="blockquote-footer mb-0 text-white">-->
<!--                                    Someone famous in <cite title="Source Title">Source Title</cite>-->
<!--                                </figcaption>-->
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            No NFT
        <?php } ?>
    <?php } ?>
</div>
