<?php get_header();

$offer_name = get_field('offer');
global $post;
$offers = get_posts(array('post_type' => 'offers', 'meta_value' => $offer_name, 'order' => 'ASC'));

$product_name = get_field('product');
$products = get_posts(array('post_type' => 'products', 'meta_value' => $product_name, 'order' => 'ASC'));


?>

    <section class="main__content">
        <div class="container">
            <div class="content">
                <div class="content__inner">
                    <div class="content__inner_wrapper">
                        <div class="about-us">
                            <div class="about-us-inner">
                                <div class="about-salon">
                                    <div class="about-salon-inner">
                                        <h1 class="title_text our_salon_text">About Our Salon</h1>
                                        <img src="<?= get_field('about_salon_image') ?>" alt=""
                                             class="about-salon-image">
                                        <p class="default-text about-description"><?= get_field('about_salon_text') ?></p>
                                    </div>
                                </div>
                                <div class="services-and-prices">
                                    <table class="styled-table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Points</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Dom</td>
                                            <td>6000</td>
                                        </tr>
                                        <tr class="active-row">
                                            <td>Melissa</td>
                                            <td>5150</td>
                                        </tr>
                                        <!-- and so on... -->
                                        </tbody>
                                    </table>
                                </div>

                                <div class="our-offers">
                                    <div class="our-offers-inner">
                                        <h1 class="title_text our_salon_text">What We Offer</h1>
                                        <div class="our-offers">
                                            <?php
                                            if ($offers):
                                                foreach ($offers as $offer) :
                                                    setup_postdata($offer); ?>
                                                    <div class="offer">
                                                        <b class="offer-title"><?= get_the_title($offer) ?></b>
                                                        <p class="default-text offer-description"><?= wp_strip_all_tags(get_the_content()) ?></p>
                                                    </div>
                                                <?php endforeach;
                                                wp_reset_postdata(); endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="products">
                            <div class="products_inner">
                                <div class="products-description">
                                    <div>
                                        <h1 class="title_text our_salon_text our-products">Our Products</h1>
                                        <p class="default-text text-product-description"><?= get_field('our_products_text'); ?></p>
                                    </div>

                                    <img src="<?= get_field('our_product_image'); ?>" alt="" class="our-products-image">
                                </div>


                                <div class="products">

                                    <?php
                                    if ($products):
                                        foreach ($products as $product) :
                                            setup_postdata($product); ?>
                                            <div class="product">
                                                <h1 class="product-title"><?= get_the_title($product) ?></h1>
                                                <div class="product-inner">
                                                    <img src="<?= get_field('product_image', $product->ID); ?>" alt="" class="product-image">
                                                    <p class="product-description default-text"><?= strip_tags(get_the_content(), '<br>'); ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;
                                        wp_reset_postdata(); endif; ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>