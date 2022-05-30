<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>შესვლა</title>
</head>
<body>
   <!-- <div class="menu">
        <span><i><a href="#">მთავარი</a></span> <span><a href="#">პროდუქტები</a></span> <span><a href="#">ჩვენს შესახებ</a></span><span><a href="#">ტესტ</a></span></i>
      </div>-->


    <!-- Login -->
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="login.inc.php" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="Email" name="userMail">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="პაროლი" name="pwd">
                    </div>
                    <button class="button login__submit" type="submit" name="login" >
                        <span class="button__text">შესვლა</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
    <!-- /Login -->

                <div class="social-login">
                    <h3></h3>
                    <div class="social-icons">
                        <!--<a href="#" class="social-login__icon fab fa-instagram"></a>
                        <a href="#" class="social-login__icon fab fa-facebook"></a>
                        <a href="#" class="social-login__icon fab fa-twitter"></a>-->
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
</body>
</html>