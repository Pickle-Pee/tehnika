<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tehnika.ru</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="../css/core-style.css">
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <nav class="classy-navbar" id="essenceNav">
                <a class="nav-brand" href="index.php"> <span>Tehnika.ru</span> </a>
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Каталог</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="shop.html">Телевизоры</a></li>
                                        <li><a href="shop.html">Ноутбуки</a></li>
                                        <li><a href="shop.html">Компьютеры</a></li>
                                        <li><a href="shop.html">Apple</a></li>
                                        <li><a href="shop.html">Игры и развлечения</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Обмен и возврат</a></li>
                            <li><a href="#">Помощь</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="admin">Admin Panel</a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <div class="description">
        
        <?php var_dump($items); foreach($items as $a): ?>
        <div class="item">
            <h3><?=$items['title'] ?></h3>
            <h3>Цена: <?=$items['price'] ?></h3>
            <p><?=$items['description'] ?></p>
        </div>
        <?php endforeach?>
    </div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> </a>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>