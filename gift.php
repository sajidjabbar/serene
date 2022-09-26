<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/gift.css">
<!-- Stylesheet -->

<!-- Inner Banner Sec Start Here -->
<section class="universal-banner">
    <div class="container">
        <div class="heading">
            <h1>Education Detail Page</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Sec End Here -->

<!-- Gift Sec Start Here -->
<section class="gift_sec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="gift-images">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gift-box">
                                <figure><img src="img/gift1.webp" alt="" class="img-fluid"></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gift-box">
                                <figure><img src="img/gift2.webp" alt="" class="img-fluid"></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gift-box">
                                <figure><img src="img/gift3.webp" alt="" class="img-fluid"></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gift-box">
                                <figure><img src="img/gift4.webp" alt="" class="img-fluid"></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-wrapper">
                    <div class="heading-wrapper">
                        <h3>Gift Card 012</h3>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e iusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor s it amet, consectetur adipiscing elit,
                    </p>
                    <div class="quantity">
                        <label>Quantity</label>
                        <div class="form-group">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.2" height="12.2" viewBox="0 0 12.2 12.2">
                                    <path id="Icon_metro-plus" data-name="Icon metro-plus" d="M14.39,6.5H10.2V2.309a.381.381,0,0,0-.381-.381H7.527a.381.381,0,0,0-.381.381V6.5H2.952a.381.381,0,0,0-.381.381V9.172a.381.381,0,0,0,.381.381H7.146v4.194a.381.381,0,0,0,.381.381H9.815a.381.381,0,0,0,.381-.381V9.553H14.39a.381.381,0,0,0,.381-.381V6.884A.381.381,0,0,0,14.39,6.5Z" transform="translate(-2.571 -1.928)" fill="#585858" />
                                </svg>
                            </button>
                            <input type="number" class="form-control" />
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="3" viewBox="0 0 14.001 3">
                                    <path id="Icon_awesome-minus" data-name="Icon awesome-minus" d="M13,14.625H1a1,1,0,0,0-1,1v1a1,1,0,0,0,1,1H13a1,1,0,0,0,1-1v-1A1,1,0,0,0,13,14.625Z" transform="translate(0 -14.625)" fill="#585858" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="gift-amount">
                        <h3>Choose Your Gift Amount</h3>
                        <ul class="all-amounts">
                            <li>
                                <label class="amount_container">
                                    <input type="radio" hidden checked="checked" name="Amountradio">
                                    <span class="checkmark">
                                        <div class="price">
                                            <h5>$ 50.00</h5>
                                        </div>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label class="amount_container">
                                    <input type="radio" hidden name="Amountradio">
                                    <span class="checkmark">
                                        <div class="price">
                                            <h5>$ 70.00</h5>
                                        </div>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label class="amount_container">
                                    <input type="radio" hidden name="Amountradio">
                                    <span class="checkmark">
                                        <div class="price">
                                            <h5>$ 100.00</h5>
                                        </div>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label class="amount_container">
                                    <input type="radio" hidden name="Amountradio">
                                    <span class="checkmark">
                                        <div class="price">
                                            <h5>$ 150.00</h5>
                                        </div>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label class="amount_container">
                                    <input type="radio" hidden id="customAmount" name="Amountradio">
                                    <span class="checkmark">
                                        <div class="price">
                                            <h5>Custom</h5>
                                        </div>
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="button-group">
                        <button class="btn" onclick="location.href='cart.php'"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gift Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->