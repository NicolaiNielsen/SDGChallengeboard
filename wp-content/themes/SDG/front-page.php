<?php get_header();?>


    <div class="container pt-4">

        <h1 align="center"><?php the_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

    </div>

    <div id="imageList">
            <a href="http://localhost/SDGChallengeboard/sdg1/"><img class="FN0" src="/SDGChallengeboard/wp-content/themes/SDG/img/1.jpg" alt="FN 1"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/2.jpg"><img class="FN2" src="/SDGChallengeboard/wp-content/themes/SDG/img/2.jpg" alt="FN 2"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/3.jpg"><img class="FN3" src="/SDGChallengeboard/wp-content/themes/SDG/img/3.jpg" alt="FN 3"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/4.jpg"><img class="FN4" src="/SDGChallengeboard/wp-content/themes/SDG/img/4.jpg" alt="FN 4"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/5.jpg"><img class="FN5" src="/SDGChallengeboard/wp-content/themes/SDG/img/5.jpg" alt="FN 5"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/6.jpg"><img class="FN6" src="/SDGChallengeboard/wp-content/themes/SDG/img/6.jpg" alt="FN 6"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/7.jpg"><img class="FN7" src="/SDGChallengeboard/wp-content/themes/SDG/img/7.jpg" alt="FN 7"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/8.jpg"><img class="FN8" src="/SDGChallengeboard/wp-content/themes/SDG/img/8.jpg" alt="FN 8"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/9.jpg"><img class="FN9" src="/SDGChallengeboard/wp-content/themes/SDG/img/9.jpg" alt="FN 9"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/10_1.jpg"><img class="FN10" src="/SDGChallengeboard/wp-content/themes/SDG/img/10_1.jpg" alt="FN 10_1"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/11.jpg"><img class="FN11" src="/SDGChallengeboard/wp-content/themes/SDG/img/11.jpg" alt="FN 11"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/12.jpg"><img class="FN12" src="/SDGChallengeboard/wp-content/themes/SDG/img/12.jpg" alt="FN 12"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/13.jpg"><img class="FN13" src="/SDGChallengeboard/wp-content/themes/SDG/img/13.jpg" alt="FN 13"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/14.jpg"><img class="FN14" src="/SDGChallengeboard/wp-content/themes/SDG/img/14.jpg" alt="FN 14"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/15.jpg"><img class="FN15" src="/SDGChallengeboard/wp-content/themes/SDG/img/15.jpg" alt="FN 15"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/16.jpg"><img class="FN16" src="/SDGChallengeboard/wp-content/themes/SDG/img/16.jpg" alt="FN 16"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg"><img class="FN17" src="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg" alt="FN 17"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg"><img class="FN17" src="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg" alt="FN 17"></a>
        </div>


    <div class="container2 pt-3 pb-2">
        <h3 align="center">In September 2015, 193 world leaders agreed to 17 Global Goals for Sustainable Development. If <br> 
        these Goals are completed, it would mean an end to extreme poverty, inequality and climate change <br> by 2030.</h3>
    </div>

    <div class="postbutton">
        <button data-modal-target="#modal1" class="btn btn-dark">POST A CHALLENGE</button>
    </div>
    </div>

    <!-- SHOW RECENT POSTS -->


    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'home_right_1' ); ?>
	    </div><!-- #primary-sidebar -->
    <?php endif; ?>


    <div id="overlay"></div>

    <?php get_footer();?>

    <!-- submit form -->

<?php // User Submitted Posts - Submission Form

if (!defined('ABSPATH')) die();

if (isset($usp_options['logged_in_users']) && $usp_options['logged_in_users'] && !is_user_logged_in()) : 
	
	echo usp_login_required_message();
	
else : 
	
	extract(usp_get_form_vars());
	
?>

<!-- User Submitted Posts @ https://m0n.co/usp -->

<!-- entire modal -->
<div class="modal1" id="modal1">
<!-- end -->


<div id="user-submitted-posts">
	<?php if ($usp_options['usp_form_content'] !== '') echo $usp_options['usp_form_content']; ?>
	
	<form id="usp_form" method="post" enctype="multipart/form-data" action="">
		<div id="usp-error-message" class="usp-callout-failure usp-hidden"><?php esc_html_e('Please complete the required fields.', 'usp'); ?></div>
		<?php echo usp_error_message();
		
		if (isset($_GET['success']) && $_GET['success'] == '1') :
			echo '<div id="usp-success-message">'. $usp_options['success-message'] .'</div>';
        else :
            
            if ($usp_options['usp_images'] == 'show') { ?>
                <?php if ($usp_options['max-images'] !== 0) { ?>
                
        <!-- image submit header  -->
                    
        <div class="modal-header">
                <button data-close-button class="close-button">&times;</button>
        
                <!-- code image submit -->
                <div class="modal-image">
                <fieldset class="usp-images">
                    <label for="user-submitted-image"><?php esc_html_e('Upload an Image', 'usp'); ?></label>
                    <div id="usp-upload-message"><?php esc_html_e($usp_options['upload-message'], 'usp'); ?></div>
                    <div id="user-submitted-image">
                    <?php // upload files
                        
                    $usp_minImages = intval($usp_options['min-images']);
                    $usp_maxImages = intval($usp_options['max-images']);
                    $usp_addAnother = $usp_options['usp_add_another'];
                    
                    if (empty($usp_addAnother)) $usp_addAnother = '<a href="#" id="usp_add-another" class="usp-no-js">'. esc_html__('Add another image', 'usp') .'</a>';
                    
                    if ($usp_minImages > 0) : ?>
                        <?php for ($i = 0; $i < $usp_minImages; $i++) : ?>
                                
                        <input name="user-submitted-image[]" type="file" size="25"<?php echo $usp_required; ?> class="usp-input usp-clone">
                        <?php endfor; ?>
                        <?php if ($usp_minImages < $usp_maxImages) : echo $usp_addAnother; endif; ?>
                    <?php else : ?>
                        
                        <input name="user-submitted-image[]" type="file" size="25" class="usp-input usp-clone" data-parsley-excluded="true">
                        <?php echo $usp_addAnother; ?>
                    <?php endif; ?>
                        
                    </div>
                    <input type="hidden" class="usp-hidden" id="usp-min-images" name="usp-min-images" value="<?php echo $usp_options['min-images']; ?>">
                    <input type="hidden" class="usp-hidden" id="usp-max-images" name="usp-max-images" value="<?php echo $usp_options['max-images']; ?>">
                </fieldset>
            </div>
        </div>
        
        <!-- image submit end  -->
        
                <?php } ?>
                <?php } 


		
		if ($usp_options['usp_title'] == 'show' || $usp_options['usp_title'] == 'optn') { ?>
        
        <!-- title submit form -->

        <div class="modal-body">    

		<fieldset class="usp-title">
			<label for="user-submitted-title"><?php esc_html_e('Title', 'usp'); ?></label>
			<input id="user-submitted-title" name="user-submitted-title" type="text" value="" placeholder="<?php esc_attr_e('Title', 'usp'); ?>"<?php if (usp_check_required('usp_title')) echo $usp_required; ?> class="usp-input">
		</fieldset>
		<?php } if ($usp_options['usp_tags'] == 'show' || $usp_options['usp_tags'] == 'optn') { ?>
		
		<fieldset class="usp-tags">
			<label for="user-submitted-tags"><?php esc_html_e('Post Tags', 'usp'); ?></label>
			<input id="user-submitted-tags" name="user-submitted-tags" type="text" value="" placeholder="<?php esc_attr_e('Post Tags', 'usp'); ?>"<?php if (usp_check_required('usp_tags')) echo $usp_required; ?> class="usp-input">
		</fieldset>
		<?php } if ($usp_options['custom_field'] == 'show' || $usp_options['custom_field'] == 'optn') { ?>
		
		<fieldset class="usp-custom">
			<label for="user-submitted-custom"><?php echo esc_html($usp_custom_label); ?></label>
			<input id="user-submitted-custom" name="<?php echo esc_attr($usp_custom_name); ?>" type="text" value="" placeholder="<?php echo esc_attr($usp_custom_label); ?>"<?php if (usp_check_required('custom_field')) echo $usp_required; ?> class="usp-input">
		</fieldset>
		<?php } if ($usp_options['usp_captcha'] == 'show') { ?>
		
		<fieldset class="usp-captcha">
			<label for="user-submitted-captcha"><?php echo $usp_options['usp_question']; ?></label>
			<input id="user-submitted-captcha" name="user-submitted-captcha" type="text" value="" placeholder="<?php esc_attr_e('Antispam Question', 'usp'); ?>"<?php echo $usp_required; ?> class="usp-input<?php echo $usp_captcha; ?>" data-parsley-excluded="true">
		</fieldset>
		<?php } if (($usp_options['usp_category'] == 'show' || $usp_options['usp_category'] == 'optn') && ($usp_options['usp_use_cat'] == false)) { ?>
		
			</fieldset>
		<?php } if ($usp_options['usp_content'] == 'show' || $usp_options['usp_content'] == 'optn') { ?>
		
		<fieldset class="usp-content">
			<?php if ($usp_options['usp_richtext_editor'] == true) { ?>
			
			<div class="usp_text-editor">
			<?php $usp_rte_settings = array(
				    'wpautop'          => true,  // enable rich text editor
				    'media_buttons'    => true,  // enable add media button
				    'textarea_name'    => 'user-submitted-content', // name
				    'textarea_rows'    => '10',  // number of textarea rows
				    'tabindex'         => '',    // tabindex
				    'editor_css'       => '',    // extra CSS
				    'editor_class'     => 'usp-rich-textarea', // class
				    'teeny'            => false, // output minimal editor config
				    'dfw'              => false, // replace fullscreen with DFW
				    'tinymce'          => true,  // enable TinyMCE
				    'quicktags'        => true,  // enable quicktags
				    'drag_drop_upload' => true,  // enable drag-drop
				);
				$usp_rte_settings = apply_filters('usp_editor_settings', $usp_rte_settings);
				$usp_editor_content = apply_filters('usp_editor_content', '');
				wp_editor($usp_editor_content, 'uspcontent', $usp_rte_settings); ?>
				
			</div>
			<?php } else { ?>
				
			<label for="user-submitted-content"><?php esc_html_e('Description', 'usp'); ?></label>
			<textarea id="user-submitted-content" name="user-submitted-content" rows="5" placeholder="<?php esc_attr_e('', 'usp'); ?>"<?php if (usp_check_required('usp_content')) echo $usp_required; ?> class="usp-textarea"></textarea>
			<?php } ?>


		<fieldset class="usp-category">
			<label for="user-submitted-category"><?php esc_html_e('SDGs', 'usp'); ?></label>
			<select id="user-submitted-category" name="user-submitted-category[]"<?php if (usp_check_required('usp_category')) echo $usp_required; echo $multiple_cats . $category_class; ?> data-placeholder="<?php esc_attr_e('Please select a category..', 'usp'); ?>">
				<option value=""><?php esc_html_e('Please select a category..', 'usp'); ?></option>
				<?php echo usp_get_cat_options(); ?>
			</select>
			
        </fieldset>
        
        

		<?php } if ($usp_recaptcha_public && $usp_recaptcha_private && $usp_options['usp_recaptcha'] == 'show') { ?>
		
		<label for="g-recaptcha"><?php esc_html_e('Verification', 'usp'); ?></label>
		<div id="g-recaptcha" class="g-recaptcha" data-sitekey="<?php echo esc_attr($usp_data_sitekey); ?>"></div>
		
        <?php } ?>
        
        
        
		
		<fieldset id="usp_verify" style="display:none;">
			<label for="user-submitted-verify"><?php esc_html_e('Human verification: leave this field empty.', 'usp'); ?></label>
			<input id="user-submitted-verify" name="user-submitted-verify" type="text" value="" data-parsley-excluded="true">
		</fieldset>
		
		<?php echo usp_display_custom_checkbox(); ?>
		
		<div id="usp-submit">
			<?php if (!empty($usp_options['redirect-url'])) { ?>
			
			<input type="hidden" class="usp-hidden" name="redirect-override" value="<?php echo $usp_options['redirect-url']; ?>">
			<?php } ?>
			<?php if (!$usp_display_name) { ?>
			
			<input type="hidden" class="usp-hidden" name="user-submitted-name" value="<?php echo $usp_user_name; ?>">
			<?php } ?>
			<?php if (!$usp_display_url) { ?>
			
			<input type="hidden" class="usp-hidden" name="user-submitted-url" value="<?php echo $usp_user_url; ?>">
			<?php } ?>
			<?php if ($usp_options['usp_use_cat'] == true) { ?>
			
			<input type="hidden" class="usp-hidden" name="user-submitted-category" value="<?php echo $usp_options['usp_use_cat_id']; ?>">
			<?php } ?>
			
			<input type="submit" class="usp-submit" id="user-submitted-post" name="user-submitted-post" value="<?php esc_attr_e('PUBLISH CHALLENGE', 'usp'); ?>">
			<?php wp_nonce_field('usp-nonce', 'usp-nonce', false); ?>
			
		</div> 
		<?php endif; ?>

	</form>
</div>
</div>

<script>(function(){var e = document.getElementById('usp_verify'); if(e) e.parentNode.removeChild(e);})();</script>

<?php endif; ?>

