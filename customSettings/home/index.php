<?php

require('bannerMain.php');
require('bannerInfos.php');
require('bannerAndProduct.php');
require('warning.php');
require('sunglass.php');
require('bannerSection.php');

/**
 * Add the top level menu page.
 */
function wporg_options_page()
{

    add_menu_page(
        'Home page',
        'Home page',
        'manage_options',
        'home-settings',
        'wporg_options_page_html',
        'dashicons-info',
        20
    );
}


/**
 * Register our wporg_options_page to the admin_menu action hook.
 */
add_action('admin_menu', 'wporg_options_page');


/**
 * Top level menu callback function
 */
function wporg_options_page_html()
{

?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post" enctype='multipart/form-data'>
            <?php
            // output security fields for the registered setting "wporg"
            settings_fields('home-settings');
            show_banner_main_content();
            show_warning__content();
            show_banner1_content();
            show_banner_infos_content();
            show_shelf_sunglasses_content();
            show_banner_section_content();            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections('home-settings');
            // output save settings button
            submit_button('Save Settings');
            ?>
        </form>
    </div>
<?php
}
