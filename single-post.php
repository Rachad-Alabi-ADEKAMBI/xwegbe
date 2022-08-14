<?php get_header() ?>

<?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post(); ?>
                <div class="post">
                    <h1 class="post__title"> <?php the_title() ?> </h1>

                    <p class="post__text">
                         <?php the_content(); ?>
</p>
                </div>

             <?php endwhile; endif; ?>
        


<?php get_footer() ?>
