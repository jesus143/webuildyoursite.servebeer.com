<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_One_Page
 */



if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>
<div class="sidebar">
    <aside id="secondary" class="widget-area" role="complementary">
    	

     

    	<?php dynamic_sidebar( 'right-sidebar' ); ?>
    	



    	<?php 

    		if( is_user_logged_in()) {  
    		global $current_user, $wpdb;
			$role = $wpdb->prefix . 'capabilities';
			$current_user->role = array_keys($current_user->$role);
			$role = $current_user->role[0]; 
 			if('administrator' === $role): ?>

		 		<h2> Who is visitor now? </h2>	
			  	<script id="_waukic">var _wau = _wau || [];
				_wau.push(["map", "dv2kp6qyj8al", "kic", "420", "210", "natural", "star-blue"]);
				(function() {var s=document.createElement("script"); s.async=true;
				s.src="//widgets.amung.us/map.js";
				document.getElementsByTagName("head")[0].appendChild(s);
				})();</script>
			<?php endif; ?> 
		<?php } ?>


    </aside><!-- #secondary -->







</div><!-- .sidebar -->