<?php get_header(); ?>

<!-- Loop posts-->
<?php if (have_posts()) : while(have_posts()) : the_post();?>

    <article class="post">






    </article>

<?php endwhile;?>

<?php else : ?>

            <?php echo'<p> Content not found </p>'?>

<?php endif;?><!--fim do loop posts-->


<?php get_footer(); ?>