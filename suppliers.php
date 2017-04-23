<!DOCTYPE html>
<html dir="rtl">
<?php 
require_once('head.php');

if (isset($_GET['cat'])){
    $cat_name = $_GET['cat'];
    $cat_id = $weddis->getCatId($cat_name);
    $suppliers = $weddis->getRandCategorySuppliers($cat_id);
} elseif (isset($_GET['rcat_id'])){
    $cat_id = $_GET['rcat_id'];
    $cat_name = $weddis->getRecoCatName($cat_id);
    $cat_name = $cat_name['category_name'];
    $suppliers = $weddis->getRecoCatSuppliers($cat_id);
}
    
require_once('lunar_head.php');
?>
    </head>

    <body>
        <!-- Fixed navbar -->
        <?php require_once('header.php')?>
            <!-- Main Screen Section -->
            <section id="main">
                <div class="container">
                    <div id="supplier-image" class="supplierscreen suppliers__main text-center" style="background: url(assets/img/supplier-fix.png) no-repeat center;">
                        <h1 class="main__headline"><?php echo $cat_name; ?></h1> </div>
                </div>
            </section>
            <!-- /Main Screen Section -->
            <!-- Suppliers List Section -->
            <section id="suppliers__list">
                <div class="container">
                    <div class="row">
                        <!-- Suppliers Filter Panel -->
                        <form class="col-xs-12 suppliers__filter"> <i class="suppliersFilter__locationIcon"></i>
                            <select id="suppliersFilter__location">
                                <option value="Location 1">מקום</option>
                                <option value="Location 2">מקום</option>
                            </select>
                            <div class="suppliersFilter__priceGroup"> <i class="suppliersFilter__dollarIcon">$</i>
                                <div class="suppliersFilterPrice">
                                    <label for="suppliersFilter_priceMin">מחיר</label>
                                    <select>
                                        <option value="" selected>בחר</option>
                                        <option value="low">0-2500</option>
                                        <option value="mid-low">2500-4500</option>
                                        <option value="mid">4500-7000</option>
                                        <option value="high">7000+</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <!-- /Suppliers Filter Panel -->
                    </div>
                    <!-- Suppliers List Row -->
                    <div class="row">
                        <!--            TODO: loop over suppliers-->
                        <!-- Single Supplier Item -->
                        <?php foreach ($suppliers as $supplier) { 
            $sup_name = $supplier->first_name.' '.$supplier->last_name;
            ?>
                            <div class="col-xs-12 col-sm-3 supplierPage__supplier">
                                <div class="team__img"> <a href="#">
						<img src="<?php echo 'assets/uploads/'.$supplier->profile_pic; ?>" alt="Photo" class="img-responsive">
						<!-- Wishlist Badge -->
						<div class="team__wishlist">
                             <button href="#" class="wishlist supplier_wishlist_button" supplier_name="<?php echo $sup_name;  ?>" supplier_id="<?php echo $supplier->supplier_id ?>" >Wishlist <i class="wishlist__icon"></i></button>
<!--							<img src="assets/img/icons/icon-heart.png" class="img-responsive team__wishlist__heart" alt="Wishlist icon">-->
							
						</div><!-- /Wishlist Badge -->

					</a> </div>
                                <div class="supplierItem__headline">
                                    <h3 class="supplier__name pull-right">
                                        <?php if (isset($_GET['cat'])){ ?>
                                        <a href="supplier.php?sid=<?php echo $supplier->supplier_id; ?>"><?php echo $sup_name; ?></a></h3>
                                    <?php } else { ?>
                                        <a href="supplier.php?r_sid=<?php echo $supplier->supplier_id; ?>"><?php echo $sup_name; ?></a></h3>
                                    <?php } ?>
                                    <!-- Wishlist Button -->
                                    <div class="wishlist__button pull-left">
                                        <a href="#"> <i class="wishlistButton__icon"></i>
                                            <!-- hover effect -->
                                            <!--							<p class="wishlistButton__hover">Add to Wishlist</p>-->
                                            <!-- /hover effect -->
                                        </a>
                                    </div>
                                    <!-- Wishlist Button -->
                                </div>
                                <!-- Suppliers Rating -->
                                <div class="supplier__rating">
                                    <label>דירוג</label>
                                    <input type="number" name="supplierRating__output" id="some_id" class="rating" value="<?php echo $supplier->rank; ?>" data-inline data-readonly> </div>
                                <!-- /Suppliers Rating -->
                                <div class="team__play">
                                    <a href="#" class="team__play__icon"></a>
                                </div>
                            </div>
                            <!-- /Single Supplier Item -->
                            <?php } ?>
                    </div>
                </div>
            </section>
            <!-- /Suppliers List Section -->
   
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
                            <input class="footer__form__input" type="tel" id="email" placeholder="*דוא״ל:" required>
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
            <script src="assets/js/jquery-2.2.4.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/bootstrap-rating-input.min.js"></script>
            <script src="assets/js/slick.min.js"></script>
            <script src="assets/js/jquery.viewbox.min.js"></script>
            <script src="assets/js/script.js"></script>
            <script type="text/javascript" src="assets/js/wishlist.js"></script>
    </body>

</html>