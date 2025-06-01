<?php
/*
Template Name: Thailand Packages Grid Display
*/

get_header('ladakh'); ?>
<style type="text/css"></style>
<!-- Taxonomy Dropdowns -->
<div class="full-banner mb-30">
    <?php
    $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
    if ($featured_image):
    ?>
        <img class="width-100" src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
    <?php endif; ?>

    <div class="full-banner-over-text">
        <h1 class="new-package-title"><?php echo get_the_title(); ?></h1>
    </div>
</div>
<style type="text/css">
    body {
        font-family: Montserrat, sans-serif !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'PlayfairDisplay', serif;
        color: #24272c;
    }

    p,
    .custom-select-wrapper select {
        font-size: 15px;
        font-weight: 500;
        line-height: 1.67;
        letter-spacing: -0.6px;
        color: #24272c;
    }

    .sightseeing-list,
    .inclusiveCategory-new,
    .dayHighlight-list {
        font-size: 13px;
        font-weight: 500;
        /*    line-height: 1.67;*/
        /*    letter-spacing: -0.6px;*/
        color: #24272c;
    }

    .inclusiveCategory-new,
    .dayHighlight-list,
    .custom-select-wrapper select {
        font-weight: 500;
    }

    .mb-30 {
        margin-bottom: 30px;
    }

    .mb-15,
    .read-more-content h2 {
        margin-bottom: 15px;
    }

    .package-inner-start p {
        float: initial;
    }

    h2 {
        font-size: 26px;
    }

    .taxonomy-filters {
        display: flex;
        flex-wrap: wrap;
        border: 1px solid #ddd;
        padding: 0;
        border-radius: 5px;
    }

    .custom-select-wrapper {
        padding: 15px;
    }

    .taxonomy-filters:before {
        display: none;
    }

    .custom-select-wrapper:not(:last-child) {
        border-right: 1px solid #ddd;
    }

    .sorted-by-text {
        font-size: 14px;
        color: #24272c;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .custom-select-wrapper select {
        padding: 6px 7px;
        border-radius: 5px;
        border: 1px solid #a7a7a7;
        width: 100%;
        font-size: 14px;
    }

    .width-100 {
        width: 100%;
    }

    .full-banner {
        position: relative;
    }

    .full-banner-over-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        border-radius: 5px;
        text-align: center;
        /*background-color: rgba(0, 0, 0, 0.4);*/
        padding: 0;
        height: 100%;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    .new-package-title {
        color: #fff;
        font-size: 30px;
    }

    .page-template-page-lehpackages {
        margin-top: 38px;
    }

    .box-title-new,
    .box-title-new:hover {
        font-size: 17px;
        line-height: 1.1;
        text-transform: capitalize;
        height: 20px;
        color: #24272c;
        font-weight: 700;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 5px;
        position: relative;
        top: -1px;
    }

    .package-grid .offerPrice {
        color: #24272c;
        font-size: 20px;
        font-weight: 700;
    }

    .package-grid {
        display: grid;
        gap: 20px;
        grid-template-columns: repeat(3, 1fr);
    }

    .content-top,
    .content-bottom {
        display: flex;
        justify-content: space-between;
        gap: 15px;
    }

    .content-bottom {
        align-items: center;
    }

    .new-content-box {
        padding: 15px;
        height: calc(100% - 200px);
    }

    .package-grid-column {
        border: 1px solid #ddd;
        border-radius: 15px;
        position: relative;
    }

    .package-img-box img {
        border-radius: 15px 15px 0 0;
        width: 100%;
    }

    .newPackageDuration {
        white-space: nowrap;
        font-size: 12px;
        color: #ea2b2e;
        border: 1px solid;
        padding: 1px 3px;
        border-radius: 6px;
        font-weight: 600;

    }

    .dayHighlight-list li:first-child {
        margin-left: -15px;
    }

    .dayHighlight-list {
        padding-left: 15px;
        display: flex;
        flex-wrap: wrap;
        column-gap: 30px;
        margin-top: 5px;
        margin-bottom: 15px;
        row-gap: 0px;
        padding-bottom: 10px;
    }

    .dayHighlight-list li {
        list-style: disc;
        height: 0;
        margin-bottom: 20px;
    }

    .mt-0 {
        margin-top: 0;
    }

    .dayHighlight-list li:first-child::marker {
        content: '';
    }

    .inclusiveCategory-new {
        display: flex;
        flex-wrap: wrap;
        padding-left: 15px;
        column-gap: 30px;
        row-gap: 6px;
        margin-top: 15px;
        margin-bottom: 20px;
    }

    .inclusiveCategory-new li {
        list-style: disc;
    }

    .sightseeing-list {
        list-style: none;
        padding: 0;
        margin: 0;
        margin-bottom: 20px;
    }

    .sightseeing-list li {
        position: relative;
        padding-left: 20px;
    }

    .sightseeing-list li::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 15px;
        height: 15px;
        background-image: url('https://stg-ekashmirtourismcom-kashmirstag.kinsta.cloud/wp-content/uploads/2025/01/right-mark.svg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .inclusiveCategory-new li {
        flex: 0 1 calc(50% - 30px);
    }

    .content-bottom {
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 10px;
        background: #f9f9f9;
        position: relative;
        bottom: 198px;
        margin: 10px 15px 0;
    }

    .view-package-button,
    .view-package-button:hover,
    .view-package-button:focus {
        font-size: 14px;
        padding: 8px;
        display: block;
        border-radius: 5px;
        color: #fff;
        font-weight: 600;
        text-decoration: none;
        background: linear-gradient(to left, #ea4f23, #ea2330);
        border: none;
        width: 100%;
        /*margin-top: 20px;*/
        cursor: pointer;
        white-space: nowrap;
    }

    .view-package-button:hover {
        background: linear-gradient(to left, #cd3206, #be0004);
    }

    .new-date-info {
        font-size: 13px;
        line-height: 1.3;
        margin-top: 5px;
    }

    @media (min-width:768px) and (max-width:1024px) {
        .package-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width:767px) {
        h2 {
            font-size: 22px;
        }

        .custom-select-wrapper label.filter-checkbox {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: row-reverse;
            margin-bottom: 15px;
            font-weight: 500;
            font-size: 14px;
        }

        .filter-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .custom-select-wrapper {
            padding: 0px;
        }

        .custom-select-wrapper {
            border-right: none !important;
            width: 100%;
        }

        .new-package-title {
            font-size: 30px !important;
        }

        .package-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }


    .all-newPackageDuration {
        font-size: 12px;
        font-weight: 600;
        font-style: normal;
        font-stretch: normal;
        line-height: 11px;
        letter-spacing: -0.3px;
        color: #0bcee0;
        padding-bottom: 5px;
    }

    .all-box-title-new,
    .all-box-title-new:hover {
        font-size: 14px;
        font-weight: 600;
        display: block;
        font-style: normal;
        font-stretch: normal;
        line-height: 20px;
        letter-spacing: normal;
        color: #000000;
        padding-bottom: 10px;
    }

    .all-new-priceWrapper {
        font-size: 14px;
        font-weight: bold;
        font-style: normal;
        font-stretch: normal;
        line-height: 1.5;
        letter-spacing: -0.4px;
        color: #24272c;
        margin-bottom: 30px;
    }

    .best-seller-flex {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 8px 20px 8px;
    }

    .best-seller-flex h2 {
        font-size: 30px;
    }

    .best-seller-flex a,
    .best-seller-flex a:hover {
        font-size: 14px;
        font-weight: 600;
        font-style: normal;
        font-stretch: normal;
        line-height: 2.67;
        letter-spacing: -0.3px;
        color: #ea2330;
        display: inline-block;
    }

    .best-seller-flex a .fa {
        font-size: 12px;
    }

    .all-view-btn,
    .all-view-btn:hover {
        width: 150px;
        text-align: center;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .box-css-bottom {
        padding: 15px;
        height: calc(100% - 170px);
        position: relative;
    }

    .btn-box-absolute {
        position: absolute;
        bottom: 15px;
    }

    .all-package-grid {
        grid-template-columns: repeat(5, 1fr);
    }

    .package-grid .all-new-priceWrapper .offerPrice {
        color: #24272c;
        font-size: 16px;
        font-weight: 600;
    }

    .package-grid .all-new-priceWrapper .basePrice {
        color: #24272c;
        font-size: 14px;
        font-weight: 400;
        text-decoration: line-through;
    }

    .package-grid-slider .slick-prev:before,
    .package-grid-slider .slick-next:before {
        content: "" !important;
    }

    .all-box-title-new {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        height: 40px;
        margin-bottom: 10px;
    }

    .all-new-priceWrapper .basePrice {
        font-weight: 300;
        text-decoration: line-through;
    }

    .package-grid-slider .slick-track {
        display: flex;
        gap: 10px;
    }

    /*.package-grid-column{
margin-right: 10px;
}
*/
    @media (width < 1100px) {
        .secWidth.package-grid-slider .slick-arrow {
            display: block !important;
        }

        .secWidth.package-grid-slider .slick-next {
            right: -15px;
        }

        .secWidth.package-grid-slider .slick-prev {
            left: -15px;
        }
    }

    @media (width < 767px) {
        .best-seller-flex h2 {
            font-size: 26px;
        }

        .secWidth.package-grid-slider {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }

    /* Filter Popup Styles */
    .filter-popup {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .filter-popup-content {
        background: #fff;
        width: 100%;
        max-width: 100%;
        padding: 20px 0 20px 20px;
        height: 100%;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    .close-popup {
        position: absolute;
        top: 6px;
        right: 15px;
        font-size: 45px;
        cursor: pointer;
    }

    @media(min-width:768px) {
        .toggle-filter {
            display: none;
        }
    }

    /* Responsive Styles */
    @media (max-width: 767px) {
        .filter-popup-content h3 {
            font-size: 24px;
        }

        .toggle-filter {
            position: fixed;
            bottom: -3px;
            box-shadow: 0px 0px 11px 0px rgb(0 0 0 / 75%);
            background: #fff;
            padding: 20px 15px;
            border: none;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            z-index: 999;
            width: 100%;
            color: #000000;
        }

        .filter-buttons {
            position: fixed;
            width: calc(100% - 30px);
            bottom: 15px;
            display: flex;
            justify-content: space-evenly;
        }

        .apply-filter-btn,
        .clear-filter-btn {
            font-size: 14px;
            padding: 10px 20px;
            border-radius: 5px;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            border: none;
            cursor: pointer;
            white-space: nowrap;
        }

        .apply-filter-btn {
            background: linear-gradient(to left, #ea4f23, #ea2330);
            color: #fff;
        }

        .clear-filter-btn {
            background: #000000;
            color: #fff;
        }

        .filter-desktop {
            display: none;
        }

        .filter-mobile {
            display: block;
            margin-top: 15px;
            margin-bottom: 15px;
            height: calc(100% - 100px);
            padding-right: 20px;
            overflow: auto;
        }
    }
</style>
<div class="container">
    <div class="read-more-content mb-30"><?php
                                            if (get_field('page_content')):
                                                the_field('page_content');
                                            endif;
                                            ?>
    </div>
</div>

<?php
$sortcorder_content = get_field('sortcorder_content');
$has_container_class = preg_match('/class=[\'"][^\'"]*(container-fluid|container)[^\'"]*[\'"]/', $sortcorder_content);

if ($sortcorder_content):
?>
    <div class="<?php echo !$has_container_class ? 'container' : ''; ?>">
        <div class="read-more-content mb-30">
            <?php echo $sortcorder_content; ?>
        </div>
    </div>
<?php endif; ?>
<!-- Mobile Filter Button -->
<button class="toggle-filter">Filter Packages <i class="fa fa-filter" aria-hidden="true"></i></button>

<!-- Mobile Filter Popup -->
<div id="filter-popup" class="filter-popup">
    <div class="filter-popup-content">
        <span class="close-popup">&times;</span>
        <h3>Filter Packages</h3>
        <div class="filter-mobile">
            <?php
            $taxonomies = ['package_categories', 'inclusion_categories', 'destinations'];
            foreach ($taxonomies as $taxonomy) {
                $terms = get_terms([
                    'taxonomy' => $taxonomy,
                    'hide_empty' => false,
                ]);

                if (!empty($terms) && !is_wp_error($terms)) {
                    echo '<div class="custom-select-wrapper">';
                    echo '<div class="filter-title">' . esc_html(ucfirst(str_replace('_', ' ', $taxonomy))) . '</div>';

                    foreach ($terms as $term) {
                        echo '<label class="filter-checkbox">
                                <input type="checkbox" name="' . esc_attr($taxonomy) . '[]" value="' . esc_attr($term->slug) . '"> 
                                ' . esc_html($term->name) . '
                              </label>';
                    }
                    echo '</div>';
                }
            }
            ?>

        </div>

        <!-- Apply and Clear Filter Buttons -->
        <div class="filter-buttons">
            <button id="apply-filter" class="apply-filter-btn">Apply Filter</button>
            <button id="clear-filter" class="clear-filter-btn">Clear Filter</button>
        </div>
    </div>
</div>


<style>
    .slider {
        position: relative;
        width: 175px;
        height: 50px;
        display: flex;
        align-items: center;
        overflow: initial;
    }

    .slider span {
        position: absolute;
        font-size: 14px;
        font-weight: bold;
        color: black;
        top: -7px;
        background: #fff;
    }

    #range-min-val,
    #range-max-val {
        margin-left: -3px;
    }

    #range-min-val {
        left: calc(0% + 10px);
    }

    #range-max-val {
        left: calc(100% - 10px);
    }

    #price-min-val,
    #price-max-val {
        margin-left: -16px;
    }

    #price-min-val {
        left: calc(0% + 10px);
    }

    #price-max-val {
        left: calc(100% - 10px);
    }

    .slider-track,
    .slider-track-price {
        position: absolute;
        height: 6px;
        background: blue;
        border-radius: 3px;
        z-index: 4;
        left: 0;
        right: 0;
    }

    input[type="range"] {
        position: absolute;
        width: 100%;
        -webkit-appearance: none;
        appearance: none;
        background: transparent;
        pointer-events: none;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        background: radial-gradient(circle, white 30%, blue 60%);
        border: 2px solid black;
        border-radius: 50%;
        pointer-events: all;
        position: relative;
        z-index: 999;
        top: -7px;
        cursor: pointer;
    }

    input[type="range"]::-moz-range-thumb {
        width: 20px;
        height: 20px;
        background: radial-gradient(circle, white 30%, blue 60%);
        border: 2px solid black;
        border-radius: 50%;
        pointer-events: all;
        position: relative;
        z-index: 999;
        top: -7px;
        cursor: pointer;
    }

    input[type="range"]::-webkit-slider-runnable-track {
        height: 6px;
        background: #d0d7e3;
        border-radius: 3px;
    }
</style>

<!-- Taxonomy Filters for Desktop -->
<div class="container">
    <div class="taxonomy-filters filter-desktop mb-30">
        <?php
        // Define custom labels for "Sorted By" text based on taxonomy names
        $sorted_by_labels = [
            'package_categories' => 'Sort by Package Type',
            'inclusion_categories' => 'Sort by Categories',
            'destinations' => 'Sort by Destination',
        ];

        foreach ($taxonomies as $taxonomy) {
            $terms = get_terms([
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
            ]);

            if (!empty($terms) && !is_wp_error($terms)) {
                // Set the "Sorted By" text dynamically based on the taxonomy
                $sorted_by_text = isset($sorted_by_labels[$taxonomy]) ? $sorted_by_labels[$taxonomy] : 'Sort by ' . ucfirst(str_replace('_', ' ', $taxonomy));

                echo '<div class="custom-select-wrapper">';
                echo '<div class="sorted-by-text"><span>' . esc_html($sorted_by_text) . '</span></div>'; // Custom sorted by text
                echo '<select name="' . esc_attr($taxonomy) . '" class="filter-select">';
                echo '<option value="">' . esc_html('Select ' . ucfirst(str_replace('_', ' ', $taxonomy))) . '</option>'; // Keep original select option
                foreach ($terms as $term) {
                    echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                }
                echo '</select>';
                echo '</div>';
            }
        }
        ?>
        <?php
        // Fetch minimum and maximum nights dynamically
        $min_nights = PHP_INT_MAX;
        $max_nights = 0;

        $args = array(
            'post_type' => 'package',
            'posts_per_page' => -1
        );
        $package_query = new WP_Query($args);

        if ($package_query->have_posts()) {
            while ($package_query->have_posts()) {
                $package_query->the_post();
                $post_id = get_the_ID();
                $nights = get_post_meta($post_id, '_number_of_nights', true);

                if ($nights && $nights < $min_nights) {
                    $min_nights = $nights;
                }
                if ($nights && $nights > $max_nights) {
                    $max_nights = $nights;
                }
            }
            wp_reset_postdata();
        }
        ?>

        <?php
        // Fetch minimum and maximum price dynamically
        $min_price = PHP_INT_MAX;
        $max_price = 0;

        $args = array(
            'post_type' => 'package',
            'posts_per_page' => -1
        );
        $package_query = new WP_Query($args);

        if ($package_query->have_posts()) {
            while ($package_query->have_posts()) {
                $package_query->the_post();
                $post_id = get_the_ID();
                $price = get_post_meta($post_id, '_itinerary_base_price', true);

                if ($price && $price < $min_price) {
                    $min_price = $price;
                }
                if ($price && $price > $max_price) {
                    $max_price = $price;
                }
            }
            wp_reset_postdata();
        }
        ?>

        <div class="range-container custom-select-wrapper">
            <div class="sorted-by-text"><span>Price</span></div>
            <div class="slider">
                <span id="price-min-val"><?php echo esc_html($min_price); ?></span>
                <div class="slider-track-price"></div>
                <input type="range" id="price-min" min="<?php echo esc_attr($min_price); ?>" max="<?php echo esc_attr($max_price); ?>" value="<?php echo esc_attr($min_price); ?>" step="1">
                <input type="range" id="price-max" min="<?php echo esc_attr($min_price); ?>" max="<?php echo esc_attr($max_price); ?>" value="<?php echo esc_attr($max_price); ?>" step="1">
                <span id="price-max-val"><?php echo esc_html($max_price); ?></span>
            </div>
        </div>

        <div class="range-container custom-select-wrapper">
            <div class="sorted-by-text"><span>Duration</span></div>
            <div class="slider">
                <span id="range-min-val"><?php echo esc_html($min_nights); ?></span>
                <div class="slider-track"></div>
                <input type="range" id="range-min" min="<?php echo esc_attr($min_nights); ?>" max="<?php echo esc_attr($max_nights); ?>" value="<?php echo esc_attr($min_nights); ?>" step="1">
                <input type="range" id="range-max" min="<?php echo esc_attr($min_nights); ?>" max="<?php echo esc_attr($max_nights); ?>" value="<?php echo esc_attr($max_nights); ?>" step="1">
                <span id="range-max-val"><?php echo esc_html($max_nights); ?></span>
            </div>
        </div>

    </div>

    <div class="container packages-grid-container">
        <?php
        $args = array(
            'post_type' => 'package',
            'posts_per_page' => -1
        );
        $package_query = new WP_Query($args);

        if ($package_query->have_posts()) : ?>
            <div class="package-grid mb-30">
                <?php while ($package_query->have_posts()) : $package_query->the_post();
                    $post_id = get_the_ID();
                    $number_of_days = get_post_meta($post_id, '_number_of_days', true);
                    $number_of_nights = get_post_meta($post_id, '_number_of_nights', true);
                    $base_price = get_post_meta($post_id, '_itinerary_base_price', true);
                    $offer_price = get_post_meta($post_id, '_itinerary_offer_price', true);
                    $day_highlights = get_post_meta($post_id, '_day_highlights', true);
                    $inclusion_categories = wp_get_post_terms($post_id, 'inclusion_categories', array('fields' => 'all'));
                    $sightseeing_highlights = get_post_meta($post->ID, '_sightseeing_highlights', true);
                    $updated_date = get_the_modified_date('d F Y');
                ?>
                    <div class="package-grid-column">
                        <div class="package-img-box">
                            <?php if (has_post_thumbnail($post->ID)) {
                                $featured_image = get_the_post_thumbnail($post->ID, 'full');

                                $featured_image = preg_replace('/(width|height)="\d*"\s/', "", $featured_image);
                                echo '<a href="' . get_the_permalink($post) . '">' . $featured_image . '</a>';
                            } ?>

                        </div>
                        <div class="new-content-box">
                            <div class="content-top">
                                <div>
                                    <a class="box-title-new" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div>
                                    <?php if (!empty($number_of_nights) || !empty($number_of_days)) : ?>
                                        <div class="newPackageDuration">
                                            <span><?php echo esc_html($number_of_nights); ?>N</span> / <span><?php echo esc_html($number_of_days); ?>D</span>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <?php if (!empty($day_highlights)) : ?>
                                <ul class="dayHighlight-list" style="border-bottom: 1px solid #ddd;">
                                    <?php foreach ($day_highlights as $highlight) : ?>
                                        <li><?php echo esc_html($highlight); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <?php if (!empty($inclusion_categories)) : ?>
                                <div class="content-middle">
                                    <ul class="inclusiveCategory-new">
                                        <?php foreach ($inclusion_categories as $category) : ?>
                                            <li><?php echo esc_html($category->name); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($sightseeing_highlights)) : ?>
                                <ul class="sightseeing-list">
                                    <?php foreach ($sightseeing_highlights as $sightseeing) : ?>
                                        <?php if (!empty(trim($sightseeing))) : ?>
                                            <li><?php echo esc_html($sightseeing); ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                        </div>
                        <div class="content-bottom">
                            <div>
                                <?php if (!empty($base_price)) : ?>
                                    <div class="new-priceWrapper">
                                        <?php if ($base_price) : ?>
                                            <span class="offerPrice pp">₹<?php echo esc_html($base_price); ?></span> <span style="font-size:12px;font-weight:500;">/ Per person</span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($offer_price)) : ?>
                                    <div class="new-priceWrapper">
                                        <?php if ($offer_price) : ?>
                                            <span class="offerPrice">₹<?php echo esc_html($offer_price); ?></span> <span style="font-size:12px;font-weight:500;">/ Per person</span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                                <p class="new-date-info">Updated on: <?php echo esc_html($updated_date); ?></p>
                            </div>
                            <div>
                                <a href="<?php the_permalink(); ?>" class="view-package-button">View Package</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        <?php else : ?>
            <p>No packages found.</p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>

    <?php
    $footer_content = get_field('footer_common_content');
    $has_container_class = preg_match('/class=[\'"][^\'"]*(container-fluid|container)[^\'"]*[\'"]/', $footer_content);

    if ($footer_content):
    ?>
        <div class="<?php echo !$has_container_class ? 'container' : ''; ?>">
            <div class="read-more-content mb-30">
                <?php echo $footer_content; ?>
            </div>
        </div>
    <?php endif; ?>


    <?php get_footer('ladakh'); ?>

    <script>
        const paraDivDescription = document.querySelector('.read-more-content');
        const contentDescription = paraDivDescription.innerHTML;
        const wordsDescription = contentDescription.split(' ');
        const maxLengthDescription = 500; // Set limit here
        let isExpandedDescription = false;

        if (wordsDescription.length > maxLengthDescription) {
            paraDivDescription.innerHTML =
                wordsDescription.slice(0, maxLengthDescription).join(' ') +
                '... <span class="toggleButtonReadMore" onclick="toggleReadMoreDescription()"> <strong>More <i class="fas fa-chevron-down fa-sm"></i></strong></span>';
        } else {
            paraDivDescription.innerHTML = contentDescription;
        }

        function toggleReadMoreDescription() {
            if (isExpandedDescription) {
                paraDivDescription.innerHTML =
                    wordsDescription.slice(0, maxLengthDescription).join(' ') +
                    '... <span class="toggleButtonReadMore" onclick="toggleReadMoreDescription()"> <strong>More <i class="fas fa-chevron-down fa-sm"></i></strong></span>';
                isExpandedDescription = false;
            } else {
                paraDivDescription.innerHTML =
                    contentDescription +
                    ' <span class="toggleButtonReadMore" onclick="toggleReadMoreDescription()"> <strong>Less <i class="fas fa-chevron-up fa-sm"></i></strong></span>';
                isExpandedDescription = true;
            }
        }
    </script>

    <!-- JavaScript for Popup & Filters -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function checkFilterStatus() {
                let checkedCount = document.querySelectorAll('.filter-checkbox input:checked').length;
                let applyFilterBtn = document.getElementById('apply-filter');
                let clearFilterBtn = document.getElementById('clear-filter');

                if (checkedCount === 0) {
                    applyFilterBtn.disabled = true;
                    clearFilterBtn.disabled = true;
                    applyFilterBtn.style.opacity = "0.7";
                    clearFilterBtn.style.opacity = "0.7";
                } else {
                    applyFilterBtn.disabled = false;
                    clearFilterBtn.disabled = false;
                    applyFilterBtn.style.opacity = "1";
                    clearFilterBtn.style.opacity = "1";
                }
            }

            function applyFilters(button, shouldClosePopup = true) {
                let formData = {};
                document.querySelectorAll('.filter-checkbox input:checked').forEach(input => {
                    let taxonomy = input.name.replace('[]', '');
                    if (!formData[taxonomy]) {
                        formData[taxonomy] = [];
                    }
                    formData[taxonomy].push(input.value);
                });

                let originalText = button.innerHTML;
                button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                button.disabled = true;
                button.style.opacity = "0.5";

                let formDataObj = new FormData();
                formDataObj.append("action", "filter_packages");
                // Capture the values for price range

                Object.keys(formData).forEach(key => {
                    formData[key].forEach(value => {
                        formDataObj.append(`${key}[]`, value);
                    });
                });

                document.querySelector('.package-grid').innerHTML = '<p>Loading...</p>';

                fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
                        method: "POST",
                        body: formDataObj
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log(formDataObj)
                        document.querySelector('.package-grid').innerHTML = data;
                        if (shouldClosePopup) {
                            closePopup();
                        }
                    })
                    .finally(() => {
                        button.innerHTML = originalText;
                        button.disabled = false;
                        button.style.opacity = "1";
                    });
            }

            function openPopup() {
                document.getElementById('filter-popup').style.display = 'block';
                document.body.style.overflow = 'hidden';
            }

            function closePopup() {
                document.getElementById('filter-popup').style.display = 'none';
                document.body.style.overflow = '';
            }

            document.querySelector('.toggle-filter').addEventListener('click', openPopup);
            document.querySelector('.close-popup').addEventListener('click', closePopup);

            document.addEventListener('click', function(event) {
                if (!event.target.closest('.filter-popup-content') && !event.target.closest('.toggle-filter')) {
                    closePopup();
                }
            });

            checkFilterStatus();

            document.querySelectorAll('.filter-checkbox input').forEach(input => {
                input.addEventListener('change', checkFilterStatus);
            });

            document.getElementById('apply-filter').addEventListener('click', function() {
                if (this.disabled) return;
                applyFilters(this, true);
            });

            document.getElementById('clear-filter').addEventListener('click', function() {
                if (this.disabled) return;
                document.querySelectorAll('.filter-checkbox input').forEach(input => input.checked = false);
                checkFilterStatus();
                applyFilters(this, false);
            });
        });
    </script>

    <script>
        function getColumnsPerRow() {
            const grid = document.querySelector('.package-grid');
            const computedStyle = window.getComputedStyle(grid);
            const gridTemplateColumns = computedStyle.getPropertyValue("grid-template-columns");
            return gridTemplateColumns.split(" ").length; // Number of columns dynamically detected
        }

        function adjustRows() {
            const grid = document.querySelector('.package-grid');
            const columnsPerRow = getColumnsPerRow(); // Dynamically detect columns

            let columns = Array.from(grid.children);
            for (let i = 0; i < columns.length; i += columnsPerRow) {
                let row = columns.slice(i, i + columnsPerRow);

                let dayHighlightHeights = row.map(col => col.querySelector('.dayHighlight-list')?.offsetHeight || 0);
                let categoryHeights = row.map(col => col.querySelector('.inclusiveCategory-new')?.offsetHeight || 0);

                let maxDayHeight = Math.max(...dayHighlightHeights);
                let maxCategoryHeight = Math.max(...categoryHeights);
                row.forEach(col => {
                    let dayHighlight = col.querySelector('.dayHighlight-list');
                    if (dayHighlight) {
                        dayHighlight.style.minHeight = maxDayHeight + "px";
                    }
                });

                row.forEach(col => {
                    let category = col.querySelector('.inclusiveCategory-new');
                    if (category) {
                        category.style.minHeight = maxCategoryHeight + "px";
                    }
                });
            }
        }

        window.addEventListener("load", adjustRows);
        window.addEventListener("resize", adjustRows);
    </script>