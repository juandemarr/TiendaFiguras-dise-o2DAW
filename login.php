<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php';?>
</head>

<body>

    <?php include 'header.php';?>
    <?php include 'menus.php';?>

    <section id="login">
        <form action="" method="POST">
            <h2>Sign in</h2>
                
            <label for="email">E-mail:</label>
            <input type="email" id="email"/>

            <label for="password">Password:</label>
            <input type="password" id="password"/>

            <p class="pCenter pLogin">or connect with</p>

            <div class="socialLogin">
                <div>
                    <button><img src="img/facebook.svg" alt="Login with Facebook"></button>
                    <button><img src="img/twitter.svg" alt="Login with Twitter"></button>
                </div>
            </div>

            <input type="submit" class="buttonBlue" value="Login"/>

            <a class="bold aRegister" href="register.php">Don't you have an account? Register</a>
        </form>
        
    </section>
    
    <?php include 'footer.php';?>
</body>
</html>