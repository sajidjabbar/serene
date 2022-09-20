<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/product-detail.css">
<!-- Stylesheet -->

<!-- Inner Banner Sec Start Here -->
<section class="universal-banner">
    <div class="container">
        <div class="heading">
            <h1>Shop Detailed Page</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Sec End Here -->

<!-- Product Detail Sec Start Here -->
<section class="product-detail">
    <div class="before">
        <figure><img src="img/login-before.webp" alt="" class="img-fluid"></figure>
    </div>
    <div class="after">
        <figure><img src="img/ball.webp" alt="" class="img-fluid"></figure>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="product-images">
                    <div class="single-image">
                        <figure><img src="img/pro-detail1.webp" alt="" class="img-fluid"></figure>
                        <figure><img src="img/pro-detail1.webp" alt="" class="img-fluid"></figure>
                        <figure><img src="img/pro-detail1.webp" alt="" class="img-fluid"></figure>
                        <figure><img src="img/pro-detail1.webp" alt="" class="img-fluid"></figure>
                        <figure><img src="img/pro-detail1.webp" alt="" class="img-fluid"></figure>
                        <figure><img src="img/pro-detail1.webp" alt="" class="img-fluid"></figure>
                        <figure><img src="img/pro-detail1.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="all-images">
                        <figure><img src="img/ring4.webp" class="img-fluid" alt=""></figure>
                        <figure><img src="img/ring4.webp" class="img-fluid" alt=""></figure>
                        <figure><img src="img/ring4.webp" class="img-fluid" alt=""></figure>
                        <figure><img src="img/ring4.webp" class="img-fluid" alt=""></figure>
                        <figure><img src="img/ring4.webp" class="img-fluid" alt=""></figure>
                        <figure><img src="img/ring4.webp" class="img-fluid" alt=""></figure>
                        <figure><img src="img/ring4.webp" class="img-fluid" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="content-wrapper">
                    <div class="heading-wrapper">
                        <h2 class="title">New Ring</h2>
                        <div class="price">
                            <h4>$158.07 <strike>$158.07</strike></h4>
                        </div>
                        <ul class="stars">
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </ul>
                    </div>
                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e iusmod tempor incididunt ut labore et dolor.
                        </p>
                    </div>
                    <div class="all-variation">
                        <div class="stock for-flex">
                            <span class="property">Availability</span>
                            <span class="value">In stock</span>
                        </div>
                        <div class="color for-flex">
                            <span class="property">Colour</span>
                            <span class="value"><img src="img/ring4.webp" alt="" class="img-fluid"></span>
                        </div>
                        <div class="quantity for-flex">
                            <span class="property">Quantity</span>
                            <div class="input-group">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.2" height="12.2" viewBox="0 0 12.2 12.2">
                                        <path id="Icon_metro-plus" data-name="Icon metro-plus" d="M14.39,6.5H10.2V2.309a.381.381,0,0,0-.381-.381H7.527a.381.381,0,0,0-.381.381V6.5H2.952a.381.381,0,0,0-.381.381V9.172a.381.381,0,0,0,.381.381H7.146v4.194a.381.381,0,0,0,.381.381H9.815a.381.381,0,0,0,.381-.381V9.553H14.39a.381.381,0,0,0,.381-.381V6.884A.381.381,0,0,0,14.39,6.5Z" transform="translate(-2.571 -1.928)" fill="#585858" />
                                    </svg>
                                </button>
                                <input type="number" class="form-control">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.001" height="3" viewBox="0 0 14.001 3">
                                        <path id="Icon_awesome-minus" data-name="Icon awesome-minus" d="M13,14.625H1a1,1,0,0,0-1,1v1a1,1,0,0,0,1,1H13a1,1,0,0,0,1-1v-1A1,1,0,0,0,13,14.625Z" transform="translate(0 -14.625)" fill="#585858" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="subtotal for-flex">
                            <span class="property">Subtotal</span>
                            <span class="value">$158.07 </span>
                        </div>
                    </div>
                    <div class="button-group">
                        <button class="btn cart-btn" onclick="location.href='cart.php'"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to cart</button>
                        <button class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Detail Sec End Here -->

<!-- Product Description Sec Start Here -->
<section class="description_sec">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-Description-tab" data-bs-toggle="pill" data-bs-target="#pills-Description" type="button" role="tab" aria-controls="pills-Description" aria-selected="true">Products Description</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-Reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-Reviews" type="button" role="tab" aria-controls="pills-Reviews" aria-selected="false">Reviews</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Description" role="tabpanel" aria-labelledby="pills-Description-tab">
                <div class="description-box">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet
                    </p>
                    <div class="detail">
                        <h3>Product Details</h3>
                        <ul>
                            <li>Comodous in tempor ullamcorper miaculis</li>
                            <li>Comodous in tempor ullamcorper miaculis</li>
                            <li>Comodous in tempor ullamcorper miaculis</li>
                        </ul>
                    </div>

                    <h3>SAMPLE Paragraph Text</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet
                    </p>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Reviews" role="tabpanel" aria-labelledby="pills-Reviews-tab">
                <div class="reviews_sec">
                    <div class="heading-wrapper">
                        <h4>Our Clients Reviews</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="all-reviews">
                        <div class="review-box">
                            <div class="review-img">
                                <figure><img src="img/review1.webp" class="img-fluid" alt=""></figure>
                            </div>
                            <div class="review-content">
                                <h3 class="title">John Doe</h3>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <button class="rply">Reply :</button>
                            </div>
                        </div>
                        <div class="review-box">
                            <div class="review-img">
                                <figure><img src="img/review2.webp" class="img-fluid" alt=""></figure>
                            </div>
                            <div class="review-content">
                                <h3 class="title">John Doe</h3>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <button class="rply">Reply :</button>
                            </div>
                        </div>
                        <div class="review-box">
                            <div class="review-img">
                                <figure><img src="img/review3.webp" class="img-fluid" alt=""></figure>
                            </div>
                            <div class="review-content">
                                <h3 class="title">John Doe</h3>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <button class="rply">Reply :</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-box">
                        <div class="heading">
                            <h4>Add Review</h4>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" readonly value="1" placeholder="Your rating" class="form-control">
                                        <div class="rating">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea placeholder="Your Review" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="bottom-bar">
                                        <div class="check">
                                            <input type="checkbox" id="forCheckk" class="form-check-input" />
                                            <label for="forCheckk">By using this form you agree with the storage and handling of your data by this website.</label>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Description Sec End Here -->

<!-- Top Collection Sec Start Here -->
<section class="ring_collection pad-10 top_collection">
    <div class="container-fluid p-0">
        <div class="topbar">
            <div class="title">
                <h3>Top Collection</h3>
                <div class="line"></div>
            </div>
        </div>
        <div class="ring-slider">
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring1.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring2.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring3.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring4.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring5.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring1.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring2.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring3.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring4.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
            <div class="ring-box">
                <a href="product-detail.php">
                    <div class="ring-img">
                        <figure><img src="img/ring5.webp" alt="" class="img-fluid"></figure>
                    </div>
                    <div class="txt">
                        <h4 class="price">£ 45.00 <strike>£ 57.00.</strike></h4>
                        <p>Lorem Ipsum is simply dummy</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Top Collection Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->