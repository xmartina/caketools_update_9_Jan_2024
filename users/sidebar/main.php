
<div class="col-xl-3 col-lg-12 col-md-12" id="targetElement">
    <div class="dashboard-user">
        <div class="dashboard-infor">
            <div class="avatar">
                <img src="/assets/images/author/<?=$userImg?>" alt="images">
            </div>
            <div class="name"><?=$fullName?></div>
            <div class="pax mb-2"><i class="fas fa-dollar-sign"></i>My Balance</div>
            <div class="pax mb-2"><i class="fab fa-bitcoin"></i><?=$btc_bal?></div>
            <div class="pax mb-3"><i class="fab fa-ethereum"></i><?=$eth_bal?></div>
            <div class="pax mb-2"><i class="">₮</i><?=$usdt_bal?></div>
            <div class="description">
                Explore your account: Instantly view balances and recent activity for a clear and concise financial snapshot.
            </div>
            <ul class="social-item">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="dashboard-filter">
            <ul class="filter-menuu menu-tab">
                <li class="active dashboard"><a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path class="svg-fill" d="M17.3722 6.47085C17.7995 7.0155 17.3282 7.70964 16.6359 7.70964H2.66602C2.11373 7.70964 1.66602 7.26192 1.66602 6.70964V5.3513C1.66602 3.31797 3.31602 1.66797 5.34935 1.66797H7.28268C8.64102 1.66797 9.06602 2.10964 9.60768 2.83464L10.7744 4.38464C11.0327 4.7263 11.066 4.76797 11.5493 4.76797H13.8744C15.2932 4.76797 16.5581 5.43348 17.3722 6.47085Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M17.3194 8.95704C17.8704 8.95704 18.3175 9.40269 18.3194 9.95365L18.3327 13.8739C18.3327 16.3323 16.3327 18.3323 13.8743 18.3323H6.12435C3.66602 18.3323 1.66602 16.3323 1.66602 13.8739V9.95724C1.66602 9.40496 2.11372 8.95725 2.666 8.95724L17.3194 8.95704Z" fill="#3749E9"/>
                        </svg> Inventory</a></li>
                <li><a href="#" > <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path class="svg-fill" d="M18.3329 9.14297V10.8596C18.3329 11.318 17.9662 11.693 17.4995 11.7096H15.8662C14.9662 11.7096 14.1412 11.0513 14.0662 10.1513C14.0162 9.6263 14.2162 9.13464 14.5662 8.79297C14.8745 8.4763 15.2995 8.29297 15.7662 8.29297H17.4995C17.9662 8.30964 18.3329 8.68464 18.3329 9.14297Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M17.0587 12.9596H15.867C14.2837 12.9596 12.9503 11.768 12.817 10.2513C12.742 9.38464 13.0587 8.51797 13.692 7.9013C14.2253 7.3513 14.967 7.04297 15.767 7.04297H17.0587C17.3003 7.04297 17.5003 6.84297 17.4753 6.6013C17.292 4.5763 15.9503 3.19297 13.9587 2.95964C13.7587 2.9263 13.5503 2.91797 13.3337 2.91797H5.83366C5.60033 2.91797 5.37533 2.93464 5.15866 2.96797C3.03366 3.23464 1.66699 4.81797 1.66699 7.08464V12.918C1.66699 15.218 3.53366 17.0846 5.83366 17.0846H13.3337C15.667 17.0846 17.2753 15.6263 17.4753 13.4013C17.5003 13.1596 17.3003 12.9596 17.0587 12.9596ZM10.8337 8.1263H5.83366C5.49199 8.1263 5.20866 7.84297 5.20866 7.5013C5.20866 7.15964 5.49199 6.8763 5.83366 6.8763H10.8337C11.1753 6.8763 11.4587 7.15964 11.4587 7.5013C11.4587 7.84297 11.1753 8.1263 10.8337 8.1263Z" fill="#3749E9"/>
                        </svg> Wallet</a></li>
                <li><a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path class="svg-fill" d="M14.4916 13.0583L11.1249 10H8.86657L5.4999 13.0583C4.55823 13.9083 4.2499 15.2167 4.70823 16.4C5.16657 17.575 6.28323 18.3333 7.54157 18.3333H12.4499C13.7166 18.3333 14.8249 17.575 15.2832 16.4C15.7416 15.2167 15.4332 13.9083 14.4916 13.0583ZM11.5166 15.1167H8.48323C8.16657 15.1167 7.91657 14.8583 7.91657 14.55C7.91657 14.2417 8.1749 13.9833 8.48323 13.9833H11.5166C11.8332 13.9833 12.0832 14.2417 12.0832 14.55C12.0832 14.8583 11.8249 15.1167 11.5166 15.1167Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M15.2919 3.6013C14.8335 2.4263 13.7169 1.66797 12.4585 1.66797H7.54188C6.28355 1.66797 5.16688 2.4263 4.70855 3.6013C4.25855 4.78464 4.56688 6.09297 5.50855 6.94297L8.87521 10.0013H11.1335L14.5002 6.94297C15.4335 6.09297 15.7419 4.78464 15.2919 3.6013ZM11.5169 6.0263H8.48355C8.16688 6.0263 7.91688 5.76797 7.91688 5.45964C7.91688 5.1513 8.17522 4.89297 8.48355 4.89297H11.5169C11.8335 4.89297 12.0835 5.1513 12.0835 5.45964C12.0835 5.76797 11.8252 6.0263 11.5169 6.0263Z" fill="#3749E9"/>
                        </svg> History</a></li>
                <li><a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path class="svg-fill" d="M14.6089 6.4763C14.5505 6.46797 14.4922 6.46797 14.4339 6.4763C13.1422 6.43464 12.1172 5.3763 12.1172 4.0763C12.1172 2.7513 13.1922 1.66797 14.5255 1.66797C15.8505 1.66797 16.9339 2.74297 16.9339 4.0763C16.9255 5.3763 15.9005 6.43464 14.6089 6.4763Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M17.3257 12.2503C16.3923 12.8753 15.084 13.1087 13.8757 12.9503C14.1923 12.267 14.359 11.5087 14.3673 10.7087C14.3673 9.87534 14.184 9.08367 13.834 8.392C15.0673 8.22534 16.3757 8.45867 17.3173 9.08367C18.634 9.95034 18.634 11.3753 17.3257 12.2503Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M5.36745 6.4763C5.42578 6.46797 5.48411 6.46797 5.54245 6.4763C6.83411 6.43464 7.85911 5.3763 7.85911 4.0763C7.85911 2.74297 6.78411 1.66797 5.45078 1.66797C4.12578 1.66797 3.05078 2.74297 3.05078 4.0763C3.05078 5.3763 4.07578 6.43464 5.36745 6.4763Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M5.45794 10.7088C5.45794 11.5172 5.63294 12.2838 5.94961 12.9755C4.77461 13.1005 3.54961 12.8505 2.64961 12.2588C1.33294 11.3838 1.33294 9.95883 2.64961 9.08383C3.54128 8.48383 4.79961 8.24216 5.98294 8.37549C5.64128 9.07549 5.45794 9.86716 5.45794 10.7088Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M10.1 13.225C10.0333 13.2167 9.95833 13.2167 9.88333 13.225C8.35 13.175 7.125 11.9167 7.125 10.3667C7.13333 8.78333 8.40833 7.5 10 7.5C11.5833 7.5 12.8667 8.78333 12.8667 10.3667C12.8583 11.9167 11.6417 13.175 10.1 13.225Z" fill="#3749E9"/>
                            <path class="svg-fill" d="M7.39102 14.9492C6.13268 15.7909 6.13268 17.1742 7.39102 18.0076C8.82435 18.9659 11.1743 18.9659 12.6077 18.0076C13.866 17.1659 13.866 15.7826 12.6077 14.9492C11.1827 13.9909 8.83268 13.9909 7.39102 14.9492Z" fill="#3749E9"/>
                        </svg> Following </a></li>
                <li class="dashboard"><a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path class="svg-fill" d="M13.1493 1.66797H6.84935C3.69935 1.66797 2.91602 2.50964 2.91602 5.86797V15.2513C2.91602 17.468 4.13268 17.993 5.60768 16.4096L5.61602 16.4013C6.29935 15.6763 7.34102 15.7346 7.93268 16.5263L8.77435 17.6513C9.44935 18.543 10.541 18.543 11.216 17.6513L12.0577 16.5263C12.6577 15.7263 13.6993 15.668 14.3827 16.4013C15.866 17.9846 17.0743 17.4596 17.0743 15.243V5.86797C17.0827 2.50964 16.2993 1.66797 13.1493 1.66797ZM12.291 8.95964H7.70768C7.36602 8.95964 7.08268 8.6763 7.08268 8.33464C7.08268 7.99297 7.36602 7.70964 7.70768 7.70964H12.291C12.6327 7.70964 12.916 7.99297 12.916 8.33464C12.916 8.6763 12.6327 8.95964 12.291 8.95964Z" fill="#3749E9"/>
                        </svg> Favorites</a></li>
                <li><a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path class="svg-fill" d="M16.2586 4.8763L11.3086 2.01797C10.5003 1.5513 9.50026 1.5513 8.68359 2.01797L3.74193 4.8763C2.93359 5.34297 2.43359 6.20964 2.43359 7.1513V12.8513C2.43359 13.7846 2.93359 14.6513 3.74193 15.1263L8.69193 17.9846C9.50026 18.4513 10.5003 18.4513 11.3169 17.9846L16.2669 15.1263C17.0753 14.6596 17.5753 13.793 17.5753 12.8513V7.1513C17.5669 6.20964 17.0669 5.3513 16.2586 4.8763ZM10.0003 6.11797C11.0753 6.11797 11.9419 6.98464 11.9419 8.05964C11.9419 9.13464 11.0753 10.0013 10.0003 10.0013C8.92526 10.0013 8.05859 9.13464 8.05859 8.05964C8.05859 6.99297 8.92526 6.11797 10.0003 6.11797ZM12.2336 13.8846H7.76693C7.09193 13.8846 6.70026 13.1346 7.07526 12.5763C7.64193 11.7346 8.74193 11.168 10.0003 11.168C11.2586 11.168 12.3586 11.7346 12.9253 12.5763C13.3003 13.1263 12.9003 13.8846 12.2336 13.8846Z" fill="#3749E9"/>
                        </svg> Account Setting</a></li>
            </ul>
        </div>
    </div>
</div>