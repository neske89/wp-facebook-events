<?php
/*
 * Basic Section
 */
?>

<?php if ( 'wpps_field-facebook-token' == $field['label_for'] ) : ?>

	<input id="<?php esc_attr_e( 'wpps_settings[basic][field-facebook-token]' ); ?>" name="<?php esc_attr_e( 'wpps_settings[basic][field-facebook-token]' ); ?>" class="regular-text" value="<?php esc_attr_e( $settings['basic']['field-facebook-token'] ); ?>" />
	<span class="example">how to generate</span>

<?php endif; ?>


<?php
/*
 * Advanced Section
 */
?>

<?php if ( 'wpps_field-example2' == $field['label_for'] ) : ?>

	<textarea id="<?php esc_attr_e( 'wpps_settings[advanced][field-example2]' ); ?>" name="<?php esc_attr_e( 'wpps_settings[advanced][field-example2]' ); ?>" class="large-text"><?php echo esc_textarea( $settings['advanced']['field-example2'] ); ?></textarea>
	<p class="description">This is an example of a longer explanation.</p>

<?php elseif ( 'wpps_field-example3' == $field['label_for'] ) : ?>

	<p>Another example</p>

<?php endif; ?>
