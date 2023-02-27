<?php get_header(); ?>

<section class="main__content">
    <div class="container">
        <div class="content">
            <div class="content__inner">
                <div class="content__inner_wrapper">
                    <div class="schedule_appointment">
                        <div class="schedule_block">
                            <div class="schedule_title">
                                <h2 class="title_text">Schedule an Appointment</h2>
                            </div>
                            <div class="button_schedule_block">
                                <div><a href="https://reports.appheaven.us/online/go2.php?merchantid=ET5G4X7Z88FQE"
                                        class="button_schedule"
                                        target="_blank"
                                    >Click
                                        Here</a></div>
                            </div>

                            <div class="appointment_info">
                                <div><p class="appointment_info_title"><?= get_field('info_text') ?></p></div>
                                <div><p class="appointment_info_description"><?= get_field('info_description') ?></p></div>
                            </div>

                            <div class="appointment_address">
                                <div><h1 class="appointment_address_title">Our Address</h1></div>
                                <div><p class="default-text bold"><?= get_bloginfo('name'); ?></p></div>
                                <div><p class="default-text"><?= get_field('address', get_option('page_on_front')); ?></div>
                                <div><p class="default-text"><?= get_field('phone_number', get_option('page_on_front'))?> </p></div>
                                <div><p class="default-text">E-mail: <?= get_field('email', get_option('page_on_front'))?></p></div>
                            </div>

                            <div class="google_maps">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                                                marginheight="0" marginwidth="0"
                                                src="https://maps.google.com/maps?width=660&amp;height=210&amp;hl=en&amp;q=11216 Capital Blvd Suite 115, Wake Forest, NC 27587&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        <a href="https://www.gachacute.com/">Gacha Cute</a></div>
                                    <style>.mapouter {
                                            position: relative;
                                            text-align: right;
                                            width: 100%;
                                            height: 210px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            width: 100%;
                                            height: 210px;
                                        }

                                        .gmap_iframe {
                                            height: 210px !important;
                                        }</style>
                                </div>
                            </div>

                            <div>

                            </div>
                        </div>

                        <div class="shop_block">
                            <div class="shop_image_block">
                                <img src="<?= get_field('salon_photo'); ?>" alt="" class="shop_image">
                            </div>

                            <div class="shop_description">
                                <p class="shop_description_text"><?= get_field('salon_description'); ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
