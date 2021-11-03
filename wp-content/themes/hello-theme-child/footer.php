<?php
$args = array('name' => 'footer');
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
	while ($the_query->have_posts()) {
		$the_query->the_post();
		the_content();
	}
}
wp_reset_postdata();

/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */
wp_footer();
?>

</body>

</html>