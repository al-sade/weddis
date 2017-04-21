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
                <div class="container">
                    <div id="supplier-image" class="supplierscreen suppliers__main text-center" style="background: url(assets/img/supplier-fix.png) no-repeat center;"> </div>
                </div>
            </section>
            <!-- /Main Screen Section -->
            <!-- Single Supplier Section -->
            <section id="supplier__section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 supplier__headline__panel">
                            <h2 class="supplier__name pull-right"><?php echo $supplier_name ?></h2>
                            <!-- Suppliers Rating -->
                            <div class="supplier__rating pull-right">
                                <label>דֵרוּג</label>
                                <input type="number" name="supplierRating" id="some_id" class="rating" data-inline> </div>
                            <!-- /Suppliers Rating -->
<<<<<<< HEAD
<!--                            TODO: Real supplier data-->
                            <button href="#" class="wishlist supplier__wishlist pull-left" supplier_name="<?php echo $supplier_name;  ?>" supplier_id="supplier1" supplier_price="90">Add to Wishlist <i class="wishlist__icon"></i></button>
=======
                            <button href="#" class="wishlist supplier__wishlist pull-left" supplier_name="supplier 1" supplier_id="supplier1" supplier_price="90">Add to Wishlist <i class="wishlist__icon"></i></button>
>>>>>>> 5bef5496790e53bc37a5e2fac20eb01da5aefeed
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 supplier__img">
                            <a href="#"> <img src="assets/img/team-photo.jpg" alt="Photo" class="img-responsive"> </a>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-6 supplier__description">
                            <p>
                                <?php echo $supplier['desc']; ?>
                                    <p>
                        </div>
                        <div class="col-xs-12 col-md-3 supplier__video">
                            <!-- Video Container - use it to embed video -->
                            <div class="video__container">
                                <!-- Place to embed code from Youtube -->
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <!-- /Video Container-->
                        </div>
                        <!-- Photo gallery -->
                        <div class="col-xs-12 photo__gallery">
                            <!--                TODO: data from DB. 6 latest albums-->
                            <!--LUNAR GALLERY-->
                            <div class="lunar-gallery-ui">
                                <?php foreach($supplier_albums as $album){ ?>
                                    <!--lunar album-->
                                    <div class="lunar-album" data-width="33" data-thumbimage="assets/img/team-photo.jpg">
                                        <div class="lunar-albumcover-content">
                                            <h3 class="lunar-album-title"><?php echo $album->album_name; ?></h3>
                                            <div class="lunar-album-about">
                                                <?php echo $album->submit_date; ?>
                                            </div>
                                        </div>
                                        <div class="lunar-gallery">
                                            <a href="assets/img/team-photo.jpg" data-imagelarge="assets/img/team-photo.jpg"></a>
                                            <a href="assets/img/team-photo.jpg" data-imagelarge="assets/img/team-photo.jpg"></a>
                                            <a href="assets/img/team-photo.jpg" data-imagelarge="assets/img/team-photo.jpg"></a>
                                            <a href="assets/img/team-photo.jpg" data-imagelarge="assets/img/team-photo.jpg"></a>
                                        </div>
                                    </div>
                                    <!--/lunar album-->
                                    <?php } ?>
                            </div>
                            <!--/LUNAR GALLERY-->
                        </div>
                        <!-- Photo gallery -->
                    </div>
                </div>
            </section>
            <!-- Testimonials Section -->
            <section id="testimonials">
                <div class="container">
                    <h1 class="section__headline">זוגות מספרים</h1>
                    <div class="row">
                        <!-- Container for testimonials slides -->
                        <div class="testimonials__container">
                            <?php foreach($testimonials as $testimonial){ ?>
                                <!-- Single slide -->
                                <div class="testimonial__slide">
                                    <div class="col-xs-12 col-sm-4 col-md-3 testimonial__image"> <img src="assets/img/testimonial-img.jpg" alt="Testimonials Image" class="img-responsive img-circle"> </div>
                                    <div class="col-xs-12 col-sm-8 col-md-9 testimonial__content">
                                        <h2 class="testimonial__heading"><?php echo $testimonial->testimonial_name; ?> <span class="testimonial__date"><?php echo $testimonial->event_date; ?></span></h2>
                                        <p class="testimonial__text">
                                            <?php echo $testimonial->text; ?>
                                        </p>
                                    </div>
                                </div>
                                <!-- /Container for testimonials slides -->
                            <?php } ?>
                        </div>
                        <!-- Testimonials Badge --><i class="testimonials__badge"></i> </div>
            </section>
            <!-- /Testimonials Section -->
            <!-- /Single Supplier Section -->
            <!-- Footer  -->
            <footer>
                <!-- Social Section -->
                <section id="footer-social">
                    <div class="container text-center">
                        <h1 class="footer__heading">השארו מחוברים</h1>
                        <div class="footer__social">
                            <!-- Social Icons -->
                            <a href="#" class="footer__social__icon icon-youtube-inverted"></a>
                            <a href="#" class="footer__social__icon icon-vimeo-inverted"></a>
                            <a href="#" class="footer__social__icon icon-instagram-inverted"></a>
                            <a href="#" class="footer__social__icon icon-facebook-inverted"></a>
                        </div>
                    </div>
                </section>
                <!-- Contacts Section -->
                <section id="footer-contacts">
                    <div class="container text-center">
                        <h1 class="footer__heading">צרו קשר</h1>
                        <p class="footer__contact__info">התקשרו אלינו</p>
                        <p class="footer__contact__info">03-608765</p>
                        <p class="footer__contact__info">או שלחו דו״אל</p>
                        <p class="footer__contact__info">info@weddis.co.il</p>
                    </div>
                </section>
                <!-- Message Section -->
                <section id="footer-message">
                    <div class="container text-center">
                        <h1 class="footer__heading">השאירו הודעה</h1>
                        <!-- Message Form -->
                        <form class="footer__message__form" action="" method="">
                            <input class="footer__form__input" type="text" id="name" placeholder="*שם ושם משפחה:" required>
                            <input class="footer__form__input" type="tel" id="phone" placeholder="*טלפון:" required>
                            <input class="footer__form__input" type="email" id="email" placeholder="*דוא״ל:" required>
                            <input class="footer__form__input" type="text" id="date" placeholder="תאריך חתונה:">
                            <p class="footer__form__label">מתעניינים ב:</p>
                            <!-- Footer Form Checkboxes -->
                            <div class="footer__form__checkbox">
                                <input type="checkbox" id="check__photo" name="message__checkboxes" checked>
                                <label for="check__photo"><span></span>צילום סטילס</label>
                            </div>
                            <div class="footer__form__checkbox">
                                <input type="checkbox" id="check__video" name="message__checkboxes">
                                <label for="check__video"><span></span>צילום וידאו</label>
                            </div>
                            <div class="footer__form__checkbox">
                                <input type="checkbox" id="check__attractions" name="message__checkboxes">
                                <label for="check__attractions"><span></span>אטרקציות וגימיקים</label>
                            </div>
                            <div class="footer__form__checkbox">
                                <input type="checkbox" id="check__music" name="message__checkboxes">
                                <label for="check__music"><span></span>מוזיקה</label>
                            </div>
                            <div class="footer__form__checkbox">
                                <input type="checkbox" id="check__all" name="message__checkboxes">
                                <label for="check__all"><span></span>הכל</label>
                            </div>
                            <!-- /Footer Form Checkboxes -->
                            <textarea class="footer__form__input" placeholder="הודעה:"></textarea>
                            <button type="submit" class="section__action__link"> לכל ההמלצות <i class="action__icon-play"></i> </button>
                        </form>
                        <!-- /Message Form -->
                    </div>
                </section>
                <!-- /Message Section -->
                <!-- Footer Section -->
                <section id="footer">
                    <div class="container text-center">
                        <ul class="footer__copyright">
                            <li>*כל הזכויות שמורות ל weddis</li>
                            <li>עיצוב גרפי <a href="#">HolleStudio</a></li>
                            <li>פיתוח אתר <a href="#">VSgroup</a></li>
                        </ul>
                    </div>
                </section>
                <!-- /Footer Section -->
            </footer>
            <!-- Scroll to top -->
            <div class="scroll-up">
                <a href="#top"></a>
            </div>
            <!-- /Scroll to top-->
            <script src="assets/js/bootstrap-rating-input.min.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/jquery.viewbox.min.js"></script>
            <script src="assets/js/script.js"></script>
            <script type="text/javascript" src="assets/js/wishlist.js"></script>
    </body>

</html>