
</div>
</div>

<footer>
    <div id="inner-footer" class="vertical-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <ul class="pm-social-footer">
                    <?php
                        $secondaryNavItems = wp_get_nav_menu_items('social');
                        if (is_array($secondaryNavItems)) {
                            /* @var $navItem WP_Post */
                            foreach ($secondaryNavItems as $navItem) {
                                echo sprintf(
                                        '<li><a href="%s" target="_blank"><img class="social-footer" src="%s"></a></li>',
                                        $navItem->url,
                                        primalmaze_get_social_icon_url($navItem)
                                );
                            }
                        }
                    ?>
                    </ul>
                </div>
            </div>
            <?php
                $secondaryNavItems = wp_get_nav_menu_items('secondary');
                if (is_array($secondaryNavItems) && sizeof($secondaryNavItems) > 0):
            ?>
            <div class="row">
                <div class="col-xs-12 col-lg-12 col-md-12 text-center">
                    <ul class="pm-social-footer pm-footer-text">
                    <?php
                        /* @var $navItem WP_Post */
                        foreach ($secondaryNavItems as $navItem) {
                            echo sprintf(
                                    '<li><a href="%s">%s</a></li>',
                                    $navItem->url,
                                    $navItem->title
                            );
                        }
                    ?>
                    </ul>
                </div>
            </div>
            <?php
                endif;
            ?>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>
