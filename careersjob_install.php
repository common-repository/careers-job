<?php
/**
 * Careersjob installation script
 */

 function careersjob_install() {

	// set default values
	add_option('careersjob_auth_key', substr(md5(uniqid()),3,10));
	add_option('careersjob_institution_id', 0);

	add_option('careersjob_header_color1', 'EBF3FC');
	add_option('careersjob_header_color2', 'DCE9F9');
	add_option('careersjob_bordercolor', 'CCCCCC');
	add_option('careersjob_hovercolor', 'FBF8E9');

	add_option('careersjob_ver', CAREERSJOB_VERSION);

	}
?>