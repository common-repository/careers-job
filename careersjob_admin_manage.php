<?php
/**
 * careersjob admin page: manage
 */

function careersjob_admin_manage()
{
?>
	<div class="wrap">

		<h2>Careers Job - <?php _e(' Institution Vacancies List', 'CAREERSJOB'); ?></h2>
		<?php _e('List of Careers Job Vacancies', 'CAREERSJOB'); ?><br /><br />

		<b>Note:</b><p>Use shortcode <code>[careersjob_list]</code> to display careers job list table, and configure your instituion id <a href="admin.php?page=careersjob_admin_config">here</a></p>
		<br/>
		<?php echo do_shortcode('[careersjob_list]'); // Display career job table in shortcode fun ?>

	</div><!-- wrap div close -->

	<?php do_action('careersjob_admin_manage'); ?>
	
<?php
}// End function
?>