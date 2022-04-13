<?php
get_header();
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
<article class="evenement">
     <h1>template-evenement.php</h1>
     <?php if (have_posts()): the_post(); ?>
     <?php the_post_thumbnail(); ?>
     <?php the_title(); ?>
     <p class="evenement__endroit"> <?php the_field('endroit'); ?> </p>
     <p class="evenement__date"> <?php the_field('date'); ?> </p>
     <p class="evenement__heure"> <?php the_field('heure'); ?> </p>
     <p class="evenement__organisateur"> <?php the_field('organisateur'); ?> </p>
     <p class="evenement__image"> <?php the_field('image'); ?> </p>
     <p class="evenement__resume"> <?php the_field('resume'); ?> </p>
     <?php endif ?>
</article>
</main>
<?php get_footer() ?>
