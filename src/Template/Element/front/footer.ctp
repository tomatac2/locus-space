     <div class="ccw_plugin chatbot" style="  text-align: center; position: fixed;z-index: 9999999999999999;left: 0;  bottom: 0px;">
    <!-- style 9  logo -->
    <div class="ccw_style9 animated no-animation ccw-no-hover-an">
      
        <a target="_blank" href="https://api.whatsapp.com/send?phone=201061725803" class="img-icon-a nofocus">   
            <img class="img-icon ccw-analytics" id="style-9" data-ccw="style-9" style="height: 75px;" src="<?=URL?>img/icons/whatsapp.png" alt="WhatsApp chat">
        </a>
    </div>
</div> 
<footer id="site-footer" class="site-footer" style="padding-left:160px">

        <!-- Notes -->
        <div class="note">
            <p>  2020 &copy;  <a href=""><span class="marked">Locus-Space</span></a></p>
        </div>


    </footer>
<?php 
 if ($currentPage == "home"): ?>
 
     <script src="<?=URL?>js/vendor/jquery-1.12.4.min.js"></script>
<?php endif;  ?>
   
    <script src="<?=URL?>js/vendor/scrolloverflow.min.js"></script>
    <script src="<?=URL?>js/vendor/all.js"></script>
    <script src="<?=URL?>js/particlejs/particles.min.js"></script>
    <script src="<?=URL?>js/jquery.downCount.js"></script>
    <script src="<?=URL?>js/form_script.js"></script>
    <script src="<?=URL?>js/main.js"></script>
    <script type="text/javascript">
        $(".view-gallery").on("click", function() {

            var profile = $(this).attr("data-src");

            var profile = '#' + profile;

            $(profile).addClass("show-gallery");


        });

        $(".fa-window-close-o").on("click", function() {

            $(this).parent().removeClass("show-gallery");


        });

        $(".gallery-details").on("click", function() {

            $(this).removeClass("show-gallery");


        });
    </script>
    <style>
        .section-slider .content .slider-wrapper .items-slides .swiper-slide .slideitem-wrapper .item-desc{
            width:  100% !important
        }
        .main-menu {  top: 160px !important;}
</style>
</body>

</html>
 
    <script>
    
    jQuery(document).ready(function($){
      
        //msgRes 
    $('.sendMail').click(function () {

     if( $('#mes-name').val() == "" || $('#mes-email').val() == "" || $('#mes-text').val() == ""){
          $('.erorr').css('display','block');  
                           $('.confirm').css('display','none');  
                       
                        }else {
                           $.ajax({url: "<?= URL ?>workList/contact", type: "post", accept: "application/json",
                                data: {
                                "name": $('#mes-name').val(), 
                                'email': $('#mes-email').val(),
                                'message': $('#mes-text').val()
                                }               
                                , success: function () {
                               $('#mes-name').val("");
                               $('#mes-email').val("")
                               $('#mes-text').val("")  
                              $('.msgRes').html('your message has been sent');
                              
                           }
                            
                        });
                        
                         $('.confirm').css('display','block'); 
                         $('.erorr').css('display','none'); 
                        }
 
                    })
 
 
});

    </script>
    
    
    
 