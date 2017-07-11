<?php
/*
Template Name: reserve

*/
?>

<?php get_header();  the_post();?>
<title>مامي هيلبر | <?php the_title();?></title>
         
       
      

 <!--==========Our Course Listing==========-->
        <section class="student_course our_course_listing">
            <div class="container">
           
               <div class="row">
                    <?php

                            $args = array('post_type'=>'consulting', 'posts_per_page' => 6);
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                            $i=0;   while ( $the_query->have_posts() ) {  ++$i;
                                $the_query->the_post();
                                ?>


                    <div class="col-sm-6 col-md-4">
                        <div class="studetn_course_box blue_course_box">
                            <div class="studetn_course_main_box">
                                <div class="student_course_box_img">
                                   <?php the_post_thumbnail();?>
                                </div>
                                <div class="studetn_course_contetn">
                                   <!-- <h5><i class="mdi mdi-menu-right"></i>December 4, 2016</h5>-->
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_content();?></p>
                                    <div class="apply_button pull-left">
                                        <a href="<?php the_permalink()?>">حجز <span> <!--<i class="mdi mdi-chevron-right"></i>--></span></a>
                                    </div>
                               
                                </div>
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
        </section>
        <!--==========End Our Course Listing==========-->

      

      <?php get_footer(); ?>