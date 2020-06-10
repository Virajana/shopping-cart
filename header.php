<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/footer-logo.jpg" />
    <title>Hello Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">         
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 

    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">        
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello_cart@onlineshop.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        (011) 2 375 375
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-user"></i>
                        <?php  if(isset($_SESSION['name'])){
                            echo "Hello," . $_SESSION["name"] . " "; }
                            else echo "Please Login";?>
                        </div>

                    </div>
                    <div class="ht-right">
                        <a href="logout.php" class="login-panel"></i>
                            <?php  if(isset($_SESSION['name'])){
                                echo "Logout"; }
                                else echo "";?></a> 
                        </div>
                        <div class="ht-right">
                            <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>          
                        </div>
                        <div class="ht-right">
                            <a href="signup.php" class="login-panel"><i class="fa fa-sign-in"></i>Sign Up</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="inner-header">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo1.png" alt="" width="148px" height="88px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="advanced-search">                            
                                    <div class="input-group">
                                        <input type="text" placeholder="What do you need?">
                                        <button type="button"><svg class="bi bi-search" href="search.php" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
                                          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
                                      </svg></i></button>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 text-right col-md-3">
                            <ul class="nav-right">
                              <li class="cart-icon">
                                <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i>
                                    <span>*</span>
                                </a>

                            </li>
                            <li class="cart-price">My Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Categories</span>
                        <ul class="depart-hover">
                            <li class=""><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Watches</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- Header End -->