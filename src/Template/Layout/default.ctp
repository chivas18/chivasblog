<?php
/**

 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cái Chiên - Vẻ đẹp hoang sơ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/slippry.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
</head>

<body>


    <!-- *****************************************************************
    ** Preloader *********************************************************
    ****************************************************************** -->

    <div id="preloader-container">
        <div id="preloader-wrap">
            <div id="preloader"></div>
        </div>
    </div>
    
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
  <!-- *****************************************************************
    ** Footer ************************************************************
    ****************************************************************** -->    
    
    <footer class="tada-container">
    
    
        <!-- INSTAGRAM -->    
        <div class="widget widget-gallery">
            <h3 class="widget-title">INSTAGRAM</h3>
            <div class="image">
                <a href="#"><img src="img/img-gallery-1.jpg" alt="image gallery 1"></a>
                <a href="#"><img src="img/img-gallery-2.jpg" alt="image gallery 2"></a>
                <a href="#"><img src="img/img-gallery-3.jpg" alt="image gallery 3"></a>
                <a href="#"><img src="img/img-gallery-4.jpg" alt="image gallery 4"></a>
                <a href="#"><img src="img/img-gallery-5.jpg" alt="image gallery 5"></a>
                <a href="#"><img src="img/img-gallery-6.jpg" alt="image gallery 6"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        
        
        <!-- FOOTER BOTTOM -->        
        <div class="footer-bottom">
            <span class="copyright">Theme Created by <a href="#">AD-Theme</a> Copyright © 2016. All Rights Reserved</span>
            <span class="backtotop">TOP <i class="icon-arrow-up7"></i></span>
            <div class="clearfix"></div>
        </div>
        
        
    </footer>
    
    
    <!-- *****************************************************************
    ** Script ************************************************************
    ****************************************************************** -->  
    
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/slippry.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
