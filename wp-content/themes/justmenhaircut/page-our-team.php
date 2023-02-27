<?php get_header();

$employee_name = get_field('employee');
global $post;
$employees = get_posts( array( 'post_type' => 'employee', 'meta_value' => $employee_name, 'order' => 'ASC' ) );

?>

<section class="main__content">
    <div class="container">
        <div class="content">
            <div class="content__inner">
                <div class="content__inner_wrapper">
                    <div class="our__team">

                        <?php

                        if( $employees ):
                            foreach( $employees as $employee ) :
                                setup_postdata($employee); ?>

                                <div class="our__team_item">
                                    <div class="our__team__logo">
                                        <img src="<?= get_field('employee_image', $employee->ID) ?>" alt="" class="our_team_image">
                                    </div>
                                    <div class="our__team__info">
                                        <div class="short__info">
                                            <div class="employee_name"><?= get_the_title($employee) ?></div>
                                            <div class="employee_role"><?= get_field('employee_role', $employee->ID) ?></div>
                                        </div>
                                        <div>
                                            <p class="employee_description"><?= wp_strip_all_tags(get_the_content()) ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; wp_reset_postdata(); endif;  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
