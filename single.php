<?php get_header() ?>

<?php
    while(have_posts()){
        the_post(); ?>
        <main>
            <section id="top">
            
            <div id="description-top">
                <div id="image"> <?php the_post_thumbnail() ?> </div>
                <h3><?php the_title() ?></h3>
                <p><?php the_content() ?></p>
            </div>
            </section>
            <section id="bottom">
            <div id="line"><hr></div>
            <div id="creator">
           <div id="avatar-img"> <?php echo get_avatar( get_the_author_meta('ID'), 80 ); ?></div>
           <p>Creation of <span id="name"> <?php
                $first_name = get_the_author_meta('first_name');
                $last_name  = get_the_author_meta('last_name');

                    if ($first_name || $last_name) {
                        echo esc_html(trim($first_name . ' ' . $last_name));
                    } else {
                        the_author();
                    }
            ?></span></p>
            </div>
            </section>
        </main>
        <?php
    }

?>
<?php get_footer() ?>