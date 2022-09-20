<!-- App Include Here --> <?php include 'inc/app.php'; ?>
<!-- App Include Here -->
<!-- Stylesheet -->
<link rel="stylesheet" href="css/profile.css">
<!-- Stylesheet -->
<!-- Inner Banner Sec Start Here -->
<section class="universal-banner">
    <div class="container">
        <div class="heading">
            <h1>My Account</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Sec End Here -->
<!-- Profile Section Start Here -->
<section class="profile_section">
    <div class="container">
        <div class="all_profile">
            <div class="complete_profile_section">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-12">
                        <div class="all_tabs">
                            <div class="for_account">
                                <span>My Accounts</span>
                            </div>
                            <div class="for_profile_img">
                                <figure>
                                    <img src="img/profile.png" alt="">
                                </figure>
                            </div>
                            <div class="user_name">
                                <h5>John Doe</h5>
                                <a href="mailto: myemail@gmail.com">myemail@gmail.com</a>
                            </div>
                            <ul class="nav nav-tabs tabs_side_bar" id="myTab" role="tablist">
                                <!-- <li class="nav-item tabs_button_wrapper " role="presentation">
                                <button class="tabs_controller" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Calendar</button>
                            </li> -->
                                <li class="nav-item tabs_button_wrapper" role="presentation">
                                    <button class=" tabs_controller active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="home" aria-selected="true">Account</button>
                                </li>
                                <li class="nav-item tabs_button_wrapper " role="presentation">
                                    <button class=" tabs_controller" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Bookings</button>
                                </li>
                                <li class="nav-item tabs_button_wrapper " role="presentation">
                                    <button class="tabs_controller" onclick="window.location.href = 'login.php'">Logout</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-md-12 px-2">
                        <div class="al_tabs_start">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <!-- ======  PROFILE TAB  START  ====== -->
                                    <div class="basic_information">
                                        <div class="main_heading">
                                            <h3>Basic Information</h3>
                                        </div>
                                        <div class="profile_box">
                                            <div class="top_section">
                                                <div class="left_side">
                                                    <figure>
                                                        <img src="img/profile_2.png" alt="">
                                                    </figure>
                                                    <div class="upload_option">
                                                        <h4>Photo</h4>
                                                        <label for="upload_now">Upload / Change Photo <input type="file" hidden id="upload_now"></label>
                                                    </div>
                                                </div>
                                                <div class="right_side">
                                                    <span class="edit_profile">Edit profile</span>
                                                </div>
                                            </div>
                                            <div class="porfile_information">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sm-6">
                                                        <div class="single_info">
                                                            <span class="ques">First Name</span>
                                                            <span class="answ">Lorem</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sm-6 ms-auto">
                                                        <div class="single_info">
                                                            <span class="ques">Last Name</span>
                                                            <span class="answ">Ipsum</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sm-6">
                                                        <div class="single_info">
                                                            <span class="ques">Phone</span>
                                                            <span class="answ">123 - 456 - 789</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sm-6 ms-auto">
                                                        <div class="single_info">
                                                            <span class="ques">Email</span>
                                                            <span class="answ">Serensloth143@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-sm-9">
                                                        <div class="single_info">
                                                            <span class="ques">Password</span>
                                                            <span class="answ">**********
                                                                <span class="password change_password_now">Change Password</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home_address_part">
                                                <div class="top_text">
                                                    <div class="for_left">
                                                        <h4>Home Address</h4>
                                                    </div>
                                                    <div class="right_addres">
                                                        <span class="Change_Your_Address">Change Address</span>
                                                    </div>
                                                </div>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's</p>
                                                <div class="complete_address">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                                                            <div class="address">
                                                                <span class="quest">City</span>
                                                                <span class="answer">Lorem Ipsum</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                                                            <div class="address">
                                                                <span class="quest">State</span>
                                                                <span class="answer">Lorem Ipsum</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                                                            <div class="address">
                                                                <span class="quest">Province</span>
                                                                <span class="answer">Lorem Ipsum</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-6 ">
                                                            <div class="address">
                                                                <span class="quest">Zip Code</span>
                                                                <span class="answer">Lorem Ipsum</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ====== PROFILE TAB END  ====== -->
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="my_orders_start_here">
                                        <div class="order_table_start ">
                                            <div class="top_heading">
                                                <h3>My Orders</h3>
                                            </div>
                                            <div class="shodowed_box">
                                                <div class="table_start">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="order_no">OrderNo</th>
                                                                <th class="order_date">Order Date</th>
                                                                <th class="order_status">Status</th>
                                                                <th class="payment_status">Payment Status</th>
                                                                <th class="total">Total</th>
                                                                <th class="view_option"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="no_1">#1084598423154</td>
                                                                <td class="no_2">04-12-21</td>
                                                                <td class="no_3">Confirm</td>
                                                                <td class="no_4"><span class="status">Paid</span></td>
                                                                <td class="no_5">$590.00</td>
                                                                <td class="no_6 view_order_detail">view Details</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no_1">#1084598423154</td>
                                                                <td class="no_2">04-12-21</td>
                                                                <td class="no_3">Confirm</td>
                                                                <td class="no_4"><span class="status">Paid</span></td>
                                                                <td class="no_5">$590.00</td>
                                                                <td class="no_6 view_order_detail">view Details</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no_1">#1084598423154</td>
                                                                <td class="no_2">04-12-21</td>
                                                                <td class="no_3">Confirm</td>
                                                                <td class="no_4"><span class="status">Paid</span></td>
                                                                <td class="no_5">$590.00</td>
                                                                <td class="no_6 view_order_detail">view Details</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no_1">#1084598423154</td>
                                                                <td class="no_2">04-12-21</td>
                                                                <td class="no_3">Confirm</td>
                                                                <td class="no_4"><span class="status">Paid</span></td>
                                                                <td class="no_5">$590.00</td>
                                                                <td class="no_6 view_order_detail">view Details</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no_1">#1084598423154</td>
                                                                <td class="no_2">04-12-21</td>
                                                                <td class="no_3">Confirm</td>
                                                                <td class="no_4"><span class="status">Paid</span></td>
                                                                <td class="no_5">$590.00</td>
                                                                <td class="no_6 view_order_detail">view Details</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="the_pagination">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item disabled">
                                                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-left"></i></a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order_detail_page hide">
                                            <div class="col-lg-10">
                                                <div class="top_heading">
                                                    <h3>My Orders</h3>
                                                    <h4>#1084598423154</h4>
                                                </div>
                                                <div class="detail_box">
                                                    <div class="single_row">
                                                        <span class="question">Product :</span>
                                                        <span class="answer"><img src="img/order.png" alt=""></span>
                                                    </div>
                                                    <div class="single_row">
                                                        <span class="question">Product Name :</span>
                                                        <span class="answer">New Ring </span>
                                                    </div>
                                                    <div class="single_row">
                                                        <span class="question">Sub Total :</span>
                                                        <span class="answer">$ 8.00</span>
                                                    </div>
                                                    <div class="single_row">
                                                        <span class="question">Shipping :</span>
                                                        <span class="answer">$ 2</span>
                                                    </div>
                                                    <div class="single_row">
                                                        <span class="question">Payment method :</span>
                                                        <span class="answer">Credit Card</span>
                                                    </div>
                                                    <div class="single_row">
                                                        <span class="question">Total :</span>
                                                        <span class="answer">$ 10.00</span>
                                                    </div>
                                                    <div class="book_btns">
                                                        <div class="form_row">
                                                            <button class="with_back me-2 back_btn">Back</button>
                                                            <button class="border_transparent">Print</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">About</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="update_profile hide">
                <div class="toop_heading">
                    <h3>Basic Information</h3>
                </div>
                <form action="" method="post">
                    <div class="top_change_image">
                        <div class="left_side">
                            <img src="img/profile.png" alt="">
                            <div class="text">
                                <span>Jpeg or Png maximum size (5mb)</span>
                                <label for="change_image">
                                    <span>Upload Photo</span>
                                    <input type="file" hidden id="change_image">
                                </label>
                            </div>
                        </div>
                        <div class="right_side text-end">
                            <h4>Processing</h4>
                            <img src="img/loader.png" alt="">
                        </div>
                    </div>
                    <div class="form_start">
                        <div class="row">
                            <div class="col-md-6 mt-4"><input type="text" name="" placeholder="First Name" id=""></div>
                            <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Last Name" id=""></div>
                            <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Phone" id=""></div>
                            <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Email" id=""></div>
                        </div>
                        <div class="form_row mt-3">
                            <button class="with_back me-2">Save</button>
                            <button class="border_transparent">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 mx-auto hide">
                <div class="change_address">
                    <div class="toop_heading">
                        <h3>Change Address</h3>
                    </div>
                    <form action="" method="post">
                        <div class="form_start">
                            <div class="row">
                                <div class="col-md-6 mt-4"><input type="text" name="" placeholder="First Name" id="">
                                </div>
                                <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Last Name" id="">
                                </div>
                                <div class="col-md-12 mt-4"><input type="text" name="" placeholder="Address" id="">
                                </div>
                                <div class="col-md-4 mt-4"><input type="text" name="" placeholder="Street" id="">
                                </div>
                                <div class="col-md-4 mt-4"><input type="text" name="" placeholder="City" id="">
                                </div>
                                <div class="col-md-4 mt-4"><input type="text" name="" placeholder="State" id="">
                                </div>
                                <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Zip Code" id="">
                                </div>
                                <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Country" id=""></div>
                            </div>
                            <div class="form_row mt-3">
                                <button class="with_back me-2">Save</button>
                                <button class="border_transparent">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 mx-auto hide">
                <div class="change_password">
                    <div class="toop_heading">
                        <h3>Change Password</h3>
                    </div>
                    <form action="" method="post">
                        <div class="form_start">
                            <div class="row">
                                <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Current Password" id="">
                                </div>
                                <div class="col-md-6 mt-4"><input type="text" name="" placeholder="New Password" id="">
                                </div>
                                <div class="col-md-6 mt-4"><input type="text" name="" placeholder="Confirm Password" id=""></div>
                                <div class="col-md-6 mt-4">
                                    <div class="form_row">
                                        <button class="with_back me-2">Save</button>
                                        <button class="border_transparent">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profile Section Start Here -->
<!-- Footer Include Here --> <?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->