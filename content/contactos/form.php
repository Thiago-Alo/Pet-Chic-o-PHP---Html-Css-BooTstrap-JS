<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="#">
                    <div class="input-field">
                        <input type="email" placeholder="Enter your email" required autofocus>
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password"  placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>  

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Remember me</label>
                        </div>
                        <a href="#" class="text">Forgot password?</a>
                    </div>  
                    <div class="input-field button-log">
                        <a href="home.html"> <input type="button" value="Login"></a>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="ext">Don't have register?</span>
                    <a href="#" class="text signup-link">Register now</a>
                </div>
            </div>

            <!--REGISTRATION-->
            <div class="form signup">
                <span class="title">Registration</span>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" required autofocus>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create password" required >
                        <i class="uil uil-lock icon"></i>
                    </div> 
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm password" required >
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>  
                      
                    <div class="login-signup"></div>
                        <div class="input-field button-log">
                            <input type="button" value="Register" class="text login-link">
                        </div>
                    </div> 
                </form>

                <!--<div class="login-signup">
                    <span class="ext">Don't have register?</span>
                    <a href="#" class="text login-link">Login</a>
                </div>-->
            </div>
        </div>
    </div>

    

    <script src="js/form.js"></script>
    

    
</body>
</html>