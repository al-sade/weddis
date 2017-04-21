<!DOCTYPE html>
<html dir="rtl">

<?php 
require_once('head.php');
    
$supplier_id = $_GET['sid'];
$supplier = $weddis->getSupplier($supplier_id);
$supplier_name = $supplier['first_name'].' '.$supplier['last_name'];
$supplier_albums = $weddis->getSupplierAlbums($supplier_id);

require_once('lunar_head.php');
?>
</head>
<body>
<!-- Fixed navbar -->
<?php require_once('header.php')?>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--menu-->        
        <div id="sk_menu">            
            <div class="container">
                <a class="sk_logo" href="http://www.sakuraplugins.com/" target="_blank">
                    <img src="img/sakuraplugins-logo.png" alt="sakura plugins">
                </a>
                <ul>
                    <li><a href="http://codecanyon.net/user/jayc/portfolio">About</a></li>
                    <li><a href="http://codecanyon.net/user/jayc/portfolio">Buy</a></li>
                </ul>
                <div class="clear-fx"></div>
            </div>
        </div>        
        <!--/menu-->

        <!--main wrapper-->
        <div class="sk_wrapper">
            <div class="container">



                <!--lunar gallery-->
                <div class="lunar-gallery-ui">


                    <!--lunar album-->
                    <div class="lunar-album" data-width="25" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/0.cover.jpg">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">Limitless sound</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                        
                        </div>
                    </div>
                    <!--/lunar album-->


                    <!--lunar album-->
                    <div class="lunar-album" data-width="25" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/1.cover.jpg">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">Time travel</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->


                    <!--lunar album-->
                    <div class="lunar-album" data-width="25" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/2.cover.jpg">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">Within the loop</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->


                    <!--lunar album-->
                    <div class="lunar-album" data-width="25" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/3.cover.jpg">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">What the thinker thinks</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->                                                            


                    <!--lunar album video-->
                    <div class="lunar-album" data-width="50" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/4.cover.jpg" data-is-special="true" data-special-side="left">
                        <div class="video-cover" data-preview-video-all-time="true">
                            <a class="video-mp4" href="http://www.sakuraplugins.com/showcase/lunar/wp-content/uploads/2014/10/demo1.mp4"></a>
                            <a class="video-webm" href="http://www.sakuraplugins.com/showcase/lunar/wp-content/uploads/2014/10/demo1.webm"></a>
                        </div>
                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">THE JOURNEY OF A THOUSAND MILES</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album video-->


                    <!--lunar album-->
                    <div class="lunar-album" data-width="50" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/5.cover.jpg" data-is-special="true" data-special-side="right">
                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">BIT BY A DEAD BEE</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->


                    <!--lunar album-->
                    <div class="lunar-album" data-width="50" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/6.cover.jpg">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">I see you tomorrow</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->


                    <!--lunar album-->
                    <div class="lunar-album" data-width="25" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/7.cover.jpg">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">The crazy ones</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->


                    <!--lunar album-->
                    <div class="lunar-album" data-width="25" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/8.cover.jpg">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">Those who can not change</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->   


                    <!--lunar album-->
                    <div class="lunar-album" data-width="50" data-thumbimage="assets/lunar_assets/lunar_images/album_covers/9.cover.jpg" data-customurl="http://google.com" data-target="_blank">

                        <div class="lunar-albumcover-content">
                            <h3 class="lunar-album-title">Think deeply</h3>
                            <div class="lunar-album-about">Lorem Ipsum has been the industry's standard.</div>
                        </div>
                        <div class="lunar-gallery">
                            <a href="assets/lunar_assets/lunar_images/test_gallery/0.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/0.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/1.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/1.large.jpg"></a>
                            <a href="assets/lunar_assets/lunar_images/test_gallery/2.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/2.large.jpg"></a>  
                            <a href="assets/lunar_assets/lunar_images/test_gallery/3.thumb.jpg" data-imagelarge="assets/lunar_assets/lunar_images/test_gallery/3.large.jpg"></a>                            
                        </div>
                    </div>
                    <!--/lunar album-->                                                         



                </div>
                <!--/lunar gallery-->



                
            </div>             
        </div>       
        <!--/main wrapper-->


        <!--footer-->
        <div class="sk_footer">
            <div class="container">
                <h2 class="sk_footer_title">STAY IN TOUCH</h2>
                <div class="sk_footerTitleUnderline"></div>
                <ul class="footerLinks">
                    <li><a class="metroItem" target="_blank" href="https://twitter.com/IonelCrisu"><img src="img/tweet_ico.png" alt=""></a></li>
                    <li><a class="metroItem" target="_blank" href="https://profiles.wordpress.org/sakurapixel/"><img src="img/wp_ico1.png" alt=""></a></li>
                    <li><a class="metroItem" target="_blank" href="http://www.sakuraplugins.com/contact/"><img src="img/email_ico.png" alt=""></a></li>                                 
                </ul>                
            </div>            
        </div>
        <!--/footer-->
        
        
    </body>
</html>
