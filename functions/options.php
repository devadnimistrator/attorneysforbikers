<?php
function additional_mime_types( $mimes ) {
	$mimes['rar'] = 'application/x-rar-compressed';
	$mimes['swf'] = 'application/x-shockwave-flash';

	return $mimes;
}
add_filter( 'upload_mimes', 'additional_mime_types' );
// Створити користувацьке меню
add_action('admin_menu', 'omr_create_menu');
function omr_create_menu() {
//Створити нове меню верхнього рівня
add_menu_page('Theme options', 'Theme options', 'administrator', 
__FILE__, 'omr_settings_page', ''.get_bloginfo('stylesheet_directory').'/functions/ico.png');

//виклик функції register settings
add_action( 'admin_init', 'register_mysettings' );
}

function mytheme_add_init() {
    if ( is_admin() ) {
        wp_enqueue_style("functions", "".get_bloginfo('stylesheet_directory')."/functions/functions.css", false, "1.0", "all");
        wp_enqueue_script("rm_script", "".get_bloginfo('stylesheet_directory')."/functions/script.js", false, "1.0");
    }
}
add_action( 'admin_print_styles', 'mytheme_add_init' );

function register_mysettings() {
//реєструємо наші налаштування
register_setting( 'omr-settings-group', 'ok_reedall' );
register_setting( 'omr-settings-group', 'ok_reedall_fr' );
register_setting( 'omr-settings-group', 'ok_ga_code' );
register_setting( 'omr-settings-group', 'ok_copyrite' );
register_setting( 'omr-settings-group', 'ok_copyrite_fr' );
register_setting( 'omr-settings-group', 'ok_logo_img' );
register_setting( 'omr-settings-group', 'ok_logo_img_2' );
register_setting( 'omr-settings-group', 'ok_logo_img_fr' );
register_setting( 'omr-settings-group', 'ok_logo_img_2_fr' );
register_setting( 'omr-settings-group', 'ok_partners' );
register_setting( 'omr-settings-group', 'ok_partners_fr' );
/*Home options*/
register_setting( 'omr-settings-group', 'ok_home_last' );
register_setting( 'omr-settings-group', 'ok_last_cat' );
register_setting( 'omr-settings-group', 'ok_welcome_title' );
register_setting( 'omr-settings-group', 'ok_welcome_content' );
register_setting( 'omr-settings-group', 'ok_welcome_title_fr' );
register_setting( 'omr-settings-group', 'ok_welcome_content_fr' );
register_setting( 'omr-settings-group', 'ok_actualites_title' );
register_setting( 'omr-settings-group', 'ok_actualites_title_fr' );
register_setting( 'omr-settings-group', 'ok_actualites_cat' );
register_setting( 'omr-settings-group', 'ok_plus_title' );
register_setting( 'omr-settings-group', 'ok_plus_title_fr' );
register_setting( 'omr-settings-group', 'ok_plus_cat' );
register_setting( 'omr-settings-group', 'ok_plus_num' );
register_setting( 'omr-settings-group', 'ok_pv_title' );
register_setting( 'omr-settings-group', 'ok_pv_title_fr' );
register_setting( 'omr-settings-group', 'ok_pv_num' );
register_setting( 'omr-settings-group', 'ok_pv_cat' );
}
function omr_settings_page() {
?>
<div class="wrap">
<h1>General Settings</h1>

<form method="post" action="options.php">
<?php settings_fields('omr-settings-group'); ?>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Last post options</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<br>	
			<label for="ok_home_last">Number posts:</label>
			<input id="ok_home_last" type="text" size="90" name="ok_home_last" value="<?php echo get_option('ok_home_last'); ?>" placeholder="10" />			
			<br />
			<p>
			<label for="ok_last_cat">Select category:</label>
				<select name="ok_last_cat" />
						<?php $sel_v = get_option('ok_last_cat'); ?>						
						<option value="">---</option>
						<?php $categories = get_categories(array('orderby'=>'name', 'hide_empty'=>0));
						if( $categories ){
							foreach( $categories as $cat ){
							$id=$cat->term_id;?>
						<option value="<?php echo $id;?>" <?php selected( $sel_v, $id )?> ><?php echo $cat->name;?></option>
						<?php } 
						}?>
				</select>
			</p>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Welcome block</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [EN]:
			<span style="background: #e30613; display: inline-block; width: 50px; height: 100%; position: absolute; top: 0; right: 0;"></span>
			</h2>
			<textarea name="ok_welcome_title" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_welcome_title'); ?></textarea>
			<br />
			<?php
			$content = get_option('ok_welcome_content');;
			$editor_id = 'ok_welcome_content';
			wp_editor( $content, $editor_id );
			?>
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [FR]:
			<span style="background: #e30613; display: inline-block; width: 50px; height: 100%; position: absolute; top: 0; right: 0;"></span>
			</h2>
			<textarea name="ok_welcome_title_fr" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_welcome_title_fr'); ?></textarea>
			<br />
			<?php
			$content = get_option('ok_welcome_content_fr');;
			$editor_id = 'ok_welcome_content_fr';
			wp_editor( $content, $editor_id );
			?>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Actualités block</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [EN]:</span>
			</h2>
			<textarea name="ok_actualites_title" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_actualites_title'); ?></textarea>
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [FR]:</span>
			</h2>
			<textarea name="ok_actualites_title_fr" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_actualites_title_fr'); ?></textarea>
			<p>
			<label for="ok_actualites_cat">Select category:</label>
				<select name="ok_actualites_cat" />
						<?php $sel_v = get_option('ok_actualites_cat'); ?>						
						<option value="">---</option>
						<?php $categories = get_categories(array('orderby'=>'name', 'hide_empty'=>0));
						if( $categories ){
							foreach( $categories as $cat ){
							$id=$cat->term_id;?>
						<option value="<?php echo $id;?>" <?php selected( $sel_v, $id )?> ><?php echo $cat->name;?></option>
						<?php } 
						}?>
				</select>
			</p>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Plus d'actualités block</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [EN]:</span>
			</h2>
			<textarea name="ok_plus_title" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_plus_title'); ?></textarea>
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [FR]:</span>
			</h2>
			<textarea name="ok_plus_title_fr" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_plus_title_fr'); ?></textarea>
			<p>
			<br>	
			<label for="ok_plus_num">Number posts:</label>
			<input id="ok_plus_num" type="text" size="90" name="ok_plus_num" value="<?php echo get_option('ok_plus_num'); ?>" placeholder="3" />			
			<br />
			<label for="ok_plus_cat">Select category:</label>
				<select name="ok_plus_cat" />
						<?php $sel_v = get_option('ok_plus_cat'); ?>						
						<option value="">---</option>
						<?php $categories = get_categories(array('orderby'=>'name', 'hide_empty'=>0));
						if( $categories ){
							foreach( $categories as $cat ){
							$id=$cat->term_id;?>
						<option value="<?php echo $id;?>" <?php selected( $sel_v, $id )?> ><?php echo $cat->name;?></option>
						<?php } 
						}?>
				</select>
			</p>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Gallery (photos/videos) block</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [EN]:</span>
			</h2>
			<textarea name="ok_pv_title" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_pv_title'); ?></textarea>
			<br />
			<h2 style="background: #E1E1E1; padding: 8px 16px; position: relative;">Title [FR]:</span>
			</h2>
			<textarea name="ok_pv_title_fr" style="background:#fff;width:100%;height:40px; font-size:22px;" type="textarea" ><?php echo get_option('ok_pv_title_fr'); ?></textarea>
			<p>
			<br>	
			<label for="ok_pv_num">Number posts:</label>
			<input id="ok_pv_num" type="text" size="90" name="ok_pv_num" value="<?php echo get_option('ok_pv_num'); ?>" placeholder="4" />			
			<br />
			<label for="ok_pv_cat">Select category:</label>
				<select name="ok_pv_cat" />
						<?php $sel_v = get_option('ok_pv_cat'); ?>						
						<option value="">---</option>
						<?php $categories = get_categories(array('orderby'=>'name', 'hide_empty'=>0));
						if( $categories ){
							foreach( $categories as $cat ){
							$id=$cat->term_id;?>
						<option value="<?php echo $id;?>" <?php selected( $sel_v, $id )?> ><?php echo $cat->name;?></option>
						<?php } 
						}?>
				</select>
			</p>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="rm_section">
	<div class="rm_title">
		<h3><img src="<?php bloginfo('stylesheet_directory'); ?>/functions/3.gif" class="inactive" alt=""/>
		Other options</h3>
	<div class="clearfix"></div>
	</div>
	<div class="rm_options">
		<div class="rm_input rm_text">			
			<br>
			<label for="ok_reedall">Read All [EN]:</label>
			<input id="ok_reedall" type="text" size="90" name="ok_reedall" value="<?php echo get_option('ok_reedall'); ?>" />
			<br>
			<br>
			<label for="ok_reedall_fr">Read All [FR]:</label>
			<input id="ok_reedall_fr" type="text" size="90" name="ok_reedall_fr" value="<?php echo get_option('ok_reedall_fr'); ?>" />
			<br>				
			<br>
			<label for="ok_partners">Partners title [EN]:</label>
			<input id="ok_partners" type="text" size="90" name="ok_partners" value="<?php echo get_option('ok_partners'); ?>" />
			<br>
			<br>
			<label for="ok_partners_fr">Partners title [FR]:</label>
			<input id="ok_partners_fr" type="text" size="90" name="ok_partners_fr" value="<?php echo get_option('ok_partners_fr'); ?>" />
			<br>	
			<br>	
			<label for="ok_logo_img">Logo 1 [EN]<small style="float:none; display:inline;">(239 x 90 ).</small>:</label>
			<input id="upload_image" type="text" size="90" name="ok_logo_img" value="<?php echo get_option('ok_logo_img'); ?>" />
			<input class="upload_image_button" type="button" value="Upload" />			
			<br />	
			<label for="ok_logo_img_2">Logo 2 [EN]<small style="float:none; display:inline;">(239 x 90 ).</small>:</label>
			<input id="upload_image" type="text" size="90" name="ok_logo_img_2" value="<?php echo get_option('ok_logo_img_2'); ?>" />
			<input class="upload_image_button" type="button" value="Upload" />			
			<br />	
			<label for="ok_logo_img_fr">Logo 1 [FR]<small style="float:none; display:inline;">(239 x 90 ).</small>:</label>
			<input id="upload_image" type="text" size="90" name="ok_logo_img_fr" value="<?php echo get_option('ok_logo_img_fr'); ?>" />
			<input class="upload_image_button" type="button" value="Upload" />		
			<br />	
			<label for="ok_logo_img_2_fr">Logo 2 [FR]<small style="float:none; display:inline;">(239 x 90 ).</small>:</label>
			<input id="upload_image" type="text" size="90" name="ok_logo_img_2_fr" value="<?php echo get_option('ok_logo_img_2_fr'); ?>" />
			<input class="upload_image_button" type="button" value="Upload" />			
			<br />
			<br />
			<label for="ok_copyrite" style="display:block;">Copyrite text [EN]</label>
			<textarea class="multilang" name="ok_copyrite" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_copyrite'); ?></textarea>
			<br />
			<label for="ok_copyrite_fr" style="display:block;">Copyrite text [FR]</label>
			<textarea class="multilang" name="ok_copyrite_fr" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_copyrite_fr'); ?></textarea>
			<br />
			<label for="ok_ga_code" style="display:block;">Google Analytics</label>
			<textarea class="multilang" name="ok_ga_code" style="width:320px;height:150px;" type="textarea" ><?php echo get_option('ok_ga_code'); ?></textarea>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<p class="submit">
<input style="width:350px;" type="submit" class="button-primary" value="Save" 
/>
</p>
</form>
</div>
<?php } ?>