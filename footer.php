<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="footer">
		<ul class="icons">
			<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
			<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
			<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</footer>
</div><!-- #page-wrapper -->

<!-- Scripts -->
<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.dropotron.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/jquery.scrollex.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/browser.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/breakpoints.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/util.js"></script>
<script src="<?= get_template_directory_uri() ?>/src/js/default/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>
