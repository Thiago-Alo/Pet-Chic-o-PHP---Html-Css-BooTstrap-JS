
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Pet Chicão</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/faviconlogo.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
    <div class="big-cont">
    <div>
        <img class="login-dog" src="img/login-removebg-preview.png" alt="">
    </div>
    <div class="container">
    <img class="logoform" src="img/logojunto-removebg-preview.png" alt="">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="db/login.php" method="post">
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Enter your email" required autofocus>
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Enter your password" required>
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
                        <button class="btn-jumbo" type="submit" >Login</button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="ext">Don't have register?</span>
                    <a href="#" class="text signup-link">Register now</a>
                </div>
            </div>
        
            <!--<?php
                if(isset($_GET['res'])){
                    if($_GET['res'] == 'registook')
                        echo '<div class="alert alert-success" role="alert">Registo efetuado com sucesso</div>';
                }
            ?>-->

    
            <!--REGISTRATION-->
            
            <div class="form signup">
                <span class="title">Registration</span>
                <form action="db/insertUtilizador.php" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your name" name="user" required autofocus>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="pass" placeholder="Create password" required >
                        <i class="uil uil-lock icon"></i>
                    </div> 
                    <div class="input-field">
                        <input type="password" class="password" name="pass2" placeholder="Confirm password" required >
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>  
                      
                    <div class="login-signup"></div>
                        <div class="input-field button-log">
                            <button type="submit">Register</button>
                        </div>
                        <a href="#" class="text login-link" style="text-align: center;">Login</a>
                    </div> 
                
                    </form>
                    <!--<?php
                        if(isset($_GET['res'])){
                            if($_GET['res'] == 'erro')
                                echo '<div class="alert alert-danger" role="alert">Username already exist</div>';
                            else if($_GET['res'] == 'invalido')
                            echo '<div class="alert alert-danger" role="alert">Error viewing the page</div>';
                            else if($_GET['res'] == 'passnaocorresponde')
                                echo '<div class="alert alert-warning" role="alert">The passwords are different</div>';
                        }
                    ?>
                <div class="login-signup">
                    <span class="ext">Don't have register?</span>
                    <a href="#" class="text login-link">Login</a>
                </div>-->
            </div>
        </div>
        <div>
            <img class="login-dog" src="img/accord-removebg-preview.png" alt="">
        </div>
    </div>
    
    </div>
    

    <script src="js/login.js"></script>
    

    
</body>
</html>