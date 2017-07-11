<?php get_header(); ?>

         <!--==========Header slider==========-->
         <div class="slider_area slider_position">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo ASSETS_URI ?>img/Slider1.png" alt="...">
                        <div class="carousel-caption">
                            <div class="cpantion_text">
                                <h2></h2>

                                <h4 class="momy"></h4>

                              <!--  <img src="<?php echo ASSETS_URI ?>img/Slider1.png" alt=""> -->
                                <p></p>
                                <a class="button_b" href="https://play.google.com/store/apps/details?id=com.momy.android" target="_blank ?>">تحميل التطبيق</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <img src="<?php echo ASSETS_URI ?>img/Slider3.png" alt="...">
                        <div class="carousel-caption">
                            <div class="cpantion_text">
                                <h2></h2>
                                        <p></p>
                                <a class="button_b" href="<?php echo get_permalink(10) ?>">تحميل التطبيق</a>
                            </div>
                        </div>
                    </div> -->
              <!--
                    <div class="item">
                        <img src="<?php echo ASSETS_URI ?>img/slider_2.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="cpantion_text">
                                <h2>Education For Everyone</h2>
                                <img src="<?php echo ASSETS_URI ?>img/home_2slide_t.png" alt="">
                                <p>Pricipal of Primary School - 12 years of working experiece in education industry.</p>
                                <a class="button_b" href="index2.html#">Get Started Now</a>
                            </div>
                        </div>
                    </div>-->
                </div>

                <!-- Controls -->
               <!-- <a class="left carousel-control" href="index2.html#main_slider" role="button" data-slide="prev"> -->
                   <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
                    <span class="sr-only">Previous</span>
                </a>
                <!-- <a class="right carousel-control" href="index2.html#main_slider" role="button" data-slide="next"> -->
                   <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
                    <span class="sr-only">Next</span>
                </a>
            </div>
         </div>
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

                            $args = array('post_type'=>'blogs', 'posts_per_page' => 3);
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
                    <!-- <div class="col-md-5">
                        <div class="row m0 blog33" >
                            <a><?php the_field('auther'); ?></a>

                            <h3><?php the_title();?></h3>
                            <p><?php the_field('description'); ?></p>
                            <a class="button_b" href="<?php the_permalink(); ?>">اقرأ المزيد <span></span></a>
                        </div>
                    </div> -->



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


         <!--==========consulting section==========-->
        <section class="student_course">
            <div class="title">
                <h2>مجالات الاستشارات </h2>

            </div>
            <div class="container">
                <div class="row">

                    <?php

                            $args = array('post_type'=>'consulting', 'posts_per_page' => 3);
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                            $i=0;   while ( $the_query->have_posts() ) {  ++$i;
                                $the_query->the_post();
                                ?>

                    <div class="col-sm-4">
                        <div class="studetn_course_box blue_course_box">
                            <div class="studetn_course_main_box">
                                <div class="student_course_box_img">
                                    <?php the_post_thumbnail();?>
                                </div>
                                <div class="studetn_course_contetn">
                                  <!--  <h5><i class="mdi mdi-menu-right"></i>December 4, 2016</h5>-->
                                    <h3><?php the_title() ?></h3>
                                    <p><?php the_content(); ?></p>
                                    <div class="apply_button pull-left">
                                        <a href="<?php echo get_the_permalink(57);?>">حجز <span><!--<i class="mdi mdi-chevron-right">--></i></span></a>
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
        <!--==========End consulting section==========-->



      <?php get_footer(); ?>

