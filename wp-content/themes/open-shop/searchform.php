<?php
/**
 * Template for displaying search form
 *
 * @package ThemeHunk
 * @subpackage Open Shop
 * @since 1.0.0
 */
?>
<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">
	<div class="form-content">
		<input type="text" placeholder="<?php echo esc_attr__('Search', 'open-shop' ).'..'; ?>" name="s" id="s" value="<?php echo get_search_query(); ?>"/>
		<input type="submit" value="<?php echo esc_attr__('Search', 'open-shop' ); ?>" />
	</div>
</form>