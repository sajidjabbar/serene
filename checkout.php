<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/checkout.css">
<!-- Stylesheet -->

<!-- Inner Banner Sec Start Here -->
<section class="universal-banner">
    <div class="container">
        <div class="heading">
            <h1>Checkout</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Sec End Here -->

<!-- Checkout Start Here -->
<section class="checkout">
    <div class="container">
        <form action="thank-you.php">
            <div class="row">
                <div class="col-lg-5">
                    <div class="first-top-bar">
                        <h3>Shipment Details</h3>
                    </div>
                    <div class="saved-address">
                        <div class="title">
                            <h5>Use Saved Addresses</h5>
                        </div>
                        <!-- Saved Address -->
                        <label class="container">
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark">
                                <div class="select-address">
                                    <div class="selection">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                    </div>
                                    <div class="radio-btn">
                                        <span></span>
                                    </div>
                                    <div class="address-detail">
                                        <div class="top">
                                            <h5><span class="property">Country:</span><span class="value">United
                                                    States</span>
                                            </h5>
                                            <h5><span class="property pl-4">State:</span><span class="value">Texas</span>
                                            </h5>
                                        </div>
                                        <h5><span class="property">Address:</span><span class="value">10515 Fox Ave
                                                Fairdale, Kentucky(KY), 40118</span></h5>
                                        <h5 class="last"><span class="property">Phone:</span><span class="value">+44-123-456-789</span>
                                        </h5>
                                        <div class="button-group">
                                            <button class="btn default disabled">Default</button>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </label>
                        <!-- Saved Address -->
                    </div>
                    <div class="add-new-address">
                        <label class="container"> Add New Address
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="method">Shipment Method</label>
                                    <select id="method" class="form-control">
                                        <option selected>Select Shipment method</option>
                                        <option>Select Shipment method 1</option>
                                        <option>Select Shipment method 2</option>
                                        <option>Select Shipment method 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input type="text" id="Address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Suite">First Name</label>
                                    <input type="text" id="Suite" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="City">Last Name</label>
                                    <input type="text" id="City" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Country">Phone</label>
                                    <input type="text" id="Country" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="State">Email</label>
                                    <input type="text" id="State" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Zip">Address</label>
                                    <input type="text" id="Zip" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="City">City</label>
                                    <input type="text" id="City" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Suite">Suite, Apartment, etc </label>
                                    <input type="text" id="Suite" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Country">Country/Region</label>
                                    <input type="text" id="Country" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="State">State</label>
                                    <input type="text" id="State" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Code">Zip Code</label>
                                    <input type="text" id="Code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input type="checkbox" class="form-check-input" id="check">
                                    <label for="check">Save Shipping Details</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="heading">
                            <h3>Payment Details</h3>
                        </div>
                        <div class="saved-payment-method">
                            <h5>Use Saved Payments</h5>
                            <!-- Saved payments Method -->
                            <!-- <label class="container">
                                <input type="radio" checked="checked" name="payment-radio">
                                <span class="checkmark">
                                    <div class="card-details">
                                        <div class="radio-btn">
                                            <span></span>
                                        </div>
                                        <div class="visa-card">
                                            <div class="img-box">
                                                <figure><img src="img/visa.png" alt="No Image Found">
                                                </figure>
                                            </div>
                                            <div class="input-box">
                                                <label for="card-number">My Personal Card</label><br />
                                                <input id="card-number" value="**********1239" type="text" readonly>
                                            </div>
                                        </div>
                                        <div class="extra-btn">
                                            <button class="btn default disabled">Default</button>
                                            <div class="selection">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </label> -->
                            <label class="container second-card">
                                <input type="radio" name="payment-radio">
                                <span class="checkmark">
                                    <div class="card-details">
                                        <div class="radio-btn">
                                            <span></span>
                                        </div>
                                        <div class="visa-card">
                                            <div class="img-box">
                                                <figure><img src="img/visa.png" alt="No Image Found">
                                                </figure>
                                            </div>
                                            <div class="input-box">
                                                <input id="card-number" value="**********1239" type="text" readonly>
                                            </div>
                                        </div>
                                        <div class="extra-btn">
                                            <button class="btn default disabled">Default</button>
                                            <div class="selection">
                                                <i class="fa fa-check" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </label>

                            <div class="add-new-method">
                                <label class="container"> Add New Payment
                                    <input type="radio" checked="checked" name="payment-radio">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Write Your Card Number" class="form-control">
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="btn">ADD CARD</button>
                            </div>
                            <!-- Saved payments Method -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <div class="second-top-bar">
                        <div class="title pb-4">
                            <h3>Order Summary</h3>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Disscount  Code : ">
                            <button type="button">Submit</button>
                        </div>
                    </div>
                    <div class="cart-product-detail">
                        <div class="title">
                            <h3>Products Details</h3>
                        </div>
                        <div class="checkout-products">
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/ring4.webp" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Whisper Coneflower</h5>
                                        <ul class="variations">
                                            <li><span class="property">Items</span> <span class="value"> (2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$158.07 </h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/ring4.webp" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Whisper Coneflower</h5>
                                        <ul class="variations">
                                            <li><span class="property">Items</span> <span class="value"> (2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$158.07 </h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/ring4.webp" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Whisper Coneflower</h5>
                                        <ul class="variations">
                                            <li><span class="property">Items</span> <span class="value"> (2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$158.07 </h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/ring4.webp" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Whisper Coneflower</h5>
                                        <ul class="variations">
                                            <li><span class="property">Items</span> <span class="value"> (2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$158.07 </h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/ring4.webp" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Whisper Coneflower</h5>
                                        <ul class="variations">
                                            <li><span class="property">Items</span> <span class="value"> (2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$158.07 </h4>
                                </div>
                            </div>
                            <div class="products">
                                <div class="abt-product">
                                    <div class="img-box">
                                        <figure><img src="img/ring4.webp" alt="123"></figure>
                                    </div>
                                    <div class="pro-dtl">
                                        <h5 class="name">Whisper Coneflower</h5>
                                        <ul class="variations">
                                            <li><span class="property">Items</span> <span class="value"> (2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4 class="price">$158.07 </h4>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-details">
                            <div class="item-total">
                                <h4 class="property">Item Total :</h4>
                                <h4 class="value">$50</h4>
                            </div>
                            <div class="item-total">
                                <h4 class="property">Shipment & Delivery</h4>
                                <h4 class="value">$0</h4>
                            </div>
                            <div class="item-total">
                                <h4 class="property">Promo Applied :</h4>
                                <h4 class="value">-$0</h4>
                            </div>
                        </div>

                        <div class="order-total">
                            <h3 class="property">Order Total</h3>
                            <h3 class="value">$45</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-last"></div>
            <div class="confirm-orderDv">
                <div class="checkbox">
                    <input type="checkbox" class="form-check-input" id="for-checkbox">
                    <label for="for-checkbox">Proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.</label>
                </div>
                <div class="button-group">
                    <button type="submit">Confirm Order</button>
                </div>
            </div>
        </form>
    </div>
    <div class="after">
        <figure><img src="img/lock.webp" class="img-fluid"></figure>
    </div>
</section>
<!-- Checkout End Here -->

<!-- Ring Sec Start Here -->
<section class="ring_collection pad-10 top_collection">
    <div class="container-fluid p-0">
        <div class="topbar">
            <div class="title">
                <h3>Recommended Products</h3>
                <div class="line"></div>
            </div>
        </div>
        <div class="ring-slider">
            <div class="ring-box">
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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
<!-- Ring Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->