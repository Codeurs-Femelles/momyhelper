<?php
/*
Template Name: writers

*/
?>

<?php get_header();  the_post(); ?>
<title> مامي هيلبر | <?php the_title();?></title>
 
         
       <!--==========Member Style Area==========-->
        <section class="member_style_are teachers_listing_area">
           <div class="title">
                <h2>كُتابنا</h2>
                <p></p>
            </div>
            <div class="container">
                <div class="row">

                    <?php

                            $args = array('post_type'=>'writers', 'posts_per_page' => 6);
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                            $i=0;   while ( $the_query->have_posts() ) {  ++$i;
                                $the_query->the_post();
                                ?> 

                    <div class="col-sm-6">
                        <div class="member_style_content">
                            <div class="media">
                              <div class="media-body">
                                    <h4><?php the_title();?></h4>
                                    <h5></h5>
                                    <p><?php the_content();?></p>
                                </div>
                                <div class="media-left">
                                    <a href="teachers.html#">
                                        <?php the_post_thumbnail();?>
                                    </a>
                                </div>
                                
                                <ul>
                                   <!-- <li><a href="teachers.html#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="teachers.html#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="teachers.html#">Email</a></li>-->
                                </ul>
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

                  
                 <!--   <div class="product_paigenation">
                        <ul>
                            <li class="active"><a href="teachers.html#">1</a></li>
                            <li><a href="teachers.html#">2</a></li>
                            <li><a href="teachers.html#">3</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </section>
        <!--==========End Member Style Area==========-->
       
       <!--==========Footer Area==========-->
      
      <?php get_footer(); ?>