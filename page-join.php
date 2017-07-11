<?php
/*
Template Name: join

*/


?>

<?php get_header();  the_post(); ?>
<title>مامي هيلبر | <?php the_title();?></title>
  <div class="join-block">       
 <div class="container" >  
    <div class="row">  
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
           <div class="comment-area"> 

                <div class="comment_box row m0">
                               
                               <h3 id="msgg"><?php if(isset($_POST['fullname'])) { ?> <?php echo "لقد تم إرسال طلبك بنجاح، شكراً لك" ?><?php } ?></h3>
                               <div class="connect_area">
                                   هل أنت أخصائي نفسي أو تربوي أو طبيب متميز تستطيع تقديم الدعم والاستشارات للأمهات العربيات ؟
نرحب بانضمامك إلينا 

                                   <!--<a href="single-post.html#"><i class="mdi mdi-twitter"></i></a>
                                   <a href="single-post.html#"><i class="mdi mdi-facebook"></i></a>
                                   <a href="single-post.html#"><i class="mdi mdi-google-plus"></i></a>-->
                               </div>
                                <form action="" method="POST" >
                                

                                    <div class="form-group name col-md-6">
                                      <input type="text" required="" class="form-control"  name="age" placeholder="العمر">
                                    </div>
                                    <div class="form-group email col-md-6">
                                      <input type="text" class="form-control"  name="fullname" placeholder="الإسم">
                                    </div>
                                    <div class="form-group email col-md-6">
                                      <input type="text" required="" class="form-control"  name="phone_number" placeholder="رقم الموبايل">
                                    </div>
                                    <div class="form-group email col-md-6">
                                      <input type="text" required="" class="form-control"  name="country" placeholder="البلد">
                                    </div>
                                    <div class="form-group email col-md-6">
                                      <input type="text" required="" class="form-control"  name="experience_years" placeholder="عدد سنوات الخبرة">
                                    </div>
                                    <div class="form-group email col-md-6">
                                      <input type="text" required="" class="form-control"  name="specialization" placeholder="التخصص">
                                    </div>
                                    <div class="form-group col-md-12">
                                      <textarea class="form-control"  name="previous_work_place" placeholder="أماكن العمل السابقة"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button name="action"  class="btn btn-default button_b">إرسال <!--<i class="mdi mdi-comment-multiple-outline"></i>--></button>
                                     </div>
                                </form>
                            </div>
                 </div>           
        </div>
    </div>    
</div>  
</div>   
<?php 
if( isset($_POST['fullname'])){
    

    $my_post = array(
      'post_title'    => $_POST['fullname'] ,
      'post_status'   => 'draft',
      'post_author'   => 1,
      'post_type'     => 'submission_form'
    );
    $post_id = wp_insert_post( $my_post );
    $fields = array('name','age','country','phone_number','specialization','experience_years','previous_work_place');
    foreach($fields as $field){
        if(isset($_POST[$field])) { update_field($field, $_POST[$field], $post_id); }
    }
  
} 
    
  
 ?>   

      <?php get_footer(); ?>