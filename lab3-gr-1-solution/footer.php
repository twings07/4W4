 <?php
     /**
      *  Template pour afficher le footer
      */
 ?>

 <footer class="site__footer">

     <div class="site__info">
         
         <section class="site__info__adresse">
             <p>3 800, rue Sherbrook Est Montréal</p>
             <p>(Québec) H1x 2A2</p>
             <p>514-254-7131</p>
             <p>Lorem ipsum dolor sit</p>
             <p>Lorem ipsum dolor sit</p>
             <p>Lorem ipsum dolor sit</p>
             
         </section>

         <section class="site__info__liens">
                         <?php  wp_nav_menu(array("menu" => "simple", 
                                        "container" => "nav")) ?>
         </section>

         <section class="site__info__lorem">
             <p>
                Lorem ipsum dolor sit amet consectetur
                <br>
                Sed ut perspiciatis ? unde omnis iste
                <br> 
                natus error sit voluptatem accusantium 
                <br>
                eaque ipsa quae ab illo inventore veritatis
                <br>
                et quasi architecto beatae vitae dicta sunt 
                <br>
                explicabo. Nemo enim ipsam voluptatem
                <br>
                quia voluptas sit aspernatur aut 
                <br>
                odit aut fugit, sed quia
                <br>
                 consequuntur magni dolores eos qui 
                 <br>
                 ratione voluptatem sequi nesciunt.
                 <br>
                 Neque porro quisquam 
             </p>
         </section>
     </div>

        
         

     </div>
     <section class="copyright">
         <div class="copyright__maisonneuve"></div>
        <p>Copyright 2022 - College de Maisonneuve. Tous droit réservés</p>
        </section>
     <?php wp_footer(); ?>
     
</body>
</html>




















 </footer>