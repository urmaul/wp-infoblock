<?php
/*
Plugin Name: Infoblock Editor
Description: Infoblock Editor
Author: IT Craft
Version: 1.5
Author URI: http://www.noeasyways.sv/
*/

add_action('admin_menu', 'add_infoblock_interface');

function add_infoblock_interface() {
	add_options_page('Edit Infoblock', 'Edit Infoblock', '8', 'infoblock', 'editinfoblock');
}

function editinfoblock() {
	?>
	<div class='wrap'>
	<h2>Edit Infoblock</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Title:</strong><br />
	<input type="text" name="ib-title" value="<?php echo get_option('ib-title'); ?>" /></p>
	
	<p><strong>Text (html):</strong><br />
	<textarea name="ib-text" cols="100%" rows="7"><?php echo get_option('ib-text'); ?></textarea></p>
	
	<p><input type="submit" name="Submit" value="Save" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="ib-title,ib-text" />

	</form>
	</div>
	<?php
}

function getInfoblockVar($name)
{
    return get_option('ib-' . $name);
}

function infoblockVar($name)
{
    echo getInfoblockVar($name);
}
