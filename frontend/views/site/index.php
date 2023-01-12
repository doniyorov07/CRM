<?php
use yii\helpers\Url;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
        <h1>NurCRM</h1>
        <h2>O'quv markazlari uchun boshqarish tizimi</h2>
        <a href="<?=Url::to('site/demo')?>" class="btn-get-started scrollto">Demo olish</a>
    </div>
</section><!-- End Hero -->

<main id="main">

<!--    <section id="counts" class="counts section-bg">-->
<!--        <div class="container">-->
<!---->
<!--            <div class="row counters">-->
<!---->
<!--                <div class="col-lg-3 col-6 text-center">-->
<!--                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>-->
<!--                    <p>Clients</p>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-6 text-center">-->
<!--                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>-->
<!--                    <p>Projects</p>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-6 text-center">-->
<!--                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>-->
<!--                    <p>Hours Of Support</p>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-6 text-center">-->
<!--                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>-->
<!--                    <p>Hard Workers</p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->


    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>NurCRM</h2>
                <p>Bizning tizimni tanlashingiz uchun 4 sabab</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4><a href="">O'quvchilar</a></h4>
                        <p>O'quvchilar haqidagi barcha ma'liumotlar tizimda saqlanadi</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <h4><a href="">Oylik</a></h4>
                        <p>Xodimlaringiz oyligi tizim tomonidan avtomatik hisoblanadi.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h4><a href=""></a>Masofaviy ishlash</h4>
                        <p>O'quv markazingizni dunyoning xohlagan nuqtasidan boshqaring</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex text-center mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4><a href="">Hisobotlar</a></h4>
                        <p>Hisobotlarni hisoblash uchun boshingizni o'g'ritib o'tirmaysiz</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="cta" class="cta">
        <div class="container">
            <div class="text-center">
                <h3>NurCRM</h3>
                <p> Bizning tizim sizga maqulmi? Unda vaqtni boy bermay demo versiyani oling</p>
                <a class="cta-btn" href="<?= Url::to('site/demo')?>">Demo versiya olish</a>
            </div>
        </div>
    </section>



    <!-- ======= Pricing Section ======= -->
<!--    <section id="pricing" class="pricing">-->
<!--        <div class="container">-->
<!---->
<!--            <div class="section-title">-->
<!--                <h2>Pricing</h2>-->
<!--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
<!--            </div>-->
<!---->
<!--            <div class="row">-->
<!---->
<!--                <div class="col-lg-3 col-md-6">-->
<!--                    <div class="box">-->
<!--                        <h3>Free</h3>-->
<!--                        <h4><sup>$</sup>0<span> / month</span></h4>-->
<!--                        <ul>-->
<!--                            <li>Aida dere</li>-->
<!--                            <li>Nec feugiat nisl</li>-->
<!--                            <li>Nulla at volutpat dola</li>-->
<!--                            <li class="na">Pharetra massa</li>-->
<!--                            <li class="na">Massa ultricies mi</li>-->
<!--                        </ul>-->
<!--                        <div class="btn-wrap">-->
<!--                            <a href="#" class="btn-buy">Buy Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">-->
<!--                    <div class="box featured">-->
<!--                        <h3>Business</h3>-->
<!--                        <h4><sup>$</sup>19<span> / month</span></h4>-->
<!--                        <ul>-->
<!--                            <li>Aida dere</li>-->
<!--                            <li>Nec feugiat nisl</li>-->
<!--                            <li>Nulla at volutpat dola</li>-->
<!--                            <li>Pharetra massa</li>-->
<!--                            <li class="na">Massa ultricies mi</li>-->
<!--                        </ul>-->
<!--                        <div class="btn-wrap">-->
<!--                            <a href="#" class="btn-buy">Buy Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">-->
<!--                    <div class="box">-->
<!--                        <h3>Developer</h3>-->
<!--                        <h4><sup>$</sup>29<span> / month</span></h4>-->
<!--                        <ul>-->
<!--                            <li>Aida dere</li>-->
<!--                            <li>Nec feugiat nisl</li>-->
<!--                            <li>Nulla at volutpat dola</li>-->
<!--                            <li>Pharetra massa</li>-->
<!--                            <li>Massa ultricies mi</li>-->
<!--                        </ul>-->
<!--                        <div class="btn-wrap">-->
<!--                            <a href="#" class="btn-buy">Buy Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">-->
<!--                    <div class="box">-->
<!--                        <span class="advanced">Advanced</span>-->
<!--                        <h3>Ultimate</h3>-->
<!--                        <h4><sup>$</sup>49<span> / month</span></h4>-->
<!--                        <ul>-->
<!--                            <li>Aida dere</li>-->
<!--                            <li>Nec feugiat nisl</li>-->
<!--                            <li>Nulla at volutpat dola</li>-->
<!--                            <li>Pharetra massa</li>-->
<!--                            <li>Massa ultricies mi</li>-->
<!--                        </ul>-->
<!--                        <div class="btn-wrap">-->
<!--                            <a href="#" class="btn-buy">Buy Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>

    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Talabalarni qabul qilish <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                O'quv markazi qabul qilishga doir har qanday murakkab jarayonlarni amalga oshira oladi.
                                O'quvchilarni qabul qilish, ularni guruhlarga ajratish, ularni safdan chiqarish va h.k.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Talabalar to'lovlarini boshqarish <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Bu funksiya yordamida har bir talaba qachon qancha to'lov qilganligi, qancha qarzi qolganligini nazorat qila olasiz.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"> Xodimlarni boshqarish <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                               Tizimda bir necha rollar bo'ladi va ularni saytni boshqarishi lavozimiga qarab cheklanadi
                                Xodimlarni shaxsiy ma'lumotlari, guruhlari, dars kunlari va soatlari hamda oylik maoshlari tizimda saqlanadi
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Aloqa</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Manzil</h3>
                                <p>Navoiy viloyati Nurota tumani</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email</h3>
                                <p>donyirovrozimurod1@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Telefon</h3>
                                <p>+998 90 476 04 05</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ismingiz" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Emailingiz" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Xabaringiz" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Yuborish</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>