<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Light Breeze</title>
        <!-- Bootstrap -->
        <link href="<?= $this->base ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?= $this->base ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?= $this->base ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?= $this->base ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="<?= $this->base ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?= $this->base ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?= $this->base ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?= $this->base ?>/build/css/custom.min.css" rel="stylesheet">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php echo $this->element('left_sidebar');?>
                <?php echo $this->element('top_navbar');?>
                <div class="right_col" role="main">
                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>
                <?php echo $this->element('footer');?>
            </div>
        </div>
        <!-- jQuery -->
        <script src="<?= $this->base ?>/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?= $this->base ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?= $this->base ?>/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?= $this->base ?>/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="<?= $this->base ?>/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="<?= $this->base ?>/vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?= $this->base ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?= $this->base ?>/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="<?= $this->base ?>/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="<?= $this->base ?>/vendors/Flot/jquery.flot.js"></script>
        <script src="<?= $this->base ?>/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?= $this->base ?>/vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?= $this->base ?>/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?= $this->base ?>/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?= $this->base ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?= $this->base ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?= $this->base ?>/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="<?= $this->base ?>/vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="<?= $this->base ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="<?= $this->base ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="<?= $this->base ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?= $this->base ?>/vendors/moment/min/moment.min.js"></script>
        <script src="<?= $this->base ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?= $this->base ?>/build/js/custom.min.js"></script>
        <!--<?php echo $this->element('sql_dump'); ?>-->
    </body>
</html>
