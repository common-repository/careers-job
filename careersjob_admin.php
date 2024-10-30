<?php
/**
 * Careersjob admin pages
 */

/** Admin pages */
function careersjob_admin() {

	add_menu_page('Careers Job', 'Careers Job List', 'manage_options', 'careersjob_admin_manage', 'careersjob_admin_manage');
	add_submenu_page('careersjob_admin_manage', 'Careers Job - ' .__('Configure','CAREERSJOB'), __('Configure Inst ID','CAREERSJOB'), 'manage_options', 'careersjob_admin_config', 'careersjob_admin_config');

	do_action('careersjob_admin_pages');
}

/** Include admin pages */
require_once('careersjob_admin_manage.php');
require_once('careersjob_admin_config.php');
	

/** Hook for admin pages */
add_action('admin_menu', 'careersjob_admin');


?>
