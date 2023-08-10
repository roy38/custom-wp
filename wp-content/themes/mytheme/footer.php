<footer>
	<p class="copyright">
		© Copyright 2023 Tuesday Health - All Rights Reserved
	</p>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer-menu',
				'menu_class' => 'footer-bar'
			)
		);
	?>
</footer>

    <?php wp_footer(); ?>
</body>
</html>