<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="TokanLogo.png" type="image/x-icon">

    <title>TOKAN</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
        rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php">
                        <img class="logo-img" src="TokanLogo.png" alt="Logo">
                    </a>

                    <div class="navbar-collapse" id="">
                        <div class="custom_menu-btn">
                            <button onclick="openNav()">
                                <span class="s-1"> </span>
                                <span class="s-2"> </span>
                                <span class="s-3"> </span>
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                            <a href="index.php">HomePage</a>
                                <a href="signup.php">SignUp</a>
                                <a href="login.php">Login</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="detail-box">
                            <h2>
                                best design
                            </h2>
                            <h1>
                                WEB APPS / WEB PAGES
                            </h1>
                            <div>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="img-me">
                            <img src="computers.svg" alt="" style="width: 500px; height: 850px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end slider section -->
</div>



    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            &copy; 2023. Made with &hearts; by
            <a href="http://fb.com/logic.stan">Seif Abdelmonem Elnegoly</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>

    <script>
    function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
            .querySelector(".custom_menu-btn")
            .classList.toggle("menu_btn-style");
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.min.js" integrity="sha512-vCI1Ba/Ob39YYPiWruLs4uHSA3QzxgHBcJNfFMRMJr832nT/2FBrwmMGQMwlD6Z/rAIIwZFX8vJJWDj7odXMaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>

</body>

</html>