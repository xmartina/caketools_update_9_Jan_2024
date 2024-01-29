
<h6 class="pb-1 mb-4 text-muted">Masonry</h6>
<!--<div class="row" data-masonry='{"percentPosition": true }'>-->
<div class="row">
    <?php
    while ($nft_data = $nft_result->fetch_assoc()) {
    ?>
    <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card">
            <img class="card-img-top" src="<?=adminRootDir?>assets/img/elements/5.jpg" alt="Card image cap" />
            <div class="card-body">
                <h5 class="card-title">Card title that wraps to a new line</h5>
                <p class="card-text">
                    This is a longer card with supporting text below as a natural lead-in to additional content.
                    This content is a little bit longer.
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-4 mb-4">
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
    <?php } ?>
</div>
