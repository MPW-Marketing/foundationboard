<?php /* Template: Profile 2 */ ?>
<?php
$user_id = um_user('ID');
?>
<div class="top-bar-profile <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?> um-role-<?php echo um_user('role'); ?>">
    <div class="profile-picture">
    </div>
    <div class="profile-name">
       <?php um_get_display_name( $user_id ); ?>
    </div>
    <div class="profile-menu">
    </div>
</div>