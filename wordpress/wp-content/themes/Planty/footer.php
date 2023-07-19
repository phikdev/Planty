</main>

</div>
<footer id="footer" role="contentinfo">
<!-- afficher mention legal -->
<?php
wp_nav_menu([
   'theme_location' => 'footer',
   'container' => false,
   'menu_class' => 'footer-nav-politique'
])
?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>