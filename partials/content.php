<div class="my-4">
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
    <a class="btn btn-primary" href="<?php the_permalink(); ?>">
        Voir l'article
    </a>
</div>

<hr />
