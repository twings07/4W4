<?php get_header() ?>
<main class="site__main">
<h2>Le département TIM</h2>
<?php wp_nav_menu(array(
        "menu"=> "accueil",
        "container" => "nav")); ?>
<h2>Les événements de l'année</h2>
<?php wp_nav_menu(array(
        "menu"=> "evenement",
        "container" => "nav")); ?>
        
<div class="pagePrincipal">
   <h1 class="pagePrincipal__titre"> Collège de Maisonneuve </h1>

   </div>

   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
    

</main>
<?php get_footer() ?>