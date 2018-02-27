<!DOCTYPE html>
<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../../application/view/assets/apple-touch-icon.png">

    <link rel="stylesheet" href="../../application/view/assets/css/bootstrap.min.css">

    <!--For Plugins external css-->
    <link rel="stylesheet" href="../../application/view/assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="../../application/view/assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="../../application/view/assets/css/responsive.css" />

    <script src="../../application/view/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body data-spy="scroll" data-target="#main-navbar">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<div id="menubar" class="main-menu">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar
            -collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">home</a></li>
                    <li><a href="/game/start">game</a></li>
                    <li><a href="/score/all">score</a></li>


                    <?php
                    //
                    if(isset ($_SESSION['User'])){ ?>
                <li><a href="/account/name"><?echo "$_SESSION('name')";}else{?></a></li>

                    <li><a href="/account/login"><?echo 'log in'; ?></a></li>
                    <li><a href="/account/register"><? echo 'sign in';}?></a></li>
                    <?php
                    //
                    if(isset ($_SESSION['User'])){ ?>
                    <li><a href="/account/unlogin"><?echo 'unlogin';}?></a></li>
                    <li><a href="/contact/me">contact Us</a></li>
                    <!-- phone number
                    <div class="contact-number text-right">
                        <ul><li class="">(+001122334)</li></ul>
                    </div>
                       -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>



<?php
/**
 *
 */
echo $content; ?>


<script src="../../application/view/assets/js/vendor/jquery-1.11.2.min.js"></script>
<script src="../../application/view/assets/js/vendor/bootstrap.min.js"></script>

<script src="../../application/view/assets/js/plugins.js"></script>
<script src="../../application/view/assets/js/main.js"></script>
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container">

        <div class="row">
            <div class="main-footer">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <h2>Game</h2>
                        <ul>
                            <li><a href="/game/start">Start Game</a></li>
                            <li><a href="/game/info"></a>Rules Of Game</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <h2>Best Results</h2>
                        <ul>
                            <li><a href="score/all">All</a></li>
                            <li><a href="score/find">My results</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <h2>CONTACT</h2>
                        <ul>
                            <li><a href="contact/info">Basic Info</a></li>
                            <li><a href="contact/me">My Contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="socio-copyright">

                <div class="social">
                    <a target="_blank" href="https://www.facebook.com/zatolokin.anton.pavlovich"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/Voganich"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/anton-zatolokin/"><i class="fa fa-linkedin"></i></a>
                </div>

                <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> Bootstrap Themes </a>2018. All rights reserved.</p>
            </div>

        </div>
    </div>

</footer>

</body>
</html>