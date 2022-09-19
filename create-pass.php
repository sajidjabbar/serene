<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/signin.css">
<!-- Stylesheet -->

<!-- Inner Banner Sec Start Here -->
<section class="universal-banner">
    <div class="container">
        <div class="heading">
            <h1>Forget Password</h1>
        </div>
    </div>
</section>
<!-- Inner Banner Sec End Here -->

<!-- Login Sec Start Here -->
<section class="login_sec">
    <div class="before">
        <figure><img src="img/login-before.webp" alt="" class="img-fluid"></figure>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="img-box">
                    <figure><img src="img/login1.webp" alt="" class="img-fluid"></figure>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-box">
                    <form action="signin.php">
                        <div class="heading-wrapper">
                            <h2>New Password</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" class="form-control">
                        </div>
                        <div class="button-group">
                            <button class="btn">Save Password</button>
                        </div>
                        <div class="bottom-bar">
                            <p>An email has been sent to reset the password
                                Haven't Received the email yet? <a href="#">Try again</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="after">
        <figure><img src="img/lock.webp" alt="" class="img-fluid"></figure>
    </div>
</section>
<!-- Login Sec End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->