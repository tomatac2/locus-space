        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
        <link rel="stylesheet" href="<?=URL?>bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=URL?>animate.css/animate.min.css">
        <link rel="stylesheet" href="<?=URL?>css/style.css">
        <!--<link rel="stylesheet" href="<?=URL?>css/main.css">-->
        <link rel="stylesheet" href="<?=URL?>css/loginpage.css">
        <link rel="stylesheet" href="<?=URL?>css/newcss.css">
        <link rel="stylesheet" href="<?=URL?>css/mpgradient.css">
        <link rel="stylesheet" href="<?=URL?>css/mbr-additional.css" type="text/css">
        <style>  body{
                height: 100%;
                background-image: url('images/BG.png');    
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }</style>
<?php
/* Cakephp 3.x User Management Premium Version (a product of Ektanjali Softwares Pvt Ltd)
Website- http://ektanjali.com
Plugin Demo- http://cakephp3-user-management.ektanjali.com/
Author- Chetan Varshney (The Director of Ektanjali Softwares Pvt Ltd)
Plugin Copyright No- 11498/2012-CO/L

UMPremium is a copyrighted work of authorship. Chetan Varshney retains ownership of the product and any copies of it, regardless of the form in which the copies may exist. This license is not a sale of the original product or any copies.

By installing and using UMPremium on your server, you agree to the following terms and conditions. Such agreement is either on your own behalf or on behalf of any corporate entity which employs you or which you represent ('Corporate Licensee'). In this Agreement, 'you' includes both the reader and any Corporate Licensee and Chetan Varshney.

The Product is licensed only to you. You may not rent, lease, sublicense, sell, assign, pledge, transfer or otherwise dispose of the Product in any form, on a temporary or permanent basis, without the prior written consent of Chetan Varshney.

The Product source code may be altered (at your risk)

All Product copyright notices within the scripts must remain unchanged (and visible).

If any of the terms of this Agreement are violated, Chetan Varshney reserves the right to action against you.

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Product.

THE PRODUCT IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE PRODUCT OR THE USE OR OTHER DEALINGS IN THE PRODUCT. */
?>


<div class="row">
	<div class="col-sm-6 col-sm-offset-6" >
          
                                 <?php echo $this->Form->create($userEntity, ['id'=>'loginForm','class'=>'wpl-track-me']); ?>
            <div class="loginform2">
                <h2 id="loginform2" style="font-size:27px; ">تسجيل دخول</h2>
            </div>		
                          <p > </p>
			 <label for="user_login">اسم المستخدم</label> 		
			<?php echo $this->Form->input('Users.email', ['type'=>'text','size'=>'20', 'label'=>false,  'placeholder'=>__('البريد الالكترونى / اسم المستخدم'), 'class'=>'input','id'=>'user_login']); ?>
                    
				<p ></p>
                                      <label for="user_pass">كلمة المرور</label> 
			<?php echo $this->Form->input('Users.password', ['type'=>'password','size'=>'20', 'label'=>false, 'div'=>false, 'placeholder'=>__('كلمة المرور'),  'id'=>'user_pass', 'class'=>'input']); ?>
                	                              
                    <p > </p>
                                        <label ><?php // echo __('اسم الفرع'); ?></label>

                        <?php //echo $this->Form->input('branche_id', [ 'value'=>'PUT','options'=>$ourworkdss,'label' => false, 'div' => false, 'class'=>'input']); ?>
                    

               
				<?php if(USE_REMEMBER_ME) { ?>
					<div class="um-form-row form-group">
						<?php if(!isset($userEntity['remember'])) {
								$userEntity['remember'] = true;
							} ?>
<!--						<div class="col-sm-7">
							<?php echo $this->Form->input('Users.remember', ['type'=>'checkbox', 'label'=>false, 'div'=>false, 'style'=>'margin-left:0']); ?>
						</div>-->
<!--                            	<label class="col-sm-4 control-label"><?php echo __(' نسيت كلمة المرور'); ?></label>-->

					</div>
                                      
                 
				<?php } ?>
				<?php if($this->UserAuth->canUseRecaptha('login')) {
					$errors = $userEntity->errors();
					$error = "";
					if(isset($errors['captcha']['_empty'])) {
						$error = $errors['captcha']['_empty'];
					} else if(isset($errors['captcha']['mustMatch'])) {
						$error = $errors['captcha']['mustMatch'];
					}?>
                                      <div class="um-form-row form-group" >
						<label class="col-sm-4 control-label required"><?php echo __('Prove you\'re not a robot');?></label>
						<div class="col-sm-8">
							<?php echo $this->UserAuth->showCaptcha($error);?>
						</div>
					
				<?php } ?>
      
				
					<?php echo $this->Form->Submit(__('تسجيل الدخول'), ['div'=>false, 'class'=>'button-primary', 'id'=>'loginSubmitBtn']); ?>
                                                <div style=" margin-top:25px; margin-right: 50px; ">
                                          <?php echo $this->Html->link(__(' نسيت كلمة المرور?'), '/forgotPassword', ['class'=>'btn btn-default pull-right um-btn']); ?>
					<?php echo $this->Html->link(__('استرجاع الحساب '), '/emailVerification', ['class'=>'btn btn-default pull-right um-btn']); ?>
                                      <?php if(SITE_REGISTRATION) { ?>
				
					<?php echo $this->Html->link(__('تسجيل عضوية', true), ['controller'=>'Users', 'action'=>'register', 'plugin'=>'Usermgmt'], ['class'=>'btn btn-default pull-right um-btn']); ?>
				</div>
				<?php } ?>
		
	
				<?php echo $this->element('Usermgmt.ajax_validation', ['formId'=>'loginForm', 'submitButtonId'=>'loginSubmitBtn']); ?>
      
				</div>
				<?php echo $this->Form->end(); ?>
				<?php echo $this->element('Usermgmt.provider'); ?>
			</div>
		</div>
	</div>
</div>
<style>
   
    #branches{
        background-color: #f0eef0;
    border: #f0eef0;
    width: 100%;
    padding-top: 4px;
    font-size: 20px;
    height: 60px;
    padding-right: 140px;
    }
    #brancheslabel{
        color: black;    font-size: 20px;
    }
    
    #loginform {
    border: none;
    background-color: #f2f2f2 ;
    border-radius: 2px;
    margin: auto;
    display: block;
    color: black;
    text-align: center;
    height: auto;
    margin-right: 110px;
    width: 500px;
}

#loginform2{
     width: 100%;
        background-color:#7b537e;
    margin-right: 0px;
    padding-top: 15px;
    color: white;
    text-align: center;
    height: 8%;
    border: none;
}

#loginSubmitBtn{
    margin-bottom: 25px;
      background-color: #7b537e ;
       color: white;
    width: 70%;
    height: 8%;
    font-size: 25px;
}

#user_login{
    width: 50%;
}
#user_pass{
    width: 50%;
}

</style>