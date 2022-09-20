<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/cart.css">
<!-- Stylesheet -->

<!-- Inner Banner Sec Start Here -->
<section class="universal-banner">
    <div class="container">
        <div class="heading">
            <h1>Basket</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Sec End Here -->

<!-- Basket Sec Start Here -->
<section class="basket_sec">
    <div class="before">
        <figure><img src="img/lock.webp" alt="" class="img-fluid"></figure>
    </div>
    <div class="container-fluid">
        <div class="cart-img">
            <figure><img src="img/cart-img.png" alt="" class="img-fluid"></figure>
        </div>
        <div class="basket-table table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="delete"></th>
                        <th class="product"></th>
                        <th class="name">PRODUCT NAME</th>
                        <th class="price">$UNIT PRICE</th>
                        <th class="quntity">QUANTITY</th>
                        <th class="sub-total">SUB TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="delete">
                            <button>
                                <img src="img/delete.png" alt="" class="img-fluid">
                            </button>
                        </td>
                        <td class="product">
                            <figure><img src="img/ring4.webp" alt="" class="img-fluid"></figure>
                        </td>
                        <td class="name">New Ring 01</td>
                        <td class="price">$158.07 </td>
                        <td class="quntity">
                            <div class="form-group">
                                <input type="number" class="form-control">
                            </div>
                        </td>
                        <td class="sub-total">$316.14</td>
                    </tr>
                    <tr>
                        <td class="delete">
                            <button>
                                <img src="img/delete.png" alt="" class="img-fluid">
                            </button>
                        </td>
                        <td class="product">
                            <figure><img src="img/ring4.webp" alt="" class="img-fluid"></figure>
                        </td>
                        <td class="name">New Ring 01</td>
                        <td class="price">$158.07 </td>
                        <td class="quntity">
                            <div class="form-group">
                                <input type="number" class="form-control">
                            </div>
                        </td>
                        <td class="sub-total">$316.14</td>
                    </tr>
                    <tr>
                        <td class="delete">
                            <button>
                                <img src="img/delete.png" alt="" class="img-fluid">
                            </button>
                        </td>
                        <td class="product">
                            <figure><img src="img/ring4.webp" alt="" class="img-fluid"></figure>
                        </td>
                        <td class="name">New Ring 01</td>
                        <td class="price">$158.07 </td>
                        <td class="quntity">
                            <div class="form-group">
                                <input type="number" class="form-control">
                            </div>
                        </td>
                        <td class="sub-total">$316.14</td>
                    </tr>
                    <tr>
                        <td class="delete">
                            <button>
                                <img src="img/delete.png" alt="" class="img-fluid">
                            </button>
                        </td>
                        <td class="product">
                            <figure><img src="img/ring4.webp" alt="" class="img-fluid"></figure>
                        </td>
                        <td class="name">New Ring 01</td>
                        <td class="price">$158.07 </td>
                        <td class="quntity">
                            <div class="form-group">
                                <input type="number" class="form-control">
                            </div>
                        </td>
                        <td class="sub-total">$316.14</td>
                    </tr>
                    <tr>
                        <td class="delete">
                            <button>
                                <img src="img/delete.png" alt="" class="img-fluid">
                            </button>
                        </td>
                        <td class="product">
                            <figure><img src="img/ring4.webp" alt="" class="img-fluid"></figure>
                        </td>
                        <td class="name">New Ring 01</td>
                        <td class="price">$158.07 </td>
                        <td class="quntity">
                            <div class="form-group">
                                <input type="number" class="form-control">
                            </div>
                        </td>
                        <td class="sub-total">$316.14</td>
                    </tr>
                </tbody>
            </table>
            <div class="bottom-bar">
                <div class="form-group">
                    <label>Discount codes</label>
                    <div class="input-group">
                        <input type="text" placeholder="Enter your coupon code if you have one." class="form-control">
                        <button class="btn">APPLY</button>
                    </div>
                </div>
                <div class="total-details">
                    <ul class="details">
                        <li>
                            <span class="property">Subtotal</span>
                            <span class="value">$ 700.00</span>
                        </li>
                        <li>
                            <span class="property">Estimated Shipping Cost</span>
                            <span class="value">$40.15</span>
                        </li>
                        <li class="strong">
                            <span class="property">TOTAL COST</span>
                            <span class="value">$ 740.15</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="button-group">
            <div class="left-side">
                <button class="btn shopping" onclick="location.href='shop.php'">Continue Shopping</button>
                <button class="btn update">Update Basket</button>
            </div>
            <div class="right-side">
                <button class="btn checkout" onclick="location.href='checkout.php'">Proceed To Checkout</button>
                <p>You’ll still have a chance to review your order</p>
            </div>
        </div>
    </div>
    <div class="after">
        <figure><img src="img/ball.webp" alt="" class="img-fluid"></figure>
    </div>
</section>
<!-- Basket Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->