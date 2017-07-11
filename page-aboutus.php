<?php
/*
Template Name: about us

*/
?>

<?php get_header();  the_post();?>
<title>مامي هيلبر | <?php the_title();?></title>
         
       
       
        <section class="our_vision">
            <div class="container">
                <div class="row">
                	<div class="col-md-6">
                        <div class="tab_main_area">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <img src="<?php echo ASSETS_URI ?>img/about.png" alt="">
                                    <div class="tab_text">
                                        <p></p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <img src="img/room1.jpg" alt="">
                                    <div class="tab_text">
                                        <p></p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <img src="img/room1.jpg" alt="">
                                    <div class="tab_text">
                                        <p></p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <img src="img/room1.jpg" alt="">
                                    <div class="tab_text">
                                        <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim faucibus tellus volutpat.</p>
                                        <p>Honcus leomassa at urnaaculis estie. Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis miristum nulla.</p>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="tab_menu_area">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="about.html#home" aria-controls="home" role="tab" data-toggle="tab">INSIDE</a></li>
                                    <li role="presentation"><a href="about.html#profile" aria-controls="profile" role="tab" data-toggle="tab">Classs Room Facility</a></li>
                                    <li role="presentation"><a href="about.html#messages" aria-controls="messages" role="tab" data-toggle="tab">OUTSIDE</a></li>
                                    <li role="presentation"><a href="about.html#settings" aria-controls="settings" role="tab" data-toggle="tab">QUALITY TOYS</a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_vision_content">
                            <h3>رؤيتنا</h3>
                            <p>تطبيق للهواتف النقالة يقدم للأمهات العربيات الاستشارات النفسية والتربوية والسلوكية مع باقة من أخصائيين واستشاريين متميزين من مختلف الدول العربية بأسعار مناسبة ، كما يدعم الأم العربية من خلال تقديم محتوى مميز ومختلف من المقالات والفيديوهات التي تفيد الأم العربية<a href=""> </a></p>
                          <!--  <ul>
                                <li><a href="about.html#"><i class="mdi mdi-checkbox-marked"></i>Duis aute irure consequat.</a></li>
                                <li><a href="about.html#"><i class="mdi mdi-checkbox-marked"></i>Dolor in reprehenderit</a></li>
                                <li><a href="about.html#"><i class="mdi mdi-checkbox-marked"></i>In voluptate velit esse cillum</a></li>
                                <li><a href="about.html#"><i class="mdi mdi-checkbox-marked"></i>Dolore eu fugiat nulla pariatur</a></li>
                                <li><a href="about.html#"><i class="mdi mdi-checkbox-marked"></i>Lorem ipsum dolor sit amet </a></li>
                            </ul>-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
		

	
        <section class="teacher_member_area">
            <div class="container">
                <div class="row">
                    <div class="top_student">
                    	<h1> فريق العمل  </h1>

                        <div class="col-sm-6 col-md-4">
                            <div class="row m0 student_name">
                                <img class="img-circle" src="<?php echo ASSETS_URI ?>img/shahy.png" alt="">
                                <h3>شهيناز مُنية</h3>
                                <p>مطورة ويب</p>
                            </div>
                        </div>

                       
                        <div class="col-sm-6 col-md-4">
                            <div class="row m0 student_name">
                                <img class="img-circle" src="<?php echo ASSETS_URI ?>img/reeham.png" alt="">
                                <h3>ريهام غنيمة</h3>
                                <p>مطورة موبايل</p>
                            </div>
                        </div>
                        

                         <div class="col-sm-6 col-md-4">
                            <div class="row m0 student_name">
                                <img class="img-circle" src="<?php echo ASSETS_URI ?>img/nour.png" alt="">
                                <h3>نور الخضري</h3>
                                <p>مديرة الفريق</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="row m0 student_name">
                                <img class="img-circle" src="<?php echo ASSETS_URI ?>img/rawand.png" alt="">
                                <h3>روند بدران</h3>
                                <p>محررة محتوى</p>
                            </div>
                        </div>
                       
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="row m0 student_name">
                                <img class="img-circle" src="<?php echo ASSETS_URI ?>img/mh-ballour.png" alt="">
                                <h3>محمد بلور</h3>
                                <p>مطور ويب</p>
                            </div>
                        </div>
                        
                         <div class="col-sm-6 col-md-4">
                            <div class="row m0 student_name">
                                <img class="img-circle" src="<?php echo ASSETS_URI ?>img/M-qamar.png" alt="">
                                <h3>محمود أبو قمر</h3>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
		

      

      <?php get_footer(); ?>