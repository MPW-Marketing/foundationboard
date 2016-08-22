<?php $user_photo = um_user('user_profile_photo'); 
//$core_page = um_get_core_page('user');
$user_idd =  um_user('ID');
$user_photo_path = '/wp-content/uploads/ultimatemember/'.$user_idd.'/';
?>
<div class="um <?php echo $this->get_class( $mode, $args ); ?> um-<?php echo $form_id; ?>">

	<div class="um-form top-form">
	
		<div class="um-misc-with-img">
		<span>
		
		</span>
			
			<div class="um-misc-img">
				<a href="<?php echo um_get_core_page('user'); ?>"><?php if ($user_photo !== '') {echo '<img src="'.$user_photo_path . $user_photo .'" />';} else { echo um_user('profile_photo', 80); }?></a>
			</div>
			
			
		</div>
		<div class="name-display"><?php echo um_user('display_name'); ?></div>
			
			<?php do_action('um_logout_after_user_welcome', $args ); ?>
		<div class="top-bar-menu-container">
		<div class="top-nav-inner">
		<nav class="top-bar-menu">
		<ul class="menu-list">
			<li><a href="/user/">Profile</a></li>
			<li><a href="/logout/">Logout</a></li>		
		</ul>
		</nav>
	</div>
	</div>
	
</div>