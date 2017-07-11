<?php  get_header(); the_post();?>
      <title><?php the_title(); ?></title>   
      
         <!--==========End Header slider==========-->
        
        <!--==========Single Blog Area==========-->
        <section class="single_blog_area">
            <div class="container">
                <div class="row">

                 <div class="col-md-9 col-single-blog ">

                      

                        <div class="single_blog_main_area ">
                            <div class="single_blog_img  ">
                              <img class="img-responsive "  <?php the_post_thumbnail(); ?> />
                            </div>
                            <div class="single_blog_content">
                            <h5><?php //the_title();?> </h5>
                                <?php the_content(); ?>
                           
                            </div>
                        </div>

                       

                    </div>
                  
           
            <div class="col-md-3 col-single-sidebar">
                        <!--
                       <div class="right_sidebar_widget">
                           <div class="widget_title">
                               <h3>Search</h3>
                           </div>
                            <div class="input-group search_option">
                                <input type="text" class="form-control" placeholder="Type to search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="mdi mdi-magnify"></i></button>
                                </span>
                            </div>
                       </div>-->
                       <div class="right_sidebar_widget">
                           <div class="widget_title">
                               <h3>مقالات لها علاقة </h3>
                           </div>
                           <div class="popular_post_area">

<?php

                            $args = array('post_type'=>'blogs', 'posts_per_page' => 5);
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                            $i=0;   while ( $the_query->have_posts() ) {  ++$i;
                                $the_query->the_post();
                                ?>


                               <div class="single_popular_post">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="<?php the_permalink();?>">

                                            <img src="  <?php the_field('small_image'); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                                           
                                        </div>
                                    </div>
                               </div>

                               <?php   }
                            } else {
                                // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
                               


                           </div>
                       </div>





                       <div class="right_sidebar_widget">
                           <div class="widget_title">
                               <h3>استشارات مامي هيلبر </h3>
                           </div>
                           <div class="popular_post_area">

<?php

                            $args = array('post_type'=>'consulting', 'posts_per_page' => 5);
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                            $i=0;   while ( $the_query->have_posts() ) {  ++$i;
                                $the_query->the_post();
                                ?>


                               <div class="single_popular_post">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="<?php the_permalink();?>">

                                            <img src="  <?php the_field('consulting_image'); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="https://play.google.com/store/apps/details?id=com.momy.android" target="_blank"><h4><?php the_title();?></h4></a>
                                           
                                        </div>
                                    </div>
                               </div>

                               <?php   }
                            } else {
                                // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>
                               


                           </div>
                         </div>



                  </div>  
               

            
                  
            </div>
          </div>
        </section>
        <!--==========End Single Blog Area==========-->
        
       <!--==========Footer Area==========-->
     <?php get_footer(); ?>
