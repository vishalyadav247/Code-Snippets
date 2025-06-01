<?php

/**
 * Template Name: Blog New
 */
get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/Avada-child/blog-new-asset/index.css">

<div class="siteWidth blogNew">

    <?php if (have_rows('page_layout')) : ?>
        <?php while (have_rows('page_layout')) : the_row(); ?>

            <?php if (get_row_layout() == 'seven_blog_grid') : ?>

                <?php
                $title = get_sub_field('section_title');
                $desired_category = get_sub_field('blog_category');
                $count = 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7,
                    'category_name' => $desired_category,
                    'meta_query' => array(
                        array(
                            'key' => 'display_on_landing_page',
                            'value' => 'Yes',
                            'compare' => '='
                        )
                    )
                );
                $all_posts_query = new WP_Query($args);
                ?>

                <section class="section_1Wrapper">
                    <h2 class="sectionMainHeading"><?php echo $title ?>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                            <line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="26" y1="16" x2="4" y2="16" />
                            <polyline fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="18,7.5 26.5,16 18,24.5 " />
                        </svg>    
                    </h2>
                    <div class="section_1">

                        <?php if ($all_posts_query->have_posts()) : ?>
                            <?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                            
                                    <?php if ($count == 1) : ?>
                                        <div class="section_1-left">
                                            <a href="<?php echo get_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"></a>
                                            <div>
                                                <a href="<?php echo get_permalink() ?>">
                                                    <h3 class="absoluteTitle"><?php the_title(); ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="section_1-right">
                                            <div class="section_1-right-grid">
                                            <?php else : ?>
                                                <a href="<?php echo get_permalink() ?>">
                                                    <div class="section_1-right-grid-item">
                                                        <div>
                                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
                                                        </div>
                                                        <h4 class="limit gridTitle"><?php the_title(); ?></h4>
                                                    </div>
                                                </a>
                                                <?php if ($count % 4 == 0 && $count != 7) : ?>
                                            </div>
                                            <div class="section_1-right-grid">
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php $count++; ?>
                                 
                                <?php endwhile; ?>
                                            </div> 
                                        </div>
                                    <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'two_blog_grid') : ?>
                <?php
                $title = get_sub_field('section_title');
                $desired_category = get_sub_field('blog_category');
                $count = 1;

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'category_name' => $desired_category,
                    'meta_query' => array(
                        array(
                            'key' => 'display_on_landing_page',
                            'value' => 'Yes',
                            'compare' => '='
                        )
                    )
                );
                $all_posts_query = new WP_Query($args);
                ?>

                <section class="section_2">
                    <h2 class="sectionMainHeading"><?php echo $title ?>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                            <line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="26" y1="16" x2="4" y2="16" />
                            <polyline fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="18,7.5 26.5,16 18,24.5 " />
                        </svg>
                    </h2>
                    <div class="section_2Wrapper">
                        <?php if ($all_posts_query->have_posts()) : ?>
                            <?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                                <?php if (get_field('display_on_landing_page') == 'Yes') : ?>
                                <?php
                                $post_url = get_permalink();
                                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                ?>
                                <?php if ($count == 1) : ?>
                                    <div class="section_2-left">
                                        <a href="<?php echo $post_url; ?>"><img src="<?php echo $featured_image_url; ?>"></a>
                                        <div>
                                            <h3 class="absoluteTitle"><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                <?php elseif ($count == 2) : ?>
                                    <div class="section_2-right">
                                        <a href="<?php echo $post_url; ?>"><img src="<?php echo $featured_image_url; ?>"></a>
                                        <div>
                                            <h3 class="absoluteTitle"><a href="<?php echo $post_url; ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php $count++; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </section>
            <?php elseif (get_row_layout() == 'seven_blog_reverse_grid') : ?>
                <?php
                $title = get_sub_field('section_title');
                $desired_category = get_sub_field('blog_category');
                $count = 1;

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 7, 
                    'category_name' => $desired_category,
                    'meta_query' => array(
                        array(
                            'key' => 'display_on_landing_page',
                            'value' => 'Yes',
                            'compare' => '='
                        )
                    )
                );
                $all_posts_query = new WP_Query($args);
                ?>
                <section class="section_1Wrapper">
                    <h2 class="sectionMainHeading"><?php echo $title ?>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                            <line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="26" y1="16" x2="4" y2="16" />
                            <polyline fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="18,7.5 26.5,16 18,24.5 " />
                        </svg>
                    </h2>
                    <section class="section_1 Reverse">
                        <?php if ($all_posts_query->have_posts()) : ?>

                            <?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                                <?php if (get_field('display_on_landing_page') == 'Yes') : ?>
                                <?php
                                $post_url = get_permalink();
                                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                ?>

                                <?php if ($count == 1) : ?>
                                    <div class="section_1-left">
                                        <a href="<?php echo get_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"></a>
                                        <div>
                                            <a href="<?php echo get_permalink() ?>">
                                                <h3 class="absoluteTitle"><?php the_title(); ?></h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="section_1-right">
                                        <div class="section_1-right-grid">
                                        <?php else : ?>
                                            <a href="<?php echo get_permalink() ?>">
                                                <div class="section_1-right-grid-item">
                                                    <div>
                                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
                                                    </div>
                                                    <h4 class="limit gridTitle"><?php the_title(); ?></h4>
                                                </div>
                                            </a>
                                            <?php if ($count % 4 == 0 && $count != 7) : ?>
                                        </div>
                                        <div class="section_1-right-grid">
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php $count++; ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                    </section>
                </section>

            <?php elseif (get_row_layout() == 'four_blog_grid_lagre_tiles') : ?>
                <?php
                $title = get_sub_field('section_title');
                $desired_category = get_sub_field('blog_category');
                $count = 1;

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category_name' => $desired_category,
                    'meta_query' => array(
                        array(
                            'key' => 'display_on_landing_page',
                            'value' => 'Yes',
                            'compare' => '='
                        )
                    )
                );
                $all_posts_query = new WP_Query($args);
                ?>

                <section class="section_3">
                    <h2 class="sectionMainHeading"><?php echo $title; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                            <line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="26" y1="16" x2="4" y2="16" />
                            <polyline fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="18,7.5 26.5,16 18,24.5 " />
                        </svg>
                    </h2>
                    <div class="section_3Wrapper">
                        <?php if ($all_posts_query->have_posts()) : ?>
                            <?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                            <?php if (get_field('display_on_landing_page') == 'Yes') : ?>
                                <div class="section_3-item">
                                    <a href="<?php echo get_permalink() ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
                                    </a>
                                    <div>
                                        <a href="<?php echo get_permalink() ?>">
                                            <h3 class="limit"><?php the_title(); ?></h3>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'nine_blog_grid') : ?>
                <?php
                $title = get_sub_field('section_title');
                $desired_category = get_sub_field('blog_category');

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'category_name' => $desired_category,
                    'meta_query' => array(
                        array(
                            'key' => 'display_on_landing_page',
                            'value' => 'Yes',
                            'compare' => '='
                        )
                    )
                );
                $all_posts_query = new WP_Query($args);
                ?>

                <section class="section_4">
                    <h2 class="sectionMainHeading"><?php echo $title; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                            <line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="26" y1="16" x2="4" y2="16" />
                            <polyline fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="18,7.5 26.5,16 18,24.5 " />
                        </svg>
                    </h2>
                    <div class="section_1-right">
                        <?php if ($all_posts_query->have_posts()) : ?>
                            <div class="section_1-right-grid">
                                <?php $count = 1; ?>
                                <?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                                <?php if (get_field('display_on_landing_page') == 'Yes') : ?>
                                    <a href="<?php echo get_permalink() ?>">
                                        <div class="section_1-right-grid-item">
                                            <div>
                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
                                            </div>
                                            <h4 class="limit gridTitle"><?php the_title(); ?></h4>
                                        </div>
                                    </a>
                                    <?php if ($count % 3 == 0 && $count != 9) : ?>
                            </div>
                            <div class="section_1-right-grid">
                            <?php endif; ?>
                            <?php $count++; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'four_blog_grid_small_tiles') : ?>

                <?php
                $title = get_sub_field('section_title');
                $desired_category = get_sub_field('blog_category');

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category_name' => $desired_category,
                    'meta_query' => array(
                        array(
                            'key' => 'display_on_landing_page',
                            'value' => 'Yes',
                            'compare' => '='
                        )
                    )
                );
                $all_posts_query = new WP_Query($args);
                ?>

                <section class="section_3 h315">
                    <h2 class="sectionMainHeading"><?php echo $title; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                            <line fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" x1="26" y1="16" x2="4" y2="16" />
                            <polyline fill="none" stroke="#000000" stroke-width="3" stroke-miterlimit="10" points="18,7.5 26.5,16 18,24.5 " />
                        </svg>
                    </h2>
                    <div class="section_3Wrapper">
                        <?php if ($all_posts_query->have_posts()) : ?>
                            <?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
                            <?php if (get_field('display_on_landing_page') == 'Yes') : ?>
                                <div class="section_3-item">
                                    <a href="<?php echo get_permalink() ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
                                    </a>
                                    <div>
                                        <a href="<?php echo get_permalink() ?>">
                                            <h3 class="absoluteTitle"><?php the_title(); ?></h3>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </section>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</div>

<script>
    let MAX_TITLE_LENGTH = (window.innerWidth < 1300) ? 25 : 43;

    let title4Limit = document.querySelectorAll('.limit');
    for (let title of title4Limit) {
        let text = title.innerHTML;
        title.innerHTML = truncateTitle(text);
    }

    function truncateTitle(title) {
        // Check if the title length exceeds the maximum limit
        if (title.length > MAX_TITLE_LENGTH) {
            // Truncate the title and add three dots at the end
            return title.substring(0, MAX_TITLE_LENGTH) + '...';
        }
        // If the title is within the limit, return it as is
        return title;
    }
</script>

<?php get_footer(); ?>
