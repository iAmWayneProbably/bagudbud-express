<!-- 
	Extends the base_no_nav.php that has the header and footer 
-->
<?= $this->extend('layouts/base_no_nav.php') ?> 

<!-- 
	Inserts the whole section to the base_no_nav.php
 -->
<?= $this->section('content'); ?>
    <div class="con container-fluid">
        <div class="d-flex">

            <!-- left container -->

            <div class="left-container d-none d-lg-inline-flex justify-content-center align-items-center">
                <div class="left bg-primary">
                    <span class="left-links d-flex flex-column justify-content-end align-items-center text-white pb-4">
                        <div class="links">
                            <a href="#" class="link-light pe-2">Terms and Conditions</a> 
                            | 
                            <a href="#" class="link-light ps-2">Privacy Policy</a>
                        </div>
                        <span>All Rights Reserved 2021</span>
                    </span>
                </div>
                <img src="<?= base_url()?>/public/assets/img/image.svg" class="main-image img-fluid" alt="">
            </div>

            <!-- right container -->

            <div class="right container-fluid d-flex justify-content-center align-items-center">
                <div class="form-container d-flex flex-column align-items-center">
                    <img src="<?= base_url(); ?>/public/assets/img/Logo.svg" class="img-fluid" alt="logo">
                    <form action="" class="container d-flex flex-column">
                        <h1 class="signin-title">Sign in</h1>
                        <div class="mt-4 mb-3">
                            <label for="emailOrUsername" class="form-label">Email or Username</label>
                            <input type="email" class="form-control py-3" id="emailOrUsername" placeholder="Email or Username">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="email" class="form-control py-3" id="password" placeholder="Password">
                        </div>
                        <div class="join-now-container d-flex justify-content-between px-1">
                            <p class="btn">Don't have an account?<a href="" class="join-now-btn link-dark ms-2">Join now</a></p>
                            <span class="btn"><a href="" class="forgot-password-btn text-black pb-0">Forgot Password?</a></span>
                        </div>
                        <button type="submit" class="submit-btn btn btn-outline-primary btn-lg text-black mb-4">Sign in</button>
                    </form>

                    <p class="or-separator text-center text-secondary">or</p>

                    <!-- social media buttons -->

                    <div class="container d-flex flex-column">
                        <button class="facebook-btn btn btn-outline-secondary btn-lg text-black mb-4"><img src="<?= base_url() ?>/public/assets/img/facebook.svg" class="facebook-img" alt=""> Sign in with Facebook</button>
                        <button class="google-btn btn btn-outline-secondary btn-lg text-black mb-4"><img src="<?= base_url() ?>/public/assets/img/search.svg" class="google-img" alt="">Sign in with Google</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>