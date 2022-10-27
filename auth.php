<!-- =============== START OF LOGIN & REGISTER POPUP =============== -->
<div id="login-register-popup" class="small-dialog zoom-anim-dialog mfp-hide">

<!-- ===== Start of Signin wrapper ===== -->
<div class="signin-wrapper">
<div class="small-dialog-headline">
    <h4 class="text-center">Sign in</h4>
</div>


<div class="small-dialog-content">

    <!-- Start of Login form -->
    <form id="cariera_login"
        action="login_action.php" 
        method="post">
        <p class="status"></p>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" />
        </div>

        <div class="form-group">
            <div class="checkbox pad-bottom-10">
                <input id="check1" type="checkbox" name="remember" value="yes">
                <label for="check1">Keep me signed in</label>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" value="Sign in" class="btn btn-main btn-effect nomargin" />
        </div>
    </form>
    <!-- End of Login form -->

    <div class="bottom-links">
        <span>
            Not a member?
            <a  class="signUpClick">Sign up</a>
        </span>
        <a  class="forgetPasswordClick pull-right">Forgot Password</a>
    </div>
</div>

</div>
<!-- ===== End of Signin wrapper ===== -->



<!-- ===== Start of Signup wrapper ===== -->
<div class="signup-wrapper">
<div class="small-dialog-headline">
    <h4 class="text-center">Sign Up</h4>
</div>

<div class="small-dialog-content">

    <!-- Start of Registration form -->
    <form id="cariera_registration" action="register_action.php" method="POST">
        <p class="status"></p>

        <div class="form-group">
            <label for="movify_user_login">Name</label>
            <input name="name" id="movify_user_login" class="form-control" type="text"/>
        </div>

        <div class="form-group">
            <label for="movify_user_email">Email</label>
            <input name="email" id="movify_user_email" class="form-control" type="email"/>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" id="movify_password" class="form-control" type="password"/>
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input name="phone" id="movify_user_login" class="form-control" type="tel"/>
        </div>

        <div class="form-group">
            <button class="btn btn-main btn-effect nomargin">Register</button>
        </div>
    </form>
    <!-- End of Registration form -->

    <div class="bottom-links">
        <span>
            Already have an account?
            <a class="signInClick">Sign in</a>
        </span>

        <a class="forgetPasswordClick pull-right">Forgot Password</a>
    </div>

</div> <!-- .small-dialog-content -->

</div>
<!-- ===== End of Signup wrapper ===== -->



<!-- ===== Start of Forget Password wrapper ===== -->
<div class="forgetpassword-wrapper">
<div class="small-dialog-headline">
    <h4 class="text-center">Forgotten Password</h4>
</div>

<div class="small-dialog-content">

    <!-- Start of Forger Password form -->
    <form id="forget_pass_form" action="#"  method="post">
        <p class="status"></p>

        <div class="form-group">
            <label for="password">Email Address *</label>
            <input type="email" name="user_login" class="form-control" id="email3" placeholder="Email Address *" />
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Get New Password" class="btn btn-main btn-effect nomargin" />
        </div>
    </form>
    <!-- End of Forger Password form -->

    <div class="bottom-links">
        <a class="cancelClick">Cancel</a>
    </div>

</div><!-- .small-dialog-content -->

</div>
<!-- ===== End of Forget Password wrapper ===== -->

</div>