<!DOCTYPE html>
<html dir="rtl">
<?php 
require_once('head.php');
    
$supplier_id = $_GET['sid'];
$supplier = $weddis->getSupplier($supplier_id);
$supplier_name = $supplier['first_name'].' '.$supplier['last_name'];
$supplier_albums = $weddis->getSupplierAlbums($supplier_id);
$testimonials = $weddis->getTestimonials($supplier_id);
require_once('lunar_head.php');
?>
    <style>
        #footer-social {
            background-image: url(assets/img/paper_texture.png);
        }
        
        .testimonial__text:after {
            background: none;
            padding-bottom: 25px;
        }
    </style>
    </head>

    <body>
        <!-- Fixed navbar -->
        <?php require_once('header.php')?>
            <!-- Main Screen Section -->
            <section id="main">
            <h2>coming soon</h2>
            </section>
        
                    <script src="assets/js/bootstrap-rating-input.min.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/jquery.viewbox.min.js"></script>
            <script src="assets/js/script.js"></script>
            <script type="text/javascript" src="assets/js/wishlist.js"></script>
    </body>

</html>