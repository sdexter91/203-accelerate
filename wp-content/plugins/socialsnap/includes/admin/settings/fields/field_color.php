<?php
/**
 * Social Snap color field.
 *
 * @package    Social Snap
 * @author     Social Snap
 * @since      1.0.0
 * @license    GPL-3.0+
 * @copyright  Copyright (c) 2019, Social Snap LLC
*/
class SocialSnap_Field_color {
	
	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */	
	function __construct( $value ) {
		$this->field 		= $value['type'];
		$this->name 		= $value['name'];
		$this->id 			= $value['id'];
		$this->default 		= isset( $value['default'] )     ? $value['default'] : '';
		$this->value 		= isset( $value['value'] )       ? $value['value']   : '';
		$this->description 	= isset( $value['desc'] ) 		 ? $value['desc']    : '';
		$this->dependency 	= isset( $value['dependency'] )  ? $value['dependency'] : '';

		if ( ! wp_script_is( 'wp-color-picker', 'enqueued' ) ) {
			wp_enqueue_script( 'wp-color-picker' );
		}

		if ( ! wp_style_is( 'wp-color-picker', 'enqueued' ) ) {
			wp_enqueue_style( 'wp-color-picker' );
		}

	}

	/**
	 * HTML output of the field
	 *
	 * @since 1.0.0
	 */
	public function render() { 

		$values = $this->value;

		ob_start();
		?>
		<div id="<?php echo $this->id; ?>_wrapper" class="ss-field-wrapper ss-field-spacing ss-clearfix"<?php echo SocialSnap_Fields::dependency_builder( $this->dependency ); ?>>

			<div class="ss-field-title">
				<?php echo $this->name; ?>

				<?php if ( $this->description ) { ?>
					<i class="ss-tooltip ss-question-mark" data-title="<?php echo $this->description; ?>"></i>
				<?php } ?>	
			</div>

			<div class="ss-field-element ss-clearfix">
				<div class="ss-color-picker">
					<input type="text" class="ss-color-picker-element" value="<?php echo $this->value; ?>" placeholder="<?php _e( 'Select color', 'socialsnap' ); ?>">
					<input type="hidden" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>" value="<?php echo $this->value; ?>" />
					<div class="ss-color-value" style="background-color: <?php echo $this->value; ?>"></div>
				</div><!-- END .ss-color-picker -->
			</div><!-- END .ss-field-element -->

		</div>		

		<?php
		return ob_get_clean();
	}
}