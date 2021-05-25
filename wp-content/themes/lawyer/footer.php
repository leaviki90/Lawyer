<footer>
<!--    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <?php //get_sidebar("footer-1"); ?>
            </div>
            <div class="col-12 col-md-4">
                <?php //get_sidebar("footer-2"); ?>
            </div>
            <div class="col-12 col-md-4">
                <?php //get_sidebar("footer-3"); ?>
            </div>
        </div>
    </div>-->
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



