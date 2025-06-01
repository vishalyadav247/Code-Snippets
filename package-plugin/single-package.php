<?php

/**
 * Template Name: Itinerary Details
 * Template Post Type: package
 */
get_header();
?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <!-- Display the Banner Image -->
        <?php
        $banner_image_id = get_post_meta(get_the_ID(), '_banner_image_id', true);
        if (!empty($banner_image_id)) : ?>
            <div class="banner-image">
                <?php echo wp_get_attachment_image($banner_image_id, 'full'); ?>
            </div>
        <?php endif; ?>
        <!-- itinerary detail wrapper -->
        <article id="post-<?php the_ID(); ?>" class="packageInfo myWidth">
            <div class="left_side">

                <?php
                $number_of_days = get_post_meta(get_the_ID(), '_number_of_days', true);
                $number_of_nights = get_post_meta(get_the_ID(), '_number_of_nights', true);
                echo '<span class="time-calculate">';
                if (!empty($number_of_nights)) {
                    echo esc_html($number_of_nights) . ' Nights';
                }
                if (!empty($number_of_days)) {
                    echo ' / ' . esc_html($number_of_days) . ' Days';
                }
                echo '</span>';
                ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="package-price-nego">
                    <?php
                    $itinerary_base_price = get_post_meta(get_the_ID(), '_itinerary_base_price', true);
                    $itinerary_offer_price = get_post_meta(get_the_ID(), '_itinerary_offer_price', true);
                    if ($itinerary_base_price > 0) {
                        $difference = $itinerary_base_price - $itinerary_offer_price;
                        $discount_percentage = ($difference / $itinerary_base_price) * 100;
                        $discount_percentage = round($discount_percentage, 2);
                    }
                    if ($itinerary_base_price == "" && $itinerary_offer_price == "") {
                    ?>
                        <p class="priceOnRequest">Price On Request</p>

                    <?php } elseif ($itinerary_base_price !== "" && $itinerary_offer_price == "") {
                    ?>
                        <h4 id="package-stickys">₹ <?php echo $itinerary_base_price; ?> <span style="font-size:12px;opacity:0.8;text-decoration:none;">Per person</span></h4>

                    <?php } elseif ($itinerary_base_price == "" && $itinerary_offer_price !== "") {
                    ?>
                        <p class="priceOnRequest">Price On Request</p>

                    <?php } else {
                    ?>
                        <h4 id="package-stickys">₹ <?php echo $itinerary_offer_price; ?><span>₹ <?php echo $itinerary_base_price; ?></span>
                            <sub>(<?php echo $discount_percentage; ?>% OFF)</sub>
                            <a href="#">
                                <img alt="images" data-toggle="tooltip" data-placement="bottom" title="Pricing is exclusive of GST &amp; Subject to Availability, will vary as per season and no. of guests" src="https://www.ekashmirtourism.com/wp-content/themes/lehladdak/images/info.png">
                            </a>
                        </h4>

                    <?php } ?>
                </div>
                <div class="day_highlight">
                    <?php $day_highlights = get_post_meta(get_the_ID(), '_day_highlights', true);
                    if (!empty($day_highlights)) {
                        echo '<ul>';
                        foreach ($day_highlights as $highlight) {
                            echo '<li>' . esc_html($highlight) . '</li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
                <div class='inclusive_categories'>
                    <?php
                    $inclusion_categories = get_the_terms(get_the_ID(), 'inclusion_categories');
                    if (!empty($inclusion_categories)) {
                        echo '<ul>';
                        foreach ($inclusion_categories as $inclusion_category) {
                            echo '<li><img alt="other" src="' . esc_html($inclusion_category->description) . '">' . '<span>' . esc_html($inclusion_category->name) . '</span></li>';
                        }
                        echo '</ul>';
                    }

                    ?>
                </div>
                <div class="itinerary-content">
                    <h3>Overview</h3>
                    <?php the_content(); ?>
                </div>
                <div>
                    <?php
                    // Fetch itinerary details stored as post meta
                    $itinerary_data = get_post_meta(get_the_ID(), '_itinerary_data', true);

                    if (!empty($itinerary_data)) {
                        echo '<div class="itinerary-details">';
                        echo '<h3>Itinerary</h3>';
                        foreach ($itinerary_data as $itinerary) {
                            echo '<div class="itinerary-day">';
                            echo '<p class="dayTitle">Day ' . esc_html($itinerary['day']) . ' : ' . esc_html($itinerary['title']) . '</p>';
                            echo '<p class="highlights">' . wp_kses_post($itinerary['highlights']) . '</p>';
                            echo '<p class="details">' . wp_kses_post($itinerary['details']) . '</p>';
                            echo '</div>';
                        }
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="right_side">
                <div class="package-need-help  space-for">
                    <div id="Content1" style="display: block;">
                        <h3>Get Instant Call Back</h3>
                    </div>
                    <div id="Content2" style="display: none;">
                        <?php
                        $number_of_days = get_post_meta(get_the_ID(), '_number_of_days', true);
                        $number_of_nights = get_post_meta(get_the_ID(), '_number_of_nights', true);
                        echo '<span class="time-calculate">';
                        if (!empty($number_of_nights)) {
                            echo esc_html($number_of_nights) . 'Nights';
                        }
                        if (!empty($number_of_days)) {
                            echo ' / ' . esc_html($number_of_days) . 'Days';
                        }
                        echo '</span>';
                        ?>
                        <h3><?php the_title(); ?></h3>
                        <div class="package-price-nego">
                            <?php
                            $itinerary_base_price = get_post_meta(get_the_ID(), '_itinerary_base_price', true);
                            $itinerary_offer_price = get_post_meta(get_the_ID(), '_itinerary_offer_price', true);
                            if ($itinerary_base_price > 0) {
                                $difference = $itinerary_base_price - $itinerary_offer_price;
                                $discount_percentage = ($difference / $itinerary_base_price) * 100;
                                $discount_percentage = round($discount_percentage, 2);
                            }
                            if ($itinerary_base_price == "" && $itinerary_offer_price == "") {
                            ?>
                                <p class="priceOnRequest">Price On Request</p>

                            <?php } elseif ($itinerary_base_price !== "" && $itinerary_offer_price == "") {
                            ?>
                                <h4 id="package-stickys">₹ <?php echo $itinerary_base_price; ?><span style="font-size:12px;opacity:0.8;text-decoration:none;">Per person</span></h4>

                            <?php } elseif ($itinerary_base_price == "" && $itinerary_offer_price !== "") {
                            ?>
                                <p class="priceOnRequest">Price On Request</p>

                            <?php } else {
                            ?>
                                <h4 id="package-stickys">₹ <?php echo $itinerary_offer_price; ?><span>₹ <?php echo $itinerary_base_price; ?></span>
                                    <sub>(<?php echo $discount_percentage; ?>% OFF)</sub>
                                    <a href="#">
                                        <img alt="images" data-toggle="tooltip" data-placement="bottom" title="Pricing is exclusive of GST &amp; Subject to Availability, will vary as per season and no. of guests" src="https://www.ekashmirtourism.com/wp-content/themes/lehladdak/images/info.png">
                                    </a>
                                </h4>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="itineraryForm">
                        <?php echo do_shortcode('[sc name="itinerary_form"]'); ?>
                    </div>
                </div>
                <div class="package-why-choose">
                    <h3>Why Choose us ?</h3>
                    <p>What makes us diffrent from other tour package companies</p>
                    <ul>
                        <li>
                            <img alt="icone" src="/wp-content/uploads/2019/08/why1.png">

                            <label>
                                <h5>Best Travel Experts</h5>
                                <p>Our travel experts have core and intense knowledge about Kashmir sector with over 10 years of experience that will help you choose the best possible itinerary as per your requirements.</p>
                            </label>
                        </li>
                        <li>
                            <img alt="icone" src="/wp-content/uploads/2019/08/why2.png">
                            <label>
                                <h5>24 X 7 On-Trip Assistance</h5>
                                <p>Our travel experts are just one call away during your tour to help you with any kind of immediate assistance so that your tour is a more enjoyable and hassle-free tour.</p>
                            </label>
                        </li>
                        <li>
                            <img alt="icone" src="/wp-content/uploads/2019/08/why3.png">
                            <label>
                                <h5>Best Rate Guarantee</h5>
                                <p>eKashmir Tourism ensures best rates to all our esteemed guests since we have our own hotels and fleet of vehicles and drivers and there is no third-party involvement. This ensures personalized service and best rates.</p>
                            </label>
                        </li>
                    </ul>
                    <a href="" class="lets-plan">Let’s Plan your Thailand Tours</a>
                </div>
            </div>
        </article>
        <script>
            function min_1000(scrn) {
                if (scrn.matches) { // If media query matches
                    let content1 = document.querySelector('#Content1');
                    let content2 = document.querySelector('#Content2');
                    window.addEventListener('scroll', () => {
                        if (window.scrollY >= 100) {
                            content2.style.display = "block";
                            content1.style.display = "none";
                        } else {
                            content1.style.display = "block";
                            content2.style.display = "none";
                        }
                    })
                }
            }

            var scrn = window.matchMedia("(min-width: 1000px)")
            min_1000(scrn);
            scrn.addEventListener("change", function() {
                min_1000(scrn);
            });
        </script>

<?php endwhile;
else :
    echo '<p>No itineraries found.</p>';
endif;

get_footer();
