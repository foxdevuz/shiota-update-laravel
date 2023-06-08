<x-main.index>
<!--Main part and navbar start-->
<section class="main" id="main">
    <!--navbar start-->
    <!--navbar end-->
        <div class="blur">
            <div class="container">
                <div class="info">
                    <h3>ShiOta choyxonasi</h3>
                <center>
                    <a href="/order/place"><button>Joy buyurtma qilish</button></a>
                </center>
                </div>
            </div>
        </div>
</section>
<!--Main part and navbar end-->

<!--Foods part start-->
<section id="foods_section" class="foods_section">
    <div class="about_section">
        <span class="line"></span>
        <h4>Bizning taomlarimiz</h4>
        <span class="line"></span>
    </div>
    <center>
        <p class="section_small_info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque eius enim eum molestiae optio, quae quis. Accusantium alias consequatur ducimus, eos et mollitia necessitatibus possimus sint tenetur totam veniam.</p>
    </center>
    <div class="container">
       <div class="food_container_as">
       
       </div>
    </div>
    <div class="about_section">
        <span class="line_"></span>
        <a href="./assets/addentional/showAllFood.html">Barchasini ko'rish<i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i><i class="fa-solid fa-chevron-right"></i></a>
        <span class="line_"></span>
    </div>
</section>
<!--Foods part end-->

<!--About restaurant start-->
<section class="about_restaurant" id="about">
    <div class="container">
        <div class="about_section">
            <span class="line"></span>
            <h4>Bizning choyxonamiz haqida qisqacha <i class="fa-solid fa-arrow-down"></i></h4>
            <span class="line"></span>
        </div>
        <div class="about_container_">
            <div class="cont_a">
                <div class="name_res">
                    <h4>Shi Ota Choyxonasi</h4>
                </div>
                <div class="about_little"  data-aos="zoom-in-up">
                    <span>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam, atque aut consectetur corporis deserunt distinctio dolor dolore dolores est hic itaque libero, mollitia natus nostrum pariatur provident sint soluta.
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam, atque aut consectetur corporis deserunt distinctio dolor dolore dolores est hic itaque libero, mollitia natus nostrum pariatur provident sint soluta.
                    </span>
                </div>
            </div>
            <div class="map_google"  data-aos="zoom-in-up">
                <h4 class="location">Bizning manzil</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d857.0044854220307!2d71.06380724481252!3d40.86747797570985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bad1673bd4c069%3A0xcfbc98376d9e37b4!2sSHI%20OTA%20CHOYXONASI!5e1!3m2!1sen!2s!4v1658210670269!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!--About restaurant end-->

<!-- contact section start -->
<div id="contact"></div>
<section class="contact_us"  data-aos="fade-up">
   <div class="container_">
    <div class="about_section">
        <span class="line"></span>
        <h4>Xabar yuborish</h4>
        <span class="line"></span>
    </div>
    <center>
        <p>Yulduzchali(*) maydonlar to'ldirilishi shart</p>
    </center>
    <form method="post" id="sendMessage">
        <label for="name">Ismingiz <span class="required">*</span></label>
        <input type="text" name="name" id="name" required autocomplete="off" placeholder="Ismingiz">

        <label for="surname">Familiyangiz <span class="required">*</span></label>
        <input type="text" name="surname" id="surname" required autocomplete="off" placeholder="Familiyangiz">
        <label for="phone">Telefon raqamingiz <span class="required">*</span></label>
        <input type="text" name="phone" id="phone" required autocomplete="off" placeholder="Telefon raqamingiz">
        <label for="text_">Xabar matni <span class="required">*</span></label>
        <textarea name="text" id="text_" cols="30" rows="10" required placeholder="Xabar matnini kiriting"></textarea>

        <button type="submit" id="send_text" class="btn">Yuborish</button>
    </form>
   </div>
</section>
<!-- contact section end -->


</x-main.index>
