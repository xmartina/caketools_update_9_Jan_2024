<header class="header absolute">
    <div class="tf-container">
        <div class="row">
            <div class="col-md-12">
                <div id="site-header-inner">
                    <div id="site-logo" class="clearfix">
                        <div id="site-logo-inner">
                            <a href="/" rel="home" class="main-logo">
                                <img id="logo_header" style="max-width: 190px;" src="/assets/images/logo/logo_dark.png" alt="Image">
                            </a>
                        </div>
                    </div>

                    <div class="header-center">
                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/'){echo 'current-menu-item';} ?>">
                                    <a href="/">Home</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Explore</a>
                                </li>

                                <li class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/add_nft/'){echo 'current-menu-item';} ?>">
                                    <a href="<?=siteUrl ?>add_nft">Create NFT</a>

                                </li>
                                <?php if (isset($_SESSION['user_id'])) { ?>
                                <li class="menu-item <?php if ($_SERVER['REQUEST_URI'] == '/users/'){echo 'current-menu-item';} ?>">
                                    <a href="<?=siteUrl ?>users">My Dashboard</a>
                                </li>
                                <?php } ?>

                            </ul>
                        </nav><!-- /#main-nav -->
                    </div>

                    <div class="header-right">
                        <?php if (isset($_SESSION['user_id'])) { ?>
                        <a href="javascript:void(0);" class="tf-button logoutBtn" id="logoutBtn"><span>Logout</span></a>
                            <form action="" method="post" class="d-none">
                                <input type="submit" id="logout" name="logout">
                            </form>
                        <?php } ?>
                        <a href="<?php if ($_SERVER['REQUEST_URI'] == '/connect_wallet/'){ ?>javascript:void(0);<?php } else { ?><?=siteUrl ?>connect_wallet <?php } ?>" class="tf-button "><span>Connect Wallet</span></a>
                        <span class="user "><svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_2981_49321" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="11" width="16" height="7">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 11.2949H15.1998V18.0009H0V11.2949Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_2981_49321)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.59987 12.7117C4.81795 12.7117 1.50146 13.049 1.50146 14.6594C1.50146 15.9365 3.55362 16.5844 7.59987 16.5844C11.6461 16.5844 13.6983 15.9298 13.6983 14.6405C13.6983 13.3607 11.6461 12.7117 7.59987 12.7117ZM7.59998 18.0013C5.5218 18.0013 0 18.0013 0 14.6594C0 11.2949 5.72001 11.2949 7.59998 11.2949C10.8624 11.2949 15.2 11.6416 15.2 14.6405C15.2 18.0013 9.47995 18.0013 7.59998 18.0013Z" fill="#B9B8BB"/>
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.60027 1.41683C5.59316 1.41683 3.96045 2.9574 3.96045 4.85029C3.96045 6.74318 5.59316 8.28374 7.60027 8.28374H7.6313C8.59632 8.27997 9.50527 7.92198 10.187 7.27307C10.8697 6.62605 11.2431 5.76556 11.2391 4.85312C11.2391 2.9574 9.60638 1.41683 7.60027 1.41683ZM7.60038 9.70058C4.76541 9.70058 2.45898 7.52432 2.45898 4.85029C2.45898 2.17625 4.76541 0 7.60038 0C10.4344 0 12.7408 2.17625 12.7408 4.85029C12.7468 6.13866 12.2172 7.35525 11.2522 8.27147C10.2892 9.18863 9.00286 9.69585 7.63442 9.70058H7.60038Z" fill="#B9B8BB"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4981 8.62571C14.1297 8.62571 13.8084 8.36973 13.7553 8.01553C13.6983 7.62826 13.9836 7.26933 14.394 7.21549C15.6433 7.05019 16.5863 6.02724 16.5883 4.83521C16.5883 3.65074 15.6893 2.6514 14.453 2.4606C14.0436 2.39637 13.7663 2.03272 13.8334 1.64639C13.9005 1.26007 14.2879 1.00032 14.6953 1.06172C16.6624 1.36586 18.0899 2.95366 18.0899 4.83616C18.0859 6.72999 16.5873 8.35651 14.6032 8.6191C14.5682 8.62382 14.5331 8.62571 14.4981 8.62571Z" fill="#B9B8BB"/>
                                        <mask id="mask1_2981_49321" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="15" y="10" width="5" height="6">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8613 10.8457H19.9994V15.5473H15.8613V10.8457Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask1_2981_49321)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9138 15.5473C17.6104 15.5473 17.3251 15.3725 17.212 15.0901C17.0649 14.7245 17.2601 14.3146 17.6475 14.1767C18.4984 13.8726 18.4984 13.5013 18.4984 13.3427C18.4984 12.8071 17.8267 12.4406 16.5023 12.2545C16.0918 12.196 15.8085 11.8352 15.8696 11.4488C15.9317 11.0616 16.3211 10.8018 16.7235 10.8519C19.4323 11.2344 19.9999 12.4179 19.9999 13.3427C19.9999 14.0312 19.6846 14.9635 18.18 15.501C18.0929 15.5321 18.0028 15.5473 17.9138 15.5473Z" fill="#B9B8BB"/>
                                        </g>
                                        </svg>
                                        </span>
                        <a href="#" onclick="switchTheme()" class="mode-switch">
                            <img id="img-mode" src="/assets/images/icon/moon.png" alt="Image">
                        </a>
                    </div>

                    <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                </div>
            </div>
        </div>
    </div>

</header>