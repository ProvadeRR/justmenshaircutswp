<?php

get_header();
$proposition_name = get_field('proposition');
global $post;
$propositions = get_posts( array( 'post_type' => 'propositions', 'meta_value' => $proposition_name, 'order' => 'ASC' ) );

?>
<section class="main__content">
    <div class="container">
        <div class="content">
            <div class="content__inner">
                <div class="content__inner_wrapper">
                    <div class="phone">
                        <div class="phone__number"><?= get_field("phone_number"); ?></div>
                    </div>
                    <div class="address">
                        <div class="address__info"><?= get_field("address"); ?></div>
                    </div>

                    <div class="site__image">
                        <div class="site__image__logo">
                            <img src="<?= get_field('image') ?>" alt="Just Mens haircuts site logo"
                                 class="site__image__logo__image">
                        </div>
                    </div>

                    <div class="about__business">
                        <span class="about__business_title"><?= get_bloginfo( 'name' ); ?> - </span>

                        <div class="about__business_description">
                            <h4 class="about__business_description_text"><?= get_field('description') ?></h4>

                            <h4 class="about_business_invite"><span class="about__business_invite_text"><?= get_field('invite') ?></span></h4>
                        </div>
                    </div>

                    <div class="our_propositions">
                        <div class="our_propositions__inner">

                            <?php

                            if( $propositions ):
                                     foreach( $propositions as $proposition ) :
                                        setup_postdata($proposition); ?>

                                         <div class="item__proposition">
                                             <div class="item_proposition__card">
                                                 <a href="<?= get_field('page_url', $proposition->ID) ?>" class="item__proposition_link"> <span
                                                             class="proposition_link_message"><?= get_the_title($proposition) ?></span></a>

                                                 <img src="<?= get_field('proposition_image', $proposition->ID) ?>" alt="" class="item_proposition__image">

                                                 <span class="item__proposition__text"><?= wp_strip_all_tags(get_the_content()) ?></span>
                                             </div>
                                         </div>
                                    <?php endforeach; wp_reset_postdata(); endif;  ?>
                        </div>
                    </div>

                    <div class="facebook__info" data-href="https://www.facebook.com/JustMensHaircuts"
                         data-width="427" data-height="227" data-show-facepile="true" data-show-posts="false"
                         data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                         fb-xfbml-state="rendered"
                         fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=427&amp;height=227&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FJustMensHaircuts&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=427">
                            <span style="vertical-align: bottom; width: 427px; height: 130px;"><iframe
                                    name="f313d1b2d05fcc" width="427px" height="227px"
                                    data-testid="fb:page Facebook Social Plugin"
                                    title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                    allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                    src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df214924f2c631ec%26domain%3Dwww.justmenshaircuts.com%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fwww.justmenshaircuts.com%252Ff3b32d792b96df4%26relation%3Dparent.parent&amp;container_width=427&amp;height=227&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FJustMensHaircuts&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=427"
                                    style="border: none; visibility: visible; width: 427px; height: 130px;"
                                    class=""></iframe></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>