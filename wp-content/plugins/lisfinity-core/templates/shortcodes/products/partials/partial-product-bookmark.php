<?php
/**
 * Template Name: Shortcodes | Product Partials | Bookmark
 * Description: The file that is being used to display products and various product types
 *
 * @author pebas
 * @package templates/shortcodes
 * @version 1.0.0
 *
 * @var $args
 */
if ( ! empty( $args['settings']['icon_bookmark'] ) ) {
	$icon = $args['settings']['icon_bookmark']['value'];
}
?>
<!-- Product | Bookmark -->
<?php
$ip        = lisfinity_get_ip_address();
$likes_ips = get_post_meta( $product_id, 'product-likes' );
$liked     = in_array( $ip, $likes_ips );
?>
<?php if ( 'custom' !== $args['settings']['style'] || ( 'custom' === $args['settings']['style'] ) && 'yes' === $args['settings']['hide_show_action_bookmark'] ) : ?>
	<button class="action--like absolute top-30 right-24"
			data-id="<?php echo esc_attr( $product_id ); ?>">
		<?php if ( 'custom' !== $args['settings']['style'] || ( 'custom' === $args['settings']['style'] && ( empty( $args['settings']['icon_bookmark']['value'] ) ) ) ) : ?>
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve"
				 class="pointer-events-none bookmark-icon h-18 w-18 <?php echo $liked && 'custom' === $args['settings']['style'] ? 'fill-custom-color' : 'fill-white'; ?>"
			>
		<?php echo ! $liked && 'custom' !== $args['settings']['style'] ? 'fill-red-600' : ''; ?>">
				<path d="M90.4,14.9c-5-5-11.6-7.7-18.7-7.7c-7.1,0-13.8,2.7-18.7,7.7l-3,3l-3-3c-5-4.8-11.8-7.6-18.6-7.6c-7.1,0-13.7,2.7-18.7,7.6
					C-0.7,25.2-0.7,42,9.7,52.4l15.8,15.8l5.9,5.9l0.2,0.2L50.3,93L69,74.3l16.8-17l4.9-4.9c4.9-4.9,7.7-11.6,7.7-18.7
					C98.1,26.5,95.4,19.8,90.4,14.9z M86.5,48.3l-5,5l-16.7,17L50.1,85.1L35.4,70.3l-0.2-0.2l-5.9-5.9L13.6,48.5
					c-8.2-8.2-8.2-21.5,0-29.7c3.9-3.9,9.1-6,14.8-6c5.4,0,10.8,2.2,14.8,6l6.9,6.9l6.9-6.9c3.9-3.9,9.2-6.1,14.8-6.1
					c5.6,0,10.9,2.2,14.8,6.1c3.9,3.9,6,9.1,6,14.8C92.6,39.2,90.4,44.4,86.5,48.3z"/>
			</svg>
		<?php elseif ( is_array( $icon ) ) : ?>
			<img class="bookmark-icon"
				 src="<?php echo esc_url( $icon['url'] ); ?>"
				 alt="<?php echo esc_html__( 'icon', 'lisfinity-core' ); ?>">
		<?php else : ?>
			<i class="<?php echo esc_html__( $icon, 'lisfinity-core' ) ?> bookmark-icon h-18 w-18 <?php echo $liked ? 'fill-custom-color' : 'fill-white'; ?>" aria-hidden="true"></i>
		<?php endif; ?>
	</button>
<?php endif; ?>