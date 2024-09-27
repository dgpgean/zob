<?php

function sunglass_shelf_title_display()
{
    $setting = get_option('shelf-sunglasses-title');
?>
    <input type="text" name="shelf-sunglasses-title" value="<?php echo isset($setting) ? $setting : '' ?>" />

<?php
}


function sunglass_shelf_category_display()
{
    $setting = get_option('shelf-sunglasses-category');
?>
    <input type="text" name="shelf-sunglasses-category" value="<?php echo isset($setting) ? $setting : '' ?>" />


<?php
}







add_action('admin_init', 'sunglasses_shelf_action');


function sunglasses_shelf_action()
{
    register_setting('home-settings', 'shelf-sunglasses-title');
    register_setting('home-settings', 'shelf-sunglasses-category');

    add_settings_section(
        'shelf_sunglasses_settings_section',
        '',
        '',
        'section-shelf-sunglasses'
    );

    add_settings_field(
        'shelf-sunglasses-title',
        'Título da shelf',
        'sunglass_shelf_title_display',
        'section-shelf-sunglasses',
        'shelf_sunglasses_settings_section'
    );

    add_settings_field(
        'shelf-sunglasses-category',
        'Categoria da shelf',
        'sunglass_shelf_category_display',
        'section-shelf-sunglasses',
        'shelf_sunglasses_settings_section'
    );
}


function show_shelf_sunglasses_content()
{
?>
    <div class="wrap">
        <h1>Carrossel de produtos</h1>

        <?php
        do_settings_sections("section-shelf-sunglasses");


        ?>

    </div>
<?php
}
