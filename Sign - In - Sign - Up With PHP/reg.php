<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>რეგისტრაცია</title>
</head>
<body>
    <!--<div class="menu">
        <span><i><a href="#">მთავარი</a></span> <span><a href="#">პროდუქტები</a></span> <span><a href="#">ჩვენს შესახებ</a></span><span><a href="#">ტესტ</a></span></i>
      </div>-->


    <!-- singuppppppppppppppppppp -->
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="reg" action="signup.inc.php" method="post">
                    <div class="reg__field">
                        <i class="reg__icon fas fa-user"></i>
                        <input type="text" class="reg__input"  name="first_name" placeholder="სახელი">
                    </div>
                    <div class="reg__field">
                        <i class="reg__icon fas fa-user"></i>
                        <input type="text" class="reg__input" name="last_name"placeholder="გვარი">
                    </div>
                    <div class="reg__field">
                        <i class="reg__icon fas fa-user"></i>
                        <input type="text" class="reg__input" name="userMail" placeholder="Email">
                    </div>
                    <div class="reg__field">
                        <i class="reg__icon fas fa-lock"></i>
                        <input type="password" class="reg__input"  name="pwd" placeholder="პაროლი">
                    </div>
                    <div class="reg__field">
                        <i class="reg__icon fas fa-lock"></i>
                        <input type="password" class="reg__input"  name="pwdr" placeholder="გაიმეორეთ პაროლი">
                    </div>
                    <button class="button reg__submit" type="submit" name="signup">
                        <span class="button__text">რეგისტრაცია</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>


    <!-- /singuppppppppppppppppppp -->

                <div class="social-reg">
                    <h3></h3>
                    <div class="social-icons">
                        <!--<a href="#" class="social-reg__icon fab fa-instagram"></a>
                        <a href="#" class="social-reg__icon fab fa-facebook"></a>
                        <a href="#" class="social-reg__icon fab fa-twitter"></a>-->
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