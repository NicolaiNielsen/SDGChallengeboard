<?php get_header();?>

    <div class="container pt-4">

        <h1 align="center"><?php the_title();?></h1>

        <?php if (have_posts()) : while(have_posts()) : the_post();?>

            <?php the_content();?>

        <?php endwhile; endif;?>

    </div>

    <div id="imageList">
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/1.jpg"><img class="FN0" src="/SDGChallengeboard/wp-content/themes/SDG/img/1.jpg" alt="FN 1"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/2.jpg"><img class="FN2" src="/SDGChallengeboard/wp-content/themes/SDG/img/2.jpg" alt="FN 2"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/3.jpg"><img class="FN3" src="/SDGChallengeboard/wp-content/themes/SDG/img/3.jpg" alt="FN 3"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/4.jpg"><img class="FN4" src="/SDGChallengeboard/wp-content/themes/SDG/img/4.jpg" alt="FN 4"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/5.jpg"><img class="FN5" src="/SDGChallengeboard/wp-content/themes/SDG/img/5.jpg" alt="FN 5"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/6.jpg"><img class="FN6" src="/SDGChallengeboard/wp-content/themes/SDG/img/6.jpg" alt="FN 6"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/7.jpg"><img class="FN7" src="/SDGChallengeboard/wp-content/themes/SDG/img/7.jpg" alt="FN 7"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/8.jpg"><img class="FN8" src="/SDGChallengeboard/wp-content/themes/SDG/img/8.jpg" alt="FN 8"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/9.jpg"><img class="FN9" src="/SDGChallengeboard/wp-content/themes/SDG/img/9.jpg" alt="FN 9"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/10_1.jpg"><img class="FN10" src="/SDGChallengeboard/wp-content/themes/SDG/img/10_1.jpg" alt="FN 10_1"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/11.jpg"><img class="FN11" src="/SDGChallengeboard/wp-content/themes/SDG/img/11.jpg" alt="FN 11"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/12.jpg"><img class="FN12" src="/SDGChallengeboard/wp-content/themes/SDG/img/12.jpg" alt="FN 12"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/13.jpg"><img class="FN13" src="/SDGChallengeboard/wp-content/themes/SDG/img/13.jpg" alt="FN 13"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/14.jpg"><img class="FN14" src="/SDGChallengeboard/wp-content/themes/SDG/img/14.jpg" alt="FN 14"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/15.jpg"><img class="FN15" src="/SDGChallengeboard/wp-content/themes/SDG/img/15.jpg" alt="FN 15"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/16.jpg"><img class="FN16" src="/SDGChallengeboard/wp-content/themes/SDG/img/16.jpg" alt="FN 16"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg"><img class="FN17" src="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg" alt="FN 17"></a>
            <a href="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg"><img class="FN17" src="/SDGChallengeboard/wp-content/themes/SDG/img/17.jpg" alt="FN 17"></a>
        </div>


    <div class="container2 pt-3 pb-2">
        <h3 align="center">In September 2015, 193 world leaders agreed to 17 Global Goals for Sustainable Development. If <br> 
        these Goals are completed, it would mean an end to extreme poverty, inequality and climate change <br> by 2030.</h3>
    </div>
    
    <div style="text-align:center;">
        <a href="http://localhost/SDGChallengeboard/submit/" class="btn btn-dark">POST A CHALLENGE</a>
        </div>
    

<?php get_footer();?>