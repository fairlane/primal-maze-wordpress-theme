
</div>
</div>

<footer>
    <div id="inner-footer" class="vertical-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p class="pm-social-footer">
                    FOLLOW US ON
                    </p>
                    <ul class="pm-social-footer">
                    <?php
                        $navItems = wp_get_nav_menu_items('social');
                        if (is_array($navItems)) {
                            /* @var $navItem WP_Post */
                            foreach ($navItems as $navItem) {
                                echo sprintf(
                                        '<li><a href="%s" target="_blank"><img class="social-footer" src="%s"></a></li>',
                                        $navItem->url,
                                        primalmaze_get_social_icon_url($navItem)
                                );
                            }
                        }
                    ?>
                    </ul>
                    <p class="pm-social-footer">
                        Copyright &copy; Primal Maze
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>
