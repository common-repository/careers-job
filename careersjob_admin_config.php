<?php
/**
 * Careersjob admin page: configure
 */

function careersjob_admin_config()
{
	// handles form submissions
 	if ( isset($_POST['careersjob_form_submit']) && $_POST['careersjob_form_submit'] == 'Y' ) {
		
		$careersjob_institution_id = (int)$_POST['careersjob_institution_id'];
	
		update_option('careersjob_institution_id', $careersjob_institution_id);

		update_option('careersjob_header_color1', $_POST['careersjob_header_color1']);

		update_option('careersjob_header_color2', $_POST['careersjob_header_color2']);

		update_option('careersjob_bordercolor', $_POST['careersjob_bordercolor']);

		update_option('careersjob_hovercolor', $_POST['careersjob_hovercolor']);

		// hook for modules to process submitted data
		do_action('careersjob_config_process');

		echo '<div class="updated"><p><strong>'.__('Updated Succeessfully','CAREERSJOB').'</strong></p></div>';
  	}

  	//echo CAREERSJOB_PATH.'assets/js/custom.js';
  	
?>

	<script type="text/javascript" src="<?php echo CAREERSJOB_PATH;?>assets/js/custom.js"></script>

	<div class="wrap">
		<h2>Careers Job - <?php _e('Configure Institution ID', 'CAREERSJOB'); ?></h2>
		<?php _e('Configure Careers Job Institution ID', 'CAREERSJOB'); ?><br /><br />
	

		<form name="careersjob_admin_form" method="post">
		<input type="hidden" name="careersjob_form_submit" value="Y" />
		
		<br />
		<h3><?php _e('Institution ID Settings','CAREERSJOB'); ?></h3>
		<table class="form-table" border=0>
			<tr valign="top">
				<th scope="row"><label for="">Enter Institution ID:</label></th>
				<td valign="middle">
					<input type="text" id="careersjob_institution_id" name="careersjob_institution_id" value="<?php echo get_option('careersjob_institution_id'); ?>" size="6" maxlength="6"  onkeypress="return IsNumeric(event);" onpaste="return false;" ondrop = "return false;" />
					<span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
				</td>
			</tr>
		

			<tr valign="top">
				<td scope="row" colspan="2"><b>[ Note: Make sure you enter Institution id is correct and it must be match with your Institution ID exists in http://edubreaks.in/ site. ]</b>
				<br/ >
				<p>Use shortcode <code>[careersjob_list]</code> to display careers job list table.</p></th>
			</tr>


			<tr valign="top">
				<th scope="row"><label for="">Customise Table Header Color1:</label></th>
				<td valign="middle">
					<input type="text" class="color" id="careersjob_header_color1" name="careersjob_header_color1" value="<?php echo get_option('careersjob_header_color1'); ?>" size="6" maxlength="6"  />
					Default:[EBF3FC]
				</td>
			</tr>


			<tr valign="top">
				<th scope="row"><label for="">Customise Table Header Color2:</label></th>
				<td valign="middle">
					<input type="text" class="color" id="careersjob_header_color2" name="careersjob_header_color2" value="<?php echo get_option('careersjob_header_color2'); ?>" size="6" maxlength="6"  />
					Default:[DCE9F9]
				</td>
			</tr>


			<tr valign="top">
				<th scope="row"><label for="">Customise Table Border Color:</label></th>
				<td valign="middle">
					<input type="text" class="color" id="careersjob_bordercolor" name="careersjob_bordercolor" value="<?php echo get_option('careersjob_bordercolor'); ?>" size="6" maxlength="6"  />
					Default:[CCCCCC]
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="">Customise Table Row Hover Color:</label></th>
				<td valign="middle">
					<input type="text" class="color" id="careersjob_hovercolor" name="careersjob_hovercolor" value="<?php echo get_option('careersjob_hovercolor'); ?>" size="6" maxlength="6"  />
					Default:[FBF8E9]
				</td>
			</tr>

		</table>
		

		<?php do_action('careersjob_config_form'); ?>
		
		<p class="submit">
			<input type="submit" name="Submit" value="<?php _e('Update Options','scp'); ?>" />
		</p>
		
		</form>
	
	</div>
	
 	
	<?php do_action('careersjob_admin_config'); ?>
	
<?php
}
?>
