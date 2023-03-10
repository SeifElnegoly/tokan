


<!DOCTYPE html>
<html dir="rtl">

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
        rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


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



        <section class="login-form-section" id="login-form-section">
<div class="container">
<form action="" method="POST">




            <div class="row" >
                <h3>?????????? <span>???????? ????????</span></h3>
            </div>

            <div class="ask-div" style="text-align:right;">
            <p>?????? ?????? ???????? ???????? ???????? ???????????? ???????????? ?????? ???????? ?????????? ????????????</p>
            </div>

            <div class="title" style="border-bottom:1px solid black;text-align:right;">
            <div class="div-title">
                <h4>???????????????? ??????????????</h4>
            </div>
            </div>

            <div class="row">
            <label for="firstName">?????????? ??????????<span style="color:red;">*</span></label>
            <input type="text" id="firstName" name="firstName">
            <?php
            $errors = array();
            if(isset($_POST['firstName'])) {
                if(empty($_POST['firstName'])) {
                    $errors['firstName'] = "<div class='error' style='color:red'>Enter Your First Name</div>";
                    echo $errors['firstName'];
                }
            }

            ?>
            </div>

            <div class="row">
            <label for="lastName">?????????? ????????????<span style="color:red;">*</span></label>
            <input type="text" id="lastName" name="lastName">
            <?php
            $errors = array();
            if(isset($_POST['lastName'])) {
                if(empty($_POST['lastName'])) {
                    $errors['lastName'] = "<div class='error' style='color:red'>Enter Your Last Name</div>";
                    echo $errors['lastName'];
                }
            }

            ?>
            </div>

            <div class="row">
            <label for="emailAddress">???????????? ????????????????????<span style="color:red;">*</span></label>
            <input type="text" id="emailAddress" name="emailAddress">
            <?php
            $errors = array();
            if(isset($_POST['emailAddress'])) {
                if(empty($_POST['emailAddress'])) {
                    $errors['emailAddress'] = "<div class='error' style='color:red'>Enter Your Email Address</div>";
                    echo $errors['emailAddress'];
                }
            }

            ?>
            </div>

            <div class="row">
            <label for="tel">?????? ???????????? ???? ????????????<span style="color:red;">*</span></label>
            <input type="text" id="tel" name="tel">
            <?php
            $errors = array();
            if(isset($_POST['tel'])) {
                if(empty($_POST['tel'])) {
                    $errors['tel'] = "<div class='error' style='color:red'>Enter Your Phone Number</div>";
                    echo $errors['tel'];
                }
            }

            ?>
            </div>


            <div class="row">
            <label for="fax">????????</label>
            <input type="text" id="fax" name="fax">
            </div>

            <div class="title" style="border-bottom:1px solid black;text-align:right;">
            <div class="div-title">
                <h4>???????????????? ???????????? ????</h4>
            </div>
            </div>

            <div class="row">
            <label for="company">????????????</label>
            <input type="text" id="company" name="company">
            </div>


            <div class="row">
            <label for="firstAddress">?????????????? ??????????<span style="color:red;">*</span></label>
            <input type="text" id="firstAddress" name="firstAddress">
            <?php
            $errors = array();
            if(isset($_POST['firstAddress'])) {
                if(empty($_POST['firstAddress'])) {
                    $errors['firstAddress'] = "<div class='error' style='color:red'>Enter Your Full Address</div>";
                    echo $errors['firstAddress'];
                }
            }

            ?>
            </div>


            <div class="row">
            <label for="secondAddress">?????????????? ????????????</label>
            <input type="text" id="secondAddress" name="secondAddress">
            </div>

            <div class="row">
            <label for="city">??????????????<span style="color:red;">*</span></label>
            <input type="text" id="city" name="city">
            <?php
            $errors = array();
            if(isset($_POST['city'])) {
                if(empty($_POST['city'])) {
                    $errors['city'] = "<br><div class='error' style='color:red'>Enter City</div>";
                    echo $errors['city'];
                }
            }

            ?>
            </div>

            <div class="row">
            <label for="postalCode">?????????? ????????????</label>
            <input type="text" id="postalCode" name="postalCode">
            </div>

            <div class="row">
            <label for="country">??????????<span style="color:red;">*</span></label>
            <input type="text" id="country" name="country">
            
            <?php
            $errors = array();
            if(isset($_POST['country'])) {
                if(empty($_POST['country'])) {
                    $errors['country'] = "<div class='error' style='color:red'>Enter Your Country</div>";
                    echo $errors['country'];
                }
            }

            ?>
            </div>

            <div class="row">
            <label for="gov">????????????????<span style="color:red;">*</span></label>
            <input type="text" id="gov" name="gov">
            <?php
            $errors = array();
            if(isset($_POST['gov'])) {
                if(empty($_POST['gov'])) {
                    $errors['gov'] = "<div class='error' style='color:red'>Enter Your Gov Name</div>";
                    echo $errors['gov'];
                }
            }

            ?>
            </div>  


            <div class="title" style="border-bottom:1px solid black;text-align:right;">
            <div class="div-title">
                <h4>???????? ???????????? ???????????? ????</h4>
            </div>
            </div>

            <div class="row">
            <label for="password">???????? ????????????<span style="color:red;">*</span></label>
            <input type="password" id="password" name="password">
            <?php
            $errors = array();
            if(isset($_POST['Password'])) {
                if(empty($_POST['Password'])) {
                    $errors['Password'] = "<div class='error' style='color:red'>Enter Your Passcode</div>";
                    echo $errors['Password'];
                }
            }

            ?>
            </div>  



            <div class="row">
            <label for="confirmPassword">???????? ????????????<span style="color:red;">*</span></label>
            <input type="password" id="confirmPassword" name="confirmPassword">
            <?php
            $errors = array();
            if(isset($_POST['confirmPassword'])) {
                if(empty($_POST['confirmPassword'])) {
                    $errors['confirmPassword'] = "<div class='error' style='color:red'>Enter Your Confirm Passcode</div>";
                    echo $errors['confirmPassword'];
                }
            }

            ?>
            </div>  

            <div class="title" style="border-bottom:1px solid black;text-align:right;">
            <div class="div-title">
                <h4>?????????????? ????????????????</h4>
            </div>
            </div>
            
            <div class="row" >
                <label for="postalSub">
                    ??????????
                </label>
                <input type="radio" style="margin:20px;">??????
                    <input type="radio" style="margin:20px;">????
            </div>

            <div class="acceptPolicy">
            <div>
            <input type="checkbox" name="acceptPolicy" id="acceptPolicy">
            <?php

            
if(
    !isset($_POST['acceptPolicy'])) {
    echo '????????';
}
?>

                <label style="width: 200px;margin-left: 30px;">?????? ???????? ???????????? ?????? ???????????????? ??????????????????.</label>
                <button type="submit" style="margin-bottom:20px;">????????????</button>
            </div>
            </div>


        </form>
</div>
</section>



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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <script src="main.js"></script>
</body>

</html>