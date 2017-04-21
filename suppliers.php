<!DOCTYPE html>
<html dir="rtl">

<?php 
require_once('head.php');
$cat = $_GET['cat'];
$cat_id = $weddis->getCatId($cat);
$suppliers = $weddis->getRandCategorySuppliers($cat_id);
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
			<h1 class="main__headline"><?php echo $cat; ?></h1>
		</div>
	</div>
</section><!-- /Main Screen Section -->

<!-- Suppliers List Section -->
<section id="suppliers__list">
	<div class="container">
		<div class="row">
			<!-- Suppliers Filter Panel -->
			<form class="col-xs-12 suppliers__filter">
				<i class="suppliersFilter__locationIcon"></i>
				<select id="suppliersFilter__location">
					<option value="Location 1">מקום</option>
					<option value="Location 2">מקום</option>
				</select>
				<div class="suppliersFilter__priceGroup">
					<i class="suppliersFilter__dollarIcon">$</i>
					<div class="suppliersFilterPrice">
						<label for="suppliersFilter_priceMin">מחיר מ</label>
						<input id="suppliersFilter_priceMin" type="number" value="0">
					</div>
					<div class="suppliersFilterPrice">
						<label for="suppliersFilter_priceMax">ל</label>
						<input id="suppliersFilter_priceMax" type="number">
					</div>
				</div>
			</form><!-- /Suppliers Filter Panel -->
		</div>
		<!-- Suppliers List Row -->
		<div class="row">
<!--            TODO: loop over suppliers-->
                <!-- Single Supplier Item -->
            <?php foreach ($suppliers as $supplier) { 
            $sup_name = $supplier->first_name.' '.$supplier->last_name;
            ?>
			<div class="col-xs-12 col-sm-3 supplierPage__supplier">
				<div class="team__img">
					<a href="#">
						<img src="<?php echo 'assets/uploads/'.$supplier->profile_pic; ?>" alt="Photo" class="img-responsive">
						<!-- Wishlist Badge -->
						<div class="team__wishlist">
							<img src="assets/img/icons/icon-heart.png" class="img-responsive team__wishlist__heart" alt="Wishlist icon">
							Wishlist
						</div><!-- /Wishlist Badge -->
						<!-- Hover effect and caption -->
						<div class="team__img__hover">
							<p class="team__img__caption">כיתוב תמונה <span>></span></p>
						</div><!-- /Hover effect and caption -->
					</a>
				</div>
				<div class="supplierItem__headline">
					<h3 class="supplier__name pull-right"><a href="supplier.php?sid=1"><?php echo $sup_name; ?></a></h3>
					<!-- Wishlist Button -->
					<div class="wishlist__button pull-left">
						<a href="#">
							<i class="wishlistButton__icon"></i>
							<!-- hover effect -->
							<p class="wishlistButton__hover">Add to Wishlist</p><!-- /hover effect -->
						</a>
					</div><!-- Wishlist Button -->
				</div>
				<!-- Suppliers Rating -->
				<div class="supplier__rating">
					<label>דירוג</label>
					<input type="number" name="supplierRating__output" id="some_id" class="rating" value="<?php echo $supplier->rank; ?>" data-inline data-readonly>
				</div><!-- /Suppliers Rating -->
				<div class="team__play">
					<a href="#" class="team__play__icon"></a>
				</div>
			</div><!-- /Single Supplier Item -->
            
            <?php } ?>
	   </div>
    </div>
</section><!-- /Suppliers List Section -->

<section class="supplier__section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 supplier__headline__panel">
				<h2 class="supplier__name pull-right">שם ספק</h2>
				<!-- Suppliers Rating -->
				<div class="supplier__rating pull-right">
					<label>דֵרוּג</label>
					<input type="number" name="supplierRating" id="some_id" class="rating" data-inline>
				</div><!-- /Suppliers Rating -->
				<a href="#" class="supplier__wishlist pull-left">Add to Wishlist <i class="wishlistButton__icon"></i></a>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 supplier__img">
				<a href="#">
					<img src="assets/img/team-photo.jpg" alt="Photo" class="img-responsive">
				</a>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-6 supplier__description">
				<p>יש המון גרסאות זמינות לפסקאות של Lorem Ipsum. אבל רובם עברו שינויים בצורה זו או אחרת, על ידי השתלת הומור או מילים אקראיות שלא נראות אפילו מעט אמינות. אם אתה הולך להשתמש במקטעים של של Lorem Ipsum אתה צריך להיות בטוח שאין משהו מביך חבוי בתוך הטקסט. כל מחוללי הטקסט של Lorem Ipsum שנמצאים ברשת הא<p>
			</div>
			<div class="col-xs-12 col-md-3 supplier__video">
				<!-- Video Container - use it to embed video -->
				<div class="video__container">
					<!-- Place to embed code from Youtube -->
					<iframe width="560" height="315" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allowfullscreen></iframe>
				</div><!-- /Video Container-->
			</div>
		</div>
	</div>
</section>


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
				<input class="footer__form__input"
						type="text"
						id="name"
						placeholder="*שם ושם משפחה:"
						required>
				<input class="footer__form__input"
						type="tel"
						id="phone"
						placeholder="*טלפון:"
						required>
				<input class="footer__form__input"
						type="tel"
						id="email"
						placeholder="*דוא״ל:"
						required>
				<input class="footer__form__input"
						type="text"
						id="date"
						placeholder="תאריך חתונה:">
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
				</div><!-- /Footer Form Checkboxes -->
				<textarea class="footer__form__input" placeholder="הודעה:"></textarea>
				<button type="submit" class="section__action__link">
					לכל ההמלצות <i class="action__icon-play"></i>
				</button>
			</form><!-- /Message Form -->
		</div>
	</section><!-- /Message Section -->

	<!-- Footer Section -->
	<section id="footer">
		<div class="container text-center">
			<ul class="footer__copyright">
				<li>*כל הזכויות שמורות ל weddis</li>
				<li>עיצוב גרפי <a href="#">HolleStudio</a></li>
				<li>פיתוח אתר <a href="#">VSgroup</a></li>
			</ul>
		</div>
	</section><!-- /Footer Section -->
</footer>


<!-- Scroll to top -->
<div class="scroll-up">
	<a href="#top"></a>
</div><!-- /Scroll to top-->

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-rating-input.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.viewbox.min.js"></script>
<script src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/wishlist.js"></script>

</body>
</html>
