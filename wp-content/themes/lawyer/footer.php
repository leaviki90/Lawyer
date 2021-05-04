<footer>
    <div class="container d-sm-flex justify-content-sm-between">
        <p class="copyright mb-4 mb-sm-0 text-center"><?php printf("Copyright", "lawyer"); ?> &copy <?php echo date("Y"); ?> 
            <a href="<?PHP echo get_home_url(); ?>"><?PHP bloginfo("name"); ?></a>
        </p>
        <?php get_template_part("template-parts/social-menu");  ?>
    </div>
</footer>

<?PHP wp_footer(); ?>
</body>
</html>



