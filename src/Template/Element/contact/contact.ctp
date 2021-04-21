<div class="row wrapper" style="width: 50%">
                            <div class="columns small-12 medium-12 large-12">
                                <div class="centered">
                                   
<!--                                    <label style="color : #00adef">اتصل بنا</label>-->
                                    <div class="c-form">
                                        <!-- begin of contact form content -->
                                        <div class="c-content card-wrapper">
                                            <div class="message form msgForm">
                                                <div class="fields clearfix">
                                                    <div class="input name">
                                                        <label for="mes-name">الاسم :</label>
                                                        <input   name="name" autocomplete="off" type="text" placeholder="" class="form-success-clean __name" required="">
                                                    </div>
                                                </div>
                                                <div class="fields clearfix">
                                                    <div class="input last">
                                                        <label for="mes-email">البريد الالكترونى :</label>
                                                        <input  type="email" autocomplete="off" placeholder="" name="email" class="form-success-clean __email" required="">
                                                    </div>
                                                </div>
                                                <div class="fields clearfix no-border">
                                                    <label for="mes-text">الرسالة</label>
                                                    <textarea   autocomplete="off" placeholder="..." name="message" class="form-success-clean __msg" required=""></textarea>

                                                   
                                                   
                                                     
                                                </div>
                                                <br>
                                                <div class="btns">
                                                   
                                                         <a class="txt btn btn-primary contactcontact">إرسال</a>
                                                        
                                                       <span class="__res_msg"></span>

                                                    
                                                     
                                                </div>
                                            </div>

                                            <!-- Action button -->
                                            <div class="cta-btns">
                                            </div>

                                        </div>
                                        <!-- end of contact form content -->
                                    </div>

                                </div>
                            </div>
                        </div>

<style>
    label { color: white  ;  font-size: 16px;}
    </style>
 
      
    
    
        <script src="<?=URL?>js/vendor/jquery-1.12.4.min.js"></script>

    	<script>
    
    jQuery(document).ready(function($){
         //msgRes 
           
    $('.contactcontact').click(function () {
 var name = $('.__name').val() ;
 var email = $('.__email').val() ;
 var msg = $('.__msg').val() ;  
 
      if( name == "" || email == "" || msg == ""){
          $('.__erorr').css('display','block');  
                           $('.__res_msg').text('برجاء ادخال كافة البيانات');  
                       
                       }else {
                           $.ajax({url: "<?= URL ?>workList/contact", type: "post", accept: "application/json",
                                data: {
                                "name":name, 
                                'email': email,
                                'message': msg
                                }               
                                , success: function () {
                               $('.__name').val("");
                               $('.__email').val("")
                               $('.__msg').val("")  
                              $('.__res_msg').text('تم الارسال , وسيتم الرد على طلبكم فى أقرب وقت');
                              
                           }
                            
                        });
                    
                     }
 
                    })
 
 
});

    </script>
    
    <style>
       .__res_msg { color: white ; padding: 10px 0 0 0 ;}
       textarea, input {  color: white !important;font-weight: 600 ; font-size: 16px !important; background-color: #00adef !important;}
[type=color]:focus, [type=date]:focus, [type=datetime-local]:focus, [type=datetime]:focus, [type=email]:focus, [type=month]:focus, [type=number]:focus, [type=password]:focus, [type=search]:focus, [type=tel]:focus, [type=text]:focus, [type=time]:focus, [type=url]:focus, [type=week]:focus, textarea:focus {outline: none; border: 1px solid #8a8a8a;   background-color: #00adef;  box-shadow: 0 0 5px #cacaca;transition: box-shadow .5s, border-color .25s ease-in-out;}
.fh5co-heading-colored{ color: #00adef !important;}
        </style>