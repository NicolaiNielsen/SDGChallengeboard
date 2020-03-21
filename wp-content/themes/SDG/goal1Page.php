
<?php get_header();?>

<div class="goal-dual">
    <div class="imagegoal1">
    <a href="/SDGChallengeboard/wp-content/themes/SDG/img/1x.jpg"><img class="FN0" src="/SDGChallengeboard/wp-content/themes/SDG/img/1X.jpg" alt="FN 1" width="300px" height="300px"></a>
    </div>
    <div class="content-container">
    <h1><?php the_title();?></h1>

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

        <?php the_content();?>

    <?php endwhile; endif;?>
    </div>

    </div>

    <div class="postbutton">
        <button data-modal-target="#modal1" class="btn btn-secondary">POST A CHALLENGE</button>
    </div>
    </div>

    
    <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		    <?php dynamic_sidebar( 'home_right_1' ); ?>
	    </div><!-- #primary-sidebar -->
    <?php endif; ?>



        <?php /* Template Name: Goal1 */ ?>


        <?php get_footer();?>