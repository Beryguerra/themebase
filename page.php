<!-- controla o que vai na pagina -->
<?php get_header(); ?><!-- agarra o header -->

<?php if (have_posts()) : while(have_posts()) : the_post();?><!--para mostar conteudo dos posts-->

        <article class="post page">
        
        
        
        
        </article>

        <?php endwhile;?>  <!-- Fim do WHILE LOOP-->

                <?php else : ?>

                    <?php echo'<p> Content not found </p>'?>

<?php endif;?><!--fim do loop para mostrar conteudo-->


<?php get_footer(); ?><!-- Agarra o footer-->