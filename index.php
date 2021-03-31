<?php get_header(); ?>

    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>

    <?php if (have_posts()) : // On vérifie s'il y a des articles
        while (have_posts()) : the_post(); // On parcours chaque article ?>
            <div>
                <div>
                    Dans <?php the_category(', '); ?>
                    le <?php echo get_the_date('d F Y à H\hi'); ?>
                </div>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <p>
                    <?php echo get_the_excerpt(); ?>...
                </p>
                <a href="<?php the_permalink(); ?>">
                    Voir l'article
                </a>
            </div>
        <?php endwhile;
    endif; ?>

<?php get_footer(); ?>
