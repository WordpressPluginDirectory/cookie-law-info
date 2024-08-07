<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<div class="cookie-law-info-tab-content" data-id="<?php echo esc_attr( $target_id ); ?>">	        
	<ul class="cli_sub_tab">
		<li style="border-left:none; padding-left: 0px;" data-target="shortcodes"><a><?php echo esc_html__( 'Shortcodes', 'cookie-law-info' ); ?></a></li>
		<li data-target="help-links"><a><?php echo esc_html__( 'Help Links', 'cookie-law-info' ); ?></a></li>
	</ul>

	<div class="cli_sub_tab_container">
		<div class="cli_sub_tab_content" data-id="shortcodes" style="display:block;">
			<div style="font-size: 14px;">
			<h3><?php echo esc_html__( 'Cookie bar shortcodes', 'cookie-law-info' ); ?></h3>
			<?php echo esc_html__( 'You can insert the shortcodes in the Settings > Customise Cookie Bar > Cookie bar > Message to get it rendered on the cookie consent bar of your site.', 'cookie-law-info' ); ?>
			</div>
			<ul class="cli-shortcodes">
				<li>
				<div style="font-weight: bold;">[cookie_button]</div>
				<?php echo esc_html__( 'This is the "main button" you customise above.', 'cookie-law-info' ); ?>
				</li>

				<li><div style="font-weight: bold;">[cookie_reject]</div>
					<?php echo esc_html__( 'This is the cookie reject button shortcode.', 'cookie-law-info' ); ?>
				</li>
				<li>
				<div style="font-weight: bold;">[cookie_settings]</div>
				<?php echo esc_html__( 'This is the cookie settings button rendering shortcode.', 'cookie-law-info' ); ?>
				</li>
				<li><div style="font-weight: bold;">[cookie_link]</div>
					<?php echo esc_html__( 'This is the "read more" link you customise above.', 'cookie-law-info' ); ?>
				</li>

				<li><div style="font-weight: bold;"><?php echo esc_html__( 'Setup margin for above buttons', 'cookie-law-info' ); ?></div>
					Eg: [cookie_button margin="10px"]
<pre>
	margin: 5%;                 /* All sides: 5% margin */

	margin: 10px;               /* All sides: 10px margin */

	margin: 1.6em 20px;         /* top and bottom: 1.6em margin */
								/* left and right: 20px margin  */

	margin: 10px 3% -1em;       /* top:            10px margin */
								/* left and right: 3% margin   */
								/* bottom:         -1em margin */

	margin: 10px 3px 30px 5px;  /* top:    10px margin */
								/* right:  3px margin  */ 
								/* bottom: 30px margin */
								/* left:   5px margin  */

	margin: 2em auto;           /* top and bottom: 2em margin   */
								/* Box is horizontally centered */

	margin: auto;               /* top and bottom: 0 margin     */
								/* Box is horizontally centered */
</pre>
				</li>

				</ul>
				<div style="font-size: 14px;">
					<h3 style="margin-bottom:5px; margin-top:25px;"><?php echo esc_html__( 'Other shortcodes', 'cookie-law-info' ); ?></h3>
					<?php echo esc_html__( 'These shortcodes can be used in pages and posts on your website. It is not recommended to use these inside the cookie bar itself.', 'cookie-law-info' ); ?>
				</div>

				<ul class="cli-shortcodes">
				<li>
					<div style="font-weight: bold;">[cookie_audit]</div>
						<?php echo esc_html__( 'This prints out a nice table of cookies, in line with the guidance given by the ICO.', 'cookie-law-info' ); ?> <em><?php echo esc_html__( 'You need to enter the cookies your website uses via the GDPR Cookie Consent > Cookie List menu in your WordPress dashboard.', 'cookie-law-info' ); ?></em>
					<div style="font-weight: bold;">
						[cookie_audit style="winter"] <br />
						[cookie_audit not_shown_message="No records found"] <br />
						[cookie_audit style="winter" not_shown_message="Not found"]<br />
						[cookie_audit columns="cookie,description"] <br />
						[cookie_audit category="categoryslug"] <br />
						[cookie_audit heading="The below list details the cookies used in our website."]
					</div>
					<?php echo esc_html__( 'Styles included', 'cookie-law-info' ); ?>:	simple, classic, modern, rounded, elegant, winter. Default is classic.
					<br />
					<?php echo esc_html__( 'Columns available', 'cookie-law-info' ); ?>: cookie, description, type, duration.  <?php echo esc_html__( 'Will print all columns by default.', 'cookie-law-info' ); ?>
				</li>
				<li>
					<div style="font-weight: bold;">[delete_cookies]</div>
					<?php echo esc_html__( 'This shortcode will display a normal HTML link which when clicked, will delete the cookie set by Cookie Law Info (this cookie is used to remember that the cookie bar is closed).', 'cookie-law-info' ); ?>
				</li>
				<li>
					<div style="font-weight: bold;">[delete_cookies text="Click here to delete"]</div>
					<?php echo esc_html__( 'Add any text you like- useful if you want e.g. another language to English.', 'cookie-law-info' ); ?>
				</li>
				<li>
					<div style="font-weight: bold;">[cookie_after_accept] Your content goes here... [/cookie_after_accept]</div>
					<?php echo esc_html__( 'Add content after accepting the cookie notice.', 'cookie-law-info' ); ?>
					You can use `do_shortcode` function to add shortcodes inside the template file.
				</li>
				</ul>
		</div>
		<div class="cli_sub_tab_content" data-id="help-links" style="float: left; height:auto;">
			<?php
			$admin_img_path = CLI_PLUGIN_URL . 'admin/images/';
			?>
			<h3><?php echo esc_html__( 'Help Links', 'cookie-law-info' ); ?></h3>
			<ul class="cli-help-links">
				<li>
					<img src="<?php echo esc_url( $admin_img_path ); ?>documentation.png">
					<h3><?php echo esc_html__( 'Documentation', 'cookie-law-info' ); ?></h3>
					<p><?php echo esc_html__( 'Refer to our documentation to set and get started', 'cookie-law-info' ); ?></p>
					<a target="_blank" href="https://www.cookieyes.com/documentation/gdpr-cookie-consent-plugin/" class="button button-primary">
						<?php echo esc_html__( 'Documentation', 'cookie-law-info' ); ?>        
					</a>
				</li>
				<li>
					<img src="<?php echo esc_url( $admin_img_path ); ?>support.png">
					<h3><?php echo esc_html__( 'Help and Support', 'cookie-law-info' ); ?></h3>
					<p><?php echo esc_html__( 'We would love to help you on any queries or issues.', 'cookie-law-info' ); ?></p>
					<a target="_blank" href="https://wordpress.org/support/plugin/cookie-law-info/" class="button button-primary">
						<?php echo esc_html__( 'Contact Us', 'cookie-law-info' ); ?>
					</a>
				</li>               
			</ul>
		</div>    
	</div>
</div>
