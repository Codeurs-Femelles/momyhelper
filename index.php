<?php get_header(); ?>
<title>مامي هيلبر </title>

         <!--==========Header slider==========-->
         <!-- <div class="slider_area slider_position">
            <div id="main_slider" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo ASSETS_URI ?>img/mom-cover.jpeg" alt="...">
                        <div class="carousel-caption">

 <div ><a class="first-button" href="https://goo.gl/m5MrKb" target="_blank ?>" ></a></div>
                <div class="cpantion_text">

           <a class="cover-button" href="https://goo.gl/m5MrKb" target="_blank ?>" ></a>
                            </div>
                        </div>
                    </div>

                </div>

                <span class="sr-only">Previous</span>
                </a>
                <span class="sr-only">Next</span>
                </a>
            </div>
         </div> -->

         <section class="test">
           <div class="container">
             <img class="background img-responsive" src="img/mom.png" alt="">
             <div class="row cont-wrp">
               <div class="col-xs-offset-2 col-xs-6 left-cont-wrp">
                 <div class="left-cont">
                   <img class="log" src="img/log.png" alt="">
                   <h1>Hello world</h1>
                   <a href="javascript:;" class="btn btn-primary">button 1</a>
                 </div>
               </div>
               <div class="col-xs-4 right-cont-wrp">
                 <div class="right-cont">
                   <img class="mob" src="img/moblie.png" alt="">
                   <div class="btn-wrp">
                     <a href="javascript:;" class="btn btn-primary">button 2</a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section>
         <!--==========End Header slider==========-->

         <!--==========From The Blog==========-->
        <section class="from_blog">
           <div class="title">
                <h2>من المدونة </h2>
            <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing aelit, sed do eiusmod tempor incididunt.</p>-->
            </div>
            <div class="container">
              <div class="row">
                <?php

                            $args = array('post_type'=>'blogs', 'posts_per_page' => 6);
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                            $i=0;   while ( $the_query->have_posts() ) {  ++$i;
                                $the_query->the_post();
                                ?>

<!-- <div class=" row m0"> -->
                    <div class="col-md-4">

                      <div class="row home_blog_img">

                        <a  href="<?php the_permalink(); ?>"> <img class="img-responsive" <?php the_post_thumbnail(); ?>  </a>
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
              <a class="view_all" href="<?php echo get_permalink(4) ?>">عرض جميع المقالات</a>
            </div>
        </section>
        <!--==========End From The Blog==========-->





      <?php get_footer(); ?>
