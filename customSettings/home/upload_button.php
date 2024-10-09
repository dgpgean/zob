<?php
add_action('admin_enqueue_scripts', 'my_admin_scripts');

function my_admin_scripts()
{
    if (isset($_GET['page']) && $_GET['page'] == 'my_plugin_page') {
        wp_enqueue_media();
    }
}


function btn_content()
{ ?>

    <label for="upload_image">
        <input id="upload_image_button" class="button" type="button" value="Upload Image" />
        <br />Enter a URL or upload an image
    </label>
<?php } ?>

<script>
    jQuery(document).ready(function($) {

        var custom_uploader;


        $('#upload_image_button').click(function(e) {

            e.preventDefault();

            //If the uploader object has already been created, reopen the dialog
            if (custom_uploader) {
                custom_uploader.open();
                return;
            }

            //Extend the wp.media object
            custom_uploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Image',
                button: {
                    text: 'Choose Image'
                },
                multiple: false
            });

            //When a file is selected, grab the URL and set it as the text field's value
            custom_uploader.on('select', function() {
                attachment = custom_uploader.state().get('selection').first().toJSON();
                $('#upload_image').val(attachment.url);
            });

            //Open the uploader dialog
            custom_uploader.open();

        });


    });
</script>