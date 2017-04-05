<!DOCTYPE html>
<html dir="rtl">
<?php require_once('head.php')?>
   <?php
	if(isset($_POST['submit']))
{
	$first_name = strip_tags($_POST['first_name']);
	$last_name = strip_tags($_POST['last_name']);
    $name = $first_name.' '.$last_name;
	$phone = strip_tags($_POST['phone']);
	$email = strip_tags($_POST['email']);
	$date = strip_tags($_POST['date']);
	$message = strip_tags($_POST['message']);
    
    $suppliers = strip_tags($_POST['suppliers']);; //add suppliers from list
	try {
        $weddis->submitEvent($name, $phone, $email, $date, $message, $suppliers);
    } catch (Exception $e) {
		echo $e->getMessage();
	}

}
?>
    <body>
        <!-- Fixed navbar -->
        <?php require_once('header.php')?>
            <!-- Wishlist Section -->
            <section id="wishlist__section">
                <div class="container">
                    <h1 class="wishlist__headline"><i class="wishlist__icon"></i> My Wishlist</h1>
                    <div class="row">
                        <div class="col-xs-12 col-sm-7 wishlist__content">
                            <!-- Wishlist Category Area -->
                            <div class="wishlist__category">
                                <!-- Wishlist Category Title -->
                                <h3 class="wishlist__category__title">קטגוריה</h3>
                                <!-- Wishlist Category Item Apendded here-->
                                <!-- /Wishlist Category Item -->
                            </div>
                            <!-- /Wishlist Category Area -->
                        </div>
                        <!-- Message Form -->
                        <form id="submit__wishlist" class="wishlist__form col-xs-12 col-sm-5" method="post">
                            <p class="wishlist__form__caption">אבל רובם עברו שינויים בצורה זו או אחרת, על ידי השתלת הומור או מילים אקראיות שלא נראות אפילו מעט אמינות.</p>
                            <input class="wishlist__form__input" type="text" name="first_name" id="wishlist__name" placeholder="*שם פרטי:" required>
                            <input class="wishlist__form__input" type="text" name="last_name" id="wishlist__lastname" placeholder="*שם משפחה:" required>
                            <input class="wishlist__form__input" type="tel" name="phone" id="wishlist__phone" placeholder="*טלפון:" required>
                            <input class="wishlist__form__input" type="email" name="email" id="wishlist__email" placeholder="*דוא״ל:" required>
                            <input class="wishlist__form__input" type="date" name="date" id="wishlist__date" placeholder="תאריך חתונה:">
                            <textarea class="wishlist__form__input" type="text" name="message" placeholder="הודעה:"></textarea>
                            <button type="submit" name="submit" class="section__action__link"> שלח <i class="action__icon-play"></i> </button>
                        </form>
                        <!-- /Message Form -->
                    </div>
                </div>
            </section>
            <!-- /Wishlist Section -->
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
                            <input class="wishlist__form__input" type="text" id="name" placeholder="*שם ושם משפחה:" required>
                            <input class="wishlist__form__input" type="tel" id="phone" placeholder="*טלפון:" required>
                            <input class="wishlist__form__input" type="email" id="email" placeholder="*דוא״ל:" required>
                            <input class="wishlist__form__input" type="text" id="date" placeholder="תאריך חתונה:">
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
                            <textarea class="wishlist__form__input" placeholder="הודעה:"></textarea>
                            <button type="submit" name="submit" class="section__action__link"> שלח <i class="action__icon-play"></i> </button>
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
<script src="assets/js/wishlist.js"></script>
<script>
function setWishlist() {
    if (localStorage.getItem("w_suppliers") !== null) {
        wishlist_local = JSON.parse(localStorage.getItem("w_suppliers"));
    }
    var images_arr = {};
    $.ajax({
        url: "get_wishlist.php"
        , type: "post"
        , data: wishlist_local
        , success: function (response) {
            images_arr = response;
            // you will get response from your php page (what you echo or print)                 
            buildWishlist(wishlist_local, JSON.parse(images_arr));
            updateHiddenVal();
        }
        , error: function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}

function buildWishlist(wishlist_local, images_arr){
for (i = 0; i < wishlist_local.length; i++) {
    id = wishlist_local[i]['id'];

    $('<div>', {
        'id' : id,
        'class': 'row wishlist__category__item'
        , 'html': $('<div>', {
            'class': 'col-xs-12 col-sm-3 col-sm-offset-1'
            , 'html': $('<div>', {
                'class': 'team__img'
                , 'html': $('<a>', {
                    'href': '#'
                    , 'html': $('<div class="team__img__hover">').add($('<img>', {
                        'src': 'assets/uploads/' + images_arr[id]
                        , 'alt': 'Photo'
                        , 'class': 'img-responsive'
                    }))
                })
            })
        }).add($('<div>', {
            'class': 'col-xs-10 col-sm-5 wishlist__supplier'
            , 'html': $('<a href="#">').text(wishlist_local[i]['name'])
        })).add($('<div>', {
            'class': 'col-xs-1 wishlist__remove'
            , 'html': $('<a>', {
                'href': '#'
                , 'html': $('<i class="wishlist__cross">').add($('<p>', {
                    'class': 'wishlistRemove__hover'
                    , 'text': 'Remove'
                }))
            })
        }))
    }).appendTo('.wishlist__category');
}
}
setWishlist();
</script>
        
<script>
    function updateHiddenVal(){
var $suppliers_ids = [];
jQuery('.row .wishlist__category__item').each(function(){
        $suppliers_ids.push(this.id);
})
$('<input>', { 
    'type' : 'hidden',
    'name' : 'suppliers',
    'value' : $suppliers_ids
}).insertAfter('textarea[name="message"]');
    }
</script>
</body>

</html>