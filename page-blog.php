<?php
/*
Template Name: blog 

*/
?>

<?php get_header();  the_post();?>
<title>مامي هيلبر | <?php the_title();?></title>
         
         <!--==========Header Banner Area==========-->
        <!-- <section class="banner_area blog_listing_banner">
            <div class="container">
                <div class="banner_content">
                    <h3>Blog Listing No Sidebar</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </section>-->
         <!--==========End Header slider==========-->
        
        <section class="blog_listing_area">
            <div class="question_area">
                <div class="container">


                    <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array('post_type'=>'blogs', 'posts_per_page' => 4,'paged'=>$paged);
                            Query_posts( $args );
                            if ( have_posts() ) {
                            $i=0;   while (have_posts() ) {  ++$i;
                                the_post();
                                ?>

                    <div class="row m0 question_box">
                        <div class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active row">
                                    <div class="col-md-7 ">
                                        <div class="question_img">
                                           <img class="img-responsive" <?php the_post_thumbnail(); ?> 
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-7">
                                        <div class="row m0 latter_content blog_letter_content">
                                                <!--<span><i class="mdi mdi-heart-outline"></i>5</span>
                                            <span><i class="mdi mdi-message-reply-text"></i>2</span>-->
                                            <h3 href=""> <?php the_title(); ?></h3>
                                            <p> <?php the_field('description'); ?></p>
                                            <a class="button_b" href="<?php the_permalink() ?>">إقرأ المزيد <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <!--  <i class="letter_icon mdi mdi-video"></i>-->
                        </div>
                    </div>


                    <?php   } ?>
                     <div class="product_paigenation">
                    
                   
                        <ul>

                        	 <li > <?php previous_posts_link('السابق');  ?></li>
                            <li class="active"><?php next_posts_link('التالي'); ?> </li>
                           
                           
                        </ul>
                    </div>
                    <?php
                            } else {
                                // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>


                   
                    
                    
                </div>
            </div>
        </section>

        
        
      
        
       <!--==========Footer Area==========-->
      

      <?php get_footer(); ?>