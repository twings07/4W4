<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <div class="animation__bloc">1</div>
    <div class="animation__bloc">2</div>
    <div class="animation__bloc">3</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">5</div>
</section>

<div class="pagePrincipal">
   <h1 class="pagePrincipal__titre"> Collège de Maisonneuve </h1>

   </div>

   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
    

</main>
<?php get_footer() ?>