<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ManySales</title>
            <!-- Required styles -->
            <?php  $this->load->view("partials/styles") ?>
    </head>
    <!-- Required scripts -->
    <?php  $this->load->view("partials/scripts")?>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
             <!-- Main navbar container -->
            <?php $this->load->view("partials/header")?>
            <!-- Main Sidebar Container -->
            <?php $this->load->view("partials/sidebar")?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Header navigation -->
                <?php $this->load->view("partials/navigation")?>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Load required content -->
                        <?php $this->load->view($view, $data)?>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Main Footer -->
            <?php  $this->load->view("partials/footer")?>
        </div>
        <!-- ./wrapper -->
    </body>
</html>
