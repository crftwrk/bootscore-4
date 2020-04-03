<?php
/**
 * The default Template for displaying legal checkboxes.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce-germanized/checkboxes/default.php.
 *
 * HOWEVER, on occasion Germanized will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://github.com/vendidero/woocommerce-germanized/wiki/Overriding-Germanized-Templates
 * @package Germanized/Templates
 * @version 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$checkbox_id = $checkbox->get_id();

/**
 * Before render checkbox template.
 *
 * Fires before a checkbox with `$checkbox_id` is rendered.
 *
 * @param WC_GZD_Legal_Checkbox $checkbox The checkbox instance.
 *
 * @since 2.0.0
 *
 */
do_action( "woocommerce_gzd_before_legal_checkbox_{$checkbox_id}", $checkbox );
?>

<div class="<?php $checkbox->render_classes( $checkbox->get_html_wrapper_classes() ); ?> mb-3"
   style="<?php echo esc_attr( $checkbox->get_html_style() ); ?>">
    <div for="<?php echo esc_attr( $checkbox->get_html_id() ); ?>"
           class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox custom-control custom-checkbox">
		<?php if ( ! $checkbox->hide_input() ) : ?>
            <input type="checkbox" class="custom-control-input <?php $checkbox->render_classes( $checkbox->get_html_classes() ); ?>"
                   name="<?php echo esc_attr( $checkbox->get_html_name() ); ?>"
                   id="<?php echo esc_attr( $checkbox->get_html_id() ); ?>"/>
		<?php endif; ?>
        <label class="custom-control-label woocommerce-gzd-<?php echo esc_attr( $checkbox->get_html_id() ); ?>-checkbox-text" for="<?php echo esc_attr( $checkbox->get_html_id() ); ?>"><?php echo $checkbox->get_label(); ?></label>
    </div>
</div>