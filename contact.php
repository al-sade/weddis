<!DOCTYPE html>
<html dir="rtl">
<?php 
require_once('head.php');
    
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
            </section>
    </body>

</html>