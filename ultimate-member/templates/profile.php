<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?> um-role-<?php echo um_user('role'); ?> ">

	<div class="um-form proform">
	
		<?php do_action('um_profile_before_header', $args ); ?>
		<a href="<?php echo um_get_core_page('user'); ?>?profiletab=main&um_action=edit">Edit Profile</a>
		<?php if ( um_is_on_edit_profile() ) { ?><form method="post" action=""><?php } ?>
		

			
			<?php
				
			$nav = $ultimatemember->profile->active_tab;
			$subnav = ( get_query_var('subnav') ) ? get_query_var('subnav') : 'default';
				
			print "<div class='um-profile-body $nav $nav-$subnav'>";
				
				// Custom hook to display tabbed content
				do_action("um_profile_content_{$nav}", $args);
				do_action("um_profile_content_{$nav}_{$subnav}", $args);
				
			print "</div>";
				
			?>
		
		<?php if ( um_is_on_edit_profile() ) { ?></form><?php } ?>
	
	</div>
	
</div>