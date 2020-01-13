<nav class="navbar navbar-expand-lg navbar-light bg-color-azul py-0 sticky-top">
    <div class="container">
        <div id="navcollapse" class="collapse navbar-collapse my-2">
            <div class="mx-auto navbar-nav">
                <?php
                $menuParameters = array(
                    'menu' => 'primary_menu',
                    'link_before'     => '<span class="nav-item nav-link">',
                    'link_after'      => '</span>',
                    'before'        => '<div >',
                    'after'     => '</div>',
                    'container'       => false,
                    'echo'            => false,
                    'depth'           => 0,
                );

                echo strip_tags(wp_nav_menu($menuParameters), '<a><span><div>');


                ?>
            </div>
        </div>
    </div>

</nav>