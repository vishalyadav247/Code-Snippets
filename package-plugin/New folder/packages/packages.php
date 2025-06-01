<?php

/**
 * Plugin Name:       Packages
 * Description:       A plugin to add and display travel packages.
 * Version:           1.0
 * Author:            Progryss
 **/

if (!defined('ABSPATH')) exit; // Exit if accessed directly
function packages_register_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Packages',
            'singular_name' => 'Package',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-palmtree',
    );

    register_post_type('package', $args);
}
add_action('init', 'packages_register_post_type');
function packages_register_taxonomies()
{
    $taxonomies = [
        'package_categories' => 'Category',
        'inclusion_categories' => 'Inclusion Category',
        'destinations' => 'Destination',
    ];

    foreach ($taxonomies as $taxonomy => $singular) {
        register_taxonomy($taxonomy, 'package', array(
            'label' => $singular,
            'rewrite' => array('slug' => $taxonomy),
            'hierarchical' => true,
        ));
    }
}
add_action('init', 'packages_register_taxonomies');
function packages_add_meta_boxes()
{
    // Existing call to add the Itinerary Details meta box
    add_meta_box('itinerary_details', 'Itinerary Details', 'packages_itinerary_details_meta_box_callback', 'package');

    // Add a new meta box for Itinerary Information
    add_meta_box('itinerary_information', 'Itinerary Information', 'packages_itinerary_information_meta_box_callback', 'package');
    // Banner image
    add_meta_box('itinerary_banner_image', 'Itinerary Banner Image', 'packages_banner_image_meta_box_callback', 'package', 'side');
}
add_action('add_meta_boxes', 'packages_add_meta_boxes');


function packages_enqueue_editor_scripts()
{
    if (function_exists('wp_enqueue_editor')) {
        wp_enqueue_editor();
    }
}
add_action('admin_enqueue_scripts', 'packages_enqueue_editor_scripts');

function packages_admin_scripts()
{
    if (!did_action('wp_enqueue_media')) {
        wp_enqueue_media();
    }

    // Enqueue any other scripts or styles as needed
}
add_action('admin_enqueue_scripts', 'packages_admin_scripts');


function packages_itinerary_details_meta_box_callback($post)
{
    // Use nonce for verification
    wp_nonce_field('save_itinerary_details', 'itinerary_details_nonce');

    // Retrieve existing values from the database
    $itinerary_data = get_post_meta($post->ID, '_itinerary_data', true);

    // Check if there's at least one set of details
    if (!empty($itinerary_data)) {
        foreach ($itinerary_data as $index => $itinerary) {
?>
            <div class="itinerary-entry">
                <p>
                    <label for="itinerary_day_<?php echo $index; ?>">Itinerary Day:</label>
                    <input type="text" name="itinerary_day[]" id="itinerary_day_<?php echo $index; ?>" value="<?php echo esc_attr($itinerary['day']); ?>">
                </p>
                <p>
                    <label for="itinerary_title_<?php echo $index; ?>">Itinerary Title:</label>
                    <input type="text" name="itinerary_title[]" id="itinerary_title_<?php echo $index; ?>" value="<?php echo esc_attr($itinerary['title']); ?>">
                </p>
                <p class="itineryHightlights">
                    <label for="itinerary_highlights_<?php echo $index; ?>">Itinerary Highlights:</label>
                    <textarea name="itinerary_highlights[]" id="itinerary_highlights_<?php echo $index; ?>"><?php echo esc_textarea($itinerary['highlights'] ?? ''); ?></textarea>
                </p>
                <p class="itineryDetails">
                    <label for="itinerary_details_<?php echo $index; ?>">Itinerary Details:</label>
                    <textarea name="itinerary_details[]" id="itinerary_details_<?php echo $index; ?>"><?php echo esc_textarea($itinerary['details'] ?? ''); ?></textarea>
                </p>
                <div class="btn_wrapper"><button type="button" class="remove_itinerary_entry button">Remove This Day</button></div>
            </div>

        <?php
        }
    } else {
        // If no details exist yet, display a single blank set of fields
        ?>
        <div class="itinerary-entry">
            <p>
                <label for="itinerary_day_0">Itinerary Day:</label>
                <input type="text" name="itinerary_day[]" id="itinerary_day_0" value="">
            </p>
            <p>
                <label for="itinerary_title_0">Itinerary Title:</label>
                <input type="text" name="itinerary_title[]" id="itinerary_highlights_0" value="">
            </p>
            <p class="itineryHightlights">
                <label for="itinerary_highlights_0">Itinerary Highlights:</label>
                <textarea name="itinerary_highlights[]" id="itinerary_highlights_0"></textarea>
            </p>
            <p class="itineryDetails">
                <label for="itinerary_details_0">Itinerary Details:</label>
                <textarea name="itinerary_details[]" id="itinerary_details_0"></textarea>
            </p>
        </div>
    <?php
    }

    // Add a button to allow adding more itinerary details (handled via JavaScript, not included here)
    echo '<button type="button" id="add_itinerary_entry">Add Another Day</button>';
    // Inline JavaScript
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Function to add a new itinerary entry
            $('#add_itinerary_entry').click(function() {
                var lastEntry = $('.itinerary-entry:last');
                var newEntry = lastEntry.clone();
                var newIndex = $('.itinerary-entry').length;

                // Clear the values in the cloned entry
                newEntry.find('input, textarea').val('');
                newEntry.find('input, textarea').each(function() {
                    var newId = $(this).attr('id') ? $(this).attr('id').replace(/\d+$/, newIndex) : '';
                    var newName = $(this).attr('name') ? $(this).attr('name').replace(/\[\d+\]/, '[' + newIndex + ']') : '';
                    var newFor = $(this).attr('for') ? $(this).attr('for').replace(/\d+$/, newIndex) : '';
                    $(this).attr('id', newId).attr('name', newName).attr('for', newFor);
                });

                // Insert the new entry after the last entry
                lastEntry.after(newEntry);
            });

            // Function to remove an itinerary entry
            $(document).on('click', '.remove_itinerary_entry', function() {
                if ($('.itinerary-entry').length > 1) {
                    $(this).closest('.itinerary-entry').remove();
                } else {
                    alert('At least one itinerary entry is required.');
                }
            });
        });
    </script>
    <?php
    // Add a button for removing an entry in each `.itinerary-entry` div, if not already present.
    // Note: You might need to adjust your PHP to include a remove button for each entry.
}



function packages_save_itinerary_details($post_id)
{
    // Check nonce
    if (!isset($_POST['itinerary_details_nonce']) || !wp_verify_nonce($_POST['itinerary_details_nonce'], 'save_itinerary_details')) {
        return;
    }

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Avoiding autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Initialize array to hold our sanitized itinerary data
    $itinerary_data = [];

    if (isset($_POST['itinerary_day']) && is_array($_POST['itinerary_day'])) {
        foreach ($_POST['itinerary_day'] as $index => $day) {
            // Initialize an array to hold each item's data
            $entry = [
                'day' => sanitize_text_field($day),
                'title' => sanitize_text_field($_POST['itinerary_title'][$index] ?? ''),
                'highlights' => '', // Initialize as empty string
                'details' => '', // Initialize as empty string
            ];

            // Check if highlights and details are set and sanitize them
            if (isset($_POST['itinerary_highlights'][$index])) {
                $entry['highlights'] = wp_kses_post($_POST['itinerary_highlights'][$index]); // Allow basic HTML tags for formatting
            }

            if (isset($_POST['itinerary_details'][$index])) {
                $entry['details'] = wp_kses_post($_POST['itinerary_details'][$index]); // Allow basic HTML tags for formatting
            }

            // Add the entry to the itinerary data
            $itinerary_data[] = $entry;
        }
    }

    // Save the sanitized array of data
    update_post_meta($post_id, '_itinerary_data', $itinerary_data);
}
add_action('save_post', 'packages_save_itinerary_details');



function packages_itinerary_information_meta_box_callback($post)
{
    // Use nonce for verification
    wp_nonce_field('itinerary_information_meta_box', 'itinerary_information_nonce');

    // Retrieve existing value from the database
    $days = get_post_meta($post->ID, '_number_of_days', true);
    $nights = get_post_meta($post->ID, '_number_of_nights', true);
    $base_price = get_post_meta($post->ID, '_itinerary_base_price', true);
    $offer_price = get_post_meta($post->ID, '_itinerary_offer_price', true);
    // style
    echo '<style> .twoCol {
    display: grid;
    gap: 20px;
    grid-template-columns: 1fr 1fr;
    max-width: 400px;
}

.day-highlight-entry {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

.day-highlight-entry textarea {
    height: 30px;
}

.day-highlight-entry button.remove-highlight {
    align-items: end;
    height: 30px;
    color: silver;
}

.itinerary-entry p {
    display: flex;
    flex-direction: column;
}

.itineryHightlights textarea {
    padding: 10px;
}

.itineryDetails textarea {
    padding: 10px;
    height: 150px;
}

.btn_wrapper {
    display: flex;
    justify-content: end;
}

#add_itinerary_entry {
    height: 30px;
    color: #2271b1;
    border-color: #2271b1a1;
    border-width: 1px;
    border-radius: 3px;
}
 </style>';
    // Fields for input
    echo '<div class="twoCol">';
    echo '<p><label for="number_of_days">No. of Days: </label>';
    echo '<input type="number" id="number_of_days" name="number_of_days" value="' . esc_attr($days) . '" /></p>';

    echo '<p><label for="number_of_nights">No of Nights: </label>';
    echo '<input type="number" id="number_of_nights" name="number_of_nights" value="' . esc_attr($nights) . '" /></p>';
    echo '</div>';

    echo '<div class="twoCol">';
    echo '<p><label for="itinerary_base_price">Base Price: </label>';
    echo '<input type="text" id="itinerary_base_price" name="itinerary_base_price" value="' . esc_attr($base_price) . '" /></p>';

    echo '<p><label for="itinerary_offer_price">Offer Price: </label>';
    echo '<input type="text" id="itinerary_offer_price" name="itinerary_offer_price" value="' . esc_attr($offer_price) . '" /></p>';
    echo '</div>';



    echo '<div id="day_highlight_repeater">';
    echo '<h4>Day Highlights</h4>';

    // Retrieve existing day highlights if any
    $day_highlights = get_post_meta($post->ID, '_day_highlights', true) ?: [];

    if (!empty($day_highlights)) {
        foreach ($day_highlights as $index => $highlight) {
    ?>
            <div class="day-highlight-entry">
                <textarea name="day_highlights[]" class="widefat"><?php echo esc_textarea($highlight); ?></textarea>
                <button type="button" class="remove-highlight button">Remove</button>
            </div>
        <?php
        }
    } else {
        // Show at least one empty textarea if there are no saved highlights
        echo '<div class="day-highlight-entry"><textarea name="day_highlights[]" class="widefat"></textarea></div>';
    }

    echo '<button type="button" id="add_day_highlight" class="button">Add New Highlight</button>';
    echo '</div>'; // Close repeater section

    // Adding Sightseeing section
    echo '<div id="sightseeing_repeater">';
    echo '<h4>Sightseeing</h4>';

    // Retrieve existing sightseeing highlights if any
    $sightseeing_highlights = get_post_meta($post->ID, '_sightseeing_highlights', true) ?: [];

    if (!empty($sightseeing_highlights)) {
        foreach ($sightseeing_highlights as $index => $highlight) {
        ?>
            <div class="day-highlight-entry">
                <textarea name="sightseeing_highlights[]" class="widefat"><?php echo esc_textarea($highlight); ?></textarea>
                <button type="button" class="remove-highlight button">Remove</button>
            </div>
    <?php
        }
    } else {
        // Show at least one empty textarea if there are no saved highlights
        echo '<div class="day-highlight-entry"><textarea name="sightseeing_highlights[]" class="widefat"></textarea></div>';
    }

    echo '<button type="button" id="add_sightseeing_highlight" class="button">Add New Sightseeing</button>';
    echo '</div>'; // Close sightseeing repeater section
}
function packages_save_itinerary_information($post_id)
{
    // Check if our nonce is set and verify it.
    if (!isset($_POST['itinerary_information_nonce']) || !wp_verify_nonce($_POST['itinerary_information_nonce'], 'itinerary_information_meta_box')) {
        return;
    }

    // Check the user's permissions.
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save banner image ID
    if (isset($_POST['banner_image_id']) && !empty($_POST['banner_image_id'])) {
        update_post_meta($post_id, '_banner_image_id', sanitize_text_field($_POST['banner_image_id']));
    } else {
        delete_post_meta($post_id, '_banner_image_id');
    }

    // Sanitize and save the data
    if (isset($_POST['number_of_days'])) {
        update_post_meta($post_id, '_number_of_days', sanitize_text_field($_POST['number_of_days']));
    }

    if (isset($_POST['number_of_nights'])) {
        update_post_meta($post_id, '_number_of_nights', sanitize_text_field($_POST['number_of_nights']));
    }

    if (isset($_POST['itinerary_base_price'])) {
        update_post_meta($post_id, '_itinerary_base_price', sanitize_text_field($_POST['itinerary_base_price']));
    }

    if (isset($_POST['itinerary_offer_price'])) {
        update_post_meta($post_id, '_itinerary_offer_price', sanitize_text_field($_POST['itinerary_offer_price']));
    }

    // Save "Day Highlight" repeater fields
    if (isset($_POST['day_highlights'])) {
        $day_highlights = array_map('sanitize_textarea_field', $_POST['day_highlights']);
        update_post_meta($post_id, '_day_highlights', $day_highlights);
    } else {
        delete_post_meta($post_id, '_day_highlights');
    }
    // Save "Sightseeing" repeater fields
    if (isset($_POST['sightseeing_highlights'])) {
        $sightseeing_highlights = array_map('sanitize_textarea_field', $_POST['sightseeing_highlights']);
        update_post_meta($post_id, '_sightseeing_highlights', $sightseeing_highlights);
    } else {
        delete_post_meta($post_id, '_sightseeing_highlights');
    }
}
add_action('save_post', 'packages_save_itinerary_information');
function packages_banner_image_meta_box_callback($post)
{
    wp_nonce_field('itinerary_banner_image_meta_box', 'itinerary_banner_image_nonce');
    $banner_image_id = get_post_meta($post->ID, '_banner_image_id', true);

    // If there is an image, retrieve it
    $image_src = '';
    if ($banner_image_id) {
        $image_src = wp_get_attachment_url($banner_image_id);
    }
    ?>
    <div class="banner-image-upload">
        <img src="<?php echo esc_url($image_src); ?>" style="max-width: 100%;" />
        <input type="hidden" name="banner_image_id" id="banner_image_id" value="<?php echo esc_attr($banner_image_id); ?>" />
        <button type="button" class="upload_banner_image_button button"><?php echo $banner_image_id ? 'Replace Banner Image' : 'Set Banner Image'; ?></button>
        <button type="button" class="remove_banner_image_button button" <?php echo $banner_image_id ? '' : ' style="display:none;"'; ?>>Remove Banner Image</button>
    </div>
    <script>
        jQuery(document).ready(function($) {
            // Upload button action
            $('.upload_banner_image_button').click(function(e) {
                e.preventDefault();
                var button = $(this);
                var customUploader = wp.media({
                    title: 'Select Banner Image',
                    library: {
                        type: 'image'
                    },
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false
                }).on('select', function() {
                    var attachment = customUploader.state().get('selection').first().toJSON();
                    $('.banner-image-upload img').attr('src', attachment.url);
                    $('#banner_image_id').val(attachment.id);
                    $('.remove_banner_image_button').show();
                }).open();
            });

            // Remove button action
            $('.remove_banner_image_button').click(function(e) {
                e.preventDefault();
                $('.banner-image-upload img').attr('src', '');
                $('#banner_image_id').val('');
                $(this).hide();
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            $('#add_day_highlight').click(function() {
                var newEntry = $('<div class="day-highlight-entry"><textarea name="day_highlights[]" class="widefat"></textarea><button type="button" class="remove-highlight button">Remove Highlight</button></div>');
                $(this).before(newEntry);
            });

            $(document).on('click', '.remove-highlight', function() {
                $(this).parent('.day-highlight-entry').remove();
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            // Handler for adding new sightseeing highlights
            $('#add_sightseeing_highlight').click(function() {
                var newEntry = $('<div class="day-highlight-entry"><textarea name="sightseeing_highlights[]" class="widefat"></textarea><button type="button" class="remove-highlight button">Remove Sightseeing</button></div>');
                $(this).before(newEntry);
            });

            // Handler for removing existing sightseeing highlights
            $(document).on('click', '.remove-highlight', function() {
                $(this).parent('.day-highlight-entry').remove();
            });
        });
    </script>
<?php
}

// for package card grid layout shortcode start
function packages_display_packages_shortcode($atts)
{
    // Parse the shortcode attributes
    $atts = shortcode_atts(
        array(
            'ids' => '', // Expecting a comma-separated list of post IDs
        ),
        $atts,
        'Package'
    );

    // Extract the post IDs and convert to an array
    $post_ids = explode(',', $atts['ids']);

    // Initialize output variable
    $output = '';
    $output .= '<div class="packageWrapper slick-slider">';
    // Query and loop over each post ID
    foreach ($post_ids as $post_id) {
        $post = get_post(trim($post_id)); // Trim to remove any accidental whitespace

        // If post exists and is of type 'package'
        if ($post && get_post_type($post) === 'package') {
            // Get package details
            $number_of_days = get_post_meta($post->ID, '_number_of_days', true);
            $number_of_nights = get_post_meta($post->ID, '_number_of_nights', true);
            $base_price = get_post_meta($post->ID, '_itinerary_base_price', true);
            $offer_price = get_post_meta($post->ID, '_itinerary_offer_price', true);
            $day_highlights = get_post_meta($post->ID, '_day_highlights', true);
            $inclusion_categories = wp_get_post_terms($post->ID, 'inclusion_categories', array('fields' => 'all'));

            // Start building the Package Card
            $output .= '<div class="package element">';

            $output .= '<div class="packageImageWrapper">';
            // Featured image
            if (has_post_thumbnail($post->ID)) {
                $featured_image = get_the_post_thumbnail($post->ID, 'full'); // Retrieve the featured image with attributes
                // Remove width and height attributes from the img tag
                $featured_image = preg_replace('/(width|height)="\d*"\s/', "", $featured_image);
                $output .= '<a href="' . esc_html(get_the_permalink($post)) . '">' . $featured_image . '</a>';
            }

            // Number of nights and days
            $output .= '<div class="packageDuration">
                            <span style="margin-right:5px;"><img src="/wp-content/uploads/2024/02/Layer-2-2.png" alt="clock icon"></span>
                            <span>' . esc_html($number_of_nights) . 'N</span>
                            <span>/</span><span>' . esc_html($number_of_days) . 'D</span>
                        </div>';

            $output .= '</div>';

            $output .= '<div class="packageContent">';
            // Title
            $output .= '<a class="packageTitle" href="' . esc_html(get_the_permalink($post)) . '">' . esc_html(get_the_title($post)) . '</a>';

            // Inclusion categories with descriptions
            if (!empty($inclusion_categories) && !is_wp_error($inclusion_categories)) {
                $output .= '<ul class="inclusiveCategory">';
                foreach ($inclusion_categories as $category) {

                    $output .= '<li>';
                    if (!empty($category->description)) {
                        $output .= '<img  src="' . esc_html($category->description) . '" alt="inclusion icons">';
                    }
                    $output .= esc_html($category->name);
                    $output .= '</li>';
                }
                $output .= '</ul>';
            }

            // Day highlights
            if (!empty($day_highlights)) {
                $output .= '<ul class="dayHighlight">';
                foreach ($day_highlights as $highlight) {
                    $output .= '<li>' . esc_html($highlight) . '</li>';
                }
                $output .= '</ul>';
            }

            // Base price and offer price
            $discount_percentage = (($base_price - $offer_price) / $base_price) * 100;
            $discount_percentage_formatted = number_format($discount_percentage, 2);
            $output .= '<div class="priceWrapper">';


            if ($base_price == "" && $offer_price == "") {
                $output .= '<p class="packageCardPOR">Price On Request</p>';
            } elseif ($base_price !== "" && $offer_price == "") {
                $output .= '<p ><span class="offerPrice">₹' . esc_html($base_price) . ' </span><span style="font-size:12px;">Per person</span></p>';
            } elseif ($base_price == "" && $offer_price !== "") {
                $output .= '<p class="packageCardPOR">Price On Request</p>';
            } else {
                $output .= '<p class="offerPrice">₹' . esc_html($offer_price) . '<span>Per person</span></p>';
                $output .= '<p ><span class="basePrice">₹' . esc_html($base_price) . ' </span><span class="discountPercentage">' . esc_html($discount_percentage_formatted) . '% OFF</span></p>';
            }

            $output .= '</div>';
            $output .= '<Button class="packageBtn myBtn" id="myBtn" href="#"><a>Customised & Send Enquiry</a></Button>';
            $output .= '</div>';
            $output .= '</div>'; // Close .package

        }
    }
    $output .= '</div>'; // Close .package Wrapper

    return $output;
}
add_shortcode('Package', 'packages_display_packages_shortcode');

// for package card grid layout shortcode end

//new package box start

function thaipackages_display_packages_shortcode($atts)
{
    // Parse the shortcode attributes
    $atts = shortcode_atts(
        array(
            'ids' => '', // Expecting a comma-separated list of post IDs
        ),
        $atts,
        'Package'
    );

    // Extract the post IDs and convert to an array
    $post_ids = explode(',', $atts['ids']);

    // Initialize output variable
    $output = '';
    $output .= '<div class="package-grid">'; // Start the grid wrapper

    // Query and loop over each post ID
    foreach ($post_ids as $post_id) {
        $post = get_post(trim($post_id)); // Trim to remove any accidental whitespace

        // If post exists and is of type 'package'
        if ($post && get_post_type($post) === 'package') {
            // Get package details
            $number_of_days = get_post_meta($post->ID, '_number_of_days', true);
            $number_of_nights = get_post_meta($post->ID, '_number_of_nights', true);
            $base_price = get_post_meta($post->ID, '_itinerary_base_price', true);
            $offer_price = get_post_meta($post->ID, '_itinerary_offer_price', true);
            $day_highlights = get_post_meta($post->ID, '_day_highlights', true);
            $sightseeing_highlights = get_post_meta($post->ID, '_sightseeing_highlights', true);
            $inclusion_categories = wp_get_post_terms($post->ID, 'inclusion_categories', array('fields' => 'all'));
            $current_date = date('d F Y');


            // Start building the Package Card
            $output .= '<div class="package-grid-column">';

            // Image Section
            $output .= '<div class="package-img-box">';
            if (has_post_thumbnail($post->ID)) {
                $featured_image = get_the_post_thumbnail($post->ID, 'full');
                $featured_image = preg_replace('/(width|height)="\d*"\s/', "", $featured_image);
                $output .= '<img src="' . get_the_post_thumbnail_url($post->ID, 'full') . '" alt="' . esc_html(get_the_title($post)) . '">';
            }
            $output .= '</div>';

            // Content Box
            $output .= '<div class="new-content-box">';

            // Top Content Section
            $output .= '<div class="content-top" style="border-bottom: 1px solid #ddd;">';
            $output .= '<div>';
            $output .= '<a class="box-title-new" href="' . esc_html(get_the_permalink($post)) . '">' . esc_html(get_the_title($post)) . '</a>';
            if (!empty($day_highlights)) {
                $output .= '<ul class="dayHighlight-list">';
                foreach ($day_highlights as $highlight) {
                    $output .= '<li>' . esc_html($highlight) . '</li>';
                }
                $output .= '</ul>';
            }
            $output .= '</div>';
            $output .= '<div>';
            $output .= '<div class="newPackageDuration">';
            $output .= '<span>' . esc_html($number_of_nights) . 'N</span> / <span>' . esc_html($number_of_days) . 'D</span>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>'; // End of content-top

            // Middle Content Section
            if (!empty($inclusion_categories) && !is_wp_error($inclusion_categories)) {
                $output .= '<div class="content-middle">';
                $output .= '<ul class="inclusiveCategory-new">';
                foreach ($inclusion_categories as $category) {
                    $output .= '<li>' . esc_html($category->name) . '</li>';
                }
                $output .= '</ul>';
                $output .= '</div>';
            }
            if (!empty($sightseeing_highlights)) {
                $output .= '<ul class="sightseeing-list">';
                foreach ($sightseeing_highlights as $highlight) {
                    $output .= '<li>' . esc_html($highlight) . '</li>';
                }
                $output .= '</ul>';
            }

            $output .= '</div>'; // End of new-content-box
            // Bottom Content Section
            $output .= '<div class="content-bottom">';
            $output .= '<div>';
            if ($base_price == "" && $offer_price == "") {
                $output .= '<div class="new-priceWrapper"><p>Price On Request</p></div>';
            } elseif ($base_price !== "" && $offer_price == "") {
                $output .= '<div class="new-priceWrapper"><span class="offerPrice">₹' . esc_html($base_price) . '</span> <span style="font-size:12px;">/ Per person</span></div>';
            } elseif ($base_price == "" && $offer_price !== "") {
                $output .= '<div class="new-priceWrapper"><p>Price On Request</p></div>';
            } else {
                $output .= '<div class="new-priceWrapper">';
                $output .= '<span class="offerPrice">₹' . esc_html($offer_price) . '</span> <span style="font-size:12px;">/ Per person</span>';
                $output .= '</div>';
            }
            $output .= '<p class="new-date-info">Updated on: ' . esc_html($current_date) . '</p>';
            $output .= '</div>';
            $output .= '<div>';
            $output .= '<a href="' . esc_html(get_the_permalink($post)) . '" class="view-package-button">View Package</a>';
            $output .= '</div>';
            $output .= '</div>'; // End of content-bottom
            $output .= '</div>'; // End of package-grid-column
        }
    }

    $output .= '</div>'; // End of package-grid
    return $output;
}
add_shortcode('ThaiPackage', 'thaipackages_display_packages_shortcode');

//new package box end

function enqueue_package_filter_script()
{
    wp_enqueue_script('package-filter', 'https://www.thailand-tourism.net/wp-content/themes/Avada-child/js/package-filter.js', array('jquery'), null, true);
    wp_localize_script('package-filter', 'ajax_params', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_package_filter_script');


function ajax_filter_packages()
{
    $tax_query = array('relation' => 'AND');

    if (!empty($_POST['package_categories'])) {
        $tax_query[] = array(
            'taxonomy' => 'package_categories',
            'field'    => 'slug',
            'terms'    => $_POST['package_categories']
        );
    }

    if (!empty($_POST['inclusion_categories'])) {
        $tax_query[] = array(
            'taxonomy' => 'inclusion_categories',
            'field'    => 'slug',
            'terms'    => $_POST['inclusion_categories']
        );
    }

    if (!empty($_POST['destinations'])) {
        $tax_query[] = array(
            'taxonomy' => 'destinations',
            'field'    => 'slug',
            'terms'    => $_POST['destinations']
        );
    }

    $args = array(
        'post_type' => 'package',
        'posts_per_page' => -1,
        'tax_query' => $tax_query
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        echo '<div class="package-grid mb-30 filtered-result">';
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $number_of_days = get_post_meta($post_id, '_number_of_days', true);
            $number_of_nights = get_post_meta($post_id, '_number_of_nights', true);
            $base_price = get_post_meta($post_id, '_itinerary_base_price', true);
            $offer_price = get_post_meta($post_id, '_itinerary_offer_price', true);
            $day_highlights = get_post_meta($post_id, '_day_highlights', true);
            $inclusion_categories = wp_get_post_terms($post_id, 'inclusion_categories', array('fields' => 'all'));
            $sightseeing_highlights = get_post_meta($post_id, '_sightseeing_highlights', true);
            $updated_date = get_the_modified_date('d F Y');

            echo '<div class="package-grid-column">
                <div class="package-img-box">';
            if (has_post_thumbnail($post_id)) {
                $featured_image = get_the_post_thumbnail($post_id, 'full');
                $featured_image = preg_replace('/(width|height)="\d*"\s/', "", $featured_image);
                echo '<a href="' . get_the_permalink($post_id) . '">' . $featured_image . '</a>';
            }
            echo '</div>
                <div class="new-content-box">
                    <div class="content-top">
                        <div>
                            <a class="box-title-new" href="' . get_the_permalink($post_id) . '">' . get_the_title($post_id) . '</a>';
            echo '</div>
                        <div>';
            if (!empty($number_of_nights) || !empty($number_of_days)) {
                echo '<div class="newPackageDuration">
                    <span>' . esc_html($number_of_nights) . 'N</span> / <span>' . esc_html($number_of_days) . 'D</span>
                  </div>';
            }
            echo '</div>
                    </div>';
            if (!empty($day_highlights)) {
                echo '<ul class="dayHighlight-list" style="border-bottom: 1px solid #ddd;">';
                foreach ($day_highlights as $highlight) {
                    echo '<li>' . esc_html($highlight) . '</li>';
                }
                echo '</ul>';
            }
            if (!empty($inclusion_categories)) {
                echo '<div class="content-middle">
                    <ul class="inclusiveCategory-new">';
                foreach ($inclusion_categories as $category) {
                    echo '<li>' . esc_html($category->name) . '</li>';
                }
                echo '</ul>
                  </div>';
            }
            if (!empty($sightseeing_highlights)) {
                echo '<ul class="sightseeing-list">';
                foreach ($sightseeing_highlights as $sightseeing) {
                    if (!empty(trim($sightseeing))) {
                        echo '<li>' . esc_html($sightseeing) . '</li>';
                    }
                }
                echo '</ul>';
            }
            echo '</div>
                <div class="content-bottom">
                    <div>';
            if (!empty($base_price)) {
                echo '<div class="new-priceWrapper">
                                <span class="offerPrice pp">₹' . esc_html($base_price) . '</span> <span style="font-size:12px;">/ Per person</span>
                              </div>';
            }
            if (!empty($offer_price)) {
                echo '<div class="new-priceWrapper">
                    <span class="offerPrice">₹' . esc_html($offer_price) . '</span> <span style="font-size:12px;">/ Per person</span>
                  </div>';
            }
            echo '<p class="new-date-info">Updated on: ' . esc_html($updated_date) . '</p>
                    </div>
                    <div>
                        <a href="' . get_the_permalink($post_id) . '" class="view-package-button">View Package</a>
                    </div>
                </div>
            </div>';
        }
        echo '</div>';
    } else {
        echo '<p>No packages found.</p>';
    }
    wp_die(); // Ensure proper script termination
}
add_action('wp_ajax_filter_packages', 'ajax_filter_packages');
add_action('wp_ajax_nopriv_filter_packages', 'ajax_filter_packages');
//filter package div start
