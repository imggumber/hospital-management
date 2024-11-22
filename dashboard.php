<?php
$meta_title = 'Dashboard';
$meta_desc  = 'This is dashboard area';

?>

<!DOCTYPE html>
<html lang="en">
<!-- head starts here -->
<?php require './components/head.php'; ?>
<!-- head ends here -->

<body class="sidebar-mini sidebar-collapse" style="height: auto;">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- navbar -->
        <?php require_once( './components/navbar.php' ); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once( './components/sidebar.php' ); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="height: auto;">

        </div>
        <!-- /.content-wrapper -->

        <!-- footer starts here -->
        <?php require './components/footer.php'; ?>
        <!-- footer ends here -->
    </div>
    <!-- ./wrapper -->

</body>

</html>