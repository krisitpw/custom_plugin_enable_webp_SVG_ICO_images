# custom_plugin_enable_webp_SVG_ICO_images
create a plugin for "Enable SVG, WebP &amp; ICO Upload  in wordpress "
Creating a WordPress plugin to enable SVG, WebP, and ICO upload support involves adding custom code to modify the default behavior of WordPress media uploads. Here's a simplified example of how you can create a plugin for this purpose:

Create a New Folder for Your Plugin:

Start by creating a new folder for your plugin in the wp-content/plugins directory of your WordPress installation. You can name the folder something like custom-upload-formats.

Create the Main Plugin File:

Inside your plugin folder, create a PHP file for your plugin. You can name it something like custom-upload-formats.php.

Define the Plugin Information:

In your main plugin file (custom-upload-formats.php), add the following code to define the plugin's information:
```
<?php
/*
Plugin Name: Enable SVG, WebP & ICO Upload
Description: This plugin enables SVG, WebP, and ICO image upload support in WordPress.
Version: 1.0
Author: Your Name
*/

// Plugin code will go here
```
Modify WordPress Allowed File Types:

To enable support for SVG, WebP, and ICO file uploads, you'll need to modify the list of allowed file types. Add the following code to your plugin file:
```
// Enable SVG, WebP, and ICO uploads
function custom_upload_mimes($existing_mimes) {
    // Add SVG support
    $existing_mimes['svg'] = 'image/svg+xml';
    $existing_mimes['svgz'] = 'image/svg+xml';

    // Add WebP support
    $existing_mimes['webp'] = 'image/webp';

    // Add ICO support
    $existing_mimes['ico'] = 'image/x-icon';

    return $existing_mimes;
}
add_filter('upload_mimes', 'custom_upload_mimes');
```
This code adds the specified MIME types to the list of allowed file types for uploads.

Activate the Plugin:

Save your main plugin file (custom-upload-formats.php) and upload the entire plugin folder to the wp-content/plugins directory of your WordPress installation.

Activate the Plugin:

Log in to your WordPress admin panel, go to the "Plugins" section, and activate your "Enable SVG, WebP & ICO Upload" plugin.

Your plugin is now active, and WordPress should allow SVG, WebP, and ICO file uploads. Make sure to test it thoroughly to ensure that everything works as expected.

Please note that allowing SVG uploads can be a security risk if not handled properly, as SVG files can contain malicious code. Consider implementing additional security measures or using a security plugin to mitigate any potential risks.
