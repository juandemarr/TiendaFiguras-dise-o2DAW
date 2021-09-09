<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php';?>
</head>

<body>

    <?php include 'header.php';?>
    <?php include 'menus.php';?>

    <section id="register">
        
        <!-- <p>Username</p>
            <input type="text" name="" id="">
            <br>
            <p>Password</p>
            <input type="text" name="" id="">
            <br>
            <br>
            <p>Forgot your Password?</p>
            <br>
            <button>Login</button>
            <br>
            <br>
            <hr>
            <br>
            <p>or connect with</p>
            <br>
             <a href="" target="_blank"><img src="img/facebook.png" id="social" alt="Facebook" title="Facebook"></a>
            <a href="" target="_blank"><img src="img/gmail.png" id="social" alt="Twitter" title="Twitter"></a> -->

        <form action="" method="POST">
            <h2>Sign up</h2>

            <label for="name">Name:</label>
            <input type="text" id="name"/>
                
            <label for="surname">Surname:</label>
            <input type="text" id="surname"/>
                
            <label for="email">E-mail:</label>
            <input type="email" id="email"/>

            <label for="password">Password:</label>
            <input type="password" id="password"/>

            <label for="password2">Repeat your password:</label>
            <input type="password" id="password2"/>

            <p class="pCenter pLogin">or register with</p>

            <div class="socialLogin">
                <div>
                    <button><img src="img/facebook.svg" alt="Login with Facebook"></button>
                    <button><img src="img/twitter.svg" alt="Login with Twitter"></button>
                </div>
            </div>

            <input type="submit" class="buttonBlue" value="Register"/>
        </form>
    </section>
    
    <?php include 'footer.php';?>
</body>
</html>