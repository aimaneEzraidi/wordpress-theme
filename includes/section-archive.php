<?php if( have_posts() ): while( have_posts() ): the_post();?>
<div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center">
    <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url('post-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail">

    <?php endif;?>
        <h3> <?php the_title();?> </h3>
        <?php the_excerpt();?>
        <a href="<?php the_permalink();?>" class="btn btn-succes">Lire la suite</a>
     </div> 
</div>            

<?php endwhile; else: endif;?>