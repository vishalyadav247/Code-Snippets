<?php

// mobile and desktop mega menu shortcode start 

class Bootstrap_Accordion_Walker extends Walker_Nav_Menu
{
    private $submenu_count = 0;

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $this->submenu_count++;
        $submenu_id = 'submenu-' . $this->submenu_count;
        $output .= "\n<ul id=\"{$submenu_id}\" class=\"sub-menu collapse\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = implode(' ', $item->classes ?? []);
        $has_children = in_array('menu-item-has-children', $item->classes ?? []);
        $submenu_id = 'submenu-' . ($this->submenu_count + 1); // Target next submenu ID

        $output .= '<li class="' . esc_attr($classes) . '">';

        if ($has_children) {
            $output .= '<a href="' . esc_url($item->url) . '" class="d-block" data-bs-toggle="collapse" data-bs-target="#' . esc_attr($submenu_id) . '" aria-expanded="false">';
            $output .= esc_html($item->title) . '</a>';
        } else {
            $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "</ul>\n";
    }
}

function test_mega_menu_drawer_shortcode()
{
    ob_start(); ?>

    <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuDrawer" aria-controls="mobileMenuDrawer">
        <div class="icon-circle text-white bg-secondary">☰</div>
        <div class="align-self-center d-flex flex-nowrap" editable="rich">
            <span class="pt-1 text-dark text-decoration-none d-xl-none ff-bold label" style="font-size: 0.7rem;">Menu</span>
        </div>
    </button>

    <div class="offcanvas offcanvas-start d-xl-none" tabindex="-1" id="mobileMenuDrawer" aria-labelledby="mobileMenuDrawerLabel">
        <div class="offcanvas-header">
            <a href="/" style="max-width: 200px;">
                <img class="img-fluid wp-image-28974" src="/wp-content/uploads/workwear-Logo-800x141-1.png" alt="Essential Workwear" loading="lazy">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mobile-search-wrapper bg-white rounded-pill justify-content-between align-items-center mb-4 border d-flex">
                <?php echo do_shortcode('[fibosearch]'); ?>
            </div>
            <?php
            wp_nav_menu(array(
                'menu'           => 'Test mega menu',
                'container'      => false,
                'menu_class'     => 'navbar-nav',
                'fallback_cb'    => '__return_false',
                'walker'         => new Bootstrap_Accordion_Walker(),
            ));
            ?>
            <div class="offcanvas-nav-wrapper nav-faq mt-2">
                <div class="d-flex">
                    <div class="label align-self-center">
                        <a href="/my-account" class="h3 text-decoration-none fw-semibold text-black">
                            <p>Your Account</p>
                            <p class="fw-light">Login / Register</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
    return ob_get_clean();
}
add_shortcode('test_mega_menu_drawer', 'test_mega_menu_drawer_shortcode');

class Mega_Menu_Walker extends Walker_Nav_Menu
{

    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Skip default submenu output
    }

    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        // Skip default submenu close
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes = implode(' ', $item->classes);
        $title   = esc_html($item->title);
        $url     = esc_url($item->url);

        if ($depth === 0) {
            $output .= "<li class='menu-item $classes'>";
            $output .= "<a href='{$url}'>{$title}</a>";

            if (in_array('menu-item-has-children', $item->classes)) {
                $output .= '<div class="top-level-child-box">';
                $output .= '<div class="left-box"><ul class="depth-1-children">';
            }
        } elseif ($depth === 1) {
            $has_children = in_array('menu-item-has-children', $item->classes) ? ' has-submenu' : '';
            $output .= "<li class='menu-item $classes$has_children'><a href='{$url}'>{$title}</a>";
            $output .= '<div class="depth-2-children" style="display:none;">';
            $output .= '<ul class="depth-2-children-ul">';
        } elseif ($depth === 2) {
            $output .= "<li class='menu-item $classes'><a href='{$url}'>{$title}</a></li>";
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        if ($depth === 1) {
            $output .= '</ul></div></li>'; // Close depth-2 list and depth-1 li
        }

        if ($depth === 0) {
            if (in_array('menu-item-has-children', $item->classes)) {
                $output .= '</ul></div>'; // Close left-box

                // ACF Block 1
                $acf_1 = get_field('right_content_box_1', $item);
                $acf_html = '<div class="right-box"><div class="acf-mega-data">';
                if (!empty($acf_1['mega_image'])) {
                    $acf_html .= '<img src="' . esc_url($acf_1['mega_image']['url']) . '" alt="' . esc_attr($acf_1['mega_image']['alt']) . '">';
                }
                if (!empty($acf_1['mega_title'])) {
                    $acf_html .= '<h2>' . esc_html($acf_1['mega_title']) . '</h2>';
                }
                if (!empty($acf_1['mega_desc'])) {
                    $acf_html .= '<p>' . esc_html($acf_1['mega_desc']) . '</p>';
                }
                if (!empty($acf_1['mega_link'])) {
                    $acf_html .= '<a href="' . esc_url($acf_1['mega_link']) . '" class="mega-btn">Learn More</a>';
                }
                $acf_html .= '</div></div>';

                // ACF Block 2
                $acf_2 = get_field('right_content_box_2', $item);
                $acf_html .= '<div class="right-box"><div class="acf-mega-data">';
                if (!empty($acf_2['mega_image_end'])) {
                    $acf_html .= '<img src="' . esc_url($acf_2['mega_image_end']['url']) . '" alt="' . esc_attr($acf_2['mega_image_end']['alt']) . '">';
                }
                if (!empty($acf_2['mega_title_end'])) {
                    $acf_html .= '<h2>' . esc_html($acf_2['mega_title_end']) . '</h2>';
                }
                if (!empty($acf_2['mega_desc_end'])) {
                    $acf_html .= '<p>' . esc_html($acf_2['mega_desc_end']) . '</p>';
                }
                if (!empty($acf_2['mega_link_end'])) {
                    $acf_html .= '<a href="' . esc_url($acf_2['mega_link_end']) . '" class="mega-btn">Learn More</a>';
                }
                $acf_html .= '</div></div>';

                $output .= '<div class="middle-box"></div>';
                $output .= $acf_html;
                $output .= '</div>'; // Close top-level-child-box
            }

            $output .= '</li>'; // Close top-level li
        }
    }
}

function render_test_mega_menu_shortcode()
{
    ob_start();
    wp_nav_menu(array(
        'menu'           => 'Test mega menu',
        'container'      => false,
        'menu_class'     => 'mega-menu',
        'fallback_cb'    => '__return_false',
        'walker'         => new Mega_Menu_Walker(),
    ));
    return ob_get_clean();
}
add_shortcode('test_mega_menu', 'render_test_mega_menu_shortcode');

// JavaScript hover logic for Mega Menu
function custom_mega_menu_hover_script()
{
    wp_register_script('custom-mega-menu', '', [], false, true);
    wp_enqueue_script('custom-mega-menu');

    $inline_js = <<<JS
document.addEventListener('DOMContentLoaded', function () {
    
    const leftItems = document.querySelectorAll('.left-box .depth-1-children > li.menu-item-has-children');
    const leftItems2 = document.querySelectorAll('.left-box .depth-1-children > li:not(.menu-item-has-children)');
    leftItems.forEach(item => {

        item.addEventListener('mouseenter', () => {
            leftItems.forEach(item => {
                item.classList.remove('hover_active');
            })
            item.classList.add('hover_active');

        });

        let outerBox = item.closest(".top-level-child-box");
        if(outerBox){
            outerBox.addEventListener('mouseleave', () => {
            leftItems.forEach(item => {
                item.classList.remove('hover_active');
            })

        });
        }
    });

    leftItems2.forEach(item => {
        item.addEventListener('mouseenter', () => {
            leftItems.forEach(item => {
                item.classList.remove('hover_active');
            })
        });
    });

});
JS;

    wp_add_inline_script('custom-mega-menu', $inline_js);
}
add_action('wp_enqueue_scripts', 'custom_mega_menu_hover_script');
// mobile and desktop mega menu shortcode end
function load_tinymce_admin() {
    if (is_admin()) {
        wp_enqueue_script('editor');
        wp_enqueue_script('tinymce');
        wp_enqueue_script('quicktags');
    }
}
add_action('admin_enqueue_scripts', 'load_tinymce_admin');
