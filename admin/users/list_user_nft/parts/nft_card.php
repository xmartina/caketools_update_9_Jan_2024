
<h6 class="pb-1 mb-4 text-muted">All Selected User NFT</h6>
<!--<div class="row" data-masonry='{"percentPosition": true }'>-->
<div class="row">
    <?php
    while ($nft_data = $nft_result->fetch_assoc()) {
    ?>
        <?php
        if ($nft_data['nft_img'] == '') { ?>
            User have no NFT
        <?php } elseif(!$nft_data['nft_img'] == '') {
        ?>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card">
            <img class="card-img-top" src="<?=siteUrl?>assets/images/nfts/<?=$nft_data['nft_img']?>" alt="<?=$nft_data['name']?>" style="height: 300px; object-fit: cover" />
            <div class="card-body">
                <h5 class="card-title"><?=$nft_data['name']?></h5>
                <p class="card-text">
                    <?=$nft_data['description']?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-lg-12 mb-12 py-3">
                <div class="card p-3">
                    <figure class="p-3 mb-0">
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0 text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
    <?php } ?>
</div>
