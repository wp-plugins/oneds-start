<?php
/*
Plugin Name: OneDS Start Package
Plugin URI: http://oneds.org/category/releases/start-package/
Description: Just Start Package
Version: 0.1
Author: OneDS
Author URI: http://oneds.org
Text Domain: ods-start
Domain Path: /languages/
*/


load_plugin_textdomain( 'ods-start', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

/**
 * Add OneDS Dashboard Theme
 */
function dash_ods_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$y = is_rtl() ? 'left' : 'right';
	$x = is_rtl() ? 'right' : 'left';

	echo "
	<style type='text/css'>
html {
    background:#FFF
}

#wpcontent {
/*border-top: #FFC62A solid 4px;*/
}

a,input[type=checkbox]:checked:before,.view-switch a.current:before {
    color:#154
}

a:hover {
    color:#154
}

#adminmenu {
    margin:0
}

#adminmenu div.wp-menu-image:before {
    color:#a0a5aa
}

#adminmenu li a:focus div.wp-menu-image:before,#adminmenu li.opensub div.wp-menu-image:before,#adminmenu li:hover div.wp-menu-image:before {
    color:#154!important
}

#adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap,/* Sub Menu */
#adminmenu .wp-has-current-submenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,#adminmenu .wp-has-current-submenu.opensub .wp-submenu,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu,.no-js li.wp-has-current-submenu:hover .wp-submenu {
    background:#f3f3f3
}

#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,#adminmenu .wp-menu-arrow,#adminmenu .wp-menu-arrow div,#adminmenu li.current a.menu-top,#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,.folded #adminmenu li.current.menu-top,.folded #adminmenu li.wp-has-current-submenu,/* Hover actions */
#adminmenu li.menu-top:hover,#adminmenu li.opensub>a.menu-top {
    background:#e0e0e0
}
#adminmenu li>a.menu-top:focus {
    background:#ccc
}
#adminmenu .opensub .wp-submenu li.current a,#adminmenu .wp-submenu li.current,#adminmenu .wp-submenu li.current a,#adminmenu .wp-submenu li.current a:focus,#adminmenu .wp-submenu li.current a:hover,#adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a,#adminmenu .wp-submenu .wp-submenu-head,/* Dashicons */
#adminmenu .current div.wp-menu-image:before,#adminmenu .wp-has-current-submenu div.wp-menu-image:before,#adminmenu a.current:hover div.wp-menu-image:before,#adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before,#adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before,#adminmenu li:hover div.wp-menu-image:before {
    color:#154
}

#adminmenu li.wp-menu-separator {
    display:none
}

#adminmenu .wp-submenu-head,#adminmenu a.menu-top {
    padding:7px 0
}

.folded #adminmenu .wp-submenu-head,.folded #adminmenu a.menu-top {
    padding:5px 0
}

#adminmenu .wp-not-current-submenu .wp-submenu,.folded #adminmenu .wp-has-current-submenu .wp-submenu {
    padding:10px
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu div.wp-menu-name {
    color:#154
}

ul#adminmenu a.wp-has-current-submenu:after,ul#adminmenu>li.current>a.current:after,#adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after {
    display:none
}

#adminmenu li.menu-top {
    border-bottom:1px solid #e4e4e4
}

#adminmenu div.wp-menu-name {
    color:#333
}

.wrap h2 {
    font-size:34px;
    font-weight:100;
    padding:30px 25px 24px 0
}

.wrap .add-new-h2,.wrap .add-new-h2:active {
    background:#154;
    color:#FFF;
    top:-8px
}

.wrap .add-new-h2:hover {
    background:#154
}

#titlediv #title-prompt-text {
    font-size:1.2em;
    font-weight:100
}

div.updated {
    border:1px solid #e1e1e1;
    border-$x:5px solid #154;
    -webkit-box-shadow:none;
    box-shadow:none
}

input[type=email],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=url],select,textarea {
    box-shadow:none
}

.postbox {
    border:1px solid #e1e1e1
}

.menu.ui-sortable .menu-item-handle,.meta-box-sortables.ui-sortable .hndle {
    background:#f3f3f3
}

#major-publishing-actions {
    background:#FFF;
    padding:0
}

#delete-action {
    float:none;
    padding:15px 0;
    text-align:center
}

#delete-action a {
    text-decoration:underline
}

#publishing-action {
    float:none;
    display:block;
    width:100%
}

#publishing-action .spinner {
    width:100%;
    background-position:top center;
    padding:5px 0
}

#publishing-action #publish {
    float:none;
    font-size:16px;
    height:auto;
    padding:10px;
    width:100%
}

.wp-core-ui .button,.wp-core-ui .button-primary,.wp-core-ui .button-secondary {
    -moz-border-radius:0;
    -webkit-border-radius:0;
    border-radius:0;
    box-shadow:none;
    border:0
}

.wp-core-ui .button,.wp-core-ui .button-secondary {
    background:#e4e4e4
}

.wp-core-ui .button:hover,.wp-core-ui .button-secondary:hover,.wp-core-ui .button-primary {
    background:#154;
    color:#FFF
}

.wp-core-ui .button:hover span.wp-media-buttons-icon:before,.wp-core-ui .button-secondary:hover span.wp-media-buttons-icon:before {
    color:#FFF
}

.wp-media-buttons .insert-media {
    font-size:12px
}

.wp-media-buttons .add_media span.wp-media-buttons-icon:before {
    font-size:14px!important
}

div.mce-toolbar-grp,.html-active .switch-html,.tmce-active .switch-tmce {
    background:#FFF!important
}

#acf-col-$y {
    display:none
}

#acf-col-$x {
    margin:0!important
}

.vc_navbar.subnav-fixed {
    top:40px!important
}

.composer-switch a,.composer-switch a:visited,.composer-switch a.wpb_switch-to-front-composer,.composer-switch a:visited.wpb_switch-to-front-composer,.composer-switch .logo-icon {
    background-color:#154!important
}

.composer-switch .vc-spacer,.composer-switch a.wpb_switch-to-composer:hover,.composer-switch a:visited.wpb_switch-to-composer:hover,.composer-switch a.wpb_switch-to-front-composer:hover,.composer-switch a:visited.wpb_switch-to-front-composer:hover {
    background-color:#154!important
}

#collapse-menu {
    color:#a0a5aa
}

#collapse-button div:after {
    color:#a0a5aa
}

@media screen and (min-width: 783px) {
#wpadminbar ul li {
    padding:9px 4px
}

html.wp-toolbar {
    padding-top:50px!important
}

.admin-bar.masthead-fixed .site-header {
    top:50px!important
}

#adminmenu,#adminmenu .wp-submenu,#adminmenuback,#adminmenuwrap {
    width:210px
}

#wpcontent,#wpfooter {
    margin-$x:210px
}

#wpfooter a{
color: #333
}
#wpfooter {
border-top: 1px solid #ddd;
    background:#fff;
    z-index:9999!important;
/*margin: 0 !important;*/
    position:fixed;
    color:#666;
    font-size:9pt;
    font-family:'Segoe UI','Segoe UI Web Regular','Segoe UI Symbol','Helvetica Neue','BBAlpha Sans','S60 Sans',Arial,sans-serif
}

a#wpfooter {
    color:inherit
}

#wp-admin-bar-view-site {
    display:none!important
}

#adminmenu .wp-submenu {
    $x:210px
}
}

#wpadminbar {
    background:#000;
    height:50px !important
}

#wpadminbar .quicklinks .menupop ul li a:focus,#wpadminbar .quicklinks .menupop ul li a:focus strong,#wpadminbar .quicklinks .menupop ul li a:hover,#wpadminbar .quicklinks .menupop ul li a:hover strong,#wpadminbar .quicklinks .menupop.hover ul li a:focus,#wpadminbar .quicklinks .menupop.hover ul li a:hover,#wpadminbar li .ab-item:focus:before,#wpadminbar li a:focus .ab-icon:before,#wpadminbar li.hover .ab-icon:before,#wpadminbar li.hover .ab-item:before,#wpadminbar li:hover #adminbarsearch:before,#wpadminbar li:hover .ab-icon:before,#wpadminbar li:hover .ab-item:before,#wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus,#wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover {
    color:#FFF
}

#wpadminbar ul li:hover {
    background:#0E3C30
}

#wpadminbar .menupop .ab-sub-wrapper,#wpadminbar .shortlink-input {
    margin-top:7px;
    $x:0
}

#wpadminbar .ab-submenu {
    padding:0
}

#wpadminbar #adminbarsearch:before,#wpadminbar .ab-icon:before,#wpadminbar .ab-item:before,#wpadminbar #wp-admin-bar-user-info .username {
    color:#FFF
}

#wpadminbar .ab-top-menu>li.hover>.ab-item,#wpadminbar .ab-top-menu>li:hover>.ab-item,#wpadminbar .ab-top-menu>li>.ab-item:focus,#wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus {
    background:transparent
}

#wpadminbar .menupop .ab-sub-wrapper,#wpadminbar .shortlink-input {
    background:#154
}

#wpadminbar a.ab-item,#wpadminbar>#wp-toolbar span.ab-label,#wpadminbar>#wp-toolbar span.noticon {
    color:#FFF!important
}

#wpadminbar ul#wp-admin-bar-root-default>li#wp-admin-bar-wp-logo {
    display:none
}

#wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar>a img {
    width:24px;
    height:24px;
    border-radius:50%
}

#wpadminbar a.ab-item .icon:before {
    font-size:20px;
    vertical-align:middle!important;
    padding:6px 4px 0 0
}

#adminmenu .wp-submenu,#adminmenu .wp-has-current-submenu .wp-submenu {
    background:#FFF!important
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu {
    padding-bottom:0
}

#adminmenu .wp-has-current-submenu ul>li>a {
    padding-$x:34px
}

#adminmenu .wp-submenu a {
    color:#333
}

#wpadminbar * {
    font-family:'Segoe UI','Segoe UI Web Regular','Segoe UI Symbol','Helvetica Neue','BBAlpha Sans','S60 Sans',Arial,sans-serif;
    font-size:14px
}

li#wp-admin-bar-oneds_title.oneds_title_oneds {
width: 160px;
}

#wp-admin-bar-oneds_title.oneds_title_oneds>.ab-item {
  /*text-align: center;*/
	padding-$x: 18px;
  vertical-align: middle;
  height: auto;
  font-size: 23px;
  font-family: 'Segoe UI Light','Segoe UI Web Light','Segoe UI Web Regular','Segoe UI','Segoe UI Symbol',HelveticaNeue-Light,'Helvetica Neue',Arial,sans-serif;
  color: #fff;
}
#wp-admin-bar-oneds_title_icon.oneds_title_logo {
			background: #154;
border-$y: 1px solid rgba(255,255,255,.3);
	width: 49px;
	height: 41px;
	padding:0px;
	padding-top: 9px;
	text-align: center;
		}
		#wpadminbar #wp-admin-bar-oneds_title_icon .ab-icon:before {
			font-size: xx-large;
		}
		@media screen and (max-width: 782px) {
		
		 #wpadminbar li#wp-admin-bar-oneds_title_icon {
			display:block
		 }
		 #wpadminbar #wp-admin-bar-oneds_title_icon>.ab-item {
			width:50px;text-align:center
		 }
		 #wpadminbar #wp-admin-bar-oneds_title_icon>.ab-item .ab-icon:before {
			font:32px/1 'dashicons';top:-1px
		 }
		 #wpadminbar #wp-admin-bar-oneds_title_icon>.ab-item img {
			margin:19px 0
		 }
		 #wpadminbar #wp-admin-bar-oneds_title_icon #wp-admin-bar-all .ab-item .ab-icon {
			margin-$y:6px;font-size:20px !important;line-height:20px !important;
		 }

	</style>
	";
}

add_action( 'admin_head', 'dash_ods_css' );


// Add OneDS Toolbar Link

function toolbar_link_oneds( $wp_admin_bar ) {

	$wp_admin_bar->add_node(array(
		'id'    => 'oneds_title_icon',
		'title' => '<img class="is_img" style="background-image:url(https://a.gfx.ms/h/command6.png);background-position:-201px 8px;width:16px;height:24px;" src="https://a.gfx.ms/is/invis.gif" alt="More services">',
		'href'  => '',
		'meta'  => array( 'class' => 'oneds_title_logo',)
	) );

	$wp_admin_bar->add_node(array(
		'id'    => 'oneds_title',
		'title' => __('OneDS', 'ods-start'),
		'href'  => 'http://oneds.org',
		'meta'  => array( 'class' => 'oneds_title_oneds',)
	) );

}
add_action( 'admin_bar_menu', 'toolbar_link_oneds', 0 );

// Add OneDS footer

function ODS_footer_admin () {
  echo __('Powered By', 'ods-start');
echo __(' <a href="http://www.wordpress.org">');
echo __('WordPress', 'ods-start');
echo __('</a> ');
echo __('&', 'ods-start');
echo __(' <a href="http://www.oneds.org">');
echo __('OneDS', 'ods-start');
echo __('</a>');
}

add_filter('admin_footer_text', 'ODS_footer_admin');
function ODS_footer_admin_core () {
echo "" . date_i18n( 'l, d/m/Y', current_time( 'timestamp', 1 ) );
    echo '<script type="text/javascript">
function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
if(nyear<1000) nyear+=1900;
var d=new Date();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById("clockbox").innerHTML=" | "+nhour+":"+nmin+":"+nsec+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<span id="clockbox"></span>

';
echo "" . date_i18n( 'a', current_time( 'timestamp', 1 ) );
}

add_filter('update_footer', 'ODS_footer_admin_core');

function footer_admin_core() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}

add_action( 'admin_menu', 'footer_admin_core' );



/**
 * Add OneDS maintenance mode
 */

 class odsMaintenanceMode {

	function __construct() {
		add_action( 'admin_menu', array( $this, 'odsmm_ui' ) );
		add_action( 'admin_head', array( $this, 'odsmm_style' ) );
		add_action( 'admin_init', array( $this, 'odsmm_settings' ) );
		add_action( 'wp_head', array( $this, 'odsmm_style' ) );

		$is_enabled = get_option('odsmm-enabled');


		if($is_enabled) :
			add_action('get_header', array($this, 'maintenance'));
		endif;

		add_action( 'admin_bar_menu', array( $this, 'indicator' ), 100 );
		/* to add link in plugins page to this plugin settings 1(now off)
		*add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), array($this, 'action_links') );*/

	}
	
	function odsmm_ui() {
		add_submenu_page( 'options-general.php', $title = __('Maintenance Mode', 'ods-start'), $title, 'delete_plugins', 'wp-maintenance-mode', array($this, 'odsmm_settingsPage') );
	}

	function odsmm_style() {
		echo '
		<style type="text/css">
		#wp-admin-bar-odsmm-indicator.Enabled {
			background: rgba(159, 0, 0, 1);
		}
		#wp-admin-bar-odsmm-indicator.Disabled {
			display: none!Important;
		}
		#wpadminbar #wp-admin-bar-odsmm-indicator .ab-icon:before {
			content: "\f308"; top: 2px;
		}
		@media screen and (max-width: 782px) {
		 #wpadminbar li#wp-admin-bar-odsmm-indicator {
			display:block
		 }
		 #wpadminbar #wp-admin-bar-odsmm-indicator>.ab-item {
			width:50px;text-align:center
		 }
		 #wpadminbar #wp-admin-bar-odsmm-indicator>.ab-item .ab-icon:before {
			font:32px/1 "dashicons";top:-1px
		 }
		 #wpadminbar #wp-admin-bar-odsmm-indicator>.ab-item img {
			margin:19px 0
		 }
		 #wpadminbar #wp-admin-bar-odsmm-indicator #wp-admin-bar-all .ab-item .ab-icon {
			margin-right:6px;font-size:20px !important;line-height:20px !important
		 }
		}
		</style>
		';
	}
	
	function odsmm_settings() {
		register_setting('odsmm', 'odsmm-enabled');
		register_setting('odsmm', 'odsmm-content');

		$default = get_option( 'odsmm-content-default');
		if(empty($default)) :
			$content = __( '<h1>Website Under Maintenance</h1><p>Our Website is currently undergoing scheduled maintenance. Please check back soon.</p>', 'ods-start' );
			update_option( 'odsmm-content-default', $content);
		endif;
	}

	function odsmm_settingsPage() { ?>
		<div class="wrap">
			<h2><?php _e( 'Maintenance Mode Settings', 'ods-start' ); ?></h2>

			<form method="post" action="options.php">
			    <?php settings_fields( 'odsmm' ); ?>
			    <?php do_settings_sections( 'odsmm' ); ?>

			    <table class="form-table">
			        <tr valign="top">
				        <th scope="row"><?php _e( 'Enabled', 'ods-start' ); ?></th>
				        <td><input type="checkbox" name="odsmm-enabled" value="1" <?php checked( esc_attr( get_option('odsmm-enabled') ), 1 ); ?>></td>
			        </tr>

			        <tr valign="top">
			        	<th scope="row" colspan="2"><?php _e( 'Content', 'ods-start' ); ?></th>
			        </tr>
			        <tr>
			        	<td colspan="2">
			        		<?php
				        		$content = get_option('odsmm-content');
								$editor_id = 'odsmm-content';

								wp_editor( $content, $editor_id );
			        		?>
			        	</td>
			        </tr>
			    </table>

			    <?php submit_button(); ?>

			</form>
		</div>
	<?php
	}

	function indicator($wp_admin_bar) {
		$is_enabled = get_option('odsmm-enabled');
		$status = __( 'Disabled', 'ods-start' );
		if($is_enabled)
			$status = __( 'Enabled', 'ods-start' );

		$indicator = array(
			'id' => 'odsmm-indicator',
			'title' => '<span class="ab-icon"></span>'.'<span class="ab-label">'.__( 'Maintenance Mode: ', 'ods-start' ).$status.'</span>',
			'href' => get_admin_url(null, 'options-general.php?page=wp-maintenance-mode'),
			'meta' => array(
				'title' => __( 'Maintenance Mode Settings', 'ods-start' ),
				'class' => 'Disabled',
			)
		);
		if($is_enabled)
			$indicator = array(
			'id' => 'odsmm-indicator',
			'parent' => 'top-secondary',
			'title' => '<span class="ab-icon"></span>'.'<span class="ab-label">'.__( 'Maintenance Mode: ', 'ods-start' ).$status.'</span>',
			'href' => get_admin_url(null, 'options-general.php?page=wp-maintenance-mode'),
			'meta' => array(
				'title' => __( 'Maintenance Mode Settings', 'ods-start' ),
				'class' => 'Enabled',
			)
		);
		$wp_admin_bar->add_node($indicator);
	}

	/*to add link in plugins page to this plugin settings 2(now off)
	*function action_links( $links ) {
	   $links[] = '<a href="'. get_admin_url(null, 'options-general.php?page=wp-maintenance-mode') .'">Settings</a>';
	   return $links;
	}*/

	function maintenance() {

		if ( !(current_user_can( 'administrator' ) ||  current_user_can( 'super admin' )) || ( isset($_GET['odsmm']) && $_GET['odsmm'] !== 'preview')) {
			$content = get_option('odsmm-content');
			if(empty($content)) {
				$content = get_option( 'odsmm-content-default');
			}
			$content = apply_filters('the_content', $content);

			wp_die($content, 'Maintenance Mode');
		}

	}

}

$odsMaintenanceMode = new odsMaintenanceMode();


/**
 * Add OneDS Hello
 */

function hello_ods_get_lyric() {
	/** These are the lyrics to Hello ODS */
	$lyrics = 'Well, Technology Have Space';

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function hello_ods() {
	$chosen = hello_ods_get_lyric();
	echo "<p id='hello'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_ods' );

// We need some CSS to position the paragraph
function hello_ods_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#hello {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'hello_ods_css' );


?>