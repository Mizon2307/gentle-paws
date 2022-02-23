<?php
// The template for displaying the footer
?>

	</main>

	<?php
		$menu = wp_get_menu_array('footer');
	?>

	<footer>

		<nav>
			<?php	foreach ( $menu as $item ) : ?>
				<a href="<?php echo $item['url']; ?>" class="<?php echo $item['current'] ? '' : ''; ?>">
					<?php echo $item['title']; ?>
				</a>
			<?php endforeach; ?>
		</nav>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
