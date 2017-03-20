<?php require_once('head.php'); ?>

<body>
<!-- Static navbar -->
<?php include('includes/header.php');?>
    <?php include('includes/sidebar.php');?>
        <div id="wrapper">
            <div class="content-wrapper container">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="page">
                            <form method="post" enctype="multipart/form-data">
                                <table width="100%">
                                    <tr>
                                        <td>Select Photo (one or multiple):</td>
                                        <td>
                                            <input type="file" name="files[]" multiple/> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">Note: Supported image format: .jpeg, .jpg, .png, .gif</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center">
                                            <input type="submit" name="create" value="Create Gallery" id="selectedButton" /> </td>
                                    </tr>
                                </table>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/jquery.nanoscroller.min.js"></script>
        <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/waves.min.js"></script>
        <script src="js/jquery-jvectormap-world-mill-en.js"></script>
        <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
        <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>