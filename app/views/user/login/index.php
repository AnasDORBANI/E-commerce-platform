<?php 
session_start();
if (isset($_SESSION['user'])) {
    redirect('home');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?=ASSETS."user/"?>images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=ASSETS."user/"?>css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="<?php echo URLROOT?>Users/init_session" method="post">
                    <span class="login100-form-title p-b-34">
                        Account Login
                    </span>

                    <div class="wrap-input100  validate-input m-b-20" data-validate="Type user name">
                        <input id="first-name" class="input100" type="text" name="username" placeholder="User name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-20" data-validate="Type password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Sign In">
                    </div>

                    <div class="w-full text-center p-t-27 p-b-239">
                        <!-- 
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a> -->
                    </div>

                    <div class="w-full text-center">
                        <a href="<?php echo URLROOT.'Users/register'?>" class="txt3">
                            Register
                        </a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('<?=ASSETS."user/"?>images/bg-01.jpg');"></div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?=ASSETS."user/"?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/select2/select2.min.js"></script>
    <script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
    </script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/daterangepicker/moment.min.js"></script>
    <script src="<?=ASSETS."user/"?>vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?=ASSETS."user/"?>js/main.js"></script>

</body>

</html>